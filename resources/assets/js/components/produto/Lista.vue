<template>
    <div class="card">
        <div class="card-header">
            Lista de Produtos
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(produto, index) in produtos">
                    <th scope="row">{{ index + 1 }}</th>
                    <td>{{ produto.nome }}</td>
                    <td>{{ produto.codigo }}</td>
                    <td>
                        <remover :id="produto.id"></remover>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
import Remover from './Remover.vue';

export default {
    components: { Remover },

    computed: {
        produtos() {
            return this.$store.state.produtos.lista;
        }
    },

    created() {
        this.$store.dispatch('listarProdutos');
    }

}
</script>