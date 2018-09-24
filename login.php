<?php include_once "header.php"; ?>
<main>
	<article class="Login">
		<div class="container">
			<div class="col-md-12 text-center">
				<h2 tabindex="0">
					Login
				</h2>
			</div>
			<div class="col-md-12 formContato formLogin">
				<form>
					<div class="col-md-12">
						<label>Nome</label><br>
						<input type="text" name="FormNome" placeholder="Seu Email*">
					</div>
					<div class="col-md-12">
						<label>Senha</label><br>
						<input type="password" name="FormNome" placeholder="Seu Email*">
					</div>               
				</form>
				<div class="ButtonVaga text-left">
					<button onclick="window.open('index.php', '_self');">Entrar</button>
				</div>
			</div>         
		</div>
	</article>
</main>

<?php include_once "footer.php"; ?>