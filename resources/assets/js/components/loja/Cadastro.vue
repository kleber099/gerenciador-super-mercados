<template>
    <div class="card">
        <div class="card-header">
            Cadastro de Loja
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Nome" v-model="nome">
            </div>
            <button type="submit" class="btn btn-primary" @click="cadastrar">Cadastrar</button>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            nome: ''
        }
    },

    methods: {
        cadastrar() {
            this.$store.dispatch('adicionar', { nome: this.nome })
                .then(res => this.nome = '',
                    err => console.log('erro')
                )
        }
    }
}
</script>