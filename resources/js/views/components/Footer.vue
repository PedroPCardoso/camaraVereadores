<template>
    <footer id="footer" class="bg-dark text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <!-- Informações de contato -->
                    <h5>Câmara Municipal de Conceição do Jacuípe</h5>
                    <p>Endereço, telefone, e-mail, etc.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <!-- Links rápidos -->
                    <ul class="list-unstyled">
                        <li><router-link to="/">Início</router-link></li>
                        <!-- Outros links -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-secondary text-center py-2">
            <small>&copy; 2024 Câmara Municipal de Conceição do Jacuípe</small>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'Footer',
};
</script>

<style scoped>
/* Estilos do footer */
</style>
