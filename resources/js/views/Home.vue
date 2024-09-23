<template>
    <div>
        <Slider :banners="banners" />
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <News :noticias="noticias" />
                </div>
                <div class="col-md-4">
                    <Agenda :eventos="eventos" />
                </div>
            </div>
            <VereadoresCarousel :vereadores="vereadores" />
        </div>
    </div>
</template>

<script>
import Slider from './components/Slider.vue';
import News from './components/News.vue';
import Agenda from './components/Agenda.vue';
import VereadoresCarousel from './components/VereadoresCarousel.vue';
import axios from 'axios';

export default {
    name: 'Home',
    components: {
        Slider,
        News,
        Agenda,
        VereadoresCarousel,
    },
    data() {
        return {
            banners: [],
            noticias: [],
            eventos: [],
            vereadores: [],
        };
    },
    created() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            axios.get('/api/banners').then(response => {
                this.banners = response.data;
            });
            axios.get('/api/noticias').then(response => {
                this.noticias = response.data;
            });
            axios.get('/api/eventos').then(response => {
                this.eventos = response.data;
            });
            axios.get('/api/vereadores').then(response => {
                this.vereadores = response.data;
            });
        },
    },
};
</script>

<style scoped>
/* Estilos específicos da página inicial */
</style>
