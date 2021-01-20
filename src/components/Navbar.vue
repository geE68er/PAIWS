<template>
  <div id="navigation">
    <ul>
      <li>
        <router-link to="/" tag="li"
          ><font-awesome-icon :icon="['fas', 'home']" />Home</router-link
        >
      </li>
      <li>
        <router-link to="friends" tag="li"
          ><font-awesome-icon :icon="['fas', 'users']" />Friends</router-link
        >
      </li>
      <li>
        <router-link to="account" tag="li"
          ><font-awesome-icon
            :icon="['fas', 'user-circle']"
          />Account</router-link
        >
      </li>
      <li>
        <router-link to="contact" tag="li"
          ><font-awesome-icon
            :icon="['fas', 'phone-alt']"
          />Contact</router-link
        >
      </li>
      <li><search /></li>
      <li>
        <button id="register">
          <router-link to="register" tag="li_register"
            >Registrieren</router-link
          >
        </button>
      </li>
      <li>
        <button id="login">
          <router-link to="login" tag="li_login">Anmelden</router-link>
        </button>
      </li>
    </ul>
  </div>
</template>

<script>
import Search from "./Search.vue";
export default {
  components: { Search }
};
</script>
<style>
#navigation {
  font-size: 30px;
  display: flex;
  width: 100%;
  margin-bottom: 50px;
}

#navigation ul {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0 20px 0 0;
}

li {
  font-size: 2rem;
  padding: 10px 25px 10px 10px;
  text-decoration: none;
}

.search {
  position: relative;
  width: 100%;
  max-width: 400px;
  padding-left: 80px;
}

.search input {
  border: none;
  outline: none;
  width: calc(100% - 80px);
  padding: 15px 60px 15px 20px;
  margin: 0;
  border-radius: 20px;
  background-color: #efefef;
  font-family: "Segoe UI", Tahoma;
  font-size: 1rem;
}

.search button {
  position: absolute;
  font-size: 20px;
  margin-right: 30px;
  padding: 15px 15px;
  margin-left: 5px;
  border: none;
  background-color: #ffffff;
}

#register {
  margin-left: 350px;
  background-color: chartreuse;
  border-radius: 10px;
  font-size: 1.2rem;
  text-decoration: none;
  font-weight: bold;
}

#login {
  background-color: rgb(224, 26, 12);
  border-radius: 10px;
  font-size: 1.2rem;
  font-weight: bold;
}
</style>
