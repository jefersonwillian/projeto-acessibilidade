<?php include_once "header.php"; ?>
<article class="BannerInicioPagina">
   <div class="col-md-12">
      <h1>Anunciar Vaga</h1>
   </div>
</article>
<main>
   <article>
      <div class="col-md-12 tex-center">
         <form action="#" method="GET">
            Empresa:
            <input type="text" size="30" name="empresa" value="">
            CNPJ
            <input type="text" size="11" name="cnpj" value="">
            <br>
            Ramo de Atuação:
            <input type="text" size="40" name="atuacao" value="">
            <br>
            Email:
            <input type="email" size="50" name="email" value="">
            <br>
            Telefone:
            <input type="text" size="16" name="telefone" value="">
            <br>
            Endereço:
            <input type="text" size="40" name="endereco" value="">
            <br>
            Senha:
            <input type="text" size="10" name="Senha1" value="">
            Confirme sua Senha
            <input type="text" size="10" name="senha2" value="">
            <br>
            <br>
            <input type="submit" value="Cadastrar">     
         </form>
      </div>
      <div class="col-md-12">
         <h3>
            Cadastre sua Vaga
         </h3>
         <button>Cadastrar Vagas</button>
      </div>
   </article>
</main>
<?php include_once "footer.php"; ?>