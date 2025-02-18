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
            <!-- <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6 md:hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </div> -->

        </div>
  </nav>
    <slot/>
</template>

<style>

</style>
