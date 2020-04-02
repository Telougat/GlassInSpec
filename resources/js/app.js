require('./bootstrap');


window.Vue = require('vue');

//Vue.component('example-component', require('./components/ExempleComponent.vue').default);
//Exemple d'importation de composants. Uniquement requis pour les composants globaux.

Vue.component('comptes', require('../components/comptes.vue').default);

const app = new Vue({
    el: '#app'
});

console.log(app);
