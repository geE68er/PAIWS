<template>
  <div id="app">
    <navbar class="navbar" />
    <div id="content">
      <router-view />
    </div>
    <footer id="footer">
      Copyright &copy; Gehrlein, Großmann, Kahl, Omerbegovic, Steckelbroeck
    </footer>
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue'
export default {
  components: { Navbar },
  name: 'app'
}
</script>

<style>

  #app {
    font-family: "Helvetica", sans-serif;
    position: relative;
    min-height: 100vh;
    cursor: default;
  }

  #footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 2rem;
    background-color: darkgray;
    padding-top: 0.5rem;
    text-align: center;
  }

  #content {
    padding-bottom: 2rem;
    max-width: 70%;
    margin: auto;
    text-align: left;
  }
  
  
</style>
