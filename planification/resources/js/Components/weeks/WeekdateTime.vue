<script setup>
const props = defineProps({
    timings: {
        type: Array,
        required: true
    },
    date: {
        type: Date,
        required: true
    }
})

const MyDate = new Date(props.date)
</script>

<template>

    <table>
        <tr>
            <td rowspan="6">
                <p class="-rotate-90">{{ MyDate.getDate() }}/{{ MyDate.getMonth() }}/{{ MyDate.getFullYear() }}</p>
            </td>
            <td> {{ props.timings[0].session_start }}</td>
        </tr>
        <tr v-for="timing in props.timings">
            <td v-if="timing.id != 1">
                {{ timing.session_start }}
            </td>
        </tr>
    </table>
</template>