<template>
  <transition name="fade" mode="out-in">
    <div class="end-wrapper">
      <div class="end-card">
        <h1 v-if="isVictory">Félicitations 🎉</h1>
        <h1 v-else>Fin de l’histoire</h1>

        <p class="message" v-if="isVictory">
          Vous avez brillamment résolu l’enquête.<br />Justice a été rendue.
        </p>
        <p class="message" v-else>
          L’histoire s’achève ici.<br />L’essentiel est d’avoir essayé…
        </p>

        <button class="restart-button" @click="$emit('restart')">
          Recommencer
        </button>
      </div>
    </div>
  </transition>
</template>

<script setup>
defineProps({
  isVictory: Boolean
})
</script>

<style scoped>
.end-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: #0e0e0e;
  padding: 40px 20px;
}

.end-card {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(8px);
  border-radius: 24px;
  padding: 50px 40px;
  max-width: 600px;
  width: 100%;
  text-align: center;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
}

h1 {
  font-size: 2.4em;
  color: #fff;
  margin-bottom: 20px;
  font-weight: 600;
}

.message {
  font-size: 1.2em;
  color: #ccc;
  margin-bottom: 30px;
  line-height: 1.6;
}

.restart-button {
  background-color: #fff;
  color: #111;
  border: none;
  padding: 14px 28px;
  border-radius: 12px;
  font-size: 1.1em;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.restart-button:hover {
  background-color: #e0e0e0;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>
