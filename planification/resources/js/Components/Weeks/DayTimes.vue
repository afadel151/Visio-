<script setup>
const props = defineProps({
    date:{
        type:Date,
        required:true
    },
    timings:{
        type:Array,
        required:true
    }
})

</script>

<template>
    <table class="bg-slate-400 text-center">
        <tr >
            <td rowspan="5"  class="-rotate-90" >
                <span class="h-full">{{ props.date.getFullYear() }}-{{ props.date.getMonth() }}-{{ props.date.getDate() }}</span>
            </td>
            <td class="h-32">
                {{ props.timings[0].session_start }}
            </td>
        </tr>
        <template v-for="timing in props.timings" >
            <tr v-if="timing.id != 1">
                <td class="h-32">
                    {{ timing.session_start }}
                </td>
            </tr>
        </template>
    </table>
</template>