require('./bootstrap');
const vuetify = require("./plugins/vuetify");

window.Vue = require('vue').default;

Vue.component('form-register', require('./components/FormRegister.vue').default);
Vue.component('clients-list', require('./components/ClientsList.vue').default);

const app = new Vue({
    vuetify,
}).$mount('#app')
