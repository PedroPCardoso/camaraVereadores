<template>
    <div v-if="noticia" class="noticia-detalhe">
        <h1>{{ noticia.titulo }}</h1>
        <img :src="noticia.image_url" alt="noticia.titulo" class="img-fluid">
        <p class="conteudo" v-html="noticia.conteudo"></p>
    </div>
    <div v-else>
        <p>Carregando notícia...</p>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'NoticiaDetalhe',
    props: ['id'], // Recebe o ID da notícia da URL
    data() {
        return {
            noticia: null, // Inicializa o dado da notícia como null
        };
    },
    created() {
        this.fetchNoticia(); // Chama o método que busca a notícia quando o componente é montado
    },
    methods: {
        fetchNoticia() {
            axios.get(`/api/noticias/${this.id}`) // Faz a requisição GET para a API usando o ID da notícia
                .then(response => {
                    this.noticia = response.data; // Armazena os dados da notícia na variável noticia
                })
                .catch(error => {
                    console.error('Erro ao buscar a notícia:', error); // Log de erro no console caso a requisição falhe
                });
        },
    },
};
</script>

<style scoped>
.noticia-detalhe {
    margin-top: 20px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.noticia-detalhe img {
    max-width: 100%;
    border-radius: 10px;
    margin-bottom: 20px;
}

.noticia-detalhe .conteudo {
    font-size: 18px;
    line-height: 1.6;
    color: #333;
}
</style>
