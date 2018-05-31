<template>
    <div class="card">
        <div class="card-header">
            Cadastro de Produto
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Nome" v-model="nome">
            </div>

            <div class="form-group">
                <label for="codigo">codigo</label>
                <input type="text" class="form-control" id="codigo" aria-describedby="codigoHelp" placeholder="Codigo" v-model="codigo">
            </div>
            <button type="submit" class="btn btn-primary" @click="cadastrar">Cadastrar</button>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            nome: '',
            codigo: ''
        }
    },

    methods: {
        cadastrar() {
            this.$store.dispatch('adicionarProduto', { nome: this.nome, codigo: this.codigo })
                .then(res => {
                    this.nome = '';
                    this.codigo = '';
                },
                    err => console.log('erro')
                )
        }
    }
}
</script>