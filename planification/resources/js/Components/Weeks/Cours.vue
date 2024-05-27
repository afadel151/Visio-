<script setup>
const props = defineProps({
    session:{
        type: Object,
        required: true
    },
    company:{
        type:Object,
        required:true
    }
})
</script>

<template>
    <div class="h-full w-full bg-gray-400">
        <div>{{ props.session.teacher.teacher_name }}</div>
        <div>
            {{ props.session.module.module }}
        </div>
        <div>{{ props.session.room.room }}</div>
    </div>
</template>