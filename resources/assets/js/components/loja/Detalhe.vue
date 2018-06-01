<template>
    <div class="card">
        <div class="card-header">
            Detalhes {{ loja.nome }}
        </div>
        <div class="card-body">
            <produtos :loja_id="id" :produtos_loja="loja.produtos"></produtos>
        </div>
    </div>
</template>
<script>
import Produtos from './produtos/Lista.vue';

export default {
    props: ["id"],

    components: { Produtos },

    computed: {
        loja() {
            return this.$store.state.lojas.loja;
        },
        /*nome() {
            return this.loja? this.loja.nome : "";
        },
        produtos() {
            return this.loja? this.loja.produtos : [];
        }*/

    },

    created() {
        this.$store.dispatch('retornar', this.id);
    }
}
</script>