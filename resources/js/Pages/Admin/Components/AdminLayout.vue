<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!--Navbar Start-->
            <Navbar></Navbar>
        <!--Navbar End-->
        <!-- Sidebar -->
            <Sidebar></Sidebar>
        <!--Sidebar End-->

        <main class="p-4 md:ml-64 h-auto pt-20">
            <slot/>
        </main>
        
      </div>
</template>

<script setup>
import Navbar from './Navbar.vue';
import Sidebar from './Sidebar.vue'

</script>