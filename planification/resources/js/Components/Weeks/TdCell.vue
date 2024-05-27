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
    <div class="h-full w-full">
        <div class="w-full bg-slate-400">TD</div>
        <div>{{ props.session.teacher.teacher_name }}</div>
        <div>
            {{ props.session.module.module }}
        </div>
        <div>{{ props.session.room.room }}</div>
    </div>
</template>