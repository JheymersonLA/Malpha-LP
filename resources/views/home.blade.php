@extends('base.app')

@section('titulo')
    Malpha - Desenvolvimento de Sistemas 💻
@endsection

@section('home')

<!-- Header Topo -->
<div class="container-fluid header-topo bg-white">
    <div class="row text-primary-light p-2 border-bottom-top">
        <div class="col d-flex align-items-center justify-content-start">
            <div class="col-auto">
                <a href="tel:(99) 99999-9999" class="btn btn-transparent">
                    <img src="{{ asset('images/Social Media/Phone.svg') }}" alt="Telefone" width="16" height="16">
                    <span class="ms-2 text-primary-dark">(99) 99999-9999</span>
                </a>
                <a href="mailto:email@email.com" class="btn btn-transparent">
                    <img src="{{ asset('images/Social Media/Mail.svg') }}" alt="Email" width="16" height="16">
                    <span class="ms-2 text-primary-dark">email@email.com</span>
                </a>
            </div>
        </div>
        <div class="col d-flex align-items-center justify-content-end">
            <div class="row">
                <div class="col-auto p-1">
                    <a href="#" class="btn btn-SocialMedia">
                        <img src="{{ asset('images/Social Media/LinkedIn.svg') }}" alt="LinkedIn" width="16" height="16">
                    </a>
                </div>
                <div class="col-auto p-1">
                    <a href="#" class="btn btn-SocialMedia">
                        <img src="{{ asset('images/Social Media/Instagram.svg') }}" alt="Instagram" width="16" height="16">
                    </a>
                </div>
                <div class="col-auto p-1">
                    <a href="#" class="btn btn-SocialMedia">
                        <img src="{{ asset('images/Social Media/WhatsApp.svg') }}" alt="WhatsApp" width="16" height="16">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<nav class="navbar navbar-expand-lg bg-white ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/Logo/Logo.svg') }}" alt="WhatsApp" width="64" height="64">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item mx-5">
                    <a href="#" class="btn btn-transparent nav-link">
                        <img src="{{ asset('images/Icons/Dark-Mode.svg') }}" alt="Telefone" width="16" height="16">
                    </a>
                </li> --}}
                <li class="nav-item active mx-2">
                    <a class="nav-link text-primary-dark" href="#Home">Home</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Serviços">Serviços</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Soluções">Soluções</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Sobre nós">Sobre nós</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Contato">Contato</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<div class="container bg-hero-container">
    <div class="row mx-5">
        <div class="col-5 my-5">
            <div class="row">
                <h1 class="text-primary-dark animate__animated animate__fadeInLeft">Procurando uma empresa de tecnologia especializada no 
                    <h1 class="text-primary-light animate__animated animate__fadeInLeft"> Desenvolvimento de Sistemas ?</h1>
            </div>
            <div class="row">
                <div class="col-auto d-flex align-items-center">
                    <h5>A</h5>
                </div>
                <div class="col-auto">
                    <img src="{{ asset('images/Logo/Logo2.svg') }}" alt="Logomarca" width="120" height="120">
                </div>
                
            </div>
            <div class="row">
                <h5>é a empresa perfeita para você.</h5>
            </div>
            <div class="row">
                <button class="btn btn-primary button-cta">Contate-nos</button>
            </div>
        </div>
        <div class="col-auto py-5">
            <img src="{{ asset('images/Hero-Image.png') }}" alt="Hero-Image" width="150px" height="150px">
        </div>
    </div>
</div>

<!-- Serviços -->
<div class="container-fluid my-5">
    <div class="bg-service-container">
        <div class="row mx-5 my-5">
            <div class="col my-5">
                <div class="row">
                    <div class="card bg-services-card">
                        <h1 class="text-primary-dark">Sistemas personalizados</h1>
                        <h1 class="text-primary-dark">para o seu </h1><h1 class="text-primary-light">negócio</h1>
                    </div>
                </div>
            </div>
            <div class="col my-5">
                <div class="row">
                    <div class="col-auto">
                        <img src="{{ asset('images/Points.svg') }}" alt="Logomarca" width="20" height="20">
                    </div>
                    <div class="col-auto">
                        <h6>Análise de requisitos</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <img src="{{ asset('images/Points.svg') }}" alt="Logomarca" width="20" height="20">
                    </div>
                    <div class="col-auto">
                        <h6>Desenvolvimento</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <img src="{{ asset('images/Points.svg') }}" alt="Logomarca" width="20" height="20">
                    </div>
                    <div class="col-auto">
                        <h6>Testes</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <img src="{{ asset('images/Points.svg') }}" alt="Logomarca" width="20" height="20">
                    </div>
                    <div class="col-auto">
                        <h6>Implantação</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <img src="{{ asset('images/Points.svg') }}" alt="Logomarca" width="20" height="20">
                    </div>
                    <div class="col-auto">
                        <h6>Suporte</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Soluções -->
