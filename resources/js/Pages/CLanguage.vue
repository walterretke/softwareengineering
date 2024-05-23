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
            title="Linguagem de Programação C"
            subtitle="A linguagem de programação C ANSI é fundamental para muitos sistemas e aplicações modernas. Criada em 1972 por Dennis Ritchie, C é conhecida por sua eficiência e portabilidade. Compreender conceitos como ponteiros, alocação de memória e gerenciamento de recursos é essencial para desenvolver software robusto. Mas você sabe qual é o segredo para escrever código C ANSI eficiente e seguro?"
        />
        <div class="bg-white px-6 py-32 lg:px-8 mx-auto max-w-7xl">
            <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
                <p class="text-base font-semibold leading-7 text-indigo-600">
                    Linguagem de Programação C
                </p>
                <h1
                    class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Um breve histórico
                </h1>
                <div class="flex flex-col md:flex-row items-center gap-5">
                    <img
                        class="w-full md:w-1/2 mt-6 rounded-lg shadow-lg"
                        src="https://media1.tenor.com/m/aYOjZFN5MBwAAAAC/zzzzzzz.gif"
                        alt=""
                    />
                    <p class="italic text-gray-500 text-lg leading-7">
                        Eu sei, seu sei... História é um pouco chato, mas é
                        importante 🫠
                    </p>
                </div>
                <p class="mt-6 text-xl leading-8">
                    A linguagem C foi criada por Dennis Ritchie em 1972 para
                    reescrever de forma portável o sistema operacional UNIX, que
                    antes era escrito em assembly. Sua estrutura e seu nome
                    provêm de uma linguagem anterior B, que era uma
                    simplificação da linguagem de programação BCPL, escrita em
                    1966.
                </p>
                <p class="mt-6 leading-8">
                    Em 1978 foi publicado o livro "The C Programming Language"
                    por Brian Kernighan e Dennis Ritchie, consagrando a
                    linguagem no padrão chamado K&R. Durante muitos anos esse
                    livro foi considerado como a especificação da linguagem.
                </p>
                <p class="mt-6 leading-8">
                    Em 1989 o padrão C foi oficializado pelo ANSI (American
                    National Standards Institute) através do padrão ANSI
                    X3.159-1989, conhecido hoje como ANSI C, C89 ou C90. É
                    provavelmente a versão mais usada da linguagem ainda hoje.
                </p>
                <p class="mt-6 leading-8">
                    Em 1999 a ISO (International Standards Organization)
                    publicou um novo padrão da linguagem chamado ISO/IEC
                    9899:1999 e conhecido como C99. Em 2011 foi publicado o
                    padrão mais recente, chamado C11.
                </p>
                <p class="mt-6 leading-8">
                    Apesar de sua idade, C continua sendo uma das linguagens
                    mais utilizadas. A linguagem C inspirou a criação de muitas
                    outras linguagens de programação mais recentes, como C++,
                    Java, C#, JavaScript, Perl, PHP, Lua, etc.
                </p>

                <hr class="my-10 border-t border-gray-300" />

                <div class="mt-10 w-full">
                    <p>
                        <span
                            class="text-base font-semibold leading-7 text-indigo-600"
                        >
                            Características da Linguagem
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
                                    >Procedural, modular e estruturada:</strong
                                >
                                Linguagem com tipagem estática de dados.
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
                                    >Compilada:</strong
                                >
                                Geralmente é compilada para o código de máquina
                                da plataforma alvo.
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
                                    >Eficiente:</strong
                                >
                                Gera código compacto, eficiente e sem
                                necessidade de um subsistema runtime de execução
                                sofisticado.
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
                                    >Acesso de baixo nível:</strong
                                >
                                Facilidades para acesso à memória, registradores
                                e portas de E/S.
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
                                    >Portabilidade:</strong
                                >
                                Pode executar em plataformas de
                                microcontroladores a supercomputadores.
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
                                    >Aplicações variadas:</strong
                                >
                                Utilizada para escrever software de sistema,
                                como sistemas operacionais, compiladores,
                                serviços de rede, interfaces gráficas, bancos de
                                dados, editores de texto, jogos, etc.
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
                                    >Bibliotecas:</strong
                                >
                                A maior parte das funcionalidades da linguagem
                                provém de vastas bibliotecas, como a biblioteca
                                padrão C.
                            </span>
                        </div>
                    </div>
                </div>

                <hr class="my-10 border-t border-gray-300" />

                <div class="mt-16 w-full">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                        Estrutura de um programa em C
                    </h2>
                    <p class="mt-6">
                        Um programa em C é composto das seguintes partes:
                    </p>
                    <ul role="list" class="mt-8 w-full space-y-8 text-gray-600">
                        <li class="flex gap-x-3">
                            <CheckCircleIcon
                                class="mt-1 h-5 w-5 flex-none text-indigo-600"
                                aria-hidden="true"
                            />
                            <span>
                                <strong class="font-semibold text-gray-900"
                                    >Comandos do preprocessador:</strong
                                >
                                Linhas que iniciam com #, como #include ou
                                #define. Usados para incluir bibliotecas,
                                definir macros e realizar substituições antes da
                                compilação.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <CheckCircleIcon
                                class="mt-1 h-5 w-5 flex-none text-indigo-600"
                                aria-hidden="true"
                            />
                            <span>
                                <strong class="font-semibold text-gray-900"
                                    >Compilação:</strong
                                >
                                Processo de traduzir o código fonte em C para
                                código de máquina que o computador pode
                                executar. Envolve várias etapas:
                                preprocessamento, compilação, montagem e
                                linkedição. O resultado final é um arquivo
                                executável.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <CheckCircleIcon
                                class="mt-1 h-5 w-5 flex-none text-indigo-600"
                                aria-hidden="true"
                            />
                            <span>
                                <strong class="font-semibold text-gray-900"
                                    >Comentário:</strong
                                >
                                Trechos de texto que são ignorados pelo
                                compilador. Usados para explicar o código.
                                Sintaxe: /* comentário */ para múltiplas linhas
                                ou // comentário para uma única linha.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <CheckCircleIcon
                                class="mt-1 h-5 w-5 flex-none text-indigo-600"
                                aria-hidden="true"
                            />
                            <span>
                                <strong class="font-semibold text-gray-900"
                                    >Definição de variáveis e tipos:</strong
                                >
                                Declaração e inicialização de variáveis. Criação
                                de novos tipos de dados com typedef ou struct.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <CheckCircleIcon
                                class="mt-1 h-5 w-5 flex-none text-indigo-600"
                                aria-hidden="true"
                            />
                            <span>
                                <strong class="font-semibold text-gray-900"
                                    >Definição de funções:</strong
                                >
                                Corpo das funções, contendo a implementação dos
                                algoritmos e lógicas do programa. Inclui
                                comandos e expressões que realizam tarefas
                                específicas.
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="my-16">
                    <section>
                        <h2 class="text-xl mb-2 font-bold text-gray-900">
                            Dê seus primeiros passos com C:
                        </h2>
                        <iframe
                            class="w-full aspect-video rounded-xl shadow-lg"
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
                        :href="route('logic')"
                        class="py-2 px-4 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                    >
                        Voltar
                    </InertiaLink>

                    <InertiaLink
                        :href="route('c.library')"
                        class="py-2 px-4 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                    >
                        Próxima Aula
                    </InertiaLink>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
