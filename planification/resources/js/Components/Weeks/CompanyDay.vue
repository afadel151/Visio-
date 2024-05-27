<script setup>
import { computed } from "vue";
import Cours from "./Cours.vue";
import TdCell from "./TdCell.vue";
import TpCell from "./TpCell.vue";
import TdForm from "./TdForm.vue";
const props = defineProps({
    company : {
        type: Object,
        required: true
    },
    date:{
        type: Date,
        required:true
    },
    timings:{
        type: Array,
        required:true
    },
    sessions:{
        type:Array,
        required:true
    },
    modules:{
        type:Array,
        required:true
    },
    rooms:{
        type:Array,
        required:true
    }
})
const FilteredSessions = computed(() => {
    let formattedDate = GetDateFormat(props.date);
    return props.sessions.filter(session => session.session_date === formattedDate);
});
const GetDateFormat = (date) => {
    return new Intl.DateTimeFormat('en-CA', {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit'
    }).format(date);
}
</script>

<template>
    <!-- {{ FilteredSessions.length }} -->
    <table class=" w-full h-full border-2 table-fixed"> 
        <tr v-for="tim in props.timings">
            <template v-if="FilteredSessions.filter((s)=> s.timing_id == tim.id && s.sessionable_type === 'App\\Models\\Company').length > 0" >
                <td :colspan="props.company.sections.length" class="h-32">
                    <Cours :session="FilteredSessions.filter((s)=> s.timing_id == tim.id && s.sessionable_type === 'App\\Models\\Company').at(0)" :company="props.company" />
                </td>
            </template>
            <template v-else>
                <template v-for="section in props.company.sections.sort((a, b) => a.section - b.section)" >
                    <td class="h-32" v-if="FilteredSessions.filter(s => s.timing_id === tim.id && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'td').length > 0">
                        <TdCell class="bg-red-300 h-full w-full" :session="FilteredSessions.filter(s => s.timing_id === tim.id && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'td')[0]" :section="section" />
                    </td> 
                    <td class="bg-stone-400"  v-else-if="FilteredSessions.filter(s => s.timing_id === tim.id && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'tp').length > 0" :rowspan="2">
                        <TpCell :session="FilteredSessions.filter(s => s.timing_id === tim.id && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'tp')[0]" :section="section" />
                    </td>
                    <template v-else-if="FilteredSessions.filter(s => s.timing_id === tim.id-1 && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'tp').length > 0">
                    </template>
                    <td v-else class="h-32">
                        <TdForm :rooms="props.rooms" :modules="props.modules" :section="section"  />
                    </td>
                </template>
            </template>
        </tr>
    </table>
</template>