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
        .welcome-back, .uk-background-secondary2{
            background: #1e0fca;
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
        .barra-banner2  {
            height: 150px;
            background: linear-gradient(180deg, rgba(30,15,202,0) 0%, rgba(30,15,202,1) 90%);
        }
        .foto2 img {
            padding: 50px 0 0 0;
            max-height: calc(100vh - 130px);
            filter: hue-rotate(
        -42deg
        ) saturate(0.8);
        }
        .uk-border-rounded2{
            border-radius: 15px
        }
        .uk-button-secondary {
            background: #132146;
        }
        h2, h3, h4 {
            color: #1e0fca
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
        .icone2 {
            width: 50px;
            height: 50px;
        }
        .icone2 img{
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
        <div class="uk-position-absolute uk-position-right">
            <img src="{{ asset('img/bg-topo.png') }}" alt="">
        </div>
        <div class="uk-height-1-1 uk-flex uk-flex-column uk-flex-middle uk-background-cover welcome-back"
            data-src="{{ asset('img/bg-bottom.png') }}" style="background-repeat: no-repeat; background-position: bottom left" uk-img>
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
                        <div class="uk-width-1-2 uk-flex-right foto2 uk-flex uk-flex-bottom uk-visible@s uk-margin-right">
                            <img src="{{ asset('img/bg.png') }}" alt="" uk-img>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-2@s uk-flex uk-flex-middle">
                            <div class="uk-text-left uk-margin-bottom">
                                <span
                                    class="uk-light uk-heading-medium uk-text-uppercase uk-text-bold">Transforme
                                </span><br>
                                <span
                                    class="uk-light uk-heading-medium uk-text-uppercase uk-text-bold">o
                                    futuro
                                    do
                                </span><br>
                                <span
                                    class="uk-heading-large uk-text-uppercase uk-text-bold uk-text-primary">seu
                                    filho!</span>
                                    <p class="uk-text-large uk-light">
                                        Seguem 3 Vídeo aulas com conteúdos selecionados especialmente para você pai sobre a educação financeira! Esperamos que goste e que agregue para sua vida e do seu filho!!!
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="barra-banner2 uk-flex uk-flex-between uk-position-absolute uk-position-bottom uk-width-1-1">

        </div>
    </div>
    {{-- sessao1 --}}
    <div class="uk-section uk-section-default" uk-scrollspy="cls: uk-animation-fade; repeat: true">
        <div class="uk-container">
            <div class="uk-flex uk-flex-center uk-flex-middle uk-margin">
                <div class="icone2 uk-flex uk-flex-middle uk-margin-right">
                    <img src="{{ asset('img/icone-video.png') }}" alt="">
                </div>
                <h2 class="uk-text-bold uk-margin-small ">Clique abaixo e inicie sua jornada de conhecimento</h2>

            </div>
            <div class="uk-grid uk-grid-small uk-child-width-1-1  uk-child-width-1-2@s uk-child-width-1-4@m uk-margin uk-flex-top">
                <div>
                    <div class="uk-card uk-card-hover uk-border-rounded uk-margin-bottom">
                        <div class="uk-card-media-top" uk-lightbox>
                            <a href="https://www.youtube.com/watch?v=vu_rjV6g2EA&feature=youtu.be" data-caption="Visao geral educação financeira">
                                <img src="{{ asset('img/thumb_video1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Visao geral educação financeira</h3>
                            <p><span uk-icon="icon: clock"></span> Duração - 8:40</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-hover uk-border-rounded uk-margin-bottom">
                        <div class="uk-card-media-top" uk-lightbox>
                            <a href="https://www.youtube.com/watch?v=G7OxMtwiC4w&feature=youtu.be" data-caption="Educacao financeira na prática">
                                <img src="{{ asset('img/thumb_video2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Educacao financeira na prática</h3>
                            <p><span uk-icon="icon: clock"></span> Duração - 8:35</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-hover uk-border-rounded uk-margin-bottom">
                        <div class="uk-card-media-top" uk-lightbox>
                            <a href="https://www.youtube.com/watch?v=bxrobYdu2Xo&feature=youtu.be" data-caption="Tripe de ouro">
                                <img src="{{ asset('img/thumb_video3.png') }}" alt="">
                            </a>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Tripe de ouro</h3>
                            <p><span uk-icon="icon: clock"></span> Duração - 2:09</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-hover uk-border-rounded uk-margin-bottom">
                        <div class="uk-card-media-top" uk-lightbox>
                            <a href="https://www.youtube.com/watch?v=sTBlBLevaWg&feature=youtu.be" data-caption="Dicas sobre como pagar a mesada do seu filho">
                                <img src="{{ asset('img/thumb_video4.png') }}" alt="">
                            </a>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Dicas sobre como pagar a mesada do seu filho</h3>
                            <p><span uk-icon="icon: clock"></span> Duração - 1:20</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- sessao2 --}}
    <div class="uk-section uk-section-muted" uk-scrollspy="cls: uk-animation-fade; repeat: true">
        <div class="uk-container">
            <div class="uk-border-rounded2 welcome-back">
                <div class="uk-grid uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m uk-flex uk-flex-center uk-flex-middle uk-light" uk-grid>
                    <div class="uk-text-center uk-text-right@m uk-text-right@l">
                        <img src="{{ asset('img/ebook.png')}}" style="max-width: 350px"  alt="">
                    </div>
                    <div class="uk-margin-bottom uk-text-center uk-text-left@m uk-text-left@l">
                        <h2 class="uk-text-bold">Tudo que você precisa saber sobre a mesada do filho</h2>
                        <div class="uk-padding-small">
                            <a href="{{ asset('financial_experts_e-book_mesada.pdf')}}" target="_blank">

                                <p class="uk-text-bold uk-h3 uk-text-middle" style="color: #3cefa2;">
                                    <span style="
                                background: #3cefa2;
                                border-radius: 10px;
                                color: #1e0fca;
                                padding: 2px;
                                line-height: 0;
                                margin-right: 12px;
                            "  uk-icon="icon: arrow-down; ratio: 1.5"></span> Download</p>
                                </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- section footer --}}
    <div class="uk-section uk-section-large uk-background-secondary2" uk-scrollspy="cls: uk-animation-fade; repeat: true">
        <div class="uk-container  uk-light">
            <div class="uk-grid uk-grid-divider uk-child-width-1-2 uk-child-width-1-4@s uk-flex uk-flex-center" uk-grid>
                <div class="uk-text-center">
                    <img src="{{ asset('img/logo.png')}}" style="width: 300px" alt="">
                </div>
                <div class="uk-margin-bottom">
                    <h4 class="uk-text-bold">Educação financeira para futuros experts</h4>
                    <div class="uk-flex uk-flex-around">
                        <a href="https://www.facebook.com/escolafinancialexperts/" uk-icon="icon: facebook"></a>
                        <a href="https://instagram.com/finexperts?igshid=10i0ef3h2qf4k" uk-icon="icon: instagram"></a>
                        <a href="https://youtube.com/channel/UC26fbNS-di5p5tt3Kf66fWw" uk-icon="icon: youtube"></a>
                    </div>
                </div>

            </div>
            <div class="uk-text-center">
                <div class="uk-margin-top">
                    <span>©2021 . Financial Experts . Todos os direitos reservados</span>
                </div>
            </div>
        </div>
    </div>
    {{-- navbar --}}
</body>

</html>
