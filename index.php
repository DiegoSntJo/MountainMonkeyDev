<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mountain Monkey Dev</title>
    <meta name="author" content="Diego Santos">
    <link rel="icon" href="img/fav.png">
    <!-- MATERIALIZE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<!-- HEADER -->
<header>
    <!--MENU MOBILE-->
    <ul class="sidenav" id="menu-mobile">
        <li><a class="sidenav-close" href="#home">Home</a></li>
        <li><a class="sidenav-close" href="#sobre">Sobre</a></li>
        <li><a class="sidenav-close" href="#servicos">Serviços</a></li>
        <li><a class="sidenav-close" href="#contato">Contato</a></li>
    </ul>

    <div class="navbar-fixed">
        <nav class="navbar z-depth-0">
            <div class="nav-wrapper container">
                <h1 class="logo_text">Encontre seu site ideal !</h1>
                <a href=""><img class="logo_img" src="img/logo.png">
            
                <ul class="right light hide-on-med-and-down">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>

                <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>
</header>

<!-- HOME -->
<section class="home bloco scrollspy" id="home">
        <div class="row container banner">
            <div class="col s12 center">
                <h2 class="white-text">Produzimos sites para sua empresa.</h2>
                <p class="white-text light">Encontre seu site, peça seu site de acordo com sua demanda,
                 ideal para suas nescessidades e a de seus clientes.</p>
                <div class="row">
                    <a href="#sobre" class="btn btn-large color-logo">Sobre nós</a>
                    <a href="#contato" class="btn btn-large white black-text">Contato</a>
                </div>
            </div>
        </div>
</section>

<!-- SOBRE -->
<section class="sobre bloco scrollspy" id="sobre">
    <div class="row container">
        <div class="col s12 center">
            <h2 class="light titulo">Sobre nós</h2>
        </div>
        <div class="col s12 l12">
            <p class="light">
            Nós da Montain monkey dev, temos como dever principal desenvolver um site front-end que atenda sua demanda e de sua empresa, para que você forneça seu serviço de uma maneira atual, responsiva e arrojada.
            </p>
        </div>
    </div>
    <div class="row missao-visao-valores">
        <div class="container">
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">directions_run</i></span>
                    <h3 class="light">Funcionamento</h3>
                    <p class="light">Está a sua disposição o melhor de nosso portfólio para que você escolha quais elementos se encaixam no que está procurando. Ao nos informar quais elementos você requisita nós iremos desenvolver um site iteiramente feito para a sua demanda.</p>
                </article>
            
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">visibility</i></span>
                    <h3 class="light">Visão</h3>
                    <p class="light">Na nossa visão se realizamos todas as requisições de nossos clientes, temos a sensação de dever cumprido, e ainda estamos disponíveis para suporte em caso de futuros imprevistos, para nós o importante é qualidade e compromisso.</p>
                </article>
            
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">grade</i></span>
                    <h3 class="light">Valores</h3>
                    <p class="light">
                        Entrega<br>
                        Qualidade<br>
                        Disponibilidade<br>
                        Compromisso
                    </p>
                </article>
        </div>
    </div>
</section>

<!-- SERVICOS-->
<section class="servicos bloco scrollspy" id="servicos">
    <div class="row container">
        <div class="col s12 center">
            <h2 class="light titulo black-text">Serviços</h2>
            <p class="light paragrafo black-text">Veja alguns sites do nosso portfólio, verifique se algum atende sua demanda.</p>
        </div>
    </div>

    <div class="row container">
        <!--ACADEMIA-->
        <article class="col s12 m6 l6">
            <div class="card">
                <div class="card-image">
                    <img src="img/academia.jpg" alt="Academia" class="materialboxed">
                    <a href="Portfolio/Academia/index.php" target="blank" class="btn btn-floating halfway-fab color-logo modal-trigger">
                        <i class="material-icons">add</i>
                    </a>
                </div>

                <div class="card-content">
                    <h3 class="card-title"> Academia </h3>
                    <p class="light">Modelo de site de academia.</p>
                </div>
            </div>
        </article>

        <!--CLÍNICA-->
        <article class="col s12 m6 l6">
            <div class="card">
                <div class="card-image">
                    <img src="img/clinica.jpg" alt="Clínica" class="materialboxed">
                    <a href="Portfolio/Clinica/index.php" target="blank" class="btn btn-floating halfway-fab color-logo modal-trigger">
                        <i class="material-icons">add</i>
                    </a>
                </div>

                <div class="card-content">
                    <h3 class="card-title"> Clínica </h3>
                    <p class="light">Modelo de site de Clínica.</p>
                </div>
            </div>
        </article>
