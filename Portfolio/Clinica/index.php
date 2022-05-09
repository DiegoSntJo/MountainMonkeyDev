<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> BemEstar - Cuidando do seu bem estar ! </title>
    	<meta name="author" content="Diego Santos">
    	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    	<link rel="icon" href="img/icon.png">
    </head>

    <script>
        function redire(){
        window.location = "cadastrar.php";
        }
        function redirectin(){
        window.location = "index.php#sobre";
        }
    </script>

    <body>
        <!-- CABEÇALHO --> 
        <header class="cabecalho container">
            <a href="index.php"><h1 class="logo"> BemEstar - Cuidando do seu bem estar ! </h1></a>
            <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
            <nav class="menu">
                <a class="btn-close"><i class="fa fa-times"></i></a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#us">Quem somos</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
           </nav>          
        </header>

        <!-- BANNER --> 
        <div class="banner container">
            <div class="title">
                <h2> BEM ESTAR </h2>
                <h3> Seu bem estar é a nossa prioridade !</h3>
            </div>

            <div class="buttons">
                <button class="btn btn-cadastrar bg-white radius" onclick='redire()'> Cadastrar <i class="fa fa-arrow-circle-right"></i></button>
                <button class="btn btn-sobre bg-black radius" onclick='redirectin()'> Sobre <i class="fa fa-question-circle"></i></button>
            </div>
        </div>

        <!-- SERVICOS --> 
        <main class="servicos container" id="us">

            <article class="servico bg-white radius">
                <a><img src="img/criacoes.jpg" alt="Campanhas publicitárias"></a>
                <div class="inner">
                   <a> Disponibilidade </a>
                   <h4>Calendário Flexível</h4>
                   <p>Se você está precisando de uma consulta psicológica, mas, não consegue vagas, nós do Bem Estar temos o que você procura.
                   Estamos disponiveis para consultas online 24 horas por dia, 7 dias por semana, Então venha e agende sua consulta. </p>
                </div>
            </article>

            <article class="servico bg-white radius">
                <a><img src="img/md.jpg" alt="Marketing Digital"></a>
                <div class="inner">
                   <a> Conforto e Atendimento </a>
                   <h4>Melhor atendimento para você</h4>
                   <p>Além de disponibilade, temos os melhores profissionais da area esperando por você,
                    sempre tratando com respeito, conforto, ética e privacidade. </p>
                </div>
            </article>

            <article class="servico bg-white radius">
                <a><img src="img/cs.jpg" alt="Criação de Sites"></a>
                <div class="inner">
                   <a> Melhores Preços </a>
                   <h4> Temos os melhores preços. </h4>
                   <p>Temos os melhores preços do mercado e com super descontos e promoções. </p>
                </div>
            </article>
        </main>

        <!-- SOBRE -->
        <section class="sobre container" id="sobre">

            <div class="about-titulo">
                <h2>Sobre nós</h2>
            </div>

            <div class="container">
                <div class="about">
                    <p class="light">
                        Lorem ipsum dolor sit amet. Ut voluptas sint eos nihil dolores qui vitae officiis? Est magnam accusantium est nihil assumenda qui itaque vitae ut illum enim est temporibus dolor eos explicabo velit. Sit corporis minus eum galisum quidem et debitis saepe.

                        Et consequatur quibusdam sed iste quisquam ut dolores ipsam qui incidunt accusantium ut debitis minus aut quos illo. Ad earum tempora At blanditiis accusantium et ipsam omnis eos ullam cumque! Sit distinctio sapiente quo illo sapiente ut nobis veniam et exercitationem consequatur 33 minima similique!

                        Eos voluptatibus laudantium et voluptate maxime et numquam reiciendis qui sint tenetur. Quisquam dolores qui velit porro quo totam corrupti et molestiae blanditiis sed quibusdam quod. A eaque culpa vel incidunt minus et sapiente voluptatem ad sunt minus qui molestias atque.
                    </p>
                    
                    <a><img src="img/Diva.jpg"></a>
                </div>
            </div>
        </section>

        <!--CONTATO-->
        <section class="container" id="contato">
            
            <div class="cont-titulo">
                <h2>Contato</h2>
            </div>

            <div class="container contato">

                <!--class="col s12 m6 l4 hide-on-med-only"-->

                <div class="container mapa">

                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d692.485265016024!2d-37.06547623273722!3d-10.9415876401331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71ab36709fab6c9%3A0xc7e2463999624d12!2sCond.%20Verdes%20Mares%2C%20Bloco%20N!5e0!3m2!1spt-BR!2sbr!4v1632335656413!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="container informacoes">
                    <div class="">
                        <h4> Redes Sociais </h4>
                        <p> Fique por dentro das novidades, receba dicas, ou 
                        mostre ao mundo que você faz parte desse projeto sensacional !</p><br>
                        <a href="" class=""></a>
                        <a href="" class=""></a>
                        <a href="" class=""></a>

                        <h4> Endereço </h4>
                        <p> Av Adelia Franco, 123 <br>
                        Grageru, Aracaju-SE</p><br>

                        <h4> Contato </h4>
                        <p> (79) 9 9999-1234 </p>

                    </div>
                </div>

                <div class="container cont-form">
                    <div class="">
                        <h4> Fale Conosco !</h4>
                        <p> Dúvidas, criticas ou sugestões ? Entre em contato e dê seu feedback.</p><br>

                        <form action="" method="POST">
                            <div>
                                <input type="text" name="name" id="name" placeholder="Seu nome"><br><br>
                            </div>
                    
                            <div>
                                <input type="email" name="email" id="email" placeholder="Seu email"><br><br>
                            </div>

                            <div>
                                <input type="text" name="subject" id="subject" placeholder="Assunto"><br><br>
                            </div>

                            <div>
                                <textarea id="message" name="message" placeholder="Mensagem"></textarea><br><br>
                            </div>

                            <button type="submit"> Enviar </button>
                        </form>
                    </div>
                </div>

            </div>
        </section>

        <!-- NEWSLETTER -->
        <section class="newsletter container bg-black">
           <h2> Inscreva-se agora! </h2>
           <h3>  Receba novidades, dicas e muito mais </h3>
           <form>
              <input class="bg-black radius" type="email" name="email" placeholder="Seu email">
              <button class="bg-white radius"> Cadastrar </button>
           </form>
        </section>
        
        <!-- RODAPÉ -->
        <footer class="rodape container bg-gradient">
          <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
          </div>
          <p class="copyright">
            Copyright © 2021. Todos os direitos reservados.
        </footer>       
        
        <!-- JQUERY --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>
        $(".btn-menu").click(function(){
          $(".menu").show();
        });
        $(".btn-close").click(function(){
          $(".menu").hide();
        });
        </script>      
    </body>
</html>