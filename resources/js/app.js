/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.store = require('vuex');

import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('nav-gen-asis-component', require('./components/NavGenerarAsistenciaCursoComponent.vue').default); 
Vue.component('marcar-asistencia-component', require('./components/MarcarAsistenciaCursoComponent.vue').default); 
Vue.component('generar-asistencia-alumno-component', require('./components/GenerarAsistenciaAlumnoCursoComponent.vue').default); 

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import Vuex from 'vuex';

const store = new Vuex.Store({
    state: {
        menu: 0,
        cursos: [],
        codigo: ''
    },
    mutations: {
        increment(state) {
            state.count++
        },
        incrementBy(state, payload) {
            state.count += payload.amount
        }
    }
});
import { mapState, mapMutations } from 'vuex';
const app = new Vue({
    el: '#app',
    store:store,
    data: {
        menuCurso : 0
    },
    computed: mapState([
        'count'
    ]),
    methods: mapMutations([
        'increment',
        'incrementBy'
    ])
});

