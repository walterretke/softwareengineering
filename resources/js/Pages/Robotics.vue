<script setup>
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import HeroSection from '@/Components/HeroSection.vue';
import Footer from '@/Components/Footer.vue';
import { Link as InertiaLink } from '@inertiajs/inertia-vue3'

const faqs = [
  {
    id: 1,
    question: "Aula 1 - Introdução à Robótica com Arduino",
    answer:
      "Nesta aula, você aprenderá os conceitos básicos de robótica utilizando Arduino. Vamos explorar os componentes principais, como sensores e atuadores, e como programá-los usando a IDE do Arduino. Você está pronto para dar vida aos seus projetos?",
    link: "#",
  },
  {
    id: 2,
    question: "Aula 2 - Primeiros Passos com Tinkercad",
    answer:
        'Aqui você aprenderá a usar o Tinkercad para simular circuitos eletrônicos e criar projetos de robótica de forma visual e intuitiva.',
    link: "#",
  },
  {
    id: 3,
    question: "Aula 3 - Projetos Básicos com Arduino e Tinkercad",
    answer:
        'Nesta aula, vamos colocar em prática o que aprendemos, criando projetos básicos como um semáforo e um sistema de alarme usando Arduino e Tinkercad.',
    link: "#",
  }
];
</script>

<template>
    <AppLayout>
    <HeroSection :menu="TRUE" title="Robótica com Arduino" subtitle="Nesta seção você encontrará tudo o que precisa para começar a trabalhar com Arduino e Tinkercad" />
        <div class="bg-white h-screen">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
                <div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
                    <h2
                        class="text-2xl font-bold leading-10 tracking-tight text-gray-900"
                    >
                        Robótica com Arduino!
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
                                    <InertiaLink :href="faq.link" class="text-gray-800 underline">Ver aula</InertiaLink> 
                                </div>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
