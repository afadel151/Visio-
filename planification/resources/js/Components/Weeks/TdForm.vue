<script setup>
const props = defineProps({
    modules:{
        type:Array,
        required:true
    },
    rooms:{
        type:Array,
        required:true
    },
    section:{
        type:Object,
        required:true
    }
})
</script>
<template>
    <button>Add</button>

</template>