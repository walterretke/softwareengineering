<script setup>
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import HeroSection from '@/Components/HeroSection.vue';
import Footer from '@/Components/Footer.vue';
import { Link as InertiaLink } from '@inertiajs/inertia-vue3'

const faqs = [
  {
    id: 1,
    question: "Aula 1 - Introdução a lógica de programação",
    answer:
      "A lógica de programação é a base para a criação de algoritmos e soluções eficientes em qualquer linguagem de programação. Compreender os princípios fundamentais, como estruturas condicionais, loops e variáveis, é essencial para desenvolver programas funcionais e resolver problemas complexos. Mas você sabe qual é o segredo para otimizar ainda mais seu código?",
    link: "logic",
  },
  {
    id: 2,
    question: "Aula 2 - Linguagem de programação C",
    answer:
        'Aqui você vai aprender sobre variáveis em C Ansi',
    link: "c.language",
  },
  {
    id: 3,
    question: "Aula 3 - Bibliotecas básicas em C",
    answer:
        'Aqui você vai aprender sobre estruturas de controle em C Ansi',
    link: "c.library",
  }
];
</script>

<template>
    <AppLayout>
    <HeroSection :menu="TRUE" title="Aprenda C Ansi" subtitle="Nesta seção você ira encontrar tudo o que precisa para entender o básico de Lógica de Programação e Linguagem de Programação C" />
        <div class="bg-white h-screen">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
                <div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
                    <h2
                        class="text-2xl font-bold leading-10 tracking-tight text-gray-900"
                    >
                        Aprenda C Ansi!
                    </h2>
                    <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                        <div
                            v-for="(faq) in faqs"
                            :key="faq.id"
                            class="pt-6 max-h-content"
                        >
                            <dt>
                                <span
                                    class="text-base font-semibold leading-7"
                                    >{{ faq.question }}</span
                                >
                            </dt>
                            <dd class="mt-2 pr-12">
                                <p class="text-base leading-7 text-gray-600">
                                    {{ faq.answer }}
                                </p>
                                <div class="mt-4">
                                    <InertiaLink :href="route(faq.link)" class="text-gray-800 underline">Ver aula</InertiaLink> 
                                </div>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
    