require('./bootstrap');

window.Vue = require('vue');



// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('create-categoria', require('./components/CreateCategoriaComponent.vue').default);
Vue.component('base-footer', require('./components/FooterComponent.vue').default);

const app = new Vue({
    el: '#app',
});
