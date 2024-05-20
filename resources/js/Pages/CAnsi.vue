<script setup>
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import HeroSection from '@/Components/HeroSection.vue';
import Footer from '@/Components/Footer.vue';
import { Link as InertiaLink } from '@inertiajs/inertia-vue3'

const contents = ref([
    { id: 1, title: 'Lógica de Programação', description: 'Aqui você vai aprender o básico da linguagem C Ansi', link: 'logic'},
    { id: 2, title: 'Linguagem de Programação C', description: 'Aqui você vai aprender sobre variáveis em C Ansi', link: 'variables'},
    { id: 3, title: 'Bibliotecas básicas em C', description: 'Aqui você vai aprender sobre estruturas de controle em C Ansi', link: 'libraries'},
    { id: 4, title: 'Declaração de variáveis', description: 'Aqui você vai aprender sobre estruturas de controle em C Ansi', link: 'variables-declaration'},
    { id: 5, title: 'Comandos de Entrada e Saída', description: 'Aqui você vai aprender sobre estruturas de controle em C Ansi', link: 'io-commands'},
    { id: 6, title: 'Condicional', description: 'Aqui você vai aprender sobre estruturas de controle em C Ansi', link: 'conditional'},
    { id: 7, title: 'Laços de Repetição', description: 'Aqui você vai aprender sobre estruturas de controle em C Ansi', link: 'loops'},
])
</script>

<template>
    <AppLayout>
        <div>
            <HeroSection title="Get started learn C Ansi" subtitle="Tudo o que você precisa para entender o básico da linguagem mais famosa do mundo!" />
            <div class="flex">
                <div class="grid grid-cols-2 gap-4 m-auto">
                    <div class="bg-gray-100 text-justify rounded-md p-5" v-for="(content, index) in contents" :key="content.id">
                        <InertiaLink class="bg-gray-800 rounded-md mx-2 px-2 py-1 text-white bold text-xs">{{ `Aula ${index + 1}` }}</InertiaLink>
                        <h1 class="text-3xl text-gray-800 max-w-content p-2 mx- mt-2">{{ content.title }}</h1>
                        <p class="p-2 mt-2">{{ content.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
