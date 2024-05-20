<template>
    <div>
        <SidebarNav />
        <div class="bg-red-800 h-[70px] opacity-0"></div>
        <main>
            <slot></slot> <!-- Aqui o conteúdo será inserido -->
        </main>
        <Footer />
    </div>
</template>

<script setup>
import SidebarNav from '@/Components/SidebarNav.vue';
import Footer from '@/Components/Footer.vue';
</script>
