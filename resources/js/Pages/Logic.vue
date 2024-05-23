<script setup>
import { ref } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import HeroSection from "@/Components/HeroSection.vue";
import {
    CheckCircleIcon,
    InformationCircleIcon,
} from "@heroicons/vue/20/solid";
import { Link as InertiaLink } from "@inertiajs/inertia-vue3";
</script>

<template>
    <AppLayout>
        <HeroSection
            title="Lógica de Programação"
            subtitle="A lógica de programação é a base para a criação de algoritmos e soluções eficientes em qualquer linguagem de programação. Compreender os princípios fundamentais, como estruturas condicionais, loops e variáveis, é essencial para desenvolver programas funcionais e resolver problemas complexos. Mas você sabe qual é o segredo para otimizar ainda mais seu código?"
        />
        <div class="bg-white px-6 py-12 lg:px-8 max-w-full mx-auto">
            <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
                <p class="text-base font-semibold leading-7 text-indigo-600">
                    C Ansi
                </p>
                <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Lógica de Programação
                </h1>
                <h2 class="mt-5 bold text-lg">O que é?</h2>
                <p class="mt-6 text-xl leading-8">
                    É a habilidade essencial de desenvolver algoritmos eficazes e estruturar soluções lógicas para problemas complexos. Ela é a base fundamental para a criação de software e a instrução de computadores para executar tarefas específicas. Em termos simples, a lógica de programação é a capacidade de organizar e transmitir instruções de maneira coerente e sequencial, de modo que um computador possa executar as ações desejadas.
                </p>
                <div class="mt-10 max-w-full">
                    <p>
                        <span class="text-base font-semibold leading-7 text-indigo-600">
                            Importância
                        </span>
                    </p>
                    <ul role="list" class="mt-8 space-y-8 text-gray-600">
                        <li class="flex gap-x-3">
                            <CheckCircleIcon class="mt-1 h-5 w-5 flex-none text-indigo-600" aria-hidden="true" />
                            <span>
                                <strong class="font-semibold text-gray-900">Resolução de Problemas:</strong> permite que você analise um problema complexo, divida-o em partes menores e crie um plano sistemático para resolvê-lo. Isso ajuda a abordar desafios de maneira organizada e eficiente.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <CheckCircleIcon class="mt-1 h-5 w-5 flex-none text-indigo-600" aria-hidden="true" />
                            <span>
                                <strong class="font-semibold text-gray-900">Eficiência no Código:</strong> Uma lógica bem estruturada resulta em algoritmos mais eficientes e código mais limpo. Isso significa que seus programas serão executados mais rapidamente e serão mais fáceis de entender e manter.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <CheckCircleIcon class="mt-1 h-5 w-5 flex-none text-indigo-600" aria-hidden="true" />
                            <span>
                                <strong class="font-semibold text-gray-900">Prevenção de Erros:</strong> A aplicação adequada da lógica ajuda a identificar e corrigir erros de programação antes que eles se tornem problemas sérios. Uma abordagem lógica ajuda a antecipar cenários problemáticos e a construir salvaguardas no código.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <CheckCircleIcon class="mt-1 h-5 w-5 flex-none text-indigo-600" aria-hidden="true" />
                            <span>
                                <strong class="font-semibold text-gray-900">Adaptação a Novas Linguagens:</strong> Isso é especialmente útil à medida que a tecnologia evolui e novas linguagens surgem.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <CheckCircleIcon class="mt-1 h-5 w-5 flex-none text-indigo-600" aria-hidden="true" />
                            <span>
                                <strong class="font-semibold text-gray-900">Criatividade na Solução de Problemas:</strong> A lógica de programação estimula a criatividade, pois você deve pensar de maneira inovadora para criar soluções únicas para os desafios que enfrenta.
                            </span>
                        </li>
                    </ul>
                    <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">
                        Se não aprender PROGRAMAÇÃO com esse vídeo. - ̗̀ DESISTE ̖́-
                    </h2>
                    <div class="my-16">
                        <section>
                            <iframe
                                class="rounded-xl shadow-lg w-full h-60 md:h-96"
                                src="https://www.youtube.com/embed/A1BaZr82XJI?si=hFfbiN6sGrEH_sPd"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen
                            ></iframe>
                        </section>
                    </div>
                    <h2 class="mt-5 bold text-lg">
                        <strong>"Não consigo entender nada 😨". Calma, é normal..</strong>
                    </h2>
                    <p class="mt-6">
                        Aprender lógica de programação pode ser um desafio, mas é um passo essencial para se tornar um programador eficaz. Caso você tenha dificuldades, não se preocupe, é normal. A lógica de programação é uma habilidade que pode ser desenvolvida com prática e paciência. Aqui estão algumas dicas para ajudá-lo a entender melhor:
                    </p>
                    <figure class="mt-10 border-l border-indigo-600 pl-9">
                        <blockquote class="font-semibold text-gray-900">
                            <p>
                                "Todo mundo no país deveria aprender a programar um computador, porque isso ensina você a pensar."
                            </p>
                        </blockquote>
                        <figcaption class="mt-6 flex gap-x-4">
                            <img
                                class="h-6 w-6 flex-none rounded-full bg-gray-50"
                                src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt=""
                            />
                            <div class="text-sm leading-6">
                                <strong class="font-semibold text-gray-900">Steve Jobs</strong> – Cofundador da Apple.
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="mt-16 max-w-full">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                        Vamos praticar um pouco de <strong>lógica de programação</strong>?
                    </h2>
                    <p class="mt-6">
                        A melhor maneira de aprender lógica de programação é praticando. E a prática não precisa ser chata, pode ser bem divertida. Vamos praticar com alguns jogos e desafios de lógica de programação?
                    </p>
                    <div class="mt-10 flex flex-col gap-8">
                        <span class="block">
                            <strong class="mt-16 font-semibold text-gray-900">O Lobo e a Ovelha</strong>
                            <a
                                class="ml-2 text-blue-700 underline italic"
                                target="_blank"
                                href="https://rachacuca.com.br/jogos/o-lobo-e-a-ovelha/"
                            >
                                Clique aqui e jogue!
                            </a>
                            <img
                                class="rounded-lg shadow-lg mt-5 w-full h-auto"
                                src="../../../public/images/ovelha.png"
                                alt=""
                            />
                        </span>
                        <span class="block">
                            <strong class="mt-16 font-semibold text-gray-900">Missionários e Canibais</strong>
                            <a
                                class="ml-2 text-blue-700 underline italic"
                                target="_blank"
                                href="http://rachacuca.com.br/jogos/missionarios-ecanibais/"
                            >
                                Clique aqui e jogue!
                            </a>
                            <img
                                class="rounded-lg shadow-lg mt-5 w-full h-auto"
                                src="../../../public/images/missionarios.jpg"
                                alt=""
                            />
                        </span>
                    </div>
                </div>
                <div class="flex w-full justify-center mt-10">
                    <Inertia-link
                        :href="route('c.language')"
                        class="py-2 px-4 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                    >
                        Próxima Aula
                    </Inertia-link>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
