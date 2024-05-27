<script setup>
const props = defineProps({
    session:{
        type: Object,
        required: true
    },
    section:{
        type:Object,
        required:true
    }
})
</script>

<template>
    <div class="h-full w-full flex flex-col">
        <div class="w-full bg-slate-400">TP</div>
       <button v-for="teacher in props.session.tp_teachers">{{ teacher.teacher_name }}</button>
    </div>
</template>