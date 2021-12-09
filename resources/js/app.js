require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('form-register', require('./components/formRegister.vue').default);
Vue.component('contact-form', require('./components/ContactForm.vue').default);

const app = new Vue({
    el: '#app',
});
