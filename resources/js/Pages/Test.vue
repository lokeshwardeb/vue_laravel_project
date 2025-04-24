<template>
    <div>
      <h1>User: {{ user }}</h1>
    </div>
  </template>
  
  <script setup>
  defineProps({
    user: String
  });
  </script>
  