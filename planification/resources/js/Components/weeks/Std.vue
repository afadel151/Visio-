<script setup lang="js">

const props = defineProps({
    session:{
        type: Object,
        required: true,
    }
});
</script>

<template>
    <div class="h-full border-4  rounded-xl justify-center items-center">
        <span v-if="props.session.absented == true && props.session.caughtup == false"class=" badge badge-error">absented</span>
        <a :href="'/teachers/'+props.session.teacher_id">
                                <p class="btn text-xl px-2 rounded-xl font-bold">
                                    {{ props.session.teacher.teacher_name }} </p>
        </a>
    </div>
</template>