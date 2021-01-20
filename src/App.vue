<template>
  <v-app>
    <v-navigation-drawer v-model="sidebar" app>
      <v-list>
        <v-list-tile
          v-for="item in menuItems"
          :key="item.title"
          :to="item.path">
          <v-list-tile-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>{{ item.title }}</v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>

    <v-toolbar app>
      <span class="hidden-sm-and-up">
        <v-app-bar-nav-icon @click="sidebar = !sidebar">
        </v-app-bar-nav-icon>
      </span>
      <v-toolbar-title>
        <router-link to="/" tag="span" style="cursor:pointer">
          {{appTitle}}
        </router-link>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-xs-only">
        <v-btn
          flat
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
      appTitle: 'Goethe Social',
      sidebar: false,
      menuItems: [
        {title: 'Account', path: '/account', icon: 'mdi-account'},
        {title: 'Events', path: '/events', icon: 'mdi-calendar'},
        {title: 'Login', path: '/login', icon: 'mdi-login'},
        {title: 'Register', path: '/register', icon: 'mdi-account-plus'},
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
</style>