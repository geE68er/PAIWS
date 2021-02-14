<template>
  <v-app>
    <v-navigation-drawer v-model="sidebar" app>
        <v-btn block text x-large :key="'/events'" :to="'/events'"><v-icon>mdi-calendar</v-icon>Events</v-btn>
        <v-btn block text x-large :key="'/account'" :to="'/account'"><v-icon>mdi-account</v-icon>Account</v-btn>
        <v-btn block text x-large :key="'/login'" :to="'/login'"><v-icon>mdi-login</v-icon>Login</v-btn>
        <v-btn block text x-large :key="'/logout'" :to="'/logout'"><v-icon>mdi-logout</v-icon>Logout</v-btn>
    </v-navigation-drawer>

    <v-toolbar app id="navigation">
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
        <v-btn depressed text x-large :key="'/events'" :to="'/events'"><v-icon>mdi-calendar</v-icon>Events</v-btn>
        <v-btn depressed text x-large :key="'/account'" :to="'/account'"><v-icon>mdi-account</v-icon>Account</v-btn>
        <div v-if="!$auth.loading">
          <v-btn v-if="!$auth.isAuthenticated" depressed text x-large :key="'/login'" :to="'/login'" ><v-icon>mdi-login</v-icon>Login</v-btn>
          <v-btn v-if="$auth.isAuthenticated" depressed text x-large :key="'/logout'" :to="'/logout'"><v-icon>mdi-logout</v-icon>Logout</v-btn>
        </div>
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
    }
  },

  methods: {
    // Log the user in
    login() {
      this.$auth.loginWithRedirect();
    },
    // Log the user out
    logout() {
      this.$auth.logout({
        returnTo: window.location.origin
      });
    }
}
}
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

  #navigation {
    height: 100px;
  }

  .logo {
    margin-top: 5%;
    margin-bottom: 5%;
    width: 50%;
  }
</style>