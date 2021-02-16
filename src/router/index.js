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
import CreateEvent from "../components/CreateEvent";
import EditEvent from '@/components/EditEvent';
import ShowEvent from '@/components/ShowEvent';


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
      name: "CreateEvent",
      component: CreateEvent
    },
    {
      path: '/edit-event/:id',
      name: 'EditEvent',
      component: EditEvent
    },
    {
      path: '/show-event/:id',
      name: 'ShowEvent',
      component: ShowEvent
    },
  ]
});
