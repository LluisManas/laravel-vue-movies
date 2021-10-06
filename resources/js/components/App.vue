<template>
  <div>
    <p>app comoponent</p>
    <movies></movies>
  </div>
</template>

<script>
import movies from "./movies/MoviesComponent.vue";

export default {
  name: "appcomponent",
  components: {
    movies,
  },
};
</script>
