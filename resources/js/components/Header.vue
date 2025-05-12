<template>
  <header class="chapter-header">
    <h1 class="story-title">Dernier Appel</h1>

    <div class="actions">
      <button @click="goHome">Retour aux histoires</button>
      <button @click="logout">Se déconnecter</button>
    </div>
  </header>
</template>

<script setup>
function goHome() {
  window.location.href = '/'
}

async function logout() {
  try {
    await fetch('http://localhost:8000/logout', {
      method: 'POST',
      credentials: 'include',
      headers: {
        'Accept': 'application/json',
        'X-CSRF-TOKEN': getCsrfToken(),
      }
    })
    window.location.href = '/login'
  } catch (error) {
    console.error('Erreur de déconnexion:', error)
  }
}

function getCsrfToken() {
  const token = document.querySelector('meta[name="csrf-token"]')
  return token ? token.getAttribute('content') : ''
}
</script>

<style scoped>
.chapter-header {
  position: fixed;
  top: 0;
  width: 100%;
  padding: 20px 2rem;
  background: transparent;
  backdrop-filter: blur(6px);
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 1000;
}

.story-title {
  font-size: 2rem;
  color: #fff;
  margin: 0;
  font-weight: 600;
}

.actions {
  display: flex;
  padding-right: 4rem;
  gap: 12px;
}

.actions button {
  background-color: rgba(255, 255, 255, 0.05);
    border: none;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-size: 1em;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
    backdrop-filter: blur(4px);
}

.actions button:hover {
  background-color: rgba(255, 255, 255, 0.15);
}
</style>
