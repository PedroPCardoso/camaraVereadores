import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import NoticiaDetalhe from "../views/NoticiaDetalhe.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/noticias/:id", // Rota dinâmica para a notícia individual
        name: "NoticiaDetalhe",
        component: NoticiaDetalhe,
        props: true, // Permite passar o ID da notícia como prop
    },
    // Outras rotas
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
