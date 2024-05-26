<script setup>
const props = defineProps({
    company: {
        type: Object,
        required: true
    },
    timings: {
        type: Array,
        required: true
    },
    sessions: {
        type: Array,
        required: true
    }
})
</script>

<template>
    <table>
        <tr v-for="timing in props.timings">
            <td v-for="section in props.company.sections.sort((a, b) => a.section - b.section)">
                <div
                    v-if="props.sessions.filter(a => a.sessionable_type == 'App\\Models\\Section' && a.sessionable_id == section.id && a.timing_id == timing.id)">
                    
                </div>
                <div v-else >

                </div>
            </td>
        </tr>
    </table>
</template>