
const Jquery = $ = require('jquery');


// require('bootstrap');

window.Vue = require('vue');


//  Vue.component('thread-view', require('./pages/Thread.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);

const app = new Vue({
    el: '#app'
});
