<template>
  <div>
    <h1>Movie Cart</h1>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ movie.title }}</h5>
        <p class="card-text">{{ movie.overview }}</p>
        <p></p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "moviecart",
  props: ["movie"],
};
</script>

<style scoped>
</style>