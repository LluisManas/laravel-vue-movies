require('./bootstrap');

import Vue from 'vue';
import store from './store/index';
import appcomponent from './components/App.vue';

const app = new Vue({
    el: '#app',
    store,
    components: {
        appcomponent
    }
});