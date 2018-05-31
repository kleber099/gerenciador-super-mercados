import Vue from 'vue';
import Vuex from 'vuex';

import lojas from './modules/lojas';
import produtos from './modules/produtos';

Vue.use(Vuex);

const store = new Vuex.Store({
    modules: {
        lojas,
        produtos
    }
});

export default store;