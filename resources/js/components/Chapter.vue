<template>
  <transition name="fade" mode="out-in">
    <div class="chapter-wrapper">
      <End v-if="isGameFinished" :is-victory="isVictory" @restart="restart" />
      <GameOver v-else-if="isGameOver" @restart="restart" />

      <div v-else-if="chapter !== null" class="chapter-card" :key="currentChapterId">
        <h2 class="chapter-title">{{ chapter?.title || '...' }}</h2>
        <p class="chapter-description">{{ chapter?.description || '' }}</p>

        <div v-if="chapter.choices?.length" class="choices">
          <h3>Que veux-tu faire ?</h3>
          <ul>
            <li v-for="choice in chapter.choices" :key="choice.id">
              <button class="choice-button" @click="loadNextChapter(choice.next_chapter_id)">
                {{ choice.content }}
              </button>
            </li>
          </ul>
        </div>

        <div v-else class="end-message">
          <h3>Fin de l'histoire.</h3>
          <p>Merci d’avoir joué !</p>
        </div>
      </div>

      <div v-else class="loading">
        <p>Chargement du chapitre...</p>
      </div>
    </div>
  </transition>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import End from '../End.vue'
import GameOver from '../GameOver.vue'

const baseUrl = 'http://localhost:8000'

const currentChapterId = ref(parseInt(localStorage.getItem('lastChapterId')) || 1)
const chapter = ref(null)
const isGameFinished = ref(false)
const isGameOver = ref(false)
const isVictory = ref(false)

const fetchChapter = async () => {
  try {
    const response = await fetch(`${baseUrl}/api/chapters/${currentChapterId.value}`, {
      headers: { 'Accept': 'application/json' },
      credentials: 'include'
    })
    if (!response.ok) throw new Error('Erreur lors du chargement du chapitre.')

    const data = await response.json()
    chapter.value = data.chapter

    if (!chapter.value?.choices?.length) {
      isVictory.value = true
      isGameFinished.value = true
      isGameOver.value = false
    } else {
      isVictory.value = false
      isGameFinished.value = false
      isGameOver.value = false
    }

    localStorage.setItem('lastChapterId', currentChapterId.value)
  } catch (err) {
    console.error('Erreur fetch chapitre :', err)
  }
}

const loadNextChapter = (nextId) => {
  if (!nextId) {
    isGameOver.value = true
    isVictory.value = false
    isGameFinished.value = false
    chapter.value = null
    localStorage.removeItem('lastChapterId')
    return
  }

  currentChapterId.value = nextId
  fetchChapter()
}

const restart = () => {
  currentChapterId.value = 1
  chapter.value = null
  isVictory.value = false
  isGameFinished.value = false
  isGameOver.value = false
  localStorage.removeItem('lastChapterId')
  fetchChapter()
}

onMounted(() => {
  fetchChapter()
})
</script>

<style scoped>
.chapter-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-color: #0e0e0e;
  padding: 40px 20px;
  font-family: 'Inter', sans-serif;
  color: white;
}

.chapter-card {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(6px);
  border-radius: 24px;
  padding: 40px 30px;
  max-width: 700px;
  width: 100%;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
}

.chapter-title {
  font-size: 2.4rem;
  margin-bottom: 20px;
  font-weight: bold;
  color: #fff;
}

.chapter-description {
  font-size: 1.15rem;
  line-height: 1.7;
  margin-bottom: 30px;
  color: #ccc;
}

.choices h3 {
  font-size: 1.2rem;
  margin-bottom: 15px;
  color: #fff;
}

.choices ul {
  list-style: none;
  padding: 0;
}

.choices li {
  margin-bottom: 16px;
}

.choice-button {
  background-color: #fff;
  color: #111;
  border: none;
  padding: 14px 20px;
  width: 100%;
  border-radius: 12px;
  font-weight: bold;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.choice-button:hover {
  background-color: #e5e5e5;
}

.end-message {
  text-align: center;
  margin-top: 30px;
}

.loading {
  font-size: 1.3rem;
  color: #aaa;
  text-align: center;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>
