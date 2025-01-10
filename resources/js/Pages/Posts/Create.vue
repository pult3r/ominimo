<template>
    <div>
      <h1>Create Post</h1>
      <form @submit.prevent="submitForm">
        <div>
          <label for="title">Title</label>
          <input type="text" v-model="form.title" id="title" required />
        </div>
        <div>
          <label for="content">Content</label>
          <textarea v-model="form.content" id="content" required></textarea>
        </div>
        <button type="submit">Save Post</button>
      </form>
    </div>
  </template>
  
  <script>
  import { Inertia } from '@inertiajs/inertia';
  
  export default {
    data() {
      return {
        form: {
          title: '',
          content: '',
        },
      };
    },
    methods: {
      submitForm() {
        Inertia.post('/posts', this.form);
      },
    },
  };
  </script>
  