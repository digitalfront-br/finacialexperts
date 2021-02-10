<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Financial Experts</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>
    <style>
        * {
            font-family: 'Work Sans', sans-serif;
        }
        .foto {
    z-index: 2;
}
.foto img {
margin-right: -20px !important;
    padding: 50px 0 0 0;
    max-height: calc(100vh - 130px);
    filter: hue-rotate(
-42deg
) saturate(0.8);
}
.uk-button-secondary {
    background: #132146;
}
h2, h3, h4 {
    color: #132146
}
.uk-light {
color: #fff;
}
.uk-section-muted{
    background: #f2f2f2;
}
.uk-text-primary {
    color: #3cefa2!important;
}
.uk-background-primary {
    background-color: #3cefa2;
}
.uk-background-secondary {
    background-color: #132146;
}
.rounded {
    border-radius: 30px
}
.icone {
    border-radius: 50%;
    width: 50px;
    height: 50px;
    padding: 12px;
    background: #132146;
}
.icone img{
    width: 100%;
    height: auto;
}
.uk-button-primary {
    background-color: #3cefa2;
}
.uk-button-primary:hover {
    background-color: #1ebd78;
}
    </style>
</head>

<body class="antialiased">
    <div class="uk-position-relative" id="formulario-inscricao" uk-scrollspy="cls: uk-animation-fade; repeat: true">
        <div class="uk-height-1-1 uk-flex uk-flex-column uk-flex-middle uk-background-cover"
            data-src="{{ asset('img/bg-banner.jpg') }}" uk-img>
            <div class="uk-section uk-section-small uk-width-1-1">
                <nav class="uk-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <img src="{{ asset('img/logo.png') }}" alt="" srcset="">
                        </div>
                    </div>
                </nav>
            </div>
            <div class="uk-padding-top uk-width-1-1">
                <div class="uk-container">
                    <div class=" uk-flex uk-flex-between">
                        <div class="uk-width-1-2 uk-flex-right foto uk-flex uk-flex-bottom uk-visible@s">
                            <img src="{{ asset('img/bg.png') }}" alt="" uk-img>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-2@s">
                            <div class="uk-text-center">
                                <span
                                    class="uk-light uk-heading-medium uk-text-justify uk-text-uppercase uk-text-bold">Transforme
                                </span><br>
                                <span
                                    class="uk-light uk-heading-medium uk-text-justify uk-text-uppercase uk-text-bold">o
                                    futuro
                                    do
                                </span><br>
                                <span
                                    class="uk-heading-large uk-text-justify uk-text-uppercase uk-text-bold uk-text-primary">seu
                                    filho</span>
                            </div>
                            <div style="z-index: 1" class="uk-card uk-background-primary uk-card-body  rounded">
                                <p class="uk-text-center">Faça sua inscrição e garanta <br /><b>3 aulas gratuitas sobre
                                        educação
                                        financeira!</b></p>
                                <form action="https://paginas.rocks/pages/index/527428" method="post">
                                    <input id="id" name="id" type="hidden" value="527428" />
                                    <input id="mid" name="mid" type="hidden" value="527428" />
                                    <input id="pid" name="pid" type="hidden" value="18284543" />
                                    <input id="list_id" name="list_id" type="hidden" value="527428" />
                                    <input id="provider" name="provider" type="hidden" value="leadlovers" />
                                    <div class="uk-margin">
                                        <input class="uk-input rounded" required id="name" name="name" placeholder="Nome"
                                            type="text" />
                                    </div>
                                    <div class="uk-margin">
                                        <input class="uk-input rounded" id="email" name="email"
                                            placeholder="Seu melhor email" required type="text" />
                                    </div>
                                    <div class="uk-margin">
                                        <input class="uk-input rounded" id="phone" name="phone" placeholder="Telefone (opcional)"
                                            type="text" />
                                    </div>
                                    <button class="uk-button uk-button-secondary uk-button-large uk-width-1-1 rounded" type="submit">Quero
                                        mudar o futuro do
                                        meu filho!</button>
                                    <input type="hidden" id="source" name="source" value="" />
                                    <img src="https://llimages.com/redirect/redirect.aspx?A=V&p=18284543&m=527428"
                                        style="display: none;" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-bottom: -1px"
            class="barra-banner uk-flex uk-flex-between uk-position-absolute uk-position-bottom uk-width-1-1">
            <div style="z-index: 2"><img src="{{ asset('img/rod-left.png') }}" alt="" srcset=""></div>
            <div><img src="{{ asset('img/rod-right.png') }}" alt="" srcset=""></div>
        </div>
    </div>
    {{-- sessao1 --}}
    <div class="uk-section uk-section-muted" uk-scrollspy="cls: uk-animation-fade; repeat: true">
        <div class="uk-container">
            <div class="uk-flex uk-flex-column uk-flex-middle">
                <div class="icone uk-flex uk-flex-middle">
                    <img src="{{ asset('img/icon1.png') }}" alt="">
                </div>
                <h2 class="uk-text-bold uk-margin-small">O que você verá no curso!</h2>
                <div class="uk-margin-bottom">
                    <img src="{{ asset('img/icon4.png') }}" alt="">
                </div>
            </div>
            <div class="uk-grid uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-middle">
                <div class="uk-width-1-1@s uk-width-1-3@m uk-margin-bottom">
                    <div class="uk-padding-small">
                        <h3 class="uk-text-bold">Poder <br>Transformador da educação financeira.</h3>
                    </div>
                </div>
                <div>
                    <ul class="uk-list uk-list-disc">
                        <li>Fórmula do sucesso financeiro</li>
                        <li>Educação financeira em 1 palavra</li>
                        <li>Letra mais importante na nossa vida financeira</li>
                        <li>Tripé financeiro</li>
                        <li>3 pilares q definem um indivíduo financeiramente</li>
                    </ul>
                </div>
                <div>
                    <ul class="uk-list uk-list-disc">
                        <li>Educação financeira definido em 4 Letter_case</li>
                        <li>Números da educação financeira no Brasil e no mundo</li>
                        <li>Impacto educação financeira no futuro dos jovens</li>
                        <li>Educação financeira nas escolas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- sessao2 --}}
    <div class="uk-section" uk-scrollspy="cls: uk-animation-fade; repeat: true">
        <div class="uk-container">
            <div class="uk-flex uk-grid uk-child-width-1-1 uk-child-width-expand@s">
                <div style="max-width: 100px;">
                    <div style=" border-bottom: 1px solid #3cefa2; margin-bottom: 20px; padding-bottom: 20px">
                        <div class="icone uk-flex uk-flex-middle">
                            <img src="{{ asset('img/icon2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="uk-margin-left">
                    <h3 class="uk-text-bold">10 entre 10 pais concordam que a Educação Financeira é muito importante para o futuro dos seus filhos.</h3>
                </div>
            </div>
            <div class="uk-grid uk-child-width-1-2">
                <div><p>A Financial Experts possue a missão de preparar jovens no tema.</p>
                <p>E quando se aprende desde cedo sobre finanças,  arelação com o dinheiro se torna mais saudável, trazendo resultados significativos tanto para a vida pessoal como para a economia do País.</p></div>
                <div><p>Trazemos por tempo limitado a pais e mães, 3 aulas gratuitas e materiais exclusivo, que irão auxiliar você a dar o primeiro passo rumo a esse conhecimento que amplia possibilidades.</p>
                <p class="uk-text-bold">Não Perca Tempo!</p></div>
            </div>
        </div>
    </div>
    {{-- sessao3 --}}
    <div class="uk-section uk-section-muted" uk-scrollspy="cls: uk-animation-fade; repeat: true">
        <div class="uk-container">
            <div>
                <a href="#formulario-inscricao" uk-scroll class="uk-button rounded uk-button-primary uk-width-1-1 uk-button-large">
                    <span class="uk-h3 uk-text-bold">Quero me inscrever!</span>
                </a>
            </div>
        </div>
    </div>
    {{-- section footer --}}
    <div class="uk-section uk-section-small uk-background-secondary" uk-scrollspy="cls: uk-animation-fade; repeat: true">
        <div class="uk-container">
            <div class="uk-text-center">
                <div class="uk-margin-small">
                    <a target="_blank" href="https://t.me/joinchat/ICfHDL16nByvVHNa">
                    <img src="{{ asset('img/icon3.png')}}" alt="">
                    </a>
                </div>
                <div>
                    <p><a target="_blank" href="https://t.me/joinchat/ICfHDL16nByvVHNa">Clique aqui </a> <span class="uk-light">Faça parte do grupo da Financial Experts, e tenha acesso a vários conteúdos exclusivos</span></p>
                </div>
            </div>
            <hr style="border-color: #233c7d" class="uk-width-1-1" />
            <div class="uk-text-center">
                <div>
                    <p><span class="uk-light">Financial Experts 2021 - Quer saber mais sobre a Financial Experts </span><a class="uk-text-primary" href="https://www.financialexperts.com.br/" target="_blank">Clique aqui</a></p>
                </div>
            </div>
        </div>
    </div>
    {{-- navbar --}}
</body>

</html>
