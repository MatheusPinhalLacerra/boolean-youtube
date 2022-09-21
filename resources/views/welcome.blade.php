<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean Cursos</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="/css/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/slick/slick-theme.css" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="padding: 20px 0">
        <div class="container">
            <div class="row" id="row-navbar">

                <div class="col-7">
                    <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="Logo Boolean Cursos"
                            id="logo-welcome" title="Logo Boolean Cursos"></a>
                </div>

                <div class="col-5" style="display: grid" id="itens-navbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/login"><b id="item-login">Fazer Login</b></a>
                            </li>
                            <li class="nav-item" id="item-cadastro">
                                <a class="nav-link disabled" href="http://127.0.0.1:8000/register"><b id="item-cadastro-b">Cadastrar-se</b></a>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </nav>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/banner-site.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/banner-site.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/banner-site.png" alt="Second slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    {{-- Função nova --}}

    <section class="swiper mySwiper container">
        <div class="text-slide-welcome">
            <h3>Cursos Disponíveis</h3>
        </div>

        <div class="swiper-wrapper" style="">

            <div class="card swiper-slide" style="width: 18rem;">
                <img src="/img/carrossel3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card swiper-slide" style="width: 18rem;">
                <img src="/img/carrossel3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card swiper-slide" style="width: 18rem;">
                <img src="/img/carrossel3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card swiper-slide" style="width: 18rem;">
                <img src="/img/carrossel3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        {{-- <div class="swiper-pagination"></div> --}}

    </section>


    <footer>
        <div class="row footer-row">
            <div class="col-4" id="footer-logo">
                <img src="/img/logo.png" alt="Logo Boolean Cursos">
            </div>

            <div class="col-4" id="footer-center-list">
                <ul>
                    <a href="" class="link-footer-list">
                        <li>Categorias</li>
                    </a>
                    <a href="">
                        <li>Quem somos</li>
                    </a>
                    <a href="">
                        <li>Termos</li>
                    </a>
                </ul>
            </div>

            <div class="col-4" id="social-icons-line">
                <div id="test">
                    <a href=""><img src="/img/network/instagram.png" alt="Ícone Instagram" title="Ícone Instagram"></a>
                    <a href=""><img src="/img/network/facebook.png" alt="Ícone Facebook" title="Ícone Facebook"></a>
                    <a href=""><img src="/img/network/youtube.png" alt="Ícone Youtube" title="Ícone Youtube"></a>
                    <a href=""><img src="/img/network/whats.png" alt="Ícone WhatsApp" title="Ícone WhatsApp"></a>
                </div>
                   
                </div>

            </div>
        </div>
    </footer>
    {{-- Fim Função --}}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>
