# 🧩 Projet "Dernier Appel" – Application narrative interactive

Bienvenue dans ce projet d'application web narrative interactive développée avec **Laravel (backend API)** et **Vue 3 (frontend SPA)**.

---

## 🚀 Fonctionnalités

- Application à choix multiples avec chapitres interactifs
- Progression sauvegardée dans le `localStorage`
- Affichage de fin (victoire ou défaite)
- Authentification des utilisateurs (via Laravel)
- Validation de formulaire côté client
- API RESTful sécurisée
- Design immersif et responsive

---

## 🧱 Stack technique

- **Frontend** : Vue 3 + Vite + Composition API
- **Backend** : Laravel 10 (API REST)
- **Base de données** : MySQL ou SQLite
- **Auth** : Laravel session ou Sanctum
- **Style** : CSS personnalisé + animations

---

## ⚙️ Prérequis

- PHP >= 8.1
- Composer
- Node.js >= 18
- npm ou pnpm
- MySQL ou SQLite
- Git

---

# Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/ton-utilisateur/dernier-appel.git
```
## Installation du backend Laravel
### Aller dans le dossier du projet
```bash
cd dernierAppel
```

### Installer les dépendances PHP
```bash
composer install
```

### Copier et configurer le fichier d'environnement
```bash
cp .env.example .env
php artisan key:generate
```


### Lancer les migrations
```bash
php artisan migrate --seed
```


## Installation du frontend Vue 3
### Aller dans le dossier du projet
```bash
cd dernierAppel
```

### Installer les dépendances JS
```bash
npm install
```
## Lancer l'application

1.1 **Démarrer le back-end**  
   ```bash
   php artisan serve
   ```  

1.2 **Démarrer le front-end**  
   ```bash
   cd dernierAppel
   npm run serve
   ```  

2.0 **Démarrer le front-end et le back-end**  
   ```bash
   cd dernierAppel
   composer run dev
   ```  
   Application disponible sur :  http://localhost:8000


## Tester l'application

1. Inscrivez-vous ou connectez-vous pour débuter votre expérience.

2. Plongez dans l’histoire de votre choix en cliquant sur "commencer".

3. Faites vos choix et voyez comment ils influencent le cours de l'histoire.

# 🤝 Contribution

Ce projet est en constante évolution, et nous sommes ouverts à toutes les suggestions pour l’améliorer.  
Que ce soit pour corriger un bug, proposer une nouvelle fonctionnalité, améliorer l'expérience utilisateur ou optimiser le code : **toutes les idées sont les bienvenues**.

N’hésitez pas à ouvrir une *issue* pour partager vos remarques, ou à proposer une *pull request* si vous souhaitez contribuer directement au code.

👉 Ensemble, faisons de ce projet une expérience encore plus immersive !
