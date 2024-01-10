<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!--Navbar Start-->
            <Navbar></Navbar>
        <!--Navbar End-->
        <!-- Sidebar -->
            <Sidebar></Sidebar>
        <!--Sidebar End-->
    
        <slot/>
      </div>
</template>

<script setup>
import Navbar from './Navbar.vue';
import Sidebar from './Sidebar.vue'

</script>