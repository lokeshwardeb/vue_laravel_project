<template>
    <div>
      <h1>User: {{ user }}</h1>
    </div>
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  export default {
    props: {
      user: String,
    },
    setup(props) {
      return { user: props.user };
    },
  };
  </script>
  