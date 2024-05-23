<script setup>
import { ref } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import HeroSection from "@/Components/HeroSection.vue";
import { Dialog } from '@headlessui/vue'
import { CheckCircleIcon } from "@heroicons/vue/20/solid";
import { Link as InertiaLink, useForm } from '@inertiajs/inertia-vue3'

const isModalOpen = ref(false);
const closeModal = () => {
    isModalOpen.value = false;
    route('home');
}
</script>

<template>
    <AppLayout>
        <HeroSection
            title="Bibliotecas Básicas em C"
            subtitle="Aprenda sobre as principais bibliotecas padrão da linguagem C"
        />
        <div class="bg-white px-6 py-16 lg:px-8 max-w-full">
            <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
                <p class="text-base font-semibold leading-7 text-indigo-600">
                    Bibliotecas Padrão em C
                </p>
                <h1
                    class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Introdução às Bibliotecas
                </h1>
                <p class="mt-6 text-xl leading-8">
                    As bibliotecas padrão são como coleções de ferramentas úteis que os programadores podem usar em seus programas escritos em linguagens de programação, um exemplo é a linguagem C. Cada biblioteca tem um conjunto de funções que podem ser chamadas para realizar diferentes tarefas, como manipular texto, fazer cálculos matemáticos, lidar com o tempo e muito mais.
                </p>

                <hr class="my-10 border-t border-gray-300" />

                <div class="mt-10 w-full">
                    <p>
                        <span
                            class="text-base font-semibold leading-7 text-indigo-600"
                        >
                            Principais Bibliotecas
                        </span>
                    </p>
                    <div class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div
                            class="flex gap-x-3 bg-gray-100 p-4 rounded-lg shadow-sm"
                        >
                            <CheckCircleIcon
                                class="mt-1 h-5 w-5 flex-none text-indigo-600"
                                aria-hidden="true"
                            />
                            <span>
                                <strong class="font-semibold text-gray-900"
                                    >stdio.h:</strong
                                >
                                Rotinas padrão de entrada e saída.
                            </span>
                        </div>
                        <div
                            class="flex gap-x-3 bg-gray-100 p-4 rounded-lg shadow-sm"
                        >
                            <CheckCircleIcon
                                class="mt-1 h-5 w-5 flex-none text-indigo-600"
                                aria-hidden="true"
                            />
                            <span>
                                <strong class="font-semibold text-gray-900"
                                    >stdlib.h:</strong
                                >
                                Funções envolvendo alocação de memória, controle de processos, conversões e outras.
                            </span>
                        </div>
                        <div
                            class="flex gap-x-3 bg-gray-100 p-4 rounded-lg shadow-sm"
                        >
                            <CheckCircleIcon
                                class="mt-1 h-5 w-5 flex-none text-indigo-600"
                                aria-hidden="true"
                            />
                            <span>
                                <strong class="font-semibold text-gray-900"
                                    >math.h:</strong
                                >
                                Funções matemáticas.
                            </span>
                        </div>
                        <div
                            class="flex gap-x-3 bg-gray-100 p-4 rounded-lg shadow-sm"
                        >
                            <CheckCircleIcon
                                class="mt-1 h-5 w-5 flex-none text-indigo-600"
                                aria-hidden="true"
                            />
                            <span>
                                <strong class="font-semibold text-gray-900"
                                    >string.h:</strong
                                >
                                Rotinas para manipular strings e memória.
                            </span>
                        </div>
                    </div>
                </div>

                <hr class="my-10 border-t border-gray-300" />

                <div class="mt-16 w-full">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                        Como incluir uma biblioteca no seu programa
                    </h2>
                    <p class="mt-6">
                        Para ter acesso a uma biblioteca, seu programa deve incluir uma cópia do arquivo-interface. Basta escrever:
                    </p>
                    <pre class="bg-gray-100 p-4 rounded-lg shadow-sm mt-4 overflow-auto">
                        <code>#include &lt;stdlib.h&gt;</code>
                    </pre>
                    <p class="mt-6 leading-8">
                        O comando <code>#include</code> faz a devida inclusão da biblioteca <code>stdlib.h</code>.
                    </p>
                </div>

                <hr class="my-10 border-t border-gray-300" />

                <div class="mt-16 w-full">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                        Exemplos Práticos de Uso das Bibliotecas
                    </h2>
                    <p class="mt-6 leading-8">
                        Vamos ver alguns exemplos de como usar as funções dessas bibliotecas nos seus programas em C.
                    </p>
                    
                    <!-- Exemplo 1: Leitura de Entrada com stdio.h -->
                    <p class="mt-6 leading-8">
                        <strong>1. Leitura de Entrada com <code>stdio.h</code></strong>
                    </p>
                    <pre class="bg-gray-100 p-4 rounded-lg shadow-sm mt-4 overflow-auto">
                        <code>
