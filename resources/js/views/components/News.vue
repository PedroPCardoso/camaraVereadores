<template>
    <div>
        <h2>Notícias</h2>
        <div class="row">
            <div class="col-md-6 mb-4" v-for="noticia in noticias" :key="noticia.id">
                <div class="card">
                    <img :src="noticia.imagem" class="card-img-top" :alt="noticia.titulo">
                    <div class="card-body">
                        <h5 class="card-title">{{ noticia.titulo }}</h5>
                        <p class="card-text">{{ resumo(noticia.conteudo) }}</p>
                        <router-link :to="`/noticias/${noticia.id}`" class="btn btn-primary">Leia Mais</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'News',
    props: {
        noticias: {
            type: Array,
            required: true,
        },
    },
    methods: {
        resumo(conteudo) {
            return conteudo.length > 100 ? conteudo.substring(0, 100) + '...' : conteudo;
        },
    },
};
</script>

<style scoped>
/* Estilos das notícias */
</style>
