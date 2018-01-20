require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy'

Vue.use(Buefy);

//Vue.component('example-component', require('./components/ExampleComponent.vue'));


const app = new Vue({
    el: '#app'
});
