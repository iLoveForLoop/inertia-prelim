<script setup>
import { Link } from '@inertiajs/vue3';
import MainLayout from '../MainLayout.vue';
import ProductCard from '../../Components/ProductCard.vue';
import { ref, onMounted } from 'vue';

defineProps({
    products: { type: Array },
    categories: { type: Array },
    category: { type: Object },
});

const sidebarOpen = ref(false);


const checkScreenSize = () => {
    sidebarOpen.value = window.innerWidth >= 640;
};
onMounted(() => {
    checkScreenSize();
    window.addEventListener('resize', checkScreenSize);
});
</script>

<template>
    <MainLayout>
        <div class="flex h-screen bg-gray-800 text-white">

            <div class="w-full sm:w-1/3 md:w-1/4 bg-gray-900 p-4 sm:p-6 shadow-lg rounded-r-lg fixed sm:static inset-y-0 left-0 z-20 transform transition-transform duration-300 ease-in-out"
                :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }">
                <div class="flex justify-between items-center mb-6">
                    <Link href="/products" class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-300">Categories
                    </Link>
                    <button @click="sidebarOpen = false" class="sm:hidden text-gray-300 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="space-y-3">
                    <Link v-for="category in categories" :key="category.id" :href="`/products/${category.id}`"
                        class="block py-2 px-4 text-sm text-white bg-gray-700 hover:bg-blue-600 rounded-md transition-all hover:scale-105">
                    {{ category.name }}
                    </Link>
                </div>
            </div>


            <div class="flex-1 p-4 sm:p-6 overflow-y-auto scrollbar-hidden">

                <button @click="sidebarOpen = true"
                    class="sm:hidden fixed top-4 right-4 z-30 text-white focus:outline-none"
                    :class="{ 'hidden': sidebarOpen }">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-100">
                        {{ category ? category.name : 'Products List' }}
                    </h1>
                    <Link href="/categories"
                        class="rounded-md bg-white text-gray-900 font-semibold py-2 px-4 text-sm uppercase hover:bg-gray-200 transition-colors duration-200">
                    Category List
                    </Link>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                    <div v-for="product in products" :key="product.id">
                        <ProductCard :product="product" />
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>
.scrollbar-hidden {
    scrollbar-width: none;
    /* Firefox */
    -ms-overflow-style: none;
    /* IE/Edge */
}

.scrollbar-hidden::-webkit-scrollbar {
    display: none;
    /* Chrome, Safari */
}
</style>