#include &lt;stdio.h&gt;
int main() {
    char name[50];
    printf("Enter your name: ");
    gets(name);
    printf("Hello, %s!", name);
    return 0;
}
                        </code>
                    </pre>
                    <p class="mt-4 leading-8">
                        Este exemplo usa a biblioteca <code>stdio.h</code> para ler uma entrada do usuário (seu nome) e exibir uma saudação. A função <code>gets</code> é usada para capturar a entrada, e <code>printf</code> para exibir a mensagem.
                    </p>
                    
                    <!-- Exemplo 2: Uso de Funções Matemáticas com math.h -->
                    <p class="mt-6 leading-8">
                        <strong>2. Uso de Funções Matemáticas com <code>math.h</code></strong>
                    </p>
                    <pre class="bg-gray-100 p-4 rounded-lg shadow-sm mt-4 overflow-auto">
                        <code>
#include &lt;stdio.h&gt;
#include &lt;math.h&gt;
int main() {
    double x = 9.0;
    double result = sqrt(x);
    printf("Square root of %.2f is %.2f\n", x, result);
    return 0;
}
                        </code>
                    </pre>
                    <p class="mt-4 leading-8">
                        Aqui, a biblioteca <code>math.h</code> é utilizada para calcular a raiz quadrada de um número. A função <code>sqrt</code> retorna a raiz quadrada de <code>x</code> e o resultado é exibido usando <code>printf</code>.
                    </p>
                    
                    <!-- Exemplo 3: Manipulação de Strings com string.h -->
                    <p class="mt-6 leading-8">
                        <strong>3. Manipulação de Strings com <code>string.h</code></strong>
                    </p>
                    <pre class="bg-gray-100 p-4 rounded-lg shadow-sm mt-4 overflow-auto">
                        <code>
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
int main() {
    char str1[20] = "Hello";
    char str2[20] = "World";
    strcat(str1, str2);
    printf("Concatenated string: %s\n", str1);
    return 0;
}
                        </code>
                    </pre>
                    <p class="mt-4 leading-8">
                        Este exemplo demonstra o uso de <code>string.h</code> para concatenar duas strings. A função <code>strcat</code> junta <code>str2</code> ao final de <code>str1</code>, e o resultado é exibido com <code>printf</code>.
                    </p>
                </div>

                <div class="my-16">
                    <section>
                        <h2
                        class="text-xl mb-2 font-bold text-gray-900"
                        >Assista ao vídeo para saber mais:</h2>
                        <iframe
                            class="rounded-xl shadow-lg w-full"
                            height="315"
                            src="https://www.youtube.com/embed/mEPkcSdPigg?si=00-9FMnaf-DEmEpe"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </section>
                </div>

                <div class="flex w-full justify-center mt-10 gap-4">
                    <InertiaLink
                        :href="route('c.language')"
                        class="py-2 px-4 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                    >
                        Voltar
                    </InertiaLink>
                    <button
                        @click="isModalOpen = true"
                        class="py-2 px-4 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                    >
                        Finalizar
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <Dialog v-if="isModalOpen" @close="closeModal" class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen px-4">
                <Dialog.Overlay class="fixed inset-0 bg-black opacity-30" />

                <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                <CheckCircleIcon class="h-6 w-6 text-green-600" aria-hidden="true" />
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <Dialog.Title as="h3" class="text-lg leading-6 font-medium text-gray-900">
                                    Parabéns!
                                </Dialog.Title>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        Você concluiu as aulas sobre Bibliotecas Básicas em C. Continue aprendendo e aplicando seus conhecimentos!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <InertiaLink
                            as="button"
                            type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm"
                            @click="closeModal"
                        >
                            Fechar
                        </InertiaLink>
                    </div>
                </div>
            </div>
        </Dialog>
    </AppLayout>
</template>
