<template>
    <div>
        <h2>Agenda</h2>
        <ul class="list-group">
            <li class="list-group-item" v-for="evento in eventos" :key="evento.id">
                <h5>{{ evento.titulo }}</h5>
                <p>{{ formatDate(evento.data_hora) }}</p>
                <a :href="evento.link" target="_blank" class="btn btn-sm btn-info">Participar</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Agenda',
    props: {
        eventos: {
            type: Array,
            required: true,
        },
    },
    methods: {
        formatDate(date) {
            return new Date(date).toLocaleString('pt-BR');
        },
    },
};
</script>

<style scoped>
/* Estilos da agenda */
</style>
