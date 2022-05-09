<?php
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("location: index.php");
        exit;
    }
    include ("classe/usuarios.php");

    $consulta = "SELECT * FROM usuarios";
    $con = $mysqli->query($consulta) or die($mysqli->error);

    if (!empty($_GET["id_usuario"])){
        $res = mysqli_query($db_conec, "SELECT * FROM usuarios WHERE id_usuario= " . $_GET["id_usuario"]);
        $linha = mysqli_fetch_row($res);
        $nome = $linha[4];
        $codigo = $linha[0];
        $data = $linha[3];
        $telefone = $linha[2];
    }else{
        $nome = "";
        $codigo = "";
        $data = "";
        $telefone = "";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> BemEstar - Cuidando do seu bem estar ! </title>
        <link rel="icon" href="img/icon.png">
    	<meta name="author" content="Diego Santos">
        <!-- MATERIALIZE CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    	<!-- CSS -->
        <link rel="stylesheet" href="../css/menu.css">
        <!-- FONT AWESOME -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    </head>

    <script>
        function sair(){
            res = confirm("Tem certeza que deseja sair ?");
            if(res){
                window.location = "sair.php";
            }
        }
    </script>

    <body>
        <!-- CABEÇALHO --> 
        <header>
            <!--MENU MOBILE-->
            <ul class="sidenav" id="menu-mobile">
                <li><input type="button" class="sidenav-close btn-sair" value="Sair" onclick="sair()"></li>
            </ul>

            <div class="navbar">
                <nav class="navbar z-depth-0">
                    <div class="nav-wrapper container">
                        <a href="menu.php"><h1 class="logo"> BemEstar - Cuidando do seu bem estar ! </h1></a>
                        
                        <ul class="right light hide-on-med-and-down">
                            <li><input type="button" class="sidenav-close btn-sair" value="Sair" onclick="sair()"></li>
                        </ul>

                        <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            </div>
        </header>
    
        <!-- MENU --> 
        <main class="servicos containers">
            <!-- SERVICOS-->
            <section class="servicos bloco scrollspy" id="servicos">
                <div class="row container">
                    <div class="col s12 center">
                        <h2 class="light titulo black-text">Agendamento</h2>
                        <p class="light paragrafo black-text">Realize seu agendamento.</p>
                        <p class="light recado black-text">(Caso esteja editando um agendamento, certifique-se de mudar o dia, para evitar que ocorram erros.)</p>
                    </div>
                </div>
                <br>
            
                <div class="row container">
                    <div class="space container">
                        <div class="formulario" id="corpo-form">
                            <form name="cadastro"action="inserir.php">
                                <input type="hidden" name="id_usuario" value="<?=$codigo ?>">
                                <input type="date" name="email" id="iddata" placeholder="Data do compromisso" autocomplete="off" required value="<?=$data?>">
                                <input type="time" name="telefone" id="idtelefone" placeholder="Hora da consulta" autocomplete="off" required value="<?=$telefone?>">
                                <div class="input-field col s12">
                                    <select type="text" name="senha" id="idnome" autocomplete="off"  value="<?=$nome?>">
                                        <option value=""></option>
                                        <option value="Presencial">Presencial</option>
                                        <option value="Online">Online</option>
                                    </select>
                                </div>
                                <input class="btn green-logo" type="submit" value="Salvar">
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <section class="servicos bloco scrollspy" id="servicos">

                    <!--BOTÃO DE VOLTAR-->
                    <div class="row center btn-planos">
                        <a href="menu.php" class="btn btn-large blue-logo modal-trigger">Voltar</a>
                    </div>

                </section>
            </section>
        </main>

        

        <!-- RODAPÉ -->
        <footer class="rodape containers bg-gradient">
          <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
          </div>
          <p class="copyright"> Copyright © 2021. Todos os direitos reservados. </p>
        </footer>       
        
        <!--GOOGLE ICONS-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- JQUERY --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- MATERIALIZE JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- JAVASCRIPT -->
        <script>
            $(document).ready(function(){
                $(".btn-menu").click(function(){
                    $(".menu").show();
                });

                $(".btn-close").click(function(){
                    $(".menu").hide();
                });
        
                // MENU MOBILE
                $('.sidenav').sidenav();
                // LINK INTERNO
                $(".scrollspy").scrollSpy({
                    scrollOffset: 0
                });
                //CAROUSEL
                $(".carousel.carousel-slider").carousel({fullWidth: true});
                });
                // MODAL
                $(".modal").modal();
                // MODAL AUTOMATICO

                // TABS
                $("ul.tabs").tabs();
                // SELECT
                $(document).ready(function(){
                    $('select').formSelect();
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