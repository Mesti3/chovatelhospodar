import Vue from 'vue';
import Router from 'vue-router';
import Welcome from '../views/Welcome';
import About from '../views/About';

Vue.use(Router);


/**
 * Router for Vue app
 */
export default new Router({
  routes: [
    {
      path: '/',
      name: 'Welcome',
      component: Welcome,
    },
    {
      path: '/about/',
      name: 'About',
      component: About,
    },
  ],
});
