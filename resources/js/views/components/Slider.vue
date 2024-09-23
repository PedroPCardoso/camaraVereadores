<template>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button v-for="(banner, index) in banners" :key="banner.id" type="button"
                data-bs-target="#carouselExampleIndicators" :data-bs-slide-to="index" :class="{ active: index === 0 }"
                aria-current="true" :aria-label="`Slide ${index + 1}`"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item" :class="{ active: index === 0 }" v-for="(banner, index) in banners"
                :key="banner.id">
                <img :src="banner.imagem" class="d-block w-100" :alt="banner.titulo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ banner.titulo }}</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</template>

<script>
export default {
    name: 'Slider',
    props: {
        banners: {
            type: Array,
            required: true,
        },
    },
};
</script>

<style scoped>
/* Estilos do slider */
</style>
