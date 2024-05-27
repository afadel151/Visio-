<script setup>
import { computed } from 'vue';
import DayTimes from '@/Components/Weeks/DayTimes.vue'
import CompanyDay from '@/Components/Weeks/CompanyDay.vue'
const props = defineProps({
    week: {
        type: Object,
        required: true
    },
    battalion: {
        type: Object,
        required: true
    },
    modules: {
        type: Array,
        required: true
    },
    companies: {
        type: Array,
        required: true
    },
    sessions: {
        type: Array,
        required: true
    },
    timings: {
        type: Array,
        required: true
    },
    rooms: {
        type: Array,
        required: true
    }
})


const GetDomaineNbSections = (domaine) => {
    let Companies = props.companies;
    let NbSections = 0;
    Companies.forEach(company => {
        if (company.sector == domaine) {
            NbSections = NbSections + company.sections.length;
        }
    })
    return NbSections;
}

const CompanySessions = (company) => {
    let Sessions = props.sessions;
    let CompanySectionsId = [];
    company.sections.forEach(section => {
        CompanySectionsId.push(section.id);
    })
    Sessions = Sessions.filter(session => (session.sessionable_type === 'App\\Models\\Company' && session.sessionable_id == company.id ) || (session.sessionable_type === 'App\\Models\\Section' && CompanySectionsId.includes(session.sessionable_id)))
    return Sessions;
}
const GetDateRange = computed(() => {
    let start = new Date(props.week.global_week.start_week_date);
    let array = [new Date(start)];
    for (let index = 1; index < 5; index++) {
        let nextDate = new Date(start);
        nextDate.setDate(start.getDate() + index);
        array.push(nextDate);
    }
    return array;
});
</script>

<template>
    <table class="text-center">
        <thead>
            <th></th>
            <th :colspan="GetDomaineNbSections('ST')">
                Domaine scientifique
            </th>
            <th :colspan="GetDomaineNbSections('MI')">
                Domaine Math
            </th>
        </thead>
        <tr>
            <td></td>
            <td v-for="company in props.companies.filter(company => company.sector == 'ST').sort((a,b)=> a.company - b.company)" :colspan="company.sections.length">Company {{ company.company }} (ST)</td>
            <td v-for="company in props.companies.filter(company => company.sector == 'MI').sort((a,b)=> a.company - b.company)" :colspan="company.sections.length">Company {{ company.company }} (MI)</td>
        </tr>
        <tr>
            <td></td>
            <template v-for="company in props.companies.filter(company => company.sector == 'ST').sort((a,b)=> a.company - b.company)" :colspan="company.sections.length">
                <td v-for="section in company.sections.sort((a,b)=> a.section-b.section)">
                    {{ section.section }}
                </td>
            </template>
            <template v-for="company in props.companies.filter(company => company.sector == 'MI').sort((a,b)=> a.company - b.company)" :colspan="company.sections.length">
                <td v-for="section in company.sections.sort((a,b)=> a.section-b.section)">
                    {{ section.section }}
                </td>
            </template>
        </tr>
        <tr v-for="date in GetDateRange">
           <td class="h-full bg-slate-200 ">
                <DayTimes :date="date" :timings="props.timings"/>
           </td>
            <td  v-for="company in props.companies.sort((a, b) => a.compay - b.company)" :colspan="company.sections.length" >
                <CompanyDay  :company="company" :date="date" :timings="props.timings" :sessions="CompanySessions(company)"/>
            </td>
        </tr>


    </table>
</template>
