import { createApp } from 'vue'
import App from './App.vue'
import RegisterValidation from './components/RegisterValidation.vue'
import LoginValidation from './components/LoginValidation.vue'


const elRegister = document.getElementById('app-register')
if (elRegister) {
  createApp(RegisterValidation).mount(elRegister)
}

const elLogin = document.getElementById('app-login')
if (elLogin) {
  createApp(LoginValidation).mount(elLogin)
}

const elHome = document.getElementById('home-vue') 
if (elHome) {
  createApp(Home).mount(elHome)
}

const elApp = document.getElementById('app')
if (elApp) {
  createApp(App).mount(elApp)
}
