<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    categories: {
        type: Array,
    }
})
</script>

<template>
    <div class="h-screen flex flex-col items-center bg-gray-900 text-white overflow-scroll"
        style="scrollbar-width: none;">
        <!-- Header -->
        <div class="w-full bg-gray-800 p-6 flex justify-between items-center shadow-lg">
            <h1 class="text-2xl font-bold text-gray-100 uppercase">Categories Page</h1>
            <Link href="/products"
                class="rounded-lg bg-gray-200 text-gray-900 font-semibold py-3 px-6 hover:bg-gray-600 hover:text-white transition duration-300 uppercase text-sm">
            Product List
            </Link>
        </div>

        <!-- Table Container -->
        <div class="w-full mt-0 bg-gray-800  shadow-lg">
            <table class="min-w-full table-auto">
                <!-- Table Header -->
                <thead>
                    <tr class="bg-gray-700 text-gray-300">
                        <th class="py-3 px-6 text-left font-semibold uppercase">Category</th>
                        <th class="py-3 px-6 text-left font-semibold uppercase">Description</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-600">
                    <tr v-for="category in categories" :key="category.id"
                        class="hover:bg-gray-700 transition duration-200">
                        <td class="py-4 px-6 text-gray-200">{{ category.name }}</td>
                        <td class="py-4 px-6 text-gray-400">{{ category.description }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style scoped></style>
