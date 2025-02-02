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
    <div class="flex h-screen bg-gray-800 text-white">
        <!-- Sidebar (Categories) -->
        <div class="w-1/4 bg-gray-900 p-6 shadow-lg rounded-r-lg">
            <Link href="/products" class="text-3xl font-bold text-gray-300 cursor-pointer">Categories</Link>
            <div class="space-y-4 mt-6">
                <Link v-for="category in categories" :key="category.id" :href="`/products/${category.id}`"
                    class="block py-3 px-5 text-sm text-white bg-gray-600 hover:bg-blue-700 rounded-lg transition-all transform hover:scale-105 border-b border-gray-700">
                {{ category.name }}
                </Link>
            </div>
        </div>

        <!-- Main Content (Products List) -->
        <div class="flex-1 bg-gray-800 p-6 overflow-scroll" style="scrollbar-width: none;">
            <h1 class="text-3xl font-bold text-gray-100 mb-6">Products List</h1>

            <table class="min-w-full table-auto text-white">
                <thead>
                    <tr class="border-b text-gray-400">
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Category Id</th>
                        <th class="px-6 py-3">Wholesale Price</th>
                        <th class="px-6 py-3">Retail Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in products" :key="product.id" class="hover:bg-gray-700 transition-all">
                        <td class="px-6 py-4">{{ product.name }}</td>
                        <td class="px-6 py-4">{{ product.category_id }}</td>
                        <td class="px-6 py-4">₱{{ product.whole_sale_price }}</td>
                        <td class="px-6 py-4">₱{{ product.retail_price }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style scoped>
/* Custom sidebar and table styles */
.sidebar {
    background-color: #1f2937;
    /* Dark gray background */
}

.sidebar .link {
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.sidebar .link:hover {
    background-color: #2563eb;
    /* Blue on hover */
    transform: scale(1.05);
}

table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    padding: 16px;
    text-align: left;
    border-bottom: 1px solid #2d3748;
    /* Darker border line for table */
}

th {
    background-color: #2d3748;
    /* Dark header for contrast */
}

tr:hover {
    background-color: #4a5568;
    /* Slightly lighter gray on row hover */
}
</style>
