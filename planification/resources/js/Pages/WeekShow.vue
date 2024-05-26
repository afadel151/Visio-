<script setup>
import WeekdateTime from '@/Components/weeks/WeekdateTime.vue'
import { computed } from 'vue'
import CompanyDay from '@/Components/weeks/CompanyDay.vue'
const props = defineProps({
    battalion: {
        type: Object,
        required: true
    },
    week: {
        type: Object,
        required: true,
    },
    timings: {
        type: Array,
        required: true
    },
    sessions: {
        type: Array,
        required: true
    },
    rooms: {
        type: Array,
        required: true
    },
    companies: {
        type: Array,
        required: true
    },
    modules: {
        type: Array,
        required: true
    }
})
const NbSectionsSector = (ssector) => {
    let items = props.companies;
    items = items.filter(item => item.sector == ssector);
    let NbSections = 0;
    for (let index = 0; index < items.length; index++) {
        const element = items[index];
        NbSections = NbSections + element.sections.length;
    }
    return NbSections;
}

const WeekDateRange = computed(() => {
    let start = new Date(props.week.global_week.start_week_date);
    let loop = new Date(start);
    let Items = [start];
    for (let index = 1; index < 5; index++) {
        let newDate = loop.setDate(loop.getDate() + index);
        Items.push(newDate);
    }
    return Items;
});
const getdateFormat = computed((date) => {
    let final = '';
    let day = date.getDate();
    let month = date.getMonth();
    let year = date.getFullYear();
    final = year;
    if (month < 10) {
        final = final + '-0' + month;
    } else {
        final = final + '-' + month;
    }
    final = final + '-' + day;
    return final;
})
const GetSectionsIDsArray = computed((company) => {
    let array = [];
    company.section.forEach(section => {
        array.push(section.id);
    });
    return array;
})
</script>

<template>

    <table class="bg-slate-400">
        <tr>
            <td></td>
            <td :colspan="NbSectionsSector('ST')">
                Domaine scientifique
            </td>
            <td :colspan="NbSectionsSector('MI')" class="border-l-2">
                Domaine MI
            </td>

        </tr>
        <tr>
            <td></td>
            <td v-for="company in props.companies.filter(item => item.sector == 'ST').sort((a, b) => a.company - b.company)"
                :colspan="company.sections.length" class="border-l-2">{{ company.company }}</td>
            <td v-for="company in props.companies.filter(item => item.sector == 'MI').sort((a, b) => a.company - b.company)"
                :colspan="company.sections.length" class="border-l-2">{{ company.company }}</td>
        </tr>
        <tr>
            <td></td>
            <template
                v-for="company in props.companies.filter(item => item.sector == 'ST').sort((a, b) => a.company - b.company)">
                <td v-for="section in company.sections.sort((a, b) => a.section - b.section)" class="border-l-2">{{
                    section.section }}</td>
            </template>
            <template
                v-for="company in props.companies.filter(item => item.sector == 'MI').sort((a, b) => a.company - b.company)">
                <td v-for="section in company.sections.sort((a, b) => a.section - b.section)" class="border-l-2">{{
                    section.section }}</td>
            </template>

        </tr>
        <tr v-for="date in WeekDateRange">
            <td>
                <WeekdateTime :date="date" :timings="props.timings" />
            </td>
            <template v-for="company in props.companies.sort((a, b) => a.company - b.company)">
                <td :colspan="company.sections.length">
                    <CompanyDay :company="company"
                        :sessions="props.sessions.filter(item => (item.sessionable_type == 'App\\Models\\Company' && item.sessionable_id == company.id && item.session_date == getdateFormat(date)) || (item.sessionable_type == 'App\\Models\\Section' && GetSectionsIDsArray(company).includes(item.sessionable_id) && item.session_date == getdateFormat(date))) "
                        :timings="props.timings" />
                </td>
            </template>
        </tr>
    </table>
</template>