<template>
  <div class="form-container">
    <h2>Inscription</h2>

    <form @submit.prevent="handleSubmit" novalidate>
      <!-- Champ Nom -->
      <div class="mb-3">
        <input
          v-model="form.name"
          name="name"
          placeholder="Nom"
          class="form-control"
          @blur="validateField('name')"
          :class="{ 'is-invalid': errors.name }"
        />
        <div v-if="errors.name" class="invalid-feedback">{{ errors.name }}</div>
      </div>

      <!-- Champ Email -->
      <div class="mb-3">
        <input
          v-model="form.email"
          name="email"
          type="email"
          placeholder="Email"
          class="form-control"
          @blur="validateField('email')"
          :class="{ 'is-invalid': errors.email }"
        />
        <div v-if="errors.email" class="invalid-feedback">{{ errors.email }}</div>
      </div>

      <!-- Champ Mot de passe -->
      <div class="mb-3">
        <input
          v-model="form.password"
          name="password"
          type="password"
          placeholder="Mot de passe (8 caractères min)"
          class="form-control"
          @blur="validateField('password')"
          :class="{ 'is-invalid': errors.password }"
        />
        <div v-if="errors.password" class="invalid-feedback">{{ errors.password }}</div>
      </div>

      <!-- Champ Confirmation du mot de passe -->
      <div class="mb-3">
        <input
          v-model="form.password_confirmation"
          name="password_confirmation"
          type="password"
          placeholder="Confirmer le mot de passe"
          class="form-control"
          @blur="validateField('password_confirmation')"
          :class="{ 'is-invalid': errors.password_confirmation }"
        />
        <div v-if="errors.password_confirmation" class="invalid-feedback">{{ errors.password_confirmation }}</div>
      </div>

      <button :disabled="hasErrors" type="submit" class="btn btn-primary">
        S'inscrire
      </button>
    </form>
    <div class="text-center mt-4">
        <p>Déjà inscrit ?</p>
        <a href="/login" class="btn btn-outline-secondary">Se connecter</a>
      </div>
  </div>
</template>

<script setup>
import { reactive, computed } from 'vue'

// Données du formulaire
const form = reactive({
  name: '',
  email: '',
  password: '',
  password_confirmation: ''
})

// Messages d'erreur côté frontend
const errors = reactive({
  name: '',
  email: '',
  password: '',
  password_confirmation: ''
})

// CSRF token
const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''

// Validation locale champ par champ
function validateField(field) {
  switch (field) {
    case 'name':
      errors.name = form.name.trim().length < 2 ? 'Le nom doit contenir au moins 2 caractères.' : ''
      break
    case 'email':
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      errors.email = !emailRegex.test(form.email) ? 'Adresse email invalide.' : ''
      break
    case 'password':
      errors.password = form.password.length < 8 ? 'Le mot de passe doit contenir au moins 8 caractères.' : ''
      break
    case 'password_confirmation':
      errors.password_confirmation =
        form.password !== form.password_confirmation
          ? 'Les mots de passe ne correspondent pas.'
          : ''
      break
  }
}

// Validation complète avant envoi
function validateAll() {
  validateField('name')
  validateField('email')
  validateField('password')
  validateField('password_confirmation')
}

// Détection d'erreurs locales
const hasErrors = computed(() => {
  return Object.values(errors).some(e => e !== '')
})

// Soumission via fetch
async function handleSubmit() {
  validateAll()

  if (!hasErrors.value) {
    try {
      const response = await fetch('/register', {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrfToken
        },
        credentials: 'include',
        body: JSON.stringify(form)
      })

      if (!response.ok) {
        if (response.status === 422) {
          const data = await response.json()
          // fusionner erreurs Laravel dans errors Vue
          for (const [key, messages] of Object.entries(data.errors)) {
            errors[key] = messages[0] // on prend juste le premier message
          }
          return
        }
        throw new Error('Erreur lors de l’inscription.')
      }

      // ✅ Succès ➔ rediriger vers /
      window.location.href = '/'
    } catch (error) {
      console.error('🚨 Erreur inscription:', error)
      alert('Une erreur est survenue.')
    }
  }
}
</script>

<style scoped>
.form-container {
  max-width: 400px;
  margin: 60px auto;
  background: #fff;
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
</style>
