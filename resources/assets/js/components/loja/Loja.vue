<template>
 <div>
  <cadastro></cadastro>
  <lista></lista>
 </div>
</template>
<script>
 import Cadastro from './Cadastro.vue';
 import Lista from './Lista.vue';
 export default {
     components: {
         Cadastro,
         Lista
     }
 }
</script>