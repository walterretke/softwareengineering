<template>
    <div class="">
        <ul v-for="option in options" :key="option.id">
            <li>{{ option.name }}</li>
        </ul>
    </div>
  </template>
  
  <script setup>
    import { ref } from 'vue'

    const options = ref([
        { id: 1, name: 'C Ansi' },
        { id: 2, name: 'Option 2' },
        { id: 3, name: 'Option 3' },
    ])
  </script>