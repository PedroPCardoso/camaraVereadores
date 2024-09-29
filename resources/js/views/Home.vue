<template>
    <div>
        <Slider :banners="banners" />
        <PortalLinks />

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <News :noticias="noticias" />
                </div>
                <div class="col-md-4">
                    <Agenda :eventos="eventos" />
                </div>
            </div>
            <MesaDiretora :membros="membros" />
            <VereadoresCarousel :vereadores="vereadores" />

        </div>
    </div>
</template>

<script>
import Slider from './components/Slider.vue';
import News from './components/News.vue';
import PortalLinks from './components/PortalLinks.vue';
import Agenda from './components/Agenda.vue';
import VereadoresCarousel from './components/VereadoresCarousel.vue';
import MesaDiretora from './components/MesaDiretora.vue';
import axios from 'axios';
export default {
    name: 'Home',
    components: {
        Slider,
        News,
        Agenda,
        VereadoresCarousel,
        PortalLinks,
        MesaDiretora
    },
    data() {
        return {
            banners: [],
            noticias: [],
            eventos: [],
            vereadores: [],
            membros: [],
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
            axios.get('/api/mesa-diretora').then(response => {
                this.membros = response.data;
            });
        },
    },
};
</script>

<style scoped>
/* Estilos específicos da página inicial */
</style>
