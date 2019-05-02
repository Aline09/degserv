<?php
//Messages to the user

$msg = '';
$msgClass = '';

//Form Validation
if(filter_has_var(INPUT_POST, 'submit')){
  //Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)){
    //Passed
    //Email header
    $headers = "Content-type:text/html;charset=UTF-8 \r\n";
    $headers .= "MIME Version: 1.0 \r\n";
    $headers .= "From:  $name,  $email \r\n";

    $toEmail = 'contato@degserv.com.br';
    $subject = 'Contato de ' . $name;
    $corpo = '<html><body>';
    $corpo .= '<strong>Mensagem de Contato</strong><br>';
    $corpo .= '<strong>Nome: </strong>' . $name . '<br>';
    $corpo .= '<strong>Email: </strong>' . $email . '<br>';
    $corpo .= '<strong>Telefone: </strong>' . $phone . '<br>';
    $corpo .= '<strong>Mensagem: </strong>' . $message;
    $corpo .= '</body></html>';


    
    if(mail($toEmail, $subject, $corpo, $headers)){
      $msg = "Email enviado";
      $msgClass = "green-text";
      echo '<script>
      window.location.href = "#contact";
        </script>';

    }else{
      $msg = "Email não enviado";
      $msgClass = "red-text";
     
      
    }
  }else{
    //Failed
    $msg = "Por favor, preencha todos os campos";
    $msgClass = "red-text";
    echo '<script>
    window.location.href = "#contact";
      </script>';
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
      <meta charset="ISO-8859-1">
    <!--Import Google Font Lato-->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:400,700"
      rel="stylesheet"
    />
    <!--Import Google Icon Font-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!--Import materialize.css-->
    <link
      type="text/css"
      rel="stylesheet"
      href="css/materialize.min.css"
      media="screen,projection"
    />

    <link rel="stylesheet" href="css/animate.css" />
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <script src="https://maps.googleapis.com/maps/api/js" async defer></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Description" content=" Somos uma empresa especialista em limpeza e recuperação  de
            peças industriais. Atuamos no Sul de Minas desde 2015 e nossa sede
            fica em Pouso Alegre/MG.">
    <meta name="Keywords" content="Limpeza e Recuperação de Peças Industriais, Pouso Alegre - MG">
    <title>D&G serviços e Fabricação | Limpeza e Recuperação de peças industriais</title>
  </head>

  <body id="home" class="scrollspy">
    <div id="preloader">
      <div class="inner">
        <img src="img/preloader.gif" alt="" />
      </div>
    </div>
    <header class="main-header">
      <div class="primary-overlay">
        <div class="navbar-fixed">
          <nav class="blue-grey darken-3">
            <div class="container">
              <div class="nav-wrapper">
                <a href="http://degserv.com.br" class="brand-logo">D&G</a>
                <a href="#home" data-activates="mobile-nav" class="button-collapse">
                  <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#home">HOME</a></li>
                  <li><a href="#about">SOBRE</a></li>
                  <li><a href="#servicos">SERVIÇOS</a></li>
                  <li><a href="#iso">ISO 9001:2015</a></li>
                  <li><a href="#contact">CONTATO</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <!--Side Nav-->
        <ul class="side-nav" id="mobile-nav">
          <h4 class="blue-grey-text text-darken-3 center">D&G</h4>
          <li><div class="divider"></div></li>
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">SOBRE</a></li>
          <li><a href="#servicos">SERVIÇOS</a></li>
          <li><a href="#iso">ISO 9001:2015</a></li>
          <li><a href="#contact">CONTATO</a></li>
        </ul>
        <div class="showcase container">
          <div class="row">
            <div class="col s12 main-text">
              <h5>Seja bem-vindo à</h5>
              <h1>D&G Serviços e Fabricação</h1>

              <br />
              <a href="#about" class="btn btn-large white black-text"
                >Conheça</a
              >
              <a href="#contact" class="white-text"
                ><i class="material-icons medium scroll-icon"
                  >arrow_drop_down_circle</i
                ></a
              >
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--Fim do Header-->

    <!--Teste novo sobre nós-->
    <section
      class="section blue-grey darken-3 white-text padding-top-bg scrollspy"
      id="about"
    >
      <div class="row">
        <div class="col s12 m12 l6">
          <div class="slider">
            <ul class="slides">
              <li>
                <img src="img/drill.jpg" alt="" />
                <div class="caption"></div>
              </li>
              <li>
                <img src="img/d-e-g-quem-somos-nos.png" alt="" />
                <div class="caption"></div>
              </li>
              <li>
                <img
                  src="img/d-e-g-servicos-fabricacao-pouso-alegre.jpeg"
                  alt=""
                />
                <div class="caption"></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col s12 m12 l6">
          <h4>
            QUEM É A
            <span class="cyan-text text-lighten-1">D&G SERVIÇOS</span>
          </h4>
          <blockquote class="font-size-md">
            Somos uma empresa especialista em <b>limpeza e recuperação</b> de
            peças industriais. Atuamos no Sul de Minas desde 2015 e nossa sede
            fica em Pouso Alegre/MG.
            <p>
              Trabalhamos dentro dos mais rígidos padrões de qualidade e
              possuímos infraestrutura de equipamentos, pessoal e espaço físico
              para atender todas as necessidades dos nossos clientes.
            </p>
            <p>
              A qualidade dos nossos serviços é certificada pela
              <b>ISO 9001:2015</b> , passando por auditorias internas e
              externas.
            </p>
          </blockquote>
        </div>
      </div>
    </section>

    <!--Section Serviços-->
    <section class="section-boxes center scrollspy" id="servicos">
      <h2>SERVIÇOS</h2>
      <div class="row">
        <div class="container">
          <div class="col s12 m3">
            <div class="icon-block">
              <h2 class="center">
                <i class="material-icons medium cyan-text text-lighten-1"
                  >build</i
                >
              </h2>
              <h5>Limpeza</h5>
              <p>
                Elimina resíduos químicos perigosos que corroem a peça e
                aumentam sua depreciação. Principalmente, preserva e garante a
                saúde de seus funcionários.
              </p>
            </div>
          </div>

          <div class="col s12 m3">
            <div class="icon-block">
              <h2 class="center">
                <i class="material-icons medium cyan-text text-lighten-1"
                  >settings</i
                >
              </h2>
              <h5>Recuperação</h5>
              <p>
                O processo de recuperação de peças passa por rigorosos pontos de
                controle garantindo a correta utilização de materiais. O nosso
                segredo são nossos equipamentos de ponta e profissionais
                qualificados.
              </p>
            </div>
          </div>

          <div class="col s12 m3">
            <div class="icon-block">
              <h2 class="center">
                <i class="material-icons medium cyan-text text-lighten-1"
                  >search</i
                >
              </h2>
              <h5>Inspeção</h5>
              <p>
                Uma prática essencial para garantir a qualidade dos produtos e a
                segurança de todos os envolvidos no processo de produção.
              </p>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="icon-block">
              <h2 class="center">
                <i class="material-icons medium cyan-text text-lighten-1"
                  >done</i
                >
              </h2>
              <h5>Seleção</h5>
              <p>
                Visando a redução de custos, fazemos a seleção das peças
                industriais com atenção e da maneira correta, visando o processo
                como um todo.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Fim Seção Serviços-->

    <!--Seção ISO 9001:2015-->

    <section class="section scrollspy back white-text padding-top-bg" id="iso">
      <div class="container">
        <div class="row">
          <div class="col s12 m6">
            <img
              src="img/ISO90012015-White.png"
              alt=""
              class="responsive-img"
            />
          </div>
          <div class="col s12 m6">
            <h4>Empresa Certificada</h4>
            <br />
            <blockquote>
              <p class="font-size-md">
                Fomos certificados com a <b>ISO 9001:2015</b> por atendermos os
                requisitos legais e regulatórios aplicáveis.
              </p>
              <p class="font-size-md">
                Nossos serviços comprovadamente geram melhorias de processo e
                avaliação de conformidade aos nossos clientes
              </p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

     <!--Seção ISO 9001:2015-->

     <section class="section scrollspy blue-grey white-text padding-top-bg" id="iso">
      <div class="container">
        <div class="row">
          <div class="col">
            <h4>Politica de Qualidade</h4>
            <br />
              <ul class="collection">
                <li class="collection-item blue-grey-text text-darken-2">Promover, sempre, a melhoria contínua dos serviços prestados, visando a satisfação dos clientes</li>
                <li class="collection-item blue-grey-text text-darken-2">Prestar serviços que atendam aos requisitos dos clientes, bem como os requisitos do Sistema de Gestão da Qualidade</li>
                <li class="collection-item blue-grey-text text-darken-2">Promover a divulgação e treinamento do Sistema de Gestão da Qualidade a todas as pessoas da empresa</li>
                <li class="collection-item blue-grey-text text-darken-2">Engajar, dirigir e apoiar as pessoas e contribuir para a eficácia do Sistema de Gestão da Qualidade</li>
                <li class="collection-item blue-grey-text text-darken-2">Assegurar a integridade do Sistema de Gestão da Qualidade, em relação a possíveis mudanças</li>
                <li class="collection-item blue-grey-text text-darken-2">Prover e manter a infra-estrutura necessária para a operação dos seus processos, para alcançar a conformidade dos serviços</li>
                <li class="collection-item blue-grey-text text-darken-2">Monitorar a percepção dos clientes em relação ao grau em que suas necessidades e expectativas foram atendidas.</li>
              </ul>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-contact center scrollspy" id="contact">
      
        <div class="row">
          <div class="col s12 m6">
            <div class="map">
                <iframe
                id="googlemap"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.7699032770365!2d-45.912601050016846!3d-22.286704385258552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cbc0a5accfd025%3A0x4e3aae0e4e77c215!2sAv.+Pref.+Olavo+Gomes+de+Oliveira%2C+4823+-+Res.+Morumbi%2C+Pouso+Alegre+-+MG%2C+37550-000!5e0!3m2!1spt-BR!2sbr!4v1549658259379"
                frameborder="0"
                style="border:0"
                allowfullscreen
              ></iframe>
            </div>
            
          </div>
          <div class="col s12 m6">
            <form id="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              <div>
                <h4>Fale Conosco</h4>
                <div class="input-field">
                  <input type="text" name="name" id="name" placeholder="Nome" />
                  <label for="name">Nome</label>
                </div>
                <div class="input-field">
                  <input type="email" name="email" id="email" placeholder="Email" />
                  <label for="Email">Email</label>
                </div>
                <div class="input-field">
                  <input type="text" name="phone" id="phone" placeholder="Telefone" />
                  <label for="phone">Telefone</label>
                </div>
                <div class="input-field">
                  <textarea class="materialize-textarea" name="message" id="message"> </textarea>
                  <label for="message">Mensagem</label>
                </div>
                <input type="submit" name="submit" class="btn blue-grey" value="Enviar">
              </div>
            </form>
            <?php if($msg != ''):?>
                    <p class="<?php echo $msgClass;?>"><?php echo $msg;?></p>
                <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <!--Footer-->
    <footer class="page-footer blue-grey darken-1">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5>D&G Serviços e Fabricação</h5>
            <p class="font-size-md">
              Av. Prefeito Olavo Gomes de Oliveira, 4823 – Bela Vista – Pouso
              Alegre/MG
            </p>
            <p class="grey-text text-lighten-4 font-size-md">
              CNPJ: 22.911.410/0001-27
            </p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5>Entre em contato</h5>
            <ul>
              <li>
                <i class="material-icons ">phone</i>
                <span class="font-size-md">(35) 99755-2093</span>
              </li>
              <li>
                <i class="material-icons ">email</i>
                <span class="font-size-md">contato@degserv.com.br</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright blue-gray darken-4">
        <div class="container">
          <a
            class="grey-text text-lighten-4 right font-size-md"
            target="_blank"
            href="#"
          >
            Desenvolvido por DTCBC <img style="max-height:25px;" src="img/dtc.png" alt=""></a
          >
        </div>
      </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      //<![CDATA[
      $(window).on("load", function() {
        $("#preloader .inner").fadeOut();
        $("#preloader")
          .delay(350)
          .fadeOut("slow");
        $("body")
          .delay(350)
          .css({ overflow: "visible" });
      });
      //]]>
    </script>
    <script>
      $(document).ready(function() {
        // Init Sidenav
        $(".button-collapse").sideNav();

        // Init ScrollSpy
        $(".scrollspy").scrollSpy();

        //
        $(".slider").slider();

       
        
      });
    </script>
  </body>
</html>
