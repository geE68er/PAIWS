<template>
  <v-app>
    <v-navigation-drawer v-model="sidebar" app>
      <v-btn
          text
          block
          x-large
          v-for="item in menuItems"
          :key="item.path"
          :to="item.path">
          <v-icon left dark>{{ item.icon }}</v-icon>
          {{item.title}}
        </v-btn>
    </v-navigation-drawer>

    <v-toolbar app>
      <span class="hidden-sm-and-up">
        <v-app-bar-nav-icon @click="sidebar = !sidebar">
        </v-app-bar-nav-icon>
      </span>
      <v-toolbar-title>
        <router-link to="/" tag="span" style="cursor:pointer">
          <v-img :src="require('../public/Logo.png')" class="logo"/>
        </router-link>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-xs-only">
        <v-btn
          depressed
          text
          x-large
          v-for="item in menuItems"
          :key="item.path"
          :to="item.path">
          <v-icon left dark>{{ item.icon }}</v-icon>
          {{item.title}}
        </v-btn>
      </v-toolbar-items>  
    </v-toolbar>

    <v-main class="main">
      
      <router-view class="frame"/>
      <Footer class="footer"/>
    </v-main>
    
    
  </v-app>
</template>

<script>
import Footer from './components/Footer';

export default {
  name: 'App',

  components: {
    Footer,
  },

  data() {
    return {
      sidebar: false,
      menuItems: [
        {title: 'Events', path: '/events', icon: 'mdi-calendar'},
        {title: 'Account', path: '/account', icon: 'mdi-account'},
        {title: 'Login', path: '/login', icon: 'mdi-login'},
      ]
    }
  },
};
</script>

<style>
  .footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 7rem;
  }
  
  .main {
    background-image: url("../src/assets/background.jpg");
    position: relative;
    min-height: 90vh;
    width: 100vw;
  }

  .frame {
    padding-bottom: 7rem;
    max-width: 80%;
    margin: 0 auto;
    margin-top: 5%;
  }

  .toolbar {
    height: 5vh;
  }

  .logo {
    margin-top: 35px;
    margin-bottom: 20px;
    width: 60%;
    height: auto;
  }
</style>