<template>
    <div class="form-container">
      <h2>Connexion</h2>
  
      <form @submit.prevent="handleSubmit" novalidate>
        <!-- Champ Email -->
        <div class="mb-3">
          <input
            v-model="form.email"
            type="email"
            placeholder="Email"
            class="form-control"
            @blur="validateEmail"
            :class="{ 'is-invalid': errors.email }"
          />
          <div v-if="errors.email" class="invalid-feedback">{{ errors.email }}</div>
        </div>
  
        <!-- Champ Mot de passe -->
        <div class="mb-3">
          <input
            v-model="form.password"
            type="password"
            placeholder="Mot de passe"
            class="form-control"
            @blur="validatePassword"
            :class="{ 'is-invalid': errors.password }"
          />
          <div v-if="errors.password" class="invalid-feedback">{{ errors.password }}</div>
        </div>
  
        <button :disabled="hasErrors" class="btn btn-primary" type="submit">
          Se connecter
        </button>
      </form>
  
      <div class="text-center mt-4">
        <p>Pas encore de compte ?</p>
        <a href="/register" class="btn btn-outline-secondary">Créer un compte</a>
      </div>
    </div>
    <div class="logo-container">
      <img :src="logoPath" alt="Diverge" class="logo" />
    </div>
  </template>
  
  <script setup>
  import { reactive, computed } from 'vue'
  const logoPath = '/img/logo-diverge-white.png'
  // Données du formulaire
  const form = reactive({
    email: '',
    password: ''
  })
  
  // Erreurs
  const errors = reactive({
    email: '',
    password: ''
  })
  
  // CSRF token
  const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
  
  // Validation Email
  function validateEmail() {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    errors.email = !emailRegex.test(form.email) ? 'Adresse email invalide.' : ''
  }
  
  // Validation Password
  function validatePassword() {
    errors.password = form.password.length < 8 ? 'Le mot de passe doit contenir au moins 8 caractères.' : ''
  }
  
  // Validation globale
  function validateAll() {
    validateEmail()
    validatePassword()
  }
  
  // Y a-t-il des erreurs ?
  const hasErrors = computed(() => {
    return Object.values(errors).some(e => e !== '')
  })
  
  // Soumission via fetch
  async function handleSubmit() {
    validateAll()
  
    if (!hasErrors.value) {
      try {
        const response = await fetch('/login', {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
          },
          credentials: 'include',
          body: JSON.stringify({
            email: form.email,
            password: form.password
          })
        })
  
        if (!response.ok) {
          if (response.status === 422) {
            const data = await response.json()
            if (data.errors) {
              if (data.errors.email) errors.email = data.errors.email[0]
              if (data.errors.password) errors.password = data.errors.password[0]
            }
            return
          }
          throw new Error('Erreur lors de la connexion.')
        }
  
        // ✅ Succès : rediriger vers /
        window.location.href = '/'
      } catch (error) {
        console.error(' Erreur connexion:', error)
        alert('Erreur lors de la connexion.')
      }
    }
  }
  </script>
  
  <style scoped>
  .form-container {
    max-width: 400px;
    margin:  auto;
    background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(6px);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }
  
  input {
    width: 100%;
    padding: 12px;
    font-size: 1em;
    margin-top: 5px;
    border-radius: 8px;
    border: 1px solid #ccc;
  }
  
  input.is-invalid {
    border-color: #e3342f;
  }
  
  .invalid-feedback {
    color: #e3342f;
    font-size: 0.9em;
    margin-top: 5px;
  }
  
  button {
    width: 100%;
    background-color: black;
    border: none;
    padding: 12px;
    color: white;
    font-size: 1em;
    border-radius: 8px;
    margin-top: 10px;
    transition: background-color 0.3s ease;
  }
  
  button:hover:enabled {
    background-color: #424448;
  }
  
  button:disabled {
    background-color: #cccccc;
    cursor: not-allowed;
  }

  .logo-container {
    display: flex;
    scale: 0.3;
    justify-content: center;
    margin-top: -10rem;
    
  }



  
  </style>
  