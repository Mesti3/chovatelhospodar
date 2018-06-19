import Vue from 'vue';
import App from './App';
import router from './router';
import VueMeta from 'vue-meta'
import VueResource from 'vue-resource';

/**
 * Custom global variables
 */
Vue.prototype.$apiUrl = 'http://localhost/api';     // e.g url to Nette app running in Docker


/**
 * Init Vue plugins
 */
Vue.use(VueMeta);         // Meta tag manager plugin
Vue.use(VueResource);     // Http client for Vue


/**
 * Start Vue app instance
 */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>',
});
