<template>
  <div>
    <Header />
    <End v-if="isFinished" @restart="restart" />
    <Chapter v-else @end="isFinished = true" />
  </div>
</template>

<script setup>
import { ref } from 'vue'
import Header from './components/Header.vue'
import Chapter from './components/Chapter.vue'
import End from './End.vue'

const isFinished = ref(false)

const restart = () => {
  isFinished.value = false
}
</script>

<style>
body {
  margin: 0;
  font-family: 'Segoe UI', Roboto, sans-serif;
  background-color: #0e0e0e;
  color: #ffffff;
}

button {
  background-color: #ff6b6b;
  border: none;
  color: white;
  padding: 12px 20px;
  font-size: 1em;
  margin: 10px 0;
  cursor: pointer;
  border-radius: 5px;
  transition: background 0.3s ease;
}

button:hover {
  background-color: #e05050;
}

ul {
  list-style: none;
  padding: 0;
}
</style>
