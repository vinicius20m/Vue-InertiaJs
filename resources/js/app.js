import Vue from 'vue'
import Layout from './Pages/Layout'
import Alert from './components/alert'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue'
import "../css/app.css" ;

Vue.component('Alert', Alert)
Vue.component('Link', Link)
Vue.component('Layout', Layout)
Vue.component('Head', Head)

createInertiaApp({
  // resolve: name => import(`./Pages/${name}`),//using the "import" instead of "require", inertia render only the specified page
  resolve: name => require(`./Pages/${name}`),  //using the "require", inertia render all the pages and make them ready to use
  setup({ el, App, props, plugin }) {
    Vue.use(plugin)

    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },
})