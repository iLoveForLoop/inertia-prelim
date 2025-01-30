<script setup>
defineProps({
    categories: {
        type: Array,
    }
})
</script>

<template>
    <h1>Categories Page</h1>

    <ul>
        <li v-for="category in categories" :key="category.id">{{ category.name }} - {{ category.description }}</li>
    </ul>
</template>

<style scoped></style>
