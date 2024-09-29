<template>
    <div id="noticias">
        <h2 class="news-title">Notícias</h2>
        <div class="row">
            <div class="col-md-4 mb-4" v-for="noticia in noticias" :key="noticia.id">
                <!-- O router-link envolve todo o card -->
                <router-link :to="`/noticias/${noticia.id}`" class="noticia-link">
                    <div class="noticia-item text-center">
                        <div class="noticia-img-wrapper">
                            <img :src="noticia.image_url" class="noticia-img" :alt="noticia.titulo">
                        </div>
                        <h4 class="noticia-titulo">{{ noticia.titulo }}</h4>
                    </div>
                </router-link>
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
};
</script>

<style scoped>
#noticias {
    margin-top: 20px;
}

.news-title {
    font-size: 24px;
    color: #007691;
    margin-bottom: 20px;
}

.noticia-link {
    text-decoration: none;
    color: inherit;
}

.noticia-link:hover .noticia-item {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    /* Um pequeno efeito de hover */
}

.noticia-item {
    border: none;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 10px;
    background-color: #fff;
    transition: box-shadow 0.3s ease;
}

.noticia-img-wrapper {
    width: 100%;
    height: 250px;
    /* Define a altura fixa da imagem para garantir que seja quadrada */
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}

.noticia-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Isso garante que a imagem seja cortada proporcionalmente para preencher o espaço quadrado */
    border-radius: 10px;
}

.noticia-titulo {
    font-size: 16px;
    font-weight: bold;
    color: #003350;
    margin-top: 10px;
}
</style>
