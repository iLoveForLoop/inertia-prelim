<script setup>

import { Link } from '@inertiajs/vue3';

</script>

<template>
    <nav class="bg-black p-0 md:p-5">
        <div class="flex flex-row justify-between items-start md:flex-row md:justify-between md:items-center">
            <div class="text-white text-2xl uppercase text-bold p-5 md:p-0">
                <h1>Ikinamada</h1>
            </div>
            <div class="hidden md:flex md:flex-row md:uppercase md:gap-4">
                <Link href="/" class="text-white">Welcome</Link>
                <Link href="/home" class="text-white">Home</Link>
                <Link href="/about" class="text-white ">About</Link>
                <Link href="/products" class="text-white ">Products</Link>
                <Link href="/categories" class="text-white ">Categories</Link>
            </div>

        </div>
    </nav>
    <slot />
</template>

<style></style>
