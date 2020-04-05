<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <CadastrarAluguel />
  </div>
</template>

<script>
import CadastrarAluguel from './components/CadastrarAluguel.vue'

export default {
  name: 'App',
  components: {
    CadastrarAluguel
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
  margin-top: 0;
}
img {
    max-width:200px;
    max-height:150px;
    width: auto;
    height: auto;
}
</style>
