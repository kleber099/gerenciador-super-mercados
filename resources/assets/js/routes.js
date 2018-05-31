import Loja from './components/loja/Loja.vue';
import Produto from './components/produto/Produto.vue';

export const routes = [
    {
        path: '/loja',
        name: 'loja',
        component: Loja
    },
    {
        path: '/produto',
        name: 'produto',
        component: Produto
    }
];
