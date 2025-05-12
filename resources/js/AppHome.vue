<template>
    <HeaderHome />
  <div class="home">
    <!-- SECTION 1 : Écran d'accueil -->
    <section class="hero">
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <img :src="logoPath" alt="Diverge" class="logo" />
        <p class="tagline">Des récits immersifs où chaque choix écrit votre destin.</p>
        <div class="scroll-down" @click="scrollToStories">
          ↓
        </div>
      </div>
    </section>

    <!-- SECTION 2 : Liste des histoires -->
    <section class="stories" ref="storySection">
  <div class="stories-header">
    <h2>Nos histoires</h2>
  </div>

  <div class="story-slider-wrapper">
    <button class="nav-arrow left" @click="scrollSlider(-1)">‹</button>

    <div class="story-slider" ref="slider">
      <div
        v-for="story in stories"
        :key="story.id"
        class="story-card"
        :class="{ unavailable: !story.available }"
        :style="{ backgroundImage: `url(${story.image})` }"
      >
        <div class="story-overlay">
          <h3>{{ story.title }}</h3>
          <p>{{ story.description }}</p>
          <button
            :disabled="!story.available"
            @click="startStory(story.path)"
          >
            Commencer
          </button>
        </div>
      </div>
    </div>

    <button class="nav-arrow right" @click="scrollSlider(1)">›</button>
  </div>
</section>

  </div>
</template>

<script setup>
import HeaderHome from './components/HeaderHome.vue'
import { ref } from 'vue'

// ✅ image dynamique pour le logo (dans dossier public/img)
const logoPath = '/img/logo-diverge-white.png'

const storySection = ref(null)

function scrollToStories() {
  storySection.value?.scrollIntoView({ behavior: 'smooth' })
}

const stories = [
  {
    id: 1,
    title: 'Dernier Appel',
    description: 'Un thriller où chaque appel peut être le dernier.',
    available: true,
    path: '/chapter/1'
  },
  {
    id: 2,
    title: 'Mémoire Oubliée',
    description: 'Une ville vide. Un esprit fragmenté.',
    available: false
  },
  {
    id: 3,
    title: 'Les Larmes de Minuit',
    description: 'Une enquête dans l’ombre des souvenirs.',
    available: false
  },
  
]

function startStory(path) {
  if (path) {
    window.location.href = path
  }
}

const slider = ref(null)

function scrollSlider(direction) {
  if (slider.value) {
    const cardWidth = 300 // largeur approx d'une carte
    slider.value.scrollBy({ left: direction * cardWidth, behavior: 'smooth' })
  }
}

</script>

<style scoped>
.home {
  font-family: 'Inter', sans-serif;
  color: white;
  background-color: #111;
}

.hero {
  position: relative;
  height: 100vh;
  background: url('/img/bg.png') no-repeat center center / cover;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.hero-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.5);
}

.hero-content {
  position: relative;
  z-index: 10;
  max-width: 700px;
  padding: 20px;
}

.logo {
  max-width: 70%;
  margin-bottom: 20px;
}

.tagline {
  font-size: 1.5em;
  color: #ccc;
  margin-bottom: 40px;
}

.scroll-down {
  font-size: 3em;
  color: #fff;
  cursor: pointer;
  animation: bounce 1.2s infinite;
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0)
  }
  50% {
    transform: translateY(8px)
  }
}

/* Section 2 */
.stories {
  background-color: #0e0e0e;
  height: 100vh;
  display: flex;
  align-items: stretch;
  padding: 0 60px; /* padding horizontal seulement */
  gap: 40px;
  overflow: hidden;
}

/* Titre à gauche aligné en bas */
.stories-header {
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  width: 30%;
}

.stories-header h2 {
  font-size: 9rem;
  color: #fff;
  margin: 0;
  padding-bottom: 1rem;
}

/* Slider à droite */
.story-slider-wrapper {
  position: relative;
  flex: 1;
  display: flex;
  align-items: center;
}

.story-slider {
  display: flex;
  overflow-x: auto;
  gap: 24px;
  padding: 10px 0;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
}

/* Flèches de navigation */
.nav-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(255,255,255,0.1);
  border: none;
  color: white;
  font-size: 2em;
  padding: 10px 15px;
  cursor: pointer;
  z-index: 10;
  backdrop-filter: blur(4px);
  border-radius: 10px;
}

.nav-arrow.left {
  left: -10px;
}

.nav-arrow.right {
  right: -10px;
}

/* Cartes */
.story-card {
  flex: 0 0 280px;
  height: 400px;
  border-radius: 20px;
  background-size: cover;
  background-position: center;
  scroll-snap-align: start;
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease;
}

.story-card:hover {
  transform: scale(1.02);
}

.story-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0.1));
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 20px;
}

.story-overlay h3 {
  margin-bottom: 10px;
  font-size: 1.4em;
}

.story-overlay p {
  font-size: 0.95em;
  margin-bottom: 20px;
  color: #ccc;
}

.story-overlay button {
  background-color: #fff;
  color: #111;
  padding: 10px 20px;
  border: none;
  border-radius: 10px;
  font-weight: bold;
  cursor: pointer;
}

.story-card.unavailable {
  opacity: 0.4;
  pointer-events: none;
}

.story-card button:disabled {
  background-color: #333;
  color: #777;
  cursor: not-allowed;
}


</style>
