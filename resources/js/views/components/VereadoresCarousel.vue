<template>
    <div class="mt-5">
        <h2 class="text-center">Vereadores</h2>
        <div id="vereadoresCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item" :class="{ active: index === 0 }" v-for="(grupo, index) in gruposVereadores"
                    :key="index">
                    <div class="row">
                        <div class="col-md-2" v-for="vereador in grupo" :key="vereador.id">
                            <div class="card">
                                <img :src="vereador.foto" class="card-img-top" :alt="vereador.nome">
                                <div class="card-body text-center">
                                    <h6 class="card-title">{{ vereador.nome }}</h6>
                                    <p class="card-text">{{ vereador.partido }}</p>
                                    <router-link :to="`/vereadores/${vereador.id}`" class="btn btn-sm btn-primary">Ver
                                        Perfil</router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#vereadoresCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#vereadoresCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'VereadoresCarousel',
    props: {
        vereadores: {
            type: Array,
            required: true,
        },
    },
    computed: {
        gruposVereadores() {
            const grupos = [];
            const tamanhoGrupo = 6; // Número de vereadores por slide
            for (let i = 0; i < this.vereadores.length; i += tamanhoGrupo) {
                grupos.push(this.vereadores.slice(i, i + tamanhoGrupo));
            }
            return grupos;
        },
    },
};
</script>

<style scoped>
/* Estilos do carrossel de vereadores */
</style>
