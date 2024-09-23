<template>
    <header id="header" class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <!-- Logo da Câmara -->
                    <img src="https://www.cmcjacuipe.ba.gov.br/imagens/marca.png" alt="Logo" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <!-- Itens do menu -->
                        <li class="nav-item">
                            <router-link class="nav-link" to="/">Início</router-link>
                        </li>
                        <!-- Outros itens -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: 'Header',
};
</script>

<style scoped>
/* Estilos do header */
</style>
