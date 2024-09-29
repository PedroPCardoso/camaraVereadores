<template>
    <header id="header" class="sticky-style-2" :style="{ backgroundColor: '#fff' }">
        <div class="container clearfix">
            <div id="logo">
                <a href="/index" class="standard-logo">
                    <img src="https://www.cmcjacuipe.ba.gov.br/imagens/marca.png" alt="Logo" />
                </a>
                <!-- <a href="/index" class="retina-logo">
                    <img src="https://www.cmcjacuipe.ba.gov.br/imagens/marca.png" alt="Logo" />
                </a> -->
            </div>

            <ul class="header-extras">
                <li>
                    <i class="i-plain icon-search nomargin" :style="{ color: '#094C77' }"></i>
                    <div class="he-text">Publicações Oficiais
                        <a href="https://sai.io.org.br/ba/camaraconceicaodojacuipe/site/DiarioOficial" target="_blank">
                            <span>Acesse o Diário Oficial</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <div id="header-wrap" class="fundomenu" :style="{ backgroundColor: '#bacf00' }">
            <nav id="primary-menu" class="with-arrows style-2 center">
                <div class="container clearfix">
                    <div id="primary-menu-trigger">
                        <i class="icon-reorder"></i>
                    </div>
                    <ul>
                        <li>
                            <a href="/index">
                                <div style="color: #fff">Início</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div style="color: #fff">A Câmara</div>
                            </a>
                            <ul>
                                <li>
                                    <a href="/historia">
                                        <div style="color: #000">História</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/cerimonial">
                                        <div style="color: #000">Cerimonial</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/agenda">
                                        <div style="color: #000">Agenda de Sessões</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/vereadores">
                                <div style="color: #fff">Vereadores</div>
                            </a>
                        </li>
                        <li>
                            <a href="/comissoes">
                                <div style="color: #fff">Comissões</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header",
};
</script>
<style scoped>
</style>
