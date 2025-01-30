<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    products: {
        type: Array,
    },
    categories: {
        type: Array,
    }
})

</script>

<template>

<div class="flex gap-10">
    <div class="flex flex-col gap-15">
        <h1 class="text-2xl font-bold mb-4">Categories</h1>
        <Link v-for="category in categories" :key="category.id">{{ category.name }}</Link>


    </div>

    <div>
        <div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Products List</h1>

    <table class="min-w-full table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2 text-left">Name</th>
          <th class="px-4 py-2 text-left">Category Id</th>
          <th class="px-4 py-2 text-left">Whole Sale Price</th>
          <th class="px-4 py-2 text-left">Retail Price</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="product in products" :key="product.id">
          <td class="px-4 py-2">{{ product.name }}</td>
          <td class="px-4 py-2">{{ product.category_id }}</td>
          <td class="px-4 py-2">{{ product.whole_sale_price }}</td>
          <td class="px-4 py-2">{{ product.retail_price }}</td>
        </tr>
      </tbody>
    </table>
  </div>
    </div>
</div>

</template>

<style scoped>

</style>
