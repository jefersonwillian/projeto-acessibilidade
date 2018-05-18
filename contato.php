<?php include_once "header.php"; ?>
<article class="BannerInicioPagina">
   <div class="col-md-12">
      <h1>Contato</h1>
   </div>
</article>
<main>
   <article>
   <div class="col-md-12 text-center">
      <h2>
         <a href="#" title="Deixe seu recado no formulário abaixo!"> Deixe seu recado no formulário abaixo!</a>
      </h2>
   </div>
   <div class="col-md-8 formContato">
      <form class="">
         <div class="col-md-6">
            <label>Nome</label><br>
            <input type="text" name="FormNome" placeholder="Seu nome*">
         </div>
         <div class="col-md-6">
            <label>E-mail</label><br>
            <input type="email" name="FormEmail" placeholder="Seu e-mail*">
         </div>
         <div class="col-md-6">
            <label>Assunto</label><br>
            <input type="text" name="FormAssunto" placeholder="Assunto*">
         </div>
         <div class="col-md-6">
            <label>Telefone</label><br>
            <input type="text" name="FormTelefone" placeholder="Seu telefone*">
         </div>
         <div class="col-md-12">
            <label>Mensagem</label><br>
            <textarea name="FormMensagem" placeholder="Sua mensagem*"></textarea>
         </div>
         <button type="submit" class="ButtonForm" title="Enviar Mensagem" onclick="msgs()">Enviar</button>
      </form>
   </div>
   <div class="col-md-4 formDadosContato">
      <div class="col-md-12 text-center">
         <h3><a href="#" title="Entre em Contato">Entre em Contato</a></h3>
      </div>
      <div class="col-md-12">
         <h4>
            <i class="fa fa-map-marker"></i>
            <a href="#" title="">São Roque - São Paulo</a>
         </h4>
      </div>
      <div class="col-md-12">
         <a href="" title="">
            <h4><i class="fa fa-globe"></i>
               www.syswebpcd.com.br/
            </h4>
         </a>
      </div>
      <div class="col-md-12">
         <h4><i class="fa fa-phone"></i><a href="#" title=" (11) 9 5557 1918"> (11) 9 9999 9999</a></h4>
      </div>
      <div class="col-md-12">
         <a href="mailto:jeferson.wc@outlook.com" title="jeferson.wc@outlook.com">
            <h4><i class="fa fa-envelope"></i> contato@syswebpcd.com.br</h4>
         </a>
      </div>
      <div class="col-md-12">
         <button class="buttonWhatsApp"> <i class="fa fa-whatsapp"></i> Contato Via WhatsApp</button>                                      
      </div>
   </div>
</article>
</main>
<?php include_once "newsletter.php"; ?>
<?php include_once "footer.php"; ?>