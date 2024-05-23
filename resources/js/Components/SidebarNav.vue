<template>
    <header class="absolute inset-x-0 top-0 z-50">
        <nav
            class="flex items-center justify-between p-6 lg:px-8"
            aria-label="Global"
        >
            <div class="flex lg:flex-1">
                <InertiaLink :href="route('home')" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <BoltIcon
                        class="h-6 w-6 text-gray-800"
                        aria-hidden="true"
                    />
                </InertiaLink>
            </div>
            <div class="flex lg:hidden">
                <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    @click="mobileMenuOpen = true"
                >
                    <span class="sr-only">Open main menu</span>
                    <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <InertiaLink
                    v-for="item in navigation"
                    :key="item.name"
                    :href="item.href"
                    class="text-sm font-semibold leading-6 text-gray-900"
                    >{{ item.name }}</InertiaLink
                >
            </div>
        </nav>
        <Dialog
            class="lg:hidden"
            @close="mobileMenuOpen = false"
            :open="mobileMenuOpen"
        >
            <div class="fixed inset-0 z-50" />
            <DialogPanel
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
            >
                <div class="flex items-center justify-between">
                    <InertiaLink :href="route('home')" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <BoltIcon
                            class="h-8 w-auto text-gray-800"
                            aria-hidden="true"
                        />
                    </InertiaLink>
                    <button
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="sr-only">Close menu</span>
                        <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <InertiaLink
                                v-for="item in navigation"
                                :key="item.name"
                                :href="item.href"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >{{ item.name }}</InertiaLink
                            >
                        </div>
                    </div>
                </div>
            </DialogPanel>
        </Dialog>
    </header>
</template>

<script setup>
import { ref } from "vue";
import { Dialog, DialogPanel } from "@headlessui/vue";
import { Link as InertiaLink } from "@inertiajs/inertia-vue3";
import { BoltIcon, Bars3Icon, XMarkIcon } from "@heroicons/vue/24/solid";

const mobileMenuOpen = ref(false);

const navigation = [
    { name: "Início", href: route("home") },
    { name: "C Ansi", href: route("cansi") },
    { name: "Robótica", href: route("robotics") },
    { name: "Contato", href: route("contact") },
];
</script>
