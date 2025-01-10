<template>
    <div>
      <h1>Your Posts</h1>
      <inertia-link href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</inertia-link>
      <ul>
        <li v-for="post in posts" :key="post.id">
          <h3>{{ post.title }}</h3>
          <p>{{ post.content }}</p>
          <inertia-link :href="'/posts/' + post.id + '/edit'" class="btn btn-warning">Edit</inertia-link>
          <form :action="'/posts/' + post.id" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      posts: Array,
    },
  };
  </script>
  