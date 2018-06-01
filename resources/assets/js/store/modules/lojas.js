
// initial state
const state = {
    lista: [],
    loja: {}
};

// getters
const getters = {};

// actions
const actions = {
    adicionar({ commit }, loja) {
        return new Promise((resolve, reject) => {
            axios.post(`/lojas`, loja)
                .then(res => {

                    commit('ADICIONAR', res.data)
                    return resolve(res);

                }, err => {
                    return reject(err.data);
                });
        });
    },
    listar({ commit }) {
        axios.get(`/lojas`)
            .then(res => commit('LISTAR', res.data), err => console.log('erro'));
    },
    remover({commit}, id) {
        axios.delete(`/lojas/${id}`)
            .then(res => commit('REMOVER', res.data), err => console.log('erro'))
    },
    retornar({commit}, id) {
        axios.get(`/lojas/${id}`).
            then( res => commit('RETORNAR', res.data), err => console.log('erro'));
    }
};

// mutations
const mutations = {
    ADICIONAR(state, loja) {
        state.lista.push(loja);
    },
    LISTAR(state, lojas) {
        state.lista = lojas;
    },
    REMOVER(state, lojaRemover) {
        state.lista = state.lista.filter( loja => loja.id !== lojaRemover.id );
    },
    RETORNAR(state, loja) {
        state.loja = loja;
    }

}

export default {
    state,
    getters,
    actions,
    mutations
};