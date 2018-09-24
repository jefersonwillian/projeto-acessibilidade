<?php include_once "header.php"; ?>
<article class="BannerInicioPagina">
   <div class="col-md-12">
      <h1 tabindex="0">Contato</h1>
   </div>
</article>
<main>
   <article class="ContatoForm">
      <div class="container">
         <div class="col-md-12 text-center">
            <h2 tabindex="0">
               Deixe seu recado no formulário abaixo!
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
            </form>
            <div class="col-md-12 ButtonVaga">
               <button type="submit" onclick="window.open('contatopop.php', '_self');">Candidatar-se a essa vaga</button>
            </div>            
         </div>
         <div class="col-md-4 formDadosContato">
            <div class="col-md-12 text-center">
               <h3 tabindex="0">Entre em Contato</h3>
            </div>
            <div class="col-md-12">
               <h4 tabindex="0">
                  <i class="fa fa-map-marker"></i>
                  São Roque - São Paulo
               </h4>
            </div>
            <div class="col-md-12">
               <a href="index.php" title="" class="color-black">
                  <h4><i class="fa fa-globe"></i>
                     www.syswebpcd.com.br/
                  </h4>
               </a>
            </div>
            <div class="col-md-12">
               <h4 tabindex="0"><i class="fa fa-phone"></i>(11) 9 9999 9999</h4>
            </div>
            <div class="col-md-12">
               <a href="mailto:jeferson.wc@outlook.com" title="jeferson.wc@outlook.com" class="color-black">
                  <h4><i class="fa fa-envelope"></i> contato@syswebpcd.com.br</h4>
               </a>
            </div>
            <div class="col-md-12">
               <button class="buttonWhatsApp" onclick="window.open('https://api.whatsapp.com/send?phone=5511955571918&text=Contato%20via%20site%20', '_blank');"> <i class="fa fa-whatsapp"></i> Contato Via WhatsApp</button>                                      
            </div>
         </div>         
      </div>
   </article>
</main>
<?php include_once "newsletter.php"; ?>
<?php include_once "footer.php"; ?>