import { createApp } from 'vue'
import RegisterValidation from './components/RegisterValidation.vue'

// Vérifie si on est sur la page avec le formulaire d'inscription
const el = document.getElementById('app-register')

if (el) {
  createApp(RegisterValidation).mount(el)
}
