import Vue from "vue";
import Router from "vue-router";
import Homepage from "../components/Homepage";
import Account from "../components/Account";
import Contact from "../components/Contact";
import Login from "../components/Login";
import Register from "../components/Register";
import About from "../components/About";
import Impressum from "../components/Impressum";
import Events from "../components/Events";
import Createevent from "../components/Createevent";


Vue.use(Router);

export default new Router({
  routes: [
    {
      path: "/",
      name: "Homepage",
      component: Homepage
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
    },
    {
      path: "/about",
      name: "About",
      component: About
    },
    {
      path: "/impressum",
      name: "Impressum",
      component: Impressum
    },
    {
      path: "/events",
      name: "Events",
      component: Events
    },
    {
      path: "/createevent",
      name: "Createevent",
      component: Createevent
    }
  ]
});
