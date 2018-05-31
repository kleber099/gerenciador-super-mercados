
// initial state
const state = {
    lista: []
};

// getters
const getters = {};

// actions
const actions = {
    adicionarProduto({ commit }, produto) {
        return new Promise((resolve, reject) => {
            axios.post(`/produtos`, produto)
                .then(res => {

                    commit('ADICIONAR_PRODUTO', res.data)
                    return resolve(res);

                }, err => {
                    return reject(err.data);
                });
        });
    },
    listarProdutos({ commit }) {
        axios.get(`/produtos`)
            .then(res => commit('LISTAR_PRODUTO', res.data), err => console.log('erro'));
    },
    removerProduto({commit}, id) {
        axios.delete(`/produtos/${id}`)
            .then(res => commit('REMOVER_PRODUTO', res.data), err => console.log('erro'))
    }
};

// mutations
const mutations = {
    ADICIONAR_PRODUTO(state, produto) {
        state.lista.push(produto);
    },
    LISTAR_PRODUTO(state, produtos) {
        state.lista = produtos;
    },
    REMOVER_PRODUTO(state, produtoRemover) {
        state.lista = state.lista.filter( produto => produto.id !== produtoRemover.id );
    }
}

export default {
    state,
    getters,
    actions,
    mutations
};