<template>
  <div>
    <popularmovies></popularmovies>
  </div>
</template>

<script>
import popularmovies from "./PopularMoviesComponent.vue";
export default {
  name: "movies",
  components: {
    popularmovies,
  },
};
</script>

<style scoped>
</style>