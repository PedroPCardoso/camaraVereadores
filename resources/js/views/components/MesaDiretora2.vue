<template>
    <div>TESTTTTTTTTTTT</div>
    <div class="mesa-diretora">
        <h2>MESA DIRETORA BIÊNIO 2023-2024</h2>
        <div class="mesa-diretora-lista">
            <div class="mesa-diretora-membro" v-for="membro in membros" :key="membro.nome">
                <div class="escudo">
                    <img :src="membro.imagem" alt="Imagem do membro" />
                </div>
                <h3>{{ membro.nome }}</h3>
                <p>{{ membro.cargo }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MesaDiretora",
    data() {
        return {
            membros: [
                {
                    nome: "Oseas Pereira",
                    cargo: "Vice-Presidente",
                    imagem: require('@/assets/oseas-pereira.png'), // Substitua pelo caminho correto da imagem
                },
                {
                    nome: "Jecica Lima",
                    cargo: "Presidente",
                    imagem: require('@/assets/jecica-lima.png'), // Substitua pelo caminho correto da imagem
                },
                {
                    nome: "Marcelo Menezes",
                    cargo: "1º Secretário",
                    imagem: require('@/assets/marcelo-menezes.png'), // Substitua pelo caminho correto da imagem
                },
                {
                    nome: "Bruno Nery",
                    cargo: "2º Secretário",
                    imagem: require('@/assets/bruno-nery.png'), // Substitua pelo caminho correto da imagem
                },
            ],
        };
    },
};
</script>


<style scoped>
.mesa-diretora {
    text-align: center;
    padding: 20px;
}

.mesa-diretora-lista {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
}

.mesa-diretora-membro {
    text-align: center;
    margin: 10px;
    background-color: #f8f8f8;
    padding: 10px;
    border-radius: 8px;
}

.escudo img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
}

.mesa-diretora-membro h3 {
    margin: 10px 0 5px;
    font-size: 18px;
}

.mesa-diretora-membro p {
    margin: 0;
    font-size: 14px;
    color: #555;
}
</style>
