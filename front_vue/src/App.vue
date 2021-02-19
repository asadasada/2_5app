<template>
  <div id="app">
<Navigation />
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <router-view />
    </div>
  </div>
</div>
</div>
</template>

<script>
import Navigation from './components/Navigation.vue'

export default {
  name: 'App',
  components: {
    Navigation
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0px;
}
</style>
