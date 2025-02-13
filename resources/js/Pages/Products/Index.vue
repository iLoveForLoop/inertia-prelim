<script setup>
import { Link } from '@inertiajs/vue3';
import MainLayout from '../MainLayout.vue';
import ProductCard from '../../Components/ProductCard.vue';

defineProps({
    products: {
        type: Array,
    },
    categories: {
        type: Array,
    },
    category:{
        type: Object,
    }
})

</script>

<template>
    <MainLayout>
        <div class="flex h-screen bg-gray-800 text-white">
        <!-- Sidebar (Categories) -->
        <!-- <div class="w-1/4 bg-gray-900 p-6 shadow-lg rounded-r-lg">
            <Link href="/products" class="text-3xl font-bold text-gray-300 cursor-pointer">Categories</Link>
            <div class="space-y-4 mt-6">
                <Link v-for="category in categories" :key="category.id" :href="`/products/${category.id}`"
                    class="block py-3 px-5 text-sm text-white bg-gray-600 hover:bg-blue-700 rounded-lg transition-all transform hover:scale-105 border-b border-gray-700">
                {{ category.name }}
                </Link>
            </div>
        </div> -->

        <!-- Main Content (Products List) -->
        <div class="flex-1 bg-gray-800 p-6 overflow-scroll" style="scrollbar-width: none;">
            <div class="flex justify-between items-center w-full mb-5">
                <h1 v-if="!category" class="text-3xl font-bold text-gray-100 mb-6" style="margin: 0 !important;">Products List</h1>

                <h1 class="text-3xl font-bold text-gray-100 mb-6" style="margin: 0 !important;" v-if="category">{{ category.name }}</h1>
                <Link href="/categories"
                    class="rounded-lg bg-gray-200 text-gray-900 font-semibold py-3 px-6 hover:bg-gray-600 hover:text-white transition duration-300 uppercase text-sm">
                Category List
                </Link>


            </div>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div v-for="product in products" :key="product.id">
                    <ProductCard :product="product"/>
                </div>

            </div>

        </div>
    </div>
    </MainLayout>

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