</section>

<!--CONTATO-->
<section class="contato bloco scrollspy" id="contato">
    <div class="row container">
        <div class="col s12 center">
            <h2 class="titulo light black-text">Contato</h2>
        </div>

        <div class="col s12 m6 l4 hide-on-med-only">
            <div class="mapa transparent">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d692.485265016024!2d-37.06547623273722!3d-10.9415876401331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71ab36709fab6c9%3A0xc7e2463999624d12!2sCond.%20Verdes%20Mares%2C%20Bloco%20N!5e0!3m2!1spt-BR!2sbr!4v1632335656413!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="col s12 m6 l4">
            <div class="informacoes black-text">
                <h4> Redes Sociais </h4>
                <p class="light"> Fique por dentro das novidades, receba dicas, ou 
                mostre ao mundo que você faz parte desse projeto sensacional !</p>
                <a href="" class="btn-floating color-logo"><i class="fab fa-facebook-f"></i></a>
                <a href="" class="btn-floating color-logo"><i class="fa fa-google"></i></a>
                <a href="" class="btn-floating color-logo"><i class="fa fa-twitter"></i></a>

                <h4> Endereço </h4>
                <p class="light"> Av Adelia Franco, 123 <br>
                    Grageru, Aracaju-SE</p>

                <h4> Contato </h4>
                <p class="light"> (79) 9 9999-1234 </p>

            </div>
        </div>

        <div class="col s12 m6 l4">
            <div class="formulario white black-text">
                <h4> Fale Conosco !</h4>
                <p class="light"> Dúvidas, criticas ou sugestões ? Entre em contato e dê seu feedback.</p>

                <form action="" method="POST">
                    <div class="input-field">
                        <input type="text" name="name" id="name">
                        <label for="name">Seu nome</label>
                    </div>
                    
                    <div class="input-field">
                        <input type="email" name="email" id="email">
                        <label for="email">Seu email</label>
                    </div>

                    <div class="input-field">
                        <input type="text" name="subject" id="subject">
                        <label for="subject">Assunto</label>
                    </div>

                    <div class="input-field">
                        <textarea id="message" name="message" class="materialize-textarea"></textarea>
                        <label for="message">Mensagem</label>
                    </div>

                    <button class="btn color-logo" type="submit"> Enviar </button>

                </form>
            </div>
        </div>

    </div>
</section>

<!--RODAPÉ-->
<footer class="rodape">
    <div class="row container center">
        <img src="img/logo.png" class="logo_img">
        <p class="light white-text"> Desenvolvedora Mountain Monkey 2021 - Todos os direitos reservados</p>
    </div>
</footer>

<!--GOOGLE ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/9b1e88f581.js" crossorigin="anonymous"></script>
<!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>        
<!-- MATERIALIZE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- JAVASCRIPT -->
    <script>
        //INICIALIZAÇÃO
        $(document).ready(function(){
            // MENU MOBILE
            $('.sidenav').sidenav();
            // LINK INTERNO
            $(".scrollspy").scrollSpy({
                scrollOffset: 0
            });
            //CAROUSEL
            $(".carousel.carousel-slider").carousel({fullWidth: true});
            });
            //AUTOPLAY
            $('.carousel').carousel({    
            });
            autoplay();
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 4000);
            }
            // AMPLIAR
            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });
            // ADICIONANDO NAVCOLOR
            $(window).on("scroll",function(){
                if($(window).scrollTop() > 100) {
                    $(".navbar").addClass("nav-color");
                }else{
                    $(".navbar").removeClass("nav-color");
                }
        });
    </script>

</body>
</html>