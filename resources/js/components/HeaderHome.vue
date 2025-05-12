<template>
    <header class="header-home">
      <button class="logout-button" @click="logout">Se déconnecter</button>
    </header>
  </template>
  
  <script setup>
  async function logout() {
    try {
      await fetch('/logout', {
        method: 'POST',
        credentials: 'include',
        headers: {
          'Accept': 'application/json',
          'X-CSRF-TOKEN': getCsrfToken()
        }
      })
      window.location.href = '/login'
    } catch (error) {
      console.error('Erreur de déconnexion :', error)
    }
  }
  
  function getCsrfToken() {
    const token = document.querySelector('meta[name="csrf-token"]')
    return token ? token.getAttribute('content') : ''
  }
  </script>
  
  <style scoped>
  .header-home {
    position:absolute;
    top: 0;
    right: 0;
    width: 100%;
    padding: 3rem 3rem;
    display: flex;
    justify-content: flex-end;
    z-index: 1000;
    background: transparent;
  }
  
  .logout-button {
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
  
  .logout-button:hover {
    background-color: rgba(255, 255, 255, 0.15);
  }
  </style>
  