<div class="bg-service-container py-5">
    <div class="container-sm my-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1>Guard</h1>
            </div>
        </div>
        <div class="row mx-5 my-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-background">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sobre nós -->
<div class="bg-service-container py-5">
    <div class="container-sm my-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1>Sobre nós</h1>
            </div>
        </div>
        <div class="row mx-5 my-5">
            <div class="col">
                <div class="card card-background">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-5 bg-footer">
    <div class="row">
        <div class="col">
            <div class="row">
                <img src="{{ asset('images/Logo/Logo3.svg') }}" alt="Logomarca" width="24" height="24">
            </div>
            <div class="row">
                <h6>Ideias inovadoras, soluções tecnológicas
                    Transforme seu negócio com a Malpha</h6>
            </div>
        </div>
        <div class="col">
            <ul class="navbar-nav mr-auto">
                <li>
                    <h5>Links do Site</h5>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Home">Home</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Serviços">Serviços</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Soluções">Soluções</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Sobre nós">Sobre nós</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Contato">Contato</span></a>
                </li>
            </ul>
        </div>
        <div class="col">
            <div class="row">
                <a href="tel:(99) 99999-9999" class="btn btn-transparent">
                    <img src="{{ asset('images/Social Media/Phone.svg') }}" alt="Telefone" width="16" height="16">
                    <span class="ms-2 text-primary-dark">(99) 99999-9999</span>
                </a>
                <a href="mailto:email@email.com" class="btn btn-transparent">
                    <img src="{{ asset('images/Social Media/Mail.svg') }}" alt="Email" width="16" height="16">
                    <span class="ms-2 text-primary-dark">email@email.com</span>
                </a>
            </div>
            <div class="row">
                <div class="col-auto p-1">
                    <a href="#" class="btn btn-SocialMedia">
                        <img src="{{ asset('images/Social Media/LinkedIn.svg') }}" alt="LinkedIn" width="16" height="16">
                    </a>
                </div>
                <div class="col-auto p-1">
                    <a href="#" class="btn btn-SocialMedia">
                        <img src="{{ asset('images/Social Media/Instagram.svg') }}" alt="Instagram" width="16" height="16">
                    </a>
                </div>
                <div class="col-auto p-1">
                    <a href="#" class="btn btn-SocialMedia">
                        <img src="{{ asset('images/Social Media/WhatsApp.svg') }}" alt="WhatsApp" width="16" height="16">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h6>Todos os direitos reservados. © 2024</h6>
    </div>
</div>


<!-- Botão de voltar ao topo -->
<button id="btnTop" class="btn" title="Voltar ao Topo">↑</button>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
      // Adiciona a classe 'active' ao clicar em um item de navegação
      $(".navbar-nav li").on("click", function () {
        $(".navbar-nav").find(".active").removeClass("active");
        $(this).addClass("active");
      });
    });
</script>

<script>
    $(document).ready(function () {
        var lastScrollTop = 0;
        var headerTopo = $(".header-topo");

        $(window).scroll(function () {
            var st = $(this).scrollTop();

            if (st > lastScrollTop) {
                // Scroll para baixo, esconde o Header Topo
                headerTopo.addClass("header-hidden");
            } else {
                // Scroll para cima, mostra o Header Topo
                headerTopo.removeClass("header-hidden");
            }

            lastScrollTop = st;

            // Adiciona a classe 'fixed-top' ao Header (navbar) ao rolar
            if ($(this).scrollTop() > 0) {
                $(".navbar").addClass("fixed-top");
            } else {
                $(".navbar").removeClass("fixed-top");
            }
        });
    });
</script>

<script>
    // Adiciona o comportamento de rolar suave para o botão de voltar ao topo
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#btnTop').fadeIn();
            } else {
                $('#btnTop').fadeOut();
            }
        });

        $('#btnTop').click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });
    });
</script>

@endsection