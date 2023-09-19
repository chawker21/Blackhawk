require('./bootstrap');


import { createApp } from 'vue'

// Bootstrap
//import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
//import 'bootstrap/dist/css/bootstrap.css'
//import 'bootstrap-vue/dist/bootstrap-vue.css'
//Vue.use(BootstrapVue)
//Vue.use(IconsPlugin)

//Components
import test from './components/test.vue';
import basiccard from './components/basiccard.vue'
import primarybutton from './components/primarybutton.vue'
import ahref from './components/ahref.vue'
import weather from './components/weather.vue'
import coinbase from './components/coinbase.vue'
import coinbaseauth from './components/coinbaseauth.vue'
const app = createApp({});

app.component('test', test);
app.component('basiccard', basiccard);
app.component('primarybutton', primarybutton);
app.component('ahref', ahref);
app.component('weather', weather);
app.component('coinbase', coinbase);
app.component('coinbaseauth', coinbaseauth);
app.component('p5js', require('./components/p5js.vue'));
app.component('time_distortion', require('./components/time_distortion.vue'));
app.mount('#app');


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


