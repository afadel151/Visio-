<script setup>
    import Sidebar from '../Components/Sidebar.vue';
</script>
<template>
        <div>
            <Sidebar class="float-left"/>
        </div>
        <div>
            <slot/>
        </div>
</template>