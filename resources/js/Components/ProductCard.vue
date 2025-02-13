<script setup>
defineProps({
    product: {
        type: Object
    }
})

const image = 'images/dionega.jpeg'
</script>

<template>
    <div class="flex p-5 bg-gray-500 rounded uppercase justify-between">
        <img class="w-auto h-32 object-contain" :src="image" alt="Product Image">
        <div class="flex flex-col items-center justify-center">
            <h1>Product Name: {{ product.name }}</h1>
            <p>Wholesale Price: ₱{{ product.whole_sale_price }}</p>
            <p>Retaile price: ₱{{ product.retail_price }}</p>
        </div>
    </div>
</template>

<style>

</style>
