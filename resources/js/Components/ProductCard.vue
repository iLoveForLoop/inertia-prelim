<script setup>
defineProps({
    product: {
        type: Object,
    },
});

const image = '/images/dionega.jpeg'; // Adjusted to relative path for Laravel public folder
</script>

<template>
    <div
        class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 flex flex-col sm:flex-row items-center gap-4">
        <!-- Image -->
        <img :src="image" alt="Product Image" class="w-20 h-20 sm:w-24 sm:h-24 object-contain rounded-md">
        <!-- Details -->
        <div class="flex flex-col items-start text-gray-800 w-full">
            <h1 class="text-base sm:text-lg font-semibold text-gray-900 truncate w-full">
                {{ product.name }}
            </h1>
            <p class="text-sm text-gray-600">
                Wholesale: ₱{{ product.whole_sale_price }}
            </p>
            <p class="text-sm text-gray-600">
                Retail: ₱{{ product.retail_price }}
            </p>
        </div>
    </div>
</template>

<style scoped>
/* Optional: Add custom styles if needed */
</style>
