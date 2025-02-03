<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

const message = ref("This is an Inertia App.")

</script>

<template>

    <h1>Hello World!</h1>
    <div>{{ message }}</div>
    <Link class="underline text-blue-700" href="/categories">Go to /categories</Link> <br>
    <Link class="underline text-blue-700" href="/products">Go to /products</Link>
</template>
