<template>
    <div class="end-wrapper">
      <div class="end-card">
        <h1>Game Over</h1>
        <p>Vous êtes mort avant de résoudre l’affaire.<br />Le tueur court toujours...</p>
        <button @click="$emit('restart')">Recommencer l’enquête</button>
      </div>
    </div>
  </template>
  
  <script setup>
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
    background: rgba(255, 255, 255, 0.04);
    backdrop-filter: blur(8px);
    border-radius: 24px;
    padding: 50px 40px;
    max-width: 600px;
    width: 100%;
    text-align: center;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
  }
  
  h1 {
    font-size: 3em;
    color: #ffffff;
    margin-bottom: 20px;
    font-weight: bold;
  }
  
  p {
    font-size: 1.2em;
    color: #ccc;
    margin-bottom: 30px;
    line-height: 1.6;
  }
  
  button {
    background-color: rgba(255, 255, 255, 0.05);
    border: none;
    padding: 14px 28px;
    font-size: 1.1em;
    color: #fff;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
    backdrop-filter: blur(4px);
  }
  
  
  button:hover {
    background-color: rgba(255, 255, 255, 0.15);
  }
  </style>
  