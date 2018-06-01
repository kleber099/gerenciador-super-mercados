<template>
    <a href="#" @click="remover">
        <i class="fas fa-times"></i>
    </a>
</template>

<script>
export default {

    props: ["id"],

    methods: {
        remover() {
            this.$store.dispatch('removerProduto', this.id);
        }
    }
}
</script>