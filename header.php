<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Agência SYSWEB PCD - São Roque</title>
   <meta name="robots" content="index,follow">
   <meta name="subtitle" content= "agencia de emprego para pessoas com deficiencia "/>
   <meta name="pagename" content="SYSWEB PCD agencia de emprego para pessoas com deficiencia"/>
   <meta name="keywords" content="vagas para deficientes, vagas pcd, deficiente empregos, vagas pessoas com deficiencia, vaga pne, contratação de deficientes, vagas exclusiva para pcd">
   <meta name="description" content= "SYSWEB PCD: Vagas de Emprego para Deficientes, são milhares de Vagas e Currículos de PCD no maior site de Empregos de pessoas com Deficiência do Brasil."/>
   <meta name="subject" content="Vagas de Empregos para Deficientes PCD"/>
   <meta name="language" content="pt-BR">
   <meta name="abstract" content=""/>
   <meta name="author" content="SYSWEB PCD"/>
   <meta name="url" content="syswebpcd.com.br"/>
   <meta name="identifier-URL" content="syswebpcd.com.br" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="HandheldFriendly" content="True">
   <!-- Bootstrap -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet" title="1">
   <link href="css/escuro.css" rel="stylesheet" title="2">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="js/alert.js"></script>

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

   <![endif]-->
</head>
<script>
   function fonte(e){
      var elemento = document.getElementById("conteudo");
      var atual = elemento.style.fontSize;
      if (e == 'a') {
         atual = parseInt(atual)+1+'px';
      }else if (e == 'b') {
         atual = parseInt(atual)-1+'px';
      }

      elemento.style.fontSize=atual;
   }

   function cor(e){
      e.preventDefault();
      if ( getActiveStyleSheet() == '1') {
       setActiveStyleSheet('2');
    } else {
       setActiveStyleSheet('1');
    }

 } 

</script>
<body id="conteudo" style="font-size: 14px;">
  <header>
   <nav class="submenu">
      <div class="submenu-contato">
         <ul>
            <li class="esp-itens-help-l1">
               <button type="button" value="+" onclick="fonte('a');" class="buttonAce"><i class="fa fa-plus-circle"></i> Aumentar Fonte</button>
            </li>
            <li class="esp-itens-help">
               <button type="button" value="+" onclick="fonte('b');"  class="buttonAce"><i class="fa fa-minus-circle" id="btnDiminuir"></i> Diminuir Fonte</button>
            </li>
            <li class="esp-itens-help">
               <button class="buttonAce" onclick="cor('1')"><i class="fa fa-image"></i> Alterar Contraste do Site</button>
            </li>            
         </ul>
      </div>
      <div class="submenu-midias-sociais">
         <ul>
            <li>
               <a href="">
                  <i class="fa fa-facebook"></i>
               </a>
            </li>
            <li>
               <a href="">
                  <i class="fa fa-whatsapp"></i>
               </a>
            </li>
            <li>
               <a href="">
                  <i class="fa fa-twitter"></i>
               </a>
            </li>
            <li>
               <a href="">
                  <i class="fa fa-linkedin"></i>
               </a>
            </li>
         </ul>
      </div>
   </nav>
   <nav class="navbar navbar-default">
      <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
               <p>SYSWEB PCD</p>
            </a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li>
                  <a href="index.php" name="topo">Home</a>
               </li>
               <li>
                  <a href="quemSomos.php">Quem Somos</a>
               </li>
               <li>
                  <a href="BucarVagas.php">Buscar Vagas</a>
               </li>
               <li>
                  <a href="AnunciarVaga.php">Anunciar Vaga</a>
               </li>
               <li>
                  <a href="leiCotas.php">Lei de Cotas</a>
               </li>
               <li>
                  <a href="fiscalizacao.php">Fiscalização</a>
               </li>
               <li>
                  <a href="contato.php">Contato</a>
               </li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-login">
               <li>
                  <a href="cadastroCurriculo.php">
                     Cadastra-se
                  </a>
               </li>
               <li>
                  <a href="login.php">
                     Login
                  </a>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
   </nav>
</header>