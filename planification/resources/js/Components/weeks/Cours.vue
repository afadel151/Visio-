<script setup>
const props = defineProps({
    company:{
        type: Object,
        required: true,
    },
    session:{
        type: Object,
        required: true,
    }
})
</script>

<template>
    <div class="">
        <span v-if="props.session.absented == true && props.session.caughtup == false"class=" badge badge-accent">rectified</span>
        <a :href="'/teachers/'+props.session.teacher_id">
                                <p class="btn text-xl px-2 rounded-xl font-bold">
                                    {{ props.session.teacher.teacher_name }} </p>
                            </a>
    </div>
</template>