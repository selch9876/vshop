<template>
    <AdminLayout>
        <ProductList/>
    </AdminLayout>
</template>

<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from '../Components/AdminLayout.vue';
import ProductList from './ProductList.vue';

onMounted(() => {
    initFlowbite();
});
</script>