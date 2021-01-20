import Vue from "vue";
import Router from "vue-router";
import Homepage from "../components/Homepage";
import Account from "../components/Account";
import Contact from "../components/Contact";
import Friends from "../components/Friends";
import Login from "../components/Login";
import Register from "../components/Register";

Vue.use(Router);

export default new Router({
  routes: [
    {
      path: "/",
      name: "Homepage",
      component: Homepage
    },
    {
      path: "/friends",
      name: "Friends",
      component: Friends
    },
    {
      path: "/contact",
      name: "Contact",
      component: Contact
    },
    {
      path: "/account",
      name: "Account",
      component: Account
    },
    {
      path: "/login",
      name: "Login",
      component: Login
    },
    {
      path: "/register",
      name: "Register",
      component: Register
    }
  ]
});
