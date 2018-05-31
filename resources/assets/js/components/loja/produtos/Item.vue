<template>
    <div>
        <input class="form-check-input" type="checkbox" :checked="check" :value="produto.id" @click="alterar">
        <label class="form-check-label">{{ produto.nome }}</label>
    </div>
</template>
<script>
export default {
    props: ["produto", "loja_id", "check"],

    methods: {
        alterar(e){
            if(e.target.checked) {
                axios.post('/lojas/vincular-produto', {loja_id: this.loja_id, produto_id: this.produto.id});
            } else {
                axios.post('/lojas/desvincular-produto', {loja_id: this.loja_id, produto_id: this.produto.id});
            }
        }
    }
}
</script>