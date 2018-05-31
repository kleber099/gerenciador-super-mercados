<template>
    <div>
        <div class="form-check form-check-inline" v-for="produto in produtos">
            <item :produto="produto" :loja_id="loja_id" :check="check_array(produto.id)"></item>
        </div>
    </div>
</template>
<script>

import Item from './Item.vue';

export default {
    props: ["loja_id", "produtos_loja"],

    components: { Item },

    data() {
        return {
            produtos: [],
        }

    },

    created() {
        axios.get(`/produtos`).
            then(resp => this.produtos = resp.data);

    },

    methods: {
        check_array(id) {
            const retorno =  this.produtos_loja.find(produto => produto.id == id);

            if(retorno) {
                return true;
            }

            return false;
        }

    }


}
</script>