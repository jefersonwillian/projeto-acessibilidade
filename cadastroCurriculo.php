<?php include_once "header.php"; ?>
<article class="BannerInicioPagina">
   <div class="col-md-12">
      <h1 tabindex="0">Cadastro de Cúrriculo</h1>
   </div>
</article>
<main>
   <article>
      <div class="container">
         <div class="col-md-12 text-center">
            <h1 tabindex="0">Cadastro Perfil Pessoal</h1>
         </div>
         <div class="col-md-12 formContato">
            <form>
               <div class="col-md-12">
                  <span class="red-color" tabindex="0">* Aviso:</span>  Declaro ter o conhecimento de que este cadastro é exclusivo para pessoas com deficiências abrangidos pela lei 8213/91. Estou ciente que os serviços para os candidatos são gratuitos.
               </div>
               <div class="col-md-6">
                  <label>Nome</label><br>
                  <input type="text" name="FormNome" placeholder="Seu nome *">
               </div>
               <div class="col-md-6">
                  <label>E-mail</label><br>
                  <input type="email" name="FormEmail" placeholder="Seu e-mail *">
               </div>
               <div class="col-md-6">
                  <label> CPF</label><br>
                  <input type="number" name="CPF" placeholder="Seu CPF *">
               </div>
               <div class="col-md-6">
                  <label>Endereço:</label><br>
                  <input type="text" name="Endereço" placeholder="Seu endereço *">
               </div>
               <div class="col-md-6">
                  <label>Cidade:</label><br>
                  <input type="text" name="Cidade" placeholder="Sua cidade *">
               </div>
               <div class="col-md-6">
                  <label>Estado:</label><br>
                  <select class="select-form">
                     <option value="" class="option"></option>
                     <option>Acre</option>
                     <option>Alagoas</option>
                     <option>Amapá</option>
                     <option>Amazonas</option>
                     <option>Bahia</option>
                     <option>Ceará  </option>
                     <option>Distrito Federal</option>
                     <option>Espírito Santo</option>
                     <option>Goiás</option>
                     <option>Maranhão</option>
                     <option>Mato Grosso</option>
                     <option>Mato Grosso do Sul</option>
                     <option>Minas Gerais</option>
                     <option>Pará</option>
                     <option>Paraíba</option>
                     <option>Paraná</option>
                     <option>Pernambuco</option>
                     <option>Piauí</option>
                     <option>Rio de Janeiro</option>
                     <option>Rio Grande do Norte</option>
                     <option>Rio Grande do Sul</option>
                     <option>Rondônia</option>
                     <option>Roraima</option>
                     <option>Santa Catarina</option>
                     <option>São Paulo</option>
                     <option>Sergipe</option>
                     <option>Tocantins</option>
                  </select>
               </div>
               <br>  <br>           
               <div class="col-md-6">
                  <label>Telefone Fixo:</label><br>
                  <input type="number" name="Telefone" placeholder="Seu número telefone fixo *">
               </div>
               <div class="col-md-6">
                  <label>Celular:</label><br>
                  <input type="number" name="Celular" placeholder="Seu número de celular *">
               </div>
               <div class="col-md-6">
                  <label>Crie sua senha:</label><br>
                  <input type="password" name="senha" placeholder="Digite uma senha *">
               </div>
               <div class="col-md-6">
                  <label>Confirme sua senha:</label><br>
                  <input type="password" name="senha" placeholder="Confirme a senha digitada *">
               </div>
            </form>
         </div>
         <div class="col-md-12 text-center">
            <h1 tabindex="0">Cadastro Perfil Profissional</h1>
         </div>
         <div class="col-md-12 formContato">
            <form>
               <div class="col-md-12">
                  <span class="red-color" tabindex="0">* Aviso:</span>  Declaro ter o conhecimento de que este cadastro é exclusivo para pessoas com deficiências abrangidos pela lei 8213/91. Estou ciente que os serviços para os candidatos são gratuitos.
               </div>
               <div class="col-md-12">
                  <h3 tabindex="0">Formação Acadêmica</h3>
               </div>
               <div class="col-md-6">
                  <label>Grau de escolaridade:</label><br>
                  <select class="select-form">
                     <option value="" class="option">Seu Grau de escolaridade</option>
                     <optgroup label="Superior">
                        <option value="17">
                           Graduação
                        </option>
                        <option value="18">
                           Pós-graduação
                        </option>
                        <option value="19">
                           MBA
                        </option>
                        <option value="21">
                           Mestrado
                        </option>
                        <option value="20">
                           Doutorado
                        </option>
                     </optgroup>
                     <optgroup label="2º grau">
                        <option value="16">
                           Técnico
                        </option>
                        <option value="15">
                           Ensino
                           Médio
                        </option>
                        <option value="9">
                           Ensino
                           Fundamental
                        </option>
                     </optgroup>
                  </select>
               </div>
               <div class="col-md-6">
                  <label> Situação:</label><br>
                  <select class="select-form">
                     <option value="">Situação do Curso</option>
                     <optgroup label="Situação">
                        <option value="1">
                           Concluído
                        </option>
                        <option value="3">
                           Cursando
                        </option>
                        <option value="2">
                           Trancado
                        </option>
                     </optgroup>
                  </select>
               </div>
               <div class="col-md-6">
                  <label>Curso:</label><br>
                  <input type="text" name="" placeholder="Seu curso *">
               </div>
               <div class="col-md-6">
                  <label>Data de Conclusão:</label><br>
                  <input type="date" name="Cidade" >
               </div>
               <div class="col-md-12">
                  <label>Nome da Instituição:</label><br>
                  <input type="text" name="" placeholder="Nome da Instituição: *">
               </div>
               <div class="col-md-12">
                  <h3>Experiência Profissional</h3>
               </div>
               <div class="col-md-12 linha-exp">
                  <h4><strong>Última Experiência</strong></h4>
               </div>
               <div class="col-md-12 radio">
                  <label>Atual Emprego:</label>
                  <input name="" type="radio" value="sim" class="redio-filho" title="Informe se esse é seu atual emprego.">Sim
                  <input name="" type="radio" value="nao" class="redio-filho" title="Informe se esse é o seu atual emprego." required> Não
               </div>
               <div class="col-md-6">
                  <label>Nome da empresa:</label><br>
                  <input type="text" name="" placeholder="Nome da empresa: *">
               </div>
               <div class="col-md-6">
                  <label>Último cargo:</label><br>
                  <input type="text" name="" placeholder="Último cargo: *">
               </div>
               <div class="col-md-12">
                  <label>Atribuições:</label><br>
                  <textarea name="FormMensagem" placeholder="Suas Atribuições: *"></textarea>
               </div>
               <div class="col-md-6">
                  <label>Data entrada:</label><br>
                  <input type="date" name="Cidade" >
               </div>
               <div class="col-md-6">
                  <label>Data saída:</label><br>
                  <input type="date" name="Cidade" >
               </div>
               <div class="col-md-12 linha-exp">
                  <h4><strong>Penúltima Experiência</strong></h4>
               </div>
               <div class="col-md-6">
                  <label>Nome da empresa:</label><br>
                  <input type="text" name="" placeholder="Nome da empresa: *">
               </div>
               <div class="col-md-6">
                  <label>Último cargo:</label><br>
                  <input type="text" name="" placeholder="Último cargo: *">
               </div>
               <div class="col-md-12">
                  <label>Atribuições:</label><br>
                  <textarea name="FormMensagem" placeholder="Suas Atribuições: *"></textarea>
               </div>
               <div class="col-md-6">
                  <label>Data entrada:</label><br>
                  <input type="date" name="Cidade" >
               </div>
               <div class="col-md-6">
                  <label>Data saída:</label><br>
                  <input type="date" name="Cidade" >
               </div>
               <div class="col-md-12">
                  <h3>Dados da Deficiência</h3>
               </div>
               <div class="col-md-12 radio">
                  <label>Possui deficiência Auditivo:</label>
                  <div><input type="checkbox" name="cadastro_defic[6]" class="redio-filho" value="1" title="Marque este campo caso tenha 41 - 55 db - Surdez moderada." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="199"> 41 - 55 db - Surdez moderada</div>
                  <div><input type="checkbox" name="cadastro_defic[7]" class="redio-filho" value="1" title="Marque este campo caso tenha 56 - 70 db - Surdez acentuada." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="200"> 56 - 70 db - Surdez acentuada</div>
                  <div><input type="checkbox" name="cadastro_defic[8]" class="redio-filho" value="1" title="Marque este campo caso tenha 71 - 90 db - Surdez severa." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="201"> 71 - 90 db - Surdez severa</div>
                  <div><input type="checkbox" name="cadastro_defic[10]" class="redio-filho" value="1" title="Marque este campo caso tenha Anacusia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="202"> Anacusia</div>
               </div>
               <div class="col-md-12 radio">
                  <label>Possui deficiência Fisica:</label>
                  <div><input type="checkbox" name="cadastro_defic[11]" class="redio-filho" value="1" title="Marque este campo caso tenha Amputação ." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="203"> Amputação </div>
                  <div><input type="checkbox" name="cadastro_defic[13]" class="redio-filho" value="1" title="Marque este campo caso tenha Hemiplegia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="204"> Hemiplegia</div>
                  <div><input type="checkbox" name="cadastro_defic[14]" class="redio-filho" value="1" title="Marque este campo caso tenha Membros com deformidade congênita ou adquirida." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="205"> Membros com deformidade congênita ou adquirida</div>
                  <div><input type="checkbox" name="cadastro_defic[15]" class="redio-filho" value="1" title="Marque este campo caso tenha Monoparesia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="206"> Monoparesia</div>
                  <div><input type="checkbox" name="cadastro_defic[16]" class="redio-filho" value="1" title="Marque este campo caso tenha Monoplegia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="207"> Monoplegia</div>
                  <div><input type="checkbox" name="cadastro_defic[17]" class="redio-filho" value="1" title="Marque este campo caso tenha Paralisia cerebral." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="208"> Paralisia cerebral</div>
                  <div><input type="checkbox" name="cadastro_defic[18]" class="redio-filho" value="1" title="Marque este campo caso tenha Paraparesia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="209"> Paraparesia</div>
                  <div><input type="checkbox" name="cadastro_defic[19]" class="redio-filho" value="1" title="Marque este campo caso tenha Paraplegia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="210"> Paraplegia</div>
                  <div><input type="checkbox" name="cadastro_defic[20]" class="redio-filho" value="1" title="Marque este campo caso tenha Tetraparesia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="211"> Tetraparesia</div>
                  <div><input type="checkbox" name="cadastro_defic[21]" class="redio-filho" value="1" title="Marque este campo caso tenha Tetraplegia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="212"> Tetraplegia</div>
                  <div><input type="checkbox" name="cadastro_defic[22]" class="redio-filho" value="1" title="Marque este campo caso tenha Triparesia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="213"> Triparesia</div>
                  <div><input type="checkbox" name="cadastro_defic[23]" class="redio-filho" value="1" title="Marque este campo caso tenha Triplegia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="214"> Triplegia</div>
                  <div><input type="checkbox" name="cadastro_defic[24]" class="redio-filho" value="1" title="Marque este campo caso tenha Nanismo." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="215"> Nanismo</div>
                  <div><input type="checkbox" name="cadastro_defic[41]" class="redio-filho" value="1" title="Marque este campo caso tenha Ostomia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="216"> Ostomia</div>
                  <div><input type="checkbox" name="cadastro_defic[12]" class="redio-filho" value="1" title="Marque este campo caso tenha Hemiparesia." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="217"> Hemiparesia</div>
               </div>
               <div class="col-md-12 radio">
                  <label>Possui deficiência Mental:</label>
                  <div><input type="checkbox" name="cadastro_defic[28]" class="redio-filho" value="1" title="Marque este campo caso tenha Comunicação." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="218"> Comunicação</div>
                  <div><input type="checkbox" name="cadastro_defic[29]" class="redio-filho" value="1" title="Marque este campo caso tenha Cuidado pessoal." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="219"> Cuidado pessoal</div>
                  <div><input type="checkbox" name="cadastro_defic[30]" class="redio-filho" value="1" title="Marque este campo caso tenha Habilidades sociais." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="220"> Habilidades sociais</div>
                  <div><input type="checkbox" name="cadastro_defic[31]" class="redio-filho" value="1" title="Marque este campo caso tenha Utilização da comunidade." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="221"> Utilização da comunidade</div>
                  <div><input type="checkbox" name="cadastro_defic[32]" class="redio-filho" value="1" title="Marque este campo caso tenha Saúde e segurança." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="222"> Saúde e segurança</div>
                  <div><input type="checkbox" name="cadastro_defic[33]" class="redio-filho" value="1" title="Marque este campo caso tenha Habilidades acadêmicas." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="223"> Habilidades acadêmicas</div>
                  <div><input type="checkbox" name="cadastro_defic[34]" class="redio-filho" value="1" title="Marque este campo caso tenha Lazer." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="224"> Lazer</div>
                  <div><input type="checkbox" name="cadastro_defic[35]" class="redio-filho" value="1" title="Marque este campo caso tenha Trabalho." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="225"> Trabalho</div>
               </div>
               <div class="col-md-12 radio">
                  <label>Possui deficiência Visual:</label>
                  <div><input type="checkbox" name="cadastro_defic[36]" class="redio-filho" value="1" title="Marque este campo caso tenha Baixa visão severa." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="228"> Baixa visão severa</div>
                  <div><input type="checkbox" name="cadastro_defic[37]" class="redio-filho" value="1" title="Marque este campo caso tenha Baixa visão profunda." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="229"> Baixa visão profunda</div>
                  <div><input type="checkbox" name="cadastro_defic[38]" class="redio-filho" value="1" title="Marque este campo caso tenha Próximo à cegueira." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="230"> Próximo à cegueira</div>
                  <div><input type="checkbox" name="cadastro_defic[39]" class="redio-filho" value="1" title="Marque este campo caso tenha Cegueira total." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="231"> Cegueira total</div>
                  <div><input type="checkbox" name="cadastro_defic[40]" class="redio-filho" value="1" title="Marque este campo caso tenha Visão Monocular." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="232"> Visão Monocular</div>
               </div>
               <div class="col-md-12 radio">
                  <label>Especifique sua Deficiência:</label>
                  <textarea name="FormMensagem" placeholder="Digite neste espaço informações sobre sua Deficiência *" title="Digite neste espaço informações sobre sua Deficiência."></textarea>
               </div>
               <label for="cadastro_laudo">Anexar Laudo Médico:</label>
               <input name="cadastro_laudo" id="btn_anexar" type="file" title="Selecione o arquivo e clique no botão ao Enviar Arquivo." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="234"><br>    
               <h5 class="red-title" tabindex="0">Esse campo não é obrigatório, pode ser preenchido após o cadastro, seu preenchimento será um diferencial.</h5>
               <br>
               <div class="col-md-12 radio">
                  <label>Possúi veículo adaptado?</label>
                  <input name="cadastro_veiculo" id="cadastro_veiculo" type="radio" value="sim" class="redio-filho" title="Informe se você possui veículo adaptado." tabindex="235">
                  Sim
                  <input name="cadastro_veiculo" id="cadastro_veiculo" type="radio" value="nao" checked="checked" class="redio-filho" title="Informe se você possui veículo adaptado." tabindex="236"> Não                
               </div>
               <div class="col-md-12 radio">
                  <label>Independente no transporte coletivo?</label>
                  <input name="cadastro_veiculo" id="cadastro_veiculo" type="radio" value="sim" class="redio-filho" title="Informe se você possui veículo adaptado." tabindex="235">
                  Sim
                  <input name="cadastro_veiculo" id="cadastro_veiculo" type="radio" value="nao" checked="checked" class="redio-filho" title="Informe se você possui veículo adaptado." tabindex="236"> Não                
               </div>
               <div class="col-md-12 radio">
                  <label>Necessita de adaptações no ambiente de trabalho?</label>
                  <input name="cadastro_veiculo" id="cadastro_veiculo" type="radio" value="sim" class="redio-filho" title="Informe se você possui veículo adaptado." tabindex="235">
                  Sim
                  <input name="cadastro_veiculo" id="cadastro_veiculo" type="radio" value="nao" checked="checked" class="redio-filho" title="Informe se você possui veículo adaptado." tabindex="236"> Não     
                  <div class="col-md-12">
                     <label for="cadastro_especifique">Especifique:</label>
                  </div>
                  <textarea name="FormMensagem" placeholder="Digite neste espaço informações sobre as adaptações necessárias no ambiente de trabalho *" title="Digite neste espaço informações sobre as adaptações necessárias no ambiente de trabalho"></textarea>
                  <span class="instru" tabindex="0">
                     Digite no espaço acima as adaptações necessárias no ambiente de trabalho. Faça um breve descritivo de sua deficiência e se necessita de adaptações no ambiente de trabalho.
                  </span>                                                            
               </div>
               <div class="col-md-12 radio">
                  <input type="checkbox" name="cadastro_jalei8213" id="cadastro_jalei8213" class="redio-filho" value="1" title="Marque este campo para confirmar que já trabalhou pelo regime de Lei de Cotas 8213/91?." onfocus="Focuss(this,'');" onblur="Blurr(this,'');" tabindex="242"> Já
                  trabalhou
                  pelo regime de Lei de Cotas 8213/91?.                  
               </div>
                                                         
            </div>
         </form>
         <button type="submit" class="button-enviar" onclick="window.open('finalizarpop.php', '_self');">Enviar Cadastro</button>     
      </div>
   </div>
</article>
</main>
<?php include_once "footer.php"; ?>