<template>
    <div class="card">
        <div class="card-header">
            Lista de Lojas
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(loja, index) in lojas">
                    <th scope="row">{{ index + 1 }}</th>
                    <td>{{ loja.nome }}</td>
                    <td>
                        <a :href="`/lojas/detalhes/${loja.id}`">
                            <i class="fas fa-eye"></i>
                        </a>
                        <remover :id="loja.id"></remover>
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
        lojas() {
            return this.$store.state.lojas.lista;
        }
    },

    created() {
        this.$store.dispatch('listar');
    }

}
</script>