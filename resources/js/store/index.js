import Vue from 'vue';
import Vuex from 'vuex';
import popularMovies from './popularMovies';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        popularMovies
    }
})