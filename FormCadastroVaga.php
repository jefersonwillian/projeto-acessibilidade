<script>
	function formatar(mascara, documento){
	  var i = documento.value.length;
	  var saida = mascara.substring(0,1);
	  var texto = mascara.substring(i)
	  
	  if (texto.substring(0,1) != saida){
	            documento.value += texto.substring(0,1);
	  }
	  
	}
</script>

<form id="candidateRegistrationLoginInfo" class="form-horizontal -box">
		<legend tabindex="0">Informações Sobre a Vaga</legend>
		<div class="form-group">
			<label for="name" class="col-sm-3 control-label required">Titulo da Vaga</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="name" id="name" placeholder="Titulo da Vaga">
			</div>
		</div>
		<div class="form-group">
			<label for="descricao" class="col-sm-3 control-label required">Descrição</label>
			<div class="col-sm-9">
				<input type="textarea" class="form-control" name="descricao" id="descricao" placeholder="Descreva a Vaga">
			</div>
		</div>
		
		</div>
		
		<legend tabindex="0">Localização da Vaga</legend>
		<div class="form-group">
			<label for="cep" class="col-sm-3 control-label required">CEP</label>
			<div class="col-sm-9">
				<div class="input-group">
					<input type="text" class="form-control cep" id="cep" name="cep" maxlength="9" autocomplete="off">
					<span class="input-group-btn">
						<!--<button id="dneSearch" class="btn btn-default" type="button" data-loading-text="  <span>Aguarde...</span>">Buscar</button>-->
					</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="state" class="col-sm-3 control-label required">Estado</label>
			<div class="col-sm-9">
				<select class="form-control" id="state" name="state">
					<option value=""></option>
					<option value="AC">AC</option>
					<option value="AL">AL</option>
					<option value="AP">AP</option>
					<option value="AM">AM</option>
					<option value="BA">BA</option>
					<option value="CE">CE</option>
					<option value="DF">DF</option>
					<option value="ES">ES</option>
					<option value="GO">GO</option>
					<option value="MA">MA</option>
					<option value="MT">MT</option>
					<option value="MS">MS</option>
					<option value="MG">MG</option>
					<option value="PA">PA</option>
					<option value="PB">PB</option>
					<option value="PR">PR</option>
					<option value="PE">PE</option>
					<option value="PI">PI</option>
					<option value="RJ">RJ</option>
					<option value="RN">RN</option>
					<option value="RS">RS</option>
					<option value="RO">RO</option>
					<option value="RR">RR</option>
					<option value="SC">SC</option>
					<option value="SP">SP</option>
					<option value="SE">SE</option>
					<option value="TO">TO</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="col-sm-3 control-label required">Cidade</label>
			<div class="col-sm-9">
				<select class="form-control" id="city" name="city">
					<option value=""></option>
					
						<option value="Adamantina">Adamantina</option>
					
						<option value="Adolfo">Adolfo</option>
					
						<option value="Agisse">Agisse</option>
					
						<option value="Aguaí">Aguaí</option>
					
						<option value="Agudos">Agudos</option>
					
						<option value="Agulha">Agulha</option>
					
						<option value="Ajapi">Ajapi</option>
					
						<option value="Alambari">Alambari</option>
					
						<option value="Alberto Moreira">Alberto Moreira</option>
					
						<option value="Aldeia">Aldeia</option>
					
						<option value="Aldeia de Carapicuíba">Aldeia de Carapicuíba</option>
					
						<option value="Alfredo Guedes">Alfredo Guedes</option>
					
						<option value="Alfredo Marcondes">Alfredo Marcondes</option>
					
						<option value="Altair">Altair</option>
					
						<option value="Altinópolis">Altinópolis</option>
					
						<option value="Alto Alegre">Alto Alegre</option>
					
						<option value="Alto Porã">Alto Porã</option>
					
						<option value="Alumínio">Alumínio</option>
					
						<option value="Alvinlândia">Alvinlândia</option>
					
						<option value="Amadeu Amaral">Amadeu Amaral</option>
					
						<option value="Amandaba">Amandaba</option>
					
						<option value="Ameliópolis">Ameliópolis</option>
					
						<option value="Americana">Americana</option>
					
						<option value="Amparo">Amparo</option>
					
						<option value="Américo Brasiliense">Américo Brasiliense</option>
					
						<option value="Américo de Campos">Américo de Campos</option>
					
						<option value="Ana Dias">Ana Dias</option>
					
						<option value="Analândia">Analândia</option>
					
						<option value="Andes">Andes</option>
					
						<option value="Andradina">Andradina</option>
					
						<option value="Angatuba">Angatuba</option>
					
						<option value="Anhembi">Anhembi</option>
					
						<option value="Anhumas">Anhumas</option>
					
						<option value="Anápolis">Anápolis</option>
					
						<option value="Aparecida">Aparecida</option>
					
						<option value="Aparecida D'Oeste">Aparecida D'Oeste</option>
					
						<option value="Aparecida de Monte Alto">Aparecida de Monte Alto</option>
					
						<option value="Aparecida de São Manuel">Aparecida de São Manuel</option>
					
						<option value="Aparecida do Bonito">Aparecida do Bonito</option>
					
						<option value="Apiaí">Apiaí</option>
					
						<option value="Apiaí-Mirim">Apiaí-Mirim</option>
					
						<option value="Arabela">Arabela</option>
					
						<option value="Arabá">Arabá</option>
					
						<option value="Aracaçu">Aracaçu</option>
					
						<option value="Aramina">Aramina</option>
					
						<option value="Arandu">Arandu</option>
					
						<option value="Arapeí">Arapeí</option>
					
						<option value="Araraquara">Araraquara</option>
					
						<option value="Araras">Araras</option>
					
						<option value="Araxás">Araxás</option>
					
						<option value="Araçariguama">Araçariguama</option>
					
						<option value="Araçatuba">Araçatuba</option>
					
						<option value="Araçaíba">Araçaíba</option>
					
						<option value="Araçoiaba da Serra">Araçoiaba da Serra</option>
					
						<option value="Arcadas">Arcadas</option>
					
						<option value="Arco-Íris">Arco-Íris</option>
					
						<option value="Arealva">Arealva</option>
					
						<option value="Areias">Areias</option>
					
						<option value="Areiópolis">Areiópolis</option>
					
						<option value="Ariranha">Ariranha</option>
					
						<option value="Ariri">Ariri</option>
					
						<option value="Artur Nogueira">Artur Nogueira</option>
					
						<option value="Arujá">Arujá</option>
					
						<option value="Aspásia">Aspásia</option>
					
						<option value="Assis">Assis</option>
					
						<option value="Assistência">Assistência</option>
					
						<option value="Atibaia">Atibaia</option>
					
						<option value="Atlântida">Atlântida</option>
					
						<option value="Auriflama">Auriflama</option>
					
						<option value="Avanhandava">Avanhandava</option>
					
						<option value="Avaré">Avaré</option>
					
						<option value="Avaí">Avaí</option>
					
						<option value="Avencas">Avencas</option>
					
						<option value="Bacaetava">Bacaetava</option>
					
						<option value="Bacuriti">Bacuriti</option>
					
						<option value="Bady Bassitt">Bady Bassitt</option>
					
						<option value="Baguaçu">Baguaçu</option>
					
						<option value="Bairro Alto">Bairro Alto</option>
					
						<option value="Balbinos">Balbinos</option>
					
						<option value="Bananal">Bananal</option>
					
						<option value="Bandeirantes D'Oeste">Bandeirantes D'Oeste</option>
					
						<option value="Barbosa">Barbosa</option>
					
						<option value="Bariri">Bariri</option>
					
						<option value="Barra Bonita">Barra Bonita</option>
					
						<option value="Barra Dourada">Barra Dourada</option>
					
						<option value="Barra do Chapéu">Barra do Chapéu</option>
					
						<option value="Barra do Turvo">Barra do Turvo</option>
					
						<option value="Barretos">Barretos</option>
					
						<option value="Barrinha">Barrinha</option>
					
						<option value="Barrânia">Barrânia</option>
					
						<option value="Barueri">Barueri</option>
					
						<option value="Barão Ataliba Nogueira">Barão Ataliba Nogueira</option>
					
						<option value="Barão de Antonina">Barão de Antonina</option>
					
						<option value="Barão de Geraldo">Barão de Geraldo</option>
					
						<option value="Bastos">Bastos</option>
					
						<option value="Batatais">Batatais</option>
					
						<option value="Batatuba">Batatuba</option>
					
						<option value="Batista Botelho">Batista Botelho</option>
					
						<option value="Bauru">Bauru</option>
					
						<option value="Bebedouro">Bebedouro</option>
					
						<option value="Bela Floresta">Bela Floresta</option>
					
						<option value="Bela Vista São-Carlense">Bela Vista São-Carlense</option>
					
						<option value="Bento de Abreu">Bento de Abreu</option>
					
						<option value="Bernardino de Campos">Bernardino de Campos</option>
					
						<option value="Bertioga">Bertioga</option>
					
						<option value="Bilac">Bilac</option>
					
						<option value="Birigüi">Birigüi</option>
					
						<option value="Biritiba-Mirim">Biritiba-Mirim</option>
					
						<option value="Biritiba-Ussu">Biritiba-Ussu</option>
					
						<option value="Boa Esperança do Sul">Boa Esperança do Sul</option>
					
						<option value="Boa Vista Paulista">Boa Vista Paulista</option>
					
						<option value="Boa Vista dos Andradas">Boa Vista dos Andradas</option>
					
						<option value="Bocaina">Bocaina</option>
					
						<option value="Bofete">Bofete</option>
					
						<option value="Boituva">Boituva</option>
					
						<option value="Bom Fim do Bom Jesus">Bom Fim do Bom Jesus</option>
					
						<option value="Bom Jesus dos Perdões">Bom Jesus dos Perdões</option>
					
						<option value="Bom Retiro da Esperança">Bom Retiro da Esperança</option>
					
						<option value="Bom Sucesso de Itararé">Bom Sucesso de Itararé</option>
					
						<option value="Bonfim Paulista">Bonfim Paulista</option>
					
						<option value="Boracéia">Boracéia</option>
					
						<option value="Borborema">Borborema</option>
					
						<option value="Borebi">Borebi</option>
					
						<option value="Borá">Borá</option>
					
						<option value="Botafogo">Botafogo</option>
					
						<option value="Botelho">Botelho</option>
					
						<option value="Botucatu">Botucatu</option>
					
						<option value="Botujuru">Botujuru</option>
					
						<option value="Bragança Paulista">Bragança Paulista</option>
					
						<option value="Brasitânia">Brasitânia</option>
					
						<option value="Braço">Braço</option>
					
						<option value="Braúna">Braúna</option>
					
						<option value="Brejo Alegre">Brejo Alegre</option>
					
						<option value="Brodowski">Brodowski</option>
					
						<option value="Brotas">Brotas</option>
					
						<option value="Brás Cubas">Brás Cubas</option>
					
						<option value="Bueno de Andrada">Bueno de Andrada</option>
					
						<option value="Buri">Buri</option>
					
						<option value="Buritama">Buritama</option>
					
						<option value="Buritizal">Buritizal</option>
					
						<option value="Bálsamo">Bálsamo</option>
					
						<option value="Cabreúva">Cabreúva</option>
					
						<option value="Cabrália Paulista">Cabrália Paulista</option>
					
						<option value="Cachoeira Paulista">Cachoeira Paulista</option>
					
						<option value="Cachoeira de Emas">Cachoeira de Emas</option>
					
						<option value="Caconde">Caconde</option>
					
						<option value="Cafelândia">Cafelândia</option>
					
						<option value="Cafesópolis">Cafesópolis</option>
					
						<option value="Caiabu">Caiabu</option>
					
						<option value="Caibura">Caibura</option>
					
						<option value="Caieiras">Caieiras</option>
					
						<option value="Caiuá">Caiuá</option>
					
						<option value="Cajamar">Cajamar</option>
					
						<option value="Cajati">Cajati</option>
					
						<option value="Cajobi">Cajobi</option>
					
						<option value="Cajuru">Cajuru</option>
					
						<option value="Cambaquara">Cambaquara</option>
					
						<option value="Cambaratiba">Cambaratiba</option>
					
						<option value="Campestrinho">Campestrinho</option>
					
						<option value="Campina de Fora">Campina de Fora</option>
					
						<option value="Campina do Monte Alegre">Campina do Monte Alegre</option>
					
						<option value="Campinal">Campinal</option>
					
						<option value="Campinas">Campinas</option>
					
						<option value="Campo Limpo Paulista">Campo Limpo Paulista</option>
					
						<option value="Campos Novos Paulista">Campos Novos Paulista</option>
					
						<option value="Campos de Cunha">Campos de Cunha</option>
					
						<option value="Campos do Jordão">Campos do Jordão</option>
					
						<option value="Cananéia">Cananéia</option>
					
						<option value="Canas">Canas</option>
					
						<option value="Candia">Candia</option>
					
						<option value="Canguera">Canguera</option>
					
						<option value="Canitar">Canitar</option>
					
						<option value="Capela do Alto">Capela do Alto</option>
					
						<option value="Capivari">Capivari</option>
					
						<option value="Capivari da Mata">Capivari da Mata</option>
					
						<option value="Caporanga">Caporanga</option>
					
						<option value="Capuava">Capuava</option>
					
						<option value="Capão Bonito">Capão Bonito</option>
					
						<option value="Caraguatatuba">Caraguatatuba</option>
					
						<option value="Carapicuíba">Carapicuíba</option>
					
						<option value="Cardeal">Cardeal</option>
					
						<option value="Cardoso">Cardoso</option>
					
						<option value="Caruara">Caruara</option>
					
						<option value="Casa Branca">Casa Branca</option>
					
						<option value="Castilho">Castilho</option>
					
						<option value="Catanduva">Catanduva</option>
					
						<option value="Catiguá">Catiguá</option>
					
						<option value="Catucaba">Catucaba</option>
					
						<option value="Caucaia do Alto">Caucaia do Alto</option>
					
						<option value="Caçapava">Caçapava</option>
					
						<option value="Cedral">Cedral</option>
					
						<option value="Cerqueira César">Cerqueira César</option>
					
						<option value="Cerquilho">Cerquilho</option>
					
						<option value="Cesário Lange">Cesário Lange</option>
					
						<option value="Cezar de Souza">Cezar de Souza</option>
					
						<option value="Charqueada">Charqueada</option>
					
						<option value="Chavantes">Chavantes</option>
					
						<option value="Cipó-Guaçu">Cipó-Guaçu</option>
					
						<option value="Clarinia">Clarinia</option>
					
						<option value="Clementina">Clementina</option>
					
						<option value="Cocaes">Cocaes</option>
					
						<option value="Colina">Colina</option>
					
						<option value="Colômbia">Colômbia</option>
					
						<option value="Conceição">Conceição</option>
					
						<option value="Conceição de Monte Alegre">Conceição de Monte Alegre</option>
					
						<option value="Conchal">Conchal</option>
					
						<option value="Conchas">Conchas</option>
					
						<option value="Cordeirópolis">Cordeirópolis</option>
					
						<option value="Coroados">Coroados</option>
					
						<option value="Coronel Goulart">Coronel Goulart</option>
					
						<option value="Coronel Macedo">Coronel Macedo</option>
					
						<option value="Corredeira">Corredeira</option>
					
						<option value="Corumbataí">Corumbataí</option>
					
						<option value="Cosmorama">Cosmorama</option>
					
						<option value="Cosmópolis">Cosmópolis</option>
					
						<option value="Costa Machado">Costa Machado</option>
					
						<option value="Cotia">Cotia</option>
					
						<option value="Cravinhos">Cravinhos</option>
					
						<option value="Cristais Paulista">Cristais Paulista</option>
					
						<option value="Cruz das Posses">Cruz das Posses</option>
					
						<option value="Cruzeiro">Cruzeiro</option>
					
						<option value="Cruzália">Cruzália</option>
					
						<option value="Cubatão">Cubatão</option>
					
						<option value="Cuiabá Paulista">Cuiabá Paulista</option>
					
						<option value="Cunha">Cunha</option>
					
						<option value="Curupá">Curupá</option>
					
						<option value="Cássia dos Coqueiros">Cássia dos Coqueiros</option>
					
						<option value="Cândido Mota">Cândido Mota</option>
					
						<option value="Cândido Rodrigues">Cândido Rodrigues</option>
					
						<option value="Córrego Rico">Córrego Rico</option>
					
						<option value="Dalas">Dalas</option>
					
						<option value="Descalvado">Descalvado</option>
					
						<option value="Diadema">Diadema</option>
					
						<option value="Dirce Reis">Dirce Reis</option>
					
						<option value="Dirceu">Dirceu</option>
					
						<option value="Divinolândia">Divinolândia</option>
					
						<option value="Dobrada">Dobrada</option>
					
						<option value="Dois Córregos">Dois Córregos</option>
					
						<option value="Dolcinópolis">Dolcinópolis</option>
					
						<option value="Domélia">Domélia</option>
					
						<option value="Dourado">Dourado</option>
					
						<option value="Dracena">Dracena</option>
					
						<option value="Duartina">Duartina</option>
					
						<option value="Dumont">Dumont</option>
					
						<option value="Duplo Céu">Duplo Céu</option>
					
						<option value="Echaporã">Echaporã</option>
					
						<option value="Eldorado">Eldorado</option>
					
						<option value="Eleutério">Eleutério</option>
					
						<option value="Elias Fausto">Elias Fausto</option>
					
						<option value="Elisiário">Elisiário</option>
					
						<option value="Embaúba">Embaúba</option>
					
						<option value="Embu das Artes">Embu das Artes</option>
					
						<option value="Embu-Guaçu">Embu-Guaçu</option>
					
						<option value="Emilianópolis">Emilianópolis</option>
					
						<option value="Eneida">Eneida</option>
					
						<option value="Engenheiro Balduíno">Engenheiro Balduíno</option>
					
						<option value="Engenheiro Coelho">Engenheiro Coelho</option>
					
						<option value="Engenheiro Maia">Engenheiro Maia</option>
					
						<option value="Engenheiro Schmitt">Engenheiro Schmitt</option>
					
						<option value="Esmeralda">Esmeralda</option>
					
						<option value="Esperança D'Oeste">Esperança D'Oeste</option>
					
						<option value="Espigão">Espigão</option>
					
						<option value="Espírito Santo do Pinhal">Espírito Santo do Pinhal</option>
					
						<option value="Espírito Santo do Turvo">Espírito Santo do Turvo</option>
					
						<option value="Estiva Gerbi">Estiva Gerbi</option>
					
						<option value="Estrela D'Oeste">Estrela D'Oeste</option>
					
						<option value="Estrela do Norte">Estrela do Norte</option>
					
						<option value="Euclides da Cunha Paulista">Euclides da Cunha Paulista</option>
					
						<option value="Eugênio de Melo">Eugênio de Melo</option>
					
						<option value="Fartura">Fartura</option>
					
						<option value="Fazenda Velha">Fazenda Velha</option>
					
						<option value="Fernando Prestes">Fernando Prestes</option>
					
						<option value="Fernandópolis">Fernandópolis</option>
					
						<option value="Fernão">Fernão</option>
					
						<option value="Ferraz de Vasconcelos">Ferraz de Vasconcelos</option>
					
						<option value="Flora Rica">Flora Rica</option>
					
						<option value="Floreal">Floreal</option>
					
						<option value="Floresta do Sul">Floresta do Sul</option>
					
						<option value="Florínia">Florínia</option>
					
						<option value="Flórida Paulista">Flórida Paulista</option>
					
						<option value="Franca">Franca</option>
					
						<option value="Francisco Morato">Francisco Morato</option>
					
						<option value="Franco da Rocha">Franco da Rocha</option>
					
						<option value="Frutal do Campo">Frutal do Campo</option>
					
						<option value="Fátima">Fátima</option>
					
						<option value="Fátima Paulista">Fátima Paulista</option>
					
						<option value="Gabriel Monteiro">Gabriel Monteiro</option>
					
						<option value="Gardênia">Gardênia</option>
					
						<option value="Garça">Garça</option>
					
						<option value="Gastão Vidigal">Gastão Vidigal</option>
					
						<option value="Gavião Peixoto">Gavião Peixoto</option>
					
						<option value="General Salgado">General Salgado</option>
					
						<option value="Getulina">Getulina</option>
					
						<option value="Glicério">Glicério</option>
					
						<option value="Gramadinho">Gramadinho</option>
					
						<option value="Guachos">Guachos</option>
					
						<option value="Guaianas">Guaianas</option>
					
						<option value="Guaimbê">Guaimbê</option>
					
						<option value="Guaiçara">Guaiçara</option>
					
						<option value="Guamium">Guamium</option>
					
						<option value="Guapiara">Guapiara</option>
					
						<option value="Guapiaçu">Guapiaçu</option>
					
						<option value="Guapiranga">Guapiranga</option>
					
						<option value="Guaraci">Guaraci</option>
					
						<option value="Guaraciaba D'Oeste">Guaraciaba D'Oeste</option>
					
						<option value="Guarani D'Oeste">Guarani D'Oeste</option>
					
						<option value="Guarantã">Guarantã</option>
					
						<option value="Guarapiranga">Guarapiranga</option>
					
						<option value="Guarapuá">Guarapuá</option>
					
						<option value="Guararapes">Guararapes</option>
					
						<option value="Guararema">Guararema</option>
					
						<option value="Guaratinguetá">Guaratinguetá</option>
					
						<option value="Guaraçaí">Guaraçaí</option>
					
						<option value="Guareí">Guareí</option>
					
						<option value="Guariba">Guariba</option>
					
						<option value="Guariroba">Guariroba</option>
					
						<option value="Guarizinho">Guarizinho</option>
					
						<option value="Guarujá">Guarujá</option>
					
						<option value="Guarulhos">Guarulhos</option>
					
						<option value="Guará">Guará</option>
					
						<option value="Guatapará">Guatapará</option>
					
						<option value="Guaíra">Guaíra</option>
					
						<option value="Guzolândia">Guzolândia</option>
					
						<option value="Gália">Gália</option>
					
						<option value="Herculândia">Herculândia</option>
					
						<option value="Holambra">Holambra</option>
					
						<option value="Holambra II">Holambra II</option>
					
						<option value="Hortolândia">Hortolândia</option>
					
						<option value="Iacanga">Iacanga</option>
					
						<option value="Iacri">Iacri</option>
					
						<option value="Iaras">Iaras</option>
					
						<option value="Ibaté">Ibaté</option>
					
						<option value="Ibiporanga">Ibiporanga</option>
					
						<option value="Ibirarema">Ibirarema</option>
					
						<option value="Ibirá">Ibirá</option>
					
						<option value="Ibitinga">Ibitinga</option>
					
						<option value="Ibitiruna">Ibitiruna</option>
					
						<option value="Ibitiúva">Ibitiúva</option>
					
						<option value="Ibitu">Ibitu</option>
					
						<option value="Ibiúna">Ibiúna</option>
					
						<option value="Icém">Icém</option>
					
						<option value="Ida Iolanda">Ida Iolanda</option>
					
						<option value="Iepê">Iepê</option>
					
						<option value="Igarapava">Igarapava</option>
					
						<option value="Igaratá">Igaratá</option>
					
						<option value="Igaraçu do Tietê">Igaraçu do Tietê</option>
					
						<option value="Igaraí">Igaraí</option>
					
						<option value="Igaçaba">Igaçaba</option>
					
						<option value="Iguape">Iguape</option>
					
						<option value="Ilha Comprida">Ilha Comprida</option>
					
						<option value="Ilha Diana">Ilha Diana</option>
					
						<option value="Ilha Solteira">Ilha Solteira</option>
					
						<option value="Ilhabela">Ilhabela</option>
					
						<option value="Indaiatuba">Indaiatuba</option>
					
						<option value="Indaiá do Aguapeí">Indaiá do Aguapeí</option>
					
						<option value="Indiana">Indiana</option>
					
						<option value="Indiaporã">Indiaporã</option>
					
						<option value="Ingás">Ingás</option>
					
						<option value="Inúbia Paulista">Inúbia Paulista</option>
					
						<option value="Ipaussu">Ipaussu</option>
					
						<option value="Iperó">Iperó</option>
					
						<option value="Ipeúna">Ipeúna</option>
					
						<option value="Ipiguá">Ipiguá</option>
					
						<option value="Iporanga">Iporanga</option>
					
						<option value="Ipuã">Ipuã</option>
					
						<option value="Iracemápolis">Iracemápolis</option>
					
						<option value="Irapuru">Irapuru</option>
					
						<option value="Irapuã">Irapuã</option>
					
						<option value="Irapé">Irapé</option>
					
						<option value="Itaberá">Itaberá</option>
					
						<option value="Itaboa">Itaboa</option>
					
						<option value="Itaiúba">Itaiúba</option>
					
						<option value="Itajobi">Itajobi</option>
					
						<option value="Itaju">Itaju</option>
					
						<option value="Itanhaém">Itanhaém</option>
					
						<option value="Itapecerica da Serra">Itapecerica da Serra</option>
					
						<option value="Itapetininga">Itapetininga</option>
					
						<option value="Itapeuna">Itapeuna</option>
					
						<option value="Itapeva">Itapeva</option>
					
						<option value="Itapevi">Itapevi</option>
					
						<option value="Itapira">Itapira</option>
					
						<option value="Itapirapuã Paulista">Itapirapuã Paulista</option>
					
						<option value="Itaporanga">Itaporanga</option>
					
						<option value="Itapura">Itapura</option>
					
						<option value="Itapuí">Itapuí</option>
					
						<option value="Itaquaquecetuba">Itaquaquecetuba</option>
					
						<option value="Itaqueri da Serra">Itaqueri da Serra</option>
					
						<option value="Itararé">Itararé</option>
					
						<option value="Itariri">Itariri</option>
					
						<option value="Itatiba">Itatiba</option>
					
						<option value="Itatinga">Itatinga</option>
					
						<option value="Itaí">Itaí</option>
					
						<option value="Itaóca">Itaóca</option>
					
						<option value="Itirapina">Itirapina</option>
					
						<option value="Itirapuã">Itirapuã</option>
					
						<option value="Itobi">Itobi</option>
					
						<option value="Itororó do Paranapanema">Itororó do Paranapanema</option>
					
						<option value="Itu">Itu</option>
					
						<option value="Itupeva">Itupeva</option>
					
						<option value="Ituverava">Ituverava</option>
					
						<option value="Itápolis">Itápolis</option>
					
						<option value="Iubatinga">Iubatinga</option>
					
						<option value="Jaborandi">Jaborandi</option>
					
						<option value="Jaboticabal">Jaboticabal</option>
					
						<option value="Jacareí">Jacareí</option>
					
						<option value="Jacaré">Jacaré</option>
					
						<option value="Jaci">Jaci</option>
					
						<option value="Jaciporã">Jaciporã</option>
					
						<option value="Jacuba">Jacuba</option>
					
						<option value="Jacupiranga">Jacupiranga</option>
					
						<option value="Jafa">Jafa</option>
					
						<option value="Jaguariúna">Jaguariúna</option>
					
						<option value="Jales">Jales</option>
					
						<option value="Jamaica">Jamaica</option>
					
						<option value="Jambeiro">Jambeiro</option>
					
						<option value="Jandira">Jandira</option>
					
						<option value="Jardim Belval">Jardim Belval</option>
					
						<option value="Jardim Presidente Dutra">Jardim Presidente Dutra</option>
					
						<option value="Jardim Santa Luzia">Jardim Santa Luzia</option>
					
						<option value="Jardim Silveira">Jardim Silveira</option>
					
						<option value="Jardinópolis">Jardinópolis</option>
					
						<option value="Jarinu">Jarinu</option>
					
						<option value="Jatobá">Jatobá</option>
					
						<option value="Jaú">Jaú</option>
					
						<option value="Jeriquara">Jeriquara</option>
					
						<option value="Joanópolis">Joanópolis</option>
					
						<option value="Joaquim Egídio">Joaquim Egídio</option>
					
						<option value="Jordanésia">Jordanésia</option>
					
						<option value="José Bonifácio">José Bonifácio</option>
					
						<option value="João Ramalho">João Ramalho</option>
					
						<option value="Juliânia">Juliânia</option>
					
						<option value="Jumirim">Jumirim</option>
					
						<option value="Jundiapeba">Jundiapeba</option>
					
						<option value="Jundiaí">Jundiaí</option>
					
						<option value="Junqueira">Junqueira</option>
					
						<option value="Junqueirópolis">Junqueirópolis</option>
					
						<option value="Juquiratiba">Juquiratiba</option>
					
						<option value="Juquitiba">Juquitiba</option>
					
						<option value="Juquiá">Juquiá</option>
					
						<option value="Juritis">Juritis</option>
					
						<option value="Jurucê">Jurucê</option>
					
						<option value="Jurupeba">Jurupeba</option>
					
						<option value="Jurupema">Jurupema</option>
					
						<option value="Júlio Mesquita">Júlio Mesquita</option>
					
						<option value="Lageado de Araçaíba">Lageado de Araçaíba</option>
					
						<option value="Lagoa Azul">Lagoa Azul</option>
					
						<option value="Lagoa Branca">Lagoa Branca</option>
					
						<option value="Lagoinha">Lagoinha</option>
					
						<option value="Laranjal Paulista">Laranjal Paulista</option>
					
						<option value="Laras">Laras</option>
					
						<option value="Lauro Penteado">Lauro Penteado</option>
					
						<option value="Lavrinhas">Lavrinhas</option>
					
						<option value="Lavínia">Lavínia</option>
					
						<option value="Leme">Leme</option>
					
						<option value="Lençóis Paulista">Lençóis Paulista</option>
					
						<option value="Limeira">Limeira</option>
					
						<option value="Lindóia">Lindóia</option>
					
						<option value="Lins">Lins</option>
					
						<option value="Lobo">Lobo</option>
					
						<option value="Lorena">Lorena</option>
					
						<option value="Lourdes">Lourdes</option>
					
						<option value="Louveira">Louveira</option>
					
						<option value="Lucianópolis">Lucianópolis</option>
					
						<option value="Lucélia">Lucélia</option>
					
						<option value="Luiziânia">Luiziânia</option>
					
						<option value="Lupércio">Lupércio</option>
					
						<option value="Lusitânia">Lusitânia</option>
					
						<option value="Lutécia">Lutécia</option>
					
						<option value="Luís Antônio">Luís Antônio</option>
					
						<option value="Lácio">Lácio</option>
					
						<option value="Macatuba">Macatuba</option>
					
						<option value="Macaubal">Macaubal</option>
					
						<option value="Macedônia">Macedônia</option>
					
						<option value="Macucos">Macucos</option>
					
						<option value="Mailasqui">Mailasqui</option>
					
						<option value="Mairinque">Mairinque</option>
					
						<option value="Mairiporã">Mairiporã</option>
					
						<option value="Major Prado">Major Prado</option>
					
						<option value="Manduri">Manduri</option>
					
						<option value="Mangaratú">Mangaratú</option>
					
						<option value="Marabá Paulista">Marabá Paulista</option>
					
						<option value="Maracaí">Maracaí</option>
					
						<option value="Marapoama">Marapoama</option>
					
						<option value="Marcondésia">Marcondésia</option>
					
						<option value="Maresias">Maresias</option>
					
						<option value="Marinópolis">Marinópolis</option>
					
						<option value="Maristela">Maristela</option>
					
						<option value="Mariápolis">Mariápolis</option>
					
						<option value="Martim Francisco">Martim Francisco</option>
					
						<option value="Martinho Prado Júnior">Martinho Prado Júnior</option>
					
						<option value="Martinópolis">Martinópolis</option>
					
						<option value="Marília">Marília</option>
					
						<option value="Matão">Matão</option>
					
						<option value="Mauá">Mauá</option>
					
						<option value="Mendonça">Mendonça</option>
					
						<option value="Meridiano">Meridiano</option>
					
						<option value="Mesópolis">Mesópolis</option>
					
						<option value="Miguelópolis">Miguelópolis</option>
					
						<option value="Mineiros do Tietê">Mineiros do Tietê</option>
					
						<option value="Mira Estrela">Mira Estrela</option>
					
						<option value="Miracatu">Miracatu</option>
					
						<option value="Miraluz">Miraluz</option>
					
						<option value="Mirandópolis">Mirandópolis</option>
					
						<option value="Mirante do Paranapanema">Mirante do Paranapanema</option>
					
						<option value="Mirassol">Mirassol</option>
					
						<option value="Mirassolândia">Mirassolândia</option>
					
						<option value="Mococa">Mococa</option>
					
						<option value="Mogi Guaçu">Mogi Guaçu</option>
					
						<option value="Mogi Mirim">Mogi Mirim</option>
					
						<option value="Mogi das Cruzes">Mogi das Cruzes</option>
					
						<option value="Mombuca">Mombuca</option>
					
						<option value="Mongaguá">Mongaguá</option>
					
						<option value="Montalvão">Montalvão</option>
					
						<option value="Monte Alegre do Sul">Monte Alegre do Sul</option>
					
						<option value="Monte Alto">Monte Alto</option>
					
						<option value="Monte Aprazível">Monte Aprazível</option>
					
						<option value="Monte Azul Paulista">Monte Azul Paulista</option>
					
						<option value="Monte Cabrão">Monte Cabrão</option>
					
						<option value="Monte Castelo">Monte Castelo</option>
					
						<option value="Monte Mor">Monte Mor</option>
					
						<option value="Monte Verde Paulista">Monte Verde Paulista</option>
					
						<option value="Monteiro Lobato">Monteiro Lobato</option>
					
						<option value="Monções">Monções</option>
					
						<option value="Moreira César">Moreira César</option>
					
						<option value="Morro Agudo">Morro Agudo</option>
					
						<option value="Morro do Alto">Morro do Alto</option>
					
						<option value="Morungaba">Morungaba</option>
					
						<option value="Mostardas">Mostardas</option>
					
						<option value="Motuca">Motuca</option>
					
						<option value="Mourão">Mourão</option>
					
						<option value="Murutinga do Sul">Murutinga do Sul</option>
					
						<option value="Mágda">Mágda</option>
					
						<option value="Nantes">Nantes</option>
					
						<option value="Narandiba">Narandiba</option>
					
						<option value="Natividade da Serra">Natividade da Serra</option>
					
						<option value="Nazaré Paulista">Nazaré Paulista</option>
					
						<option value="Neves Paulista">Neves Paulista</option>
					
						<option value="Nhandeara">Nhandeara</option>
					
						<option value="Nipoã">Nipoã</option>
					
						<option value="Nogueira">Nogueira</option>
					
						<option value="Nossa Senhora do Remédio">Nossa Senhora do Remédio</option>
					
						<option value="Nova Alexandria">Nova Alexandria</option>
					
						<option value="Nova Aliança">Nova Aliança</option>
					
						<option value="Nova América">Nova América</option>
					
						<option value="Nova Aparecida">Nova Aparecida</option>
					
						<option value="Nova Campina">Nova Campina</option>
					
						<option value="Nova Canaã Paulista">Nova Canaã Paulista</option>
					
						<option value="Nova Cardoso">Nova Cardoso</option>
					
						<option value="Nova Castilho">Nova Castilho</option>
					
						<option value="Nova Europa">Nova Europa</option>
					
						<option value="Nova Granada">Nova Granada</option>
					
						<option value="Nova Guataporanga">Nova Guataporanga</option>
					
						<option value="Nova Independência">Nova Independência</option>
					
						<option value="Nova Itapirema">Nova Itapirema</option>
					
						<option value="Nova Luzitânia">Nova Luzitânia</option>
					
						<option value="Nova Odessa">Nova Odessa</option>
					
						<option value="Nova Pátria">Nova Pátria</option>
					
						<option value="Nova Veneza">Nova Veneza</option>
					
						<option value="Novais">Novais</option>
					
						<option value="Novo Cravinhos">Novo Cravinhos</option>
					
						<option value="Novo Horizonte">Novo Horizonte</option>
					
						<option value="Nuporanga">Nuporanga</option>
					
						<option value="Ocauçu">Ocauçu</option>
					
						<option value="Oliveira Barros">Oliveira Barros</option>
					
						<option value="Olímpia">Olímpia</option>
					
						<option value="Onda Branca">Onda Branca</option>
					
						<option value="Onda Verde">Onda Verde</option>
					
						<option value="Oriente">Oriente</option>
					
						<option value="Orindiúva">Orindiúva</option>
					
						<option value="Orlândia">Orlândia</option>
					
						<option value="Osasco">Osasco</option>
					
						<option value="Oscar Bressane">Oscar Bressane</option>
					
						<option value="Osvaldo Cruz">Osvaldo Cruz</option>
					
						<option value="Ourinhos">Ourinhos</option>
					
						<option value="Ouro Fino Paulista">Ouro Fino Paulista</option>
					
						<option value="Ouro Verde">Ouro Verde</option>
					
						<option value="Ouroeste">Ouroeste</option>
					
						<option value="Oásis">Oásis</option>
					
						<option value="Pacaembu">Pacaembu</option>
					
						<option value="Padre Nóbrega">Padre Nóbrega</option>
					
						<option value="Palestina">Palestina</option>
					
						<option value="Palmares Paulista">Palmares Paulista</option>
					
						<option value="Palmeira D'Oeste">Palmeira D'Oeste</option>
					
						<option value="Palmeiras de São Paulo">Palmeiras de São Paulo</option>
					
						<option value="Palmital">Palmital</option>
					
						<option value="Panorama">Panorama</option>
					
						<option value="Paraguaçu Paulista">Paraguaçu Paulista</option>
					
						<option value="Paraibuna">Paraibuna</option>
					
						<option value="Paraisolândia">Paraisolândia</option>
					
						<option value="Paranabi">Paranabi</option>
					
						<option value="Paranapanema">Paranapanema</option>
					
						<option value="Paranapiacaba">Paranapiacaba</option>
					
						<option value="Paranapuã">Paranapuã</option>
					
						<option value="Parapuã">Parapuã</option>
					
						<option value="Paraíso">Paraíso</option>
					
						<option value="Pardinho">Pardinho</option>
					
						<option value="Pariquera-Açu">Pariquera-Açu</option>
					
						<option value="Parisi">Parisi</option>
					
						<option value="Parnaso">Parnaso</option>
					
						<option value="Parque Meia Lua">Parque Meia Lua</option>
					
						<option value="Paruru">Paruru</option>
					
						<option value="Patrocínio Paulista">Patrocínio Paulista</option>
					
						<option value="Paulicéia">Paulicéia</option>
					
						<option value="Paulistânia">Paulistânia</option>
					
						<option value="Paulo de Faria">Paulo de Faria</option>
					
						<option value="Paulínia">Paulínia</option>
					
						<option value="Paulópolis">Paulópolis</option>
					
						<option value="Pederneiras">Pederneiras</option>
					
						<option value="Pedra Bela">Pedra Bela</option>
					
						<option value="Pedra Branca de Itararé">Pedra Branca de Itararé</option>
					
						<option value="Pedranópolis">Pedranópolis</option>
					
						<option value="Pedregulho">Pedregulho</option>
					
						<option value="Pedreira">Pedreira</option>
					
						<option value="Pedrinhas Paulista">Pedrinhas Paulista</option>
					
						<option value="Pedro Barros">Pedro Barros</option>
					
						<option value="Pedro de Toledo">Pedro de Toledo</option>
					
						<option value="Penápolis">Penápolis</option>
					
						<option value="Pereira Barreto">Pereira Barreto</option>
					
						<option value="Pereiras">Pereiras</option>
					
						<option value="Peruíbe">Peruíbe</option>
					
						<option value="Piacatu">Piacatu</option>
					
						<option value="Picinguaba">Picinguaba</option>
					
						<option value="Piedade">Piedade</option>
					
						<option value="Pilar do Sul">Pilar do Sul</option>
					
						<option value="Pindamonhangaba">Pindamonhangaba</option>
					
						<option value="Pindorama">Pindorama</option>
					
						<option value="Pinhalzinho">Pinhalzinho</option>
					
						<option value="Pinheiros">Pinheiros</option>
					
						<option value="Pioneiros">Pioneiros</option>
					
						<option value="Piquerobi">Piquerobi</option>
					
						<option value="Piquete">Piquete</option>
					
						<option value="Piracaia">Piracaia</option>
					
						<option value="Piracicaba">Piracicaba</option>
					
						<option value="Piraju">Piraju</option>
					
						<option value="Pirajuí">Pirajuí</option>
					
						<option value="Pirambóia">Pirambóia</option>
					
						<option value="Pirangi">Pirangi</option>
					
						<option value="Pirapitingui">Pirapitingui</option>
					
						<option value="Pirapora do Bom Jesus">Pirapora do Bom Jesus</option>
					
						<option value="Pirapozinho">Pirapozinho</option>
					
						<option value="Pirassununga">Pirassununga</option>
					
						<option value="Piratininga">Piratininga</option>
					
						<option value="Pitangueiras">Pitangueiras</option>
					
						<option value="Planalto">Planalto</option>
					
						<option value="Planalto">Planalto</option>
					
						<option value="Planalto do Sul">Planalto do Sul</option>
					
						<option value="Platina">Platina</option>
					
						<option value="Poloni">Poloni</option>
					
						<option value="Polvilho">Polvilho</option>
					
						<option value="Pompéia">Pompéia</option>
					
						<option value="Pongaí">Pongaí</option>
					
						<option value="Pontal">Pontal</option>
					
						<option value="Pontalinda">Pontalinda</option>
					
						<option value="Pontes Gestal">Pontes Gestal</option>
					
						<option value="Populina">Populina</option>
					
						<option value="Porangaba">Porangaba</option>
					
						<option value="Porto Feliz">Porto Feliz</option>
					
						<option value="Porto Ferreira">Porto Ferreira</option>
					
						<option value="Porto Novo">Porto Novo</option>
					
						<option value="Potim">Potim</option>
					
						<option value="Potirendaba">Potirendaba</option>
					
						<option value="Potunduva">Potunduva</option>
					
						<option value="Poá">Poá</option>
					
						<option value="Pracinha">Pracinha</option>
					
						<option value="Pradínia">Pradínia</option>
					
						<option value="Pradópolis">Pradópolis</option>
					
						<option value="Praia Grande">Praia Grande</option>
					
						<option value="Pratânia">Pratânia</option>
					
						<option value="Presidente Alves">Presidente Alves</option>
					
						<option value="Presidente Bernardes">Presidente Bernardes</option>
					
						<option value="Presidente Epitácio">Presidente Epitácio</option>
					
						<option value="Presidente Prudente">Presidente Prudente</option>
					
						<option value="Presidente Venceslau">Presidente Venceslau</option>
					
						<option value="Primavera">Primavera</option>
					
						<option value="Promissão">Promissão</option>
					
						<option value="Prudêncio de Morais">Prudêncio de Morais</option>
					
						<option value="Quadra">Quadra</option>
					
						<option value="Quatá">Quatá</option>
					
						<option value="Queiroz">Queiroz</option>
					
						<option value="Queluz">Queluz</option>
					
						<option value="Quintana">Quintana</option>
					
						<option value="Quiririm">Quiririm</option>
					
						<option value="Rafard">Rafard</option>
					
						<option value="Rancharia">Rancharia</option>
					
						<option value="Rechan">Rechan</option>
					
						<option value="Redenção da Serra">Redenção da Serra</option>
					
						<option value="Regente Feijó">Regente Feijó</option>
					
						<option value="Reginópolis">Reginópolis</option>
					
						<option value="Registro">Registro</option>
					
						<option value="Restinga">Restinga</option>
					
						<option value="Riacho Grande">Riacho Grande</option>
					
						<option value="Ribeira">Ribeira</option>
					
						<option value="Ribeiro do Vale">Ribeiro do Vale</option>
					
						<option value="Ribeiro dos Santos">Ribeiro dos Santos</option>
					
						<option value="Ribeirão Bonito">Ribeirão Bonito</option>
					
						<option value="Ribeirão Branco">Ribeirão Branco</option>
					
						<option value="Ribeirão Corrente">Ribeirão Corrente</option>
					
						<option value="Ribeirão Grande">Ribeirão Grande</option>
					
						<option value="Ribeirão Pires">Ribeirão Pires</option>
					
						<option value="Ribeirão Preto">Ribeirão Preto</option>
					
						<option value="Ribeirão do Sul">Ribeirão do Sul</option>
					
						<option value="Ribeirão dos Índios">Ribeirão dos Índios</option>
					
						<option value="Rifaina">Rifaina</option>
					
						<option value="Rincão">Rincão</option>
					
						<option value="Rinópolis">Rinópolis</option>
					
						<option value="Rio Claro">Rio Claro</option>
					
						<option value="Rio Grande da Serra">Rio Grande da Serra</option>
					
						<option value="Rio das Pedras">Rio das Pedras</option>
					
						<option value="Riolândia">Riolândia</option>
					
						<option value="Riversul">Riversul</option>
					
						<option value="Roberto">Roberto</option>
					
						<option value="Rosana">Rosana</option>
					
						<option value="Roseira">Roseira</option>
					
						<option value="Rosália">Rosália</option>
					
						<option value="Rubinéia">Rubinéia</option>
					
						<option value="Rubiácea">Rubiácea</option>
					
						<option value="Rubião Júnior">Rubião Júnior</option>
					
						<option value="Ruilândia">Ruilândia</option>
					
						<option value="Sabaúna">Sabaúna</option>
					
						<option value="Sabino">Sabino</option>
					
						<option value="Sagres">Sagres</option>
					
						<option value="Sales">Sales</option>
					
						<option value="Sales Oliveira">Sales Oliveira</option>
					
						<option value="Salesópolis">Salesópolis</option>
					
						<option value="Salmourão">Salmourão</option>
					
						<option value="Saltinho">Saltinho</option>
					
						<option value="Salto">Salto</option>
					
						<option value="Salto Grande">Salto Grande</option>
					
						<option value="Salto de Pirapora">Salto de Pirapora</option>
					
						<option value="Salto do Avanhandava">Salto do Avanhandava</option>
					
						<option value="Sandovalina">Sandovalina</option>
					
						<option value="Santa Adélia">Santa Adélia</option>
					
						<option value="Santa Albertina">Santa Albertina</option>
					
						<option value="Santa América">Santa América</option>
					
						<option value="Santa Branca">Santa Branca</option>
					
						<option value="Santa Bárbara D'Oeste">Santa Bárbara D'Oeste</option>
					
						<option value="Santa Clara D'Oeste">Santa Clara D'Oeste</option>
					
						<option value="Santa Cruz da Conceição">Santa Cruz da Conceição</option>
					
						<option value="Santa Cruz da Esperança">Santa Cruz da Esperança</option>
					
						<option value="Santa Cruz da Estrela">Santa Cruz da Estrela</option>
					
						<option value="Santa Cruz das Palmeiras">Santa Cruz das Palmeiras</option>
					
						<option value="Santa Cruz do Rio Pardo">Santa Cruz do Rio Pardo</option>
					
						<option value="Santa Cruz dos Lopes">Santa Cruz dos Lopes</option>
					
						<option value="Santa Ernestina">Santa Ernestina</option>
					
						<option value="Santa Eudóxia">Santa Eudóxia</option>
					
						<option value="Santa Fé do Sul">Santa Fé do Sul</option>
					
						<option value="Santa Gertrudes">Santa Gertrudes</option>
					
						<option value="Santa Isabel">Santa Isabel</option>
					
						<option value="Santa Isabel do Marinheiro">Santa Isabel do Marinheiro</option>
					
						<option value="Santa Lúcia">Santa Lúcia</option>
					
						<option value="Santa Margarida Paulista">Santa Margarida Paulista</option>
					
						<option value="Santa Maria da Serra">Santa Maria da Serra</option>
					
						<option value="Santa Maria do Gurupá">Santa Maria do Gurupá</option>
					
						<option value="Santa Mercedes">Santa Mercedes</option>
					
						<option value="Santa Rita D'Oeste">Santa Rita D'Oeste</option>
					
						<option value="Santa Rita do Passa Quatro">Santa Rita do Passa Quatro</option>
					
						<option value="Santa Rita do Ribeira">Santa Rita do Ribeira</option>
					
						<option value="Santa Rosa de Viterbo">Santa Rosa de Viterbo</option>
					
						<option value="Santa Salete">Santa Salete</option>
					
						<option value="Santana da Ponte Pensa">Santana da Ponte Pensa</option>
					
						<option value="Santana de Parnaíba">Santana de Parnaíba</option>
					
						<option value="Santelmo">Santelmo</option>
					
						<option value="Santo Anastácio">Santo Anastácio</option>
					
						<option value="Santo André">Santo André</option>
					
						<option value="Santo Antônio Paulista">Santo Antônio Paulista</option>
					
						<option value="Santo Antônio da Alegria">Santo Antônio da Alegria</option>
					
						<option value="Santo Antônio da Estiva">Santo Antônio da Estiva</option>
					
						<option value="Santo Antônio de Posse">Santo Antônio de Posse</option>
					
						<option value="Santo Antônio do Aracanguá">Santo Antônio do Aracanguá</option>
					
						<option value="Santo Antônio do Jardim">Santo Antônio do Jardim</option>
					
						<option value="Santo Antônio do Paranapanema">Santo Antônio do Paranapanema</option>
					
						<option value="Santo Antônio do Pinhal">Santo Antônio do Pinhal</option>
					
						<option value="Santo Expedito">Santo Expedito</option>
					
						<option value="Santos">Santos</option>
					
						<option value="Santópolis do Aguapeí">Santópolis do Aguapeí</option>
					
						<option value="Sapezal">Sapezal</option>
					
						<option value="Sarapuí">Sarapuí</option>
					
						<option value="Sarutaiá">Sarutaiá</option>
					
						<option value="Sebastianópolis do Sul">Sebastianópolis do Sul</option>
					
						<option value="Serra Azul">Serra Azul</option>
					
						<option value="Serra Negra">Serra Negra</option>
					
						<option value="Serrana">Serrana</option>
					
						<option value="Sertãozinho">Sertãozinho</option>
					
						<option value="Sete Barras">Sete Barras</option>
					
						<option value="Severínia">Severínia</option>
					
						<option value="Silveiras">Silveiras</option>
					
						<option value="Silvânia">Silvânia</option>
					
						<option value="Simonsen">Simonsen</option>
					
						<option value="Simões">Simões</option>
					
						<option value="Socorro">Socorro</option>
					
						<option value="Sodrélia">Sodrélia</option>
					
						<option value="Solemar">Solemar</option>
					
						<option value="Sorocaba">Sorocaba</option>
					
						<option value="Sousas">Sousas</option>
					
						<option value="Sud Mennucci">Sud Mennucci</option>
					
						<option value="Suinana">Suinana</option>
					
						<option value="Sumaré">Sumaré</option>
					
						<option value="Sussui">Sussui</option>
					
						<option value="Suzano">Suzano</option>
					
						<option value="Suzanápolis">Suzanápolis</option>
					
						<option value="São Benedito da Cachoeirinha">São Benedito da Cachoeirinha</option>
					
						<option value="São Benedito das Areias">São Benedito das Areias</option>
					
						<option value="São Bento do Sapucaí">São Bento do Sapucaí</option>
					
						<option value="São Bernardo do Campo">São Bernardo do Campo</option>
					
						<option value="São Berto">São Berto</option>
					
						<option value="São Caetano do Sul">São Caetano do Sul</option>
					
						<option value="São Carlos">São Carlos</option>
					
						<option value="São Francisco">São Francisco</option>
					
						<option value="São Francisco Xavier">São Francisco Xavier</option>
					
						<option value="São Francisco da Praia">São Francisco da Praia</option>
					
						<option value="São Joaquim da Barra">São Joaquim da Barra</option>
					
						<option value="São José da Bela Vista">São José da Bela Vista</option>
					
						<option value="São José das Laranjeiras">São José das Laranjeiras</option>
					
						<option value="São José do Barreiro">São José do Barreiro</option>
					
						<option value="São José do Rio Pardo">São José do Rio Pardo</option>
					
						<option value="São José do Rio Preto">São José do Rio Preto</option>
					
						<option value="São José dos Campos">São José dos Campos</option>
					
						<option value="São João Novo">São João Novo</option>
					
						<option value="São João da Boa Vista">São João da Boa Vista</option>
					
						<option value="São João das Duas Pontes">São João das Duas Pontes</option>
					
						<option value="São João de Iracema">São João de Iracema</option>
					
						<option value="São João de Itaguaçu">São João de Itaguaçu</option>
					
						<option value="São João do Marinheiro">São João do Marinheiro</option>
					
						<option value="São João do Pau d'Alho">São João do Pau d'Alho</option>
					
						<option value="São Lourenço da Serra">São Lourenço da Serra</option>
					
						<option value="São Lourenço do Turvo">São Lourenço do Turvo</option>
					
						<option value="São Luiz do Guaricanga">São Luiz do Guaricanga</option>
					
						<option value="São Luiz do Paraitinga">São Luiz do Paraitinga</option>
					
						<option value="São Manuel">São Manuel</option>
					
						<option value="São Martinho D'Oeste">São Martinho D'Oeste</option>
					
						<option value="São Miguel Arcanjo">São Miguel Arcanjo</option>
					
						<option value="São Paulo">São Paulo</option>
					
						<option value="São Pedro">São Pedro</option>
					
						<option value="São Pedro do Turvo">São Pedro do Turvo</option>
					
						<option value="São Roque">São Roque</option>
					
						<option value="São Roque da Fartura">São Roque da Fartura</option>
					
						<option value="São Sebastião">São Sebastião</option>
					
						<option value="São Sebastião da Grama">São Sebastião da Grama</option>
					
						<option value="São Sebastião da Serra">São Sebastião da Serra</option>
					
						<option value="São Silvestre de Jacareí">São Silvestre de Jacareí</option>
					
						<option value="São Simão">São Simão</option>
					
						<option value="São Vicente">São Vicente</option>
					
						<option value="Tabajara">Tabajara</option>
					
						<option value="Tabapuã">Tabapuã</option>
					
						<option value="Tabatinga">Tabatinga</option>
					
						<option value="Taboão da Serra">Taboão da Serra</option>
					
						<option value="Taciba">Taciba</option>
					
						<option value="Taguaí">Taguaí</option>
					
						<option value="Taiacupeba">Taiacupeba</option>
					
						<option value="Taiaçu">Taiaçu</option>
					
						<option value="Taiúva">Taiúva</option>
					
						<option value="Talhado">Talhado</option>
					
						<option value="Tambaú">Tambaú</option>
					
						<option value="Tanabi">Tanabi</option>
					
						<option value="Tapinas">Tapinas</option>
					
						<option value="Tapiratiba">Tapiratiba</option>
					
						<option value="Tapiraí">Tapiraí</option>
					
						<option value="Taquaral">Taquaral</option>
					
						<option value="Taquaral">Taquaral</option>
					
						<option value="Taquaritinga">Taquaritinga</option>
					
						<option value="Taquarituba">Taquarituba</option>
					
						<option value="Taquarivaí">Taquarivaí</option>
					
						<option value="Tarabai">Tarabai</option>
					
						<option value="Tarumã">Tarumã</option>
					
						<option value="Tatuí">Tatuí</option>
					
						<option value="Taubaté">Taubaté</option>
					
						<option value="Tecainda">Tecainda</option>
					
						<option value="Tejupá">Tejupá</option>
					
						<option value="Teodoro Sampaio">Teodoro Sampaio</option>
					
						<option value="Termas de Ibirá">Termas de Ibirá</option>
					
						<option value="Terra Nova D'Oeste">Terra Nova D'Oeste</option>
					
						<option value="Terra Roxa">Terra Roxa</option>
					
						<option value="Tibiriçá">Tibiriçá</option>
					
						<option value="Tibiriçá do Paranapanema">Tibiriçá do Paranapanema</option>
					
						<option value="Tietê">Tietê</option>
					
						<option value="Timburi">Timburi</option>
					
						<option value="Toledo">Toledo</option>
					
						<option value="Torre de Pedra">Torre de Pedra</option>
					
						<option value="Torrinha">Torrinha</option>
					
						<option value="Trabiju">Trabiju</option>
					
						<option value="Tremembé">Tremembé</option>
					
						<option value="Três Alianças">Três Alianças</option>
					
						<option value="Três Fronteiras">Três Fronteiras</option>
					
						<option value="Três Pontes">Três Pontes</option>
					
						<option value="Tuiuti">Tuiuti</option>
					
						<option value="Tujuguaba">Tujuguaba</option>
					
						<option value="Tupi">Tupi</option>
					
						<option value="Tupi Paulista">Tupi Paulista</option>
					
						<option value="Tupã">Tupã</option>
					
						<option value="Turiba do Sul">Turiba do Sul</option>
					
						<option value="Turiúba">Turiúba</option>
					
						<option value="Turmalina">Turmalina</option>
					
						<option value="Turvínia">Turvínia</option>
					
						<option value="Ubarana">Ubarana</option>
					
						<option value="Ubatuba">Ubatuba</option>
					
						<option value="Ubirajara">Ubirajara</option>
					
						<option value="Uchoa">Uchoa</option>
					
						<option value="Universo">Universo</option>
					
						<option value="União Paulista">União Paulista</option>
					
						<option value="Uru">Uru</option>
					
						<option value="Urupês">Urupês</option>
					
						<option value="Ururai">Ururai</option>
					
						<option value="Urânia">Urânia</option>
					
						<option value="Utinga">Utinga</option>
					
						<option value="Vale Formoso">Vale Formoso</option>
					
						<option value="Valentim Gentil">Valentim Gentil</option>
					
						<option value="Valinhos">Valinhos</option>
					
						<option value="Valparaíso">Valparaíso</option>
					
						<option value="Vanglória">Vanglória</option>
					
						<option value="Vargem">Vargem</option>
					
						<option value="Vargem Grande Paulista">Vargem Grande Paulista</option>
					
						<option value="Vargem Grande do Sul">Vargem Grande do Sul</option>
					
						<option value="Varpa">Varpa</option>
					
						<option value="Venda Branca">Venda Branca</option>
					
						<option value="Vera Cruz">Vera Cruz</option>
					
						<option value="Vicente de Carvalho">Vicente de Carvalho</option>
					
						<option value="Vicentinópolis">Vicentinópolis</option>
					
						<option value="Vila Dirce">Vila Dirce</option>
					
						<option value="Vila Nery">Vila Nery</option>
					
						<option value="Vila Xavier">Vila Xavier</option>
					
						<option value="Vinhedo">Vinhedo</option>
					
						<option value="Viradouro">Viradouro</option>
					
						<option value="Vista Alegre do Alto">Vista Alegre do Alto</option>
					
						<option value="Vitoriana">Vitoriana</option>
					
						<option value="Vitória Brasil">Vitória Brasil</option>
					
						<option value="Votorantim">Votorantim</option>
					
						<option value="Votuporanga">Votuporanga</option>
					
						<option value="Várzea Paulista">Várzea Paulista</option>
					
						<option value="Zacarias">Zacarias</option>
					
						<option value="Água Vermelha">Água Vermelha</option>
					
						<option value="Águas da Prata">Águas da Prata</option>
					
						<option value="Águas de Lindóia">Águas de Lindóia</option>
					
						<option value="Águas de Santa Bárbara">Águas de Santa Bárbara</option>
					
						<option value="Águas de São Pedro">Águas de São Pedro</option>
					
						<option value="Álvares Florence">Álvares Florence</option>
					
						<option value="Álvares Machado">Álvares Machado</option>
					
						<option value="Álvaro de Carvalho">Álvaro de Carvalho</option>
					
						<option value="Ártemis">Ártemis</option>
					
						<option value="Óleo">Óleo</option>
					
				</select>
			</div>
		</div>
		<!--<div class="form-group">
			<label for="district" class="col-sm-3 control-label required">Bairro</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="district" name="district">
			</div>
		</div>
		<div class="form-group">
			<label for="placeType" class="col-sm-3 control-label required">Tipo</label>
			<div class="col-sm-9">
				<select class="form-control" id="placeType" name="placeType">
					<option value="" selected="selected"></option>
					<option value="Acesso">Acesso</option>
					<option value="Alameda">Alameda</option>
					<option value="Alto">Alto</option>
					<option value="Área">Área</option>
					<option value="Avenida">Avenida</option>
					<option value="Beco">Beco</option>
					<option value="Bloco">Bloco</option>
					<option value="Caminho">Caminho</option>
					<option value="Condomínio">Condomínio</option>
					<option value="Conjunto">Conjunto</option>
					<option value="Distrito">Distrito</option>
					<option value="Escadaria">Escadaria</option>
					<option value="Estrada">Estrada</option>
					<option value="Jardim">Jardim</option>
					<option value="Jardinete">Jardinete</option>
					<option value="Ladeira">Ladeira</option>
					<option value="Largo">Largo</option>
					<option value="Loteamento">Loteamento</option>
					<option value="Parque">Parque</option>
					<option value="Passagem">Passagem</option>
					<option value="Praça">Praça</option>
					<option value="Praia">Praia</option>
					<option value="Quadra">Quadra</option>
					<option value="Residencial">Residencial</option>
					<option value="Rodovia">Rodovia</option>
					<option value="Rua">Rua</option>
					<option value="Servidão">Servidão</option>
					<option value="Setor">Setor</option>
					<option value="Travessa">Travessa</option>
					<option value="Via">Via</option>
					<option value="Viaduto">Viaduto</option>
					<option value="Viela">Viela</option>
					<option value="Vila">Vila</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="place" class="col-sm-3 control-label required">Endereço</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="place" name="place">
			</div>
		</div>
		<div class="form-group">
			<label for="number" class="col-sm-3 control-label required">Número</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="number" name="number">
			</div>
		</div>
		<div class="form-group">
			<label for="complement" class="col-sm-3 control-label">Complemento</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="complement" name="complement">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-9">
				<!--<div class="checkbox">
					<label for="agreeToLegal">
						<input type="checkbox" name="agreeToLegal" id="agreeToLegal"><strong>*Aviso</strong>: cadastro exclusivo para pessoas com deficiência. Declaro que sou pessoa com deficiência ou reabilitado do INSS nos termos da legislação brasileira.
					</label>
				</div>
			</div>
		</div>-->
	</form>
	<button  class="btn btn-primary btnfinalizacadastro" onclick="window.open('finalizarpop.php', '_self');"> 
	<span>Finalizar</span></button>