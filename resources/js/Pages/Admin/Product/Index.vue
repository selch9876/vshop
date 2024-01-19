<template>
    <AdminLayout>
        <ProductList :products="products"></ProductList>
    </AdminLayout>
</template>

<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from '../Components/AdminLayout.vue';
import ProductList from './ProductList.vue';
 defineProps({
    products: Array
 })
onMounted(() => {
    initFlowbite();
});
</script>