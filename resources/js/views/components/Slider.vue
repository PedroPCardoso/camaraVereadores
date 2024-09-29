<template>
    <Carousel :autoplay="2000" :wrap-around="true">
        <Slide v-for="(banner, index) in banners" :key="banner.id">
            <div class="carousel__item">
                <img :src="banner.image_url" :alt="banner.titulo">
                <!-- {{ banner.image_url }} -->
            </div>
        </Slide>
    </Carousel>
</template>

<script>
import { defineComponent } from 'vue'
import { Carousel, Pagination, Slide } from 'vue3-carousel'

import 'vue3-carousel/dist/carousel.css'

export default defineComponent({
    name: 'Autoplay',
    components: {
        Carousel,
        Slide,
        Pagination,
    },
    props: {
        banners: {
            type: Array,
            required: true,
        },
    },
})
</script>

<style>
.carousel__item {
    height: 300px;
    width: 100%;
    /* Garante que a largura ocupe todo o container */
    position: relative;
    /* Para posicionar corretamente o conteúdo interno */
}

.carousel__item img {
    height: 100%;
    /* Define a altura máxima para 100% do container */
    width: 100%;
    /* Define a largura máxima para 100% do container */
    object-fit: cover;
    /* Mantém a proporção da imagem e corta se necessário */
}

.carousel__slide {
    padding: 10px;
}

.carousel__prev,
.carousel__next {
    box-sizing: content-box;
    border: 5px solid white;
}
</style>

<!--

<template>
    <div id="slider" class="slider-container">
        <Carousel :items-to-show="1" :autoplay="true" autoplayTimeout="5000" wrap-around>
            <Slide v-for="(banner, index) in banners" :key="banner.id">
                <div class="carousel-item">
                    <img :src="banner.image_url" class="d-block w-100" :alt="banner.titulo" />
                    <div class="carousel-caption">
                        <h5>{{ banner.titulo }}</h5>
                        <p>{{ banner.descricao }}</p>
                    </div>
                </div>
            </Slide>
        </Carousel>
    </div>
</template>

<script>
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

export default {
    name: 'Slider',
    components: {
        Carousel,
        Slide
    },
    props: {
        banners: {
            type: Array,
            required: true,
        },
    },
};
</script>

<style scoped>
.slider-container {
    position: relative;
    max-width: 100%;
    margin: 20px auto;
}

.carousel-item img {
    width: 100%;
    border-radius: 10px;
}

.carousel-caption {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: #fff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
}

.carousel-caption h5 {
    font-size: 24px;
    margin: 0;
}

.carousel-caption p {
    font-size: 16px;
}
</style> -->
