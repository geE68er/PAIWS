import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import vuetify from "./plugins/vuetify";
import DatetimePicker from 'vuetify-datetime-picker';
import { domain, clientId } from "../auth_config.json";
import { Auth0Plugin } from "./auth";
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

library.add(fas);
Vue.component("font-awesome-icon", FontAwesomeIcon);
Vue.use(DatetimePicker);
Vue.config.productionTip = false;
Vue.use(BootstrapVue);

Vue.use(Auth0Plugin, {
  domain,
  clientId,
  onRedirectCallback: appState => {
    router.push(
      appState && appState.targetUrl
        ? appState.targetUrl
        : window.location.pathname
    );
  }
});

Vue.config.productionTip = false

new Vue({
  router,
  vuetify,
  render: h => h(App)
}).$mount("#app");
