<?php  
include_once './util/corpo.php';
cabeca();

?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item ">
            <span data-feather="file"></span>
            <label>Inicio</label>
        </li>
        <li class="nav-item">
            <span data-feather="file"></span>
            <label>Editor de Texto</label>
        </li>
        <li class="nav-item">
            <span data-feather="file"></span>
            <label>Configurações</label>
        </li>
        <li class="nav-item">
            <span data-feather="log-out"></span>
            <label>Logout</label>
        </li>
    </ul>
</nav>

  
    
     <a href="index.php?acao=editorTexto"><img  class="botaoEditorTexto" src="img/editar.png" alt="Editor de Texto" title="Editor de Texto"/></a> 
     <a href="index.php?acao=config"><img class="botaoConfig" src="img/config.png" alt="Configurações" title="Configurações"></a>
     <a href="logoff.php"><img  class="botaoSair" src="img/exit.png" alt="Sair" title="Sair"/></a>
      </div>
  </div>

<div class="menu">
		<ul> 
		       
			<li><a href="index.php?acao=cadastrarDocumento"><div class="imgMenu"><img src="img/menu/documento.png"></div>Cadastrar Documento</a></li>
        	        				<li><a href="index.php?acao=cadastrarTipoDoc"><div class="imgMenu"><img src="img/menu/tipoDoc.png"></div>Cadastrar Tipo de Documento</a></li>
									<li><a href="index.php?acao=cadastrarUsuario" ><div class="imgMenu"><img src="img/menu/usuario.png"></div>Cadastrar Usuário</a></li>
						            <li><a href="index.php?acao=cadastrarPermissao"><div class="imgMenu"><img src="img/menu/permissao.png"></div>Cadastrar Permissão</a></li>
                    	        	<li><a href="index.php?acao=listarDocumento"><div class="imgMenu"><img src="img/menu/listarDocumento.png"></div>Listar Documentos</a></li>
									<li><a href="index.php?acao=listarTipoDocumento"><div class="imgMenu"><img src="img/menu/listarTipoDoc.png"></div>Listar Tipo Documento</a></li>
									<li><a href="index.php?acao=listarUsuario"><div class="imgMenu"><img src="img/menu/listarUsuario.png"></div>Listar Usuário</a></li>
                                    <li><a href="index.php?acao=listarLog"><div class="imgMenu"><img src="img/menu/listarLog.png"></div>Listar Log</a></li>
                                     <li><a href=index.php?acao=config><div class="imgMenu"><img src="img/menu/cdrConfig.png"></div>Configurações</a></li>
                         
          </ul>
	</div>

<div id="areaNotificacao" class="areaNotificacao"></div>
<div class="area">
﻿﻿﻿<html>
<body>
<form action="controladores/cadastrarDocumentoAcao.php?acao=gravarDocumento" method="post" enctype="multipart/form-data" name="formGravaDocumento" id="formGravaDocumento">
  <table width="464" border="1" align="center">
    <tr>
      <th width="454" scope="col">Cadastrar Documento</th>
    </tr>
    <tr>
      <th height="20" align="right" scope="row"><div align="left">Nome: <input border="0" name="txtNomeDocumento" type="text" id="txtNomeDocumento" size="60" maxlength="80" /></div></th>
    </tr>
    <tr>
      <th align="left" scope="row">Tipo Documento: 
        <select name="cbxTipoDocumento" id="cbxTipoDocumento">
                  <option value="36">COOPERATIVO</option>
                    <option value="40">RECIBOS</option>
                    <option value="43">CONTRATOS</option>
                    <option value="104">NFe</option>
                    <option value="123">CONTAS DA COPEL</option>
                    <option value="135">DEMONSTRAÇÃO</option>
                    <option value="143">FATURAMENTO</option>
                    <option value="151">Memorando</option>
                    <option value="153">Curriculum</option>
                    <option value="154">Assinado digitalmente</option>
                    <option value="155">Leis</option>
                    <option value="157">Declaração</option>
                    <option value="158">OFICIOS EXPEDIDOS</option>
                    <option value="170">Fluxograma</option>
                    <option value="180">SECRETARIA</option>
                    <option value="181">CONTABIL</option>
                    <option value="182">Ofício</option>
                    <option value="183">asdad</option>
                    <option value="184">livro de ti</option>
                    <option value="185">Cidadania</option>
                    <option value="186">LICITATORIO</option>
                    <option value="187">Itgq</option>
                    <option value="188">Teste do Sistema</option>
                </select>
              </th>
    </tr>
    <tr>
      <th align="left" scope="row">Nível Acesso:        <select name="cbxNivelAcesso" size="1"  id="cbxNivelAcesso">
                        <option value="1">Público</option>
                              <option value="2">Privado</option>
                       </select>
      </th>
    </tr>
    <tr>
      <th height="59" align="left" scope="row">Document:      <input name="arquivoDescricao" type="file" id="arquivoDescricao" class="inputfile" height="60"/></th>
    </tr>
    <tr>
      <th height="28" align="left" scope="row">
              <div class="progress" >
                 <div class="bar"></div >
                 <div class="percent" ></div >
		      </div>
          <div id="status"></div> 
      </th>
    </tr>
      <tr>
    </tr>
      <tr>
        <th height="35" align="center" scope="row">
          <input type="submit" name="btSalvar" id="btSalvar" value="Cadastrar"/>
          <input type="reset" name="btLimpar" id="btLimpar" value="Limpar" onclick="reset" />
         <input type="reset" name="btCancelar" id="btCancelar" value="Cancelar"/>
        </th>
    </tr>
  </table>
</form>
<script>
(function() 
{
  var bar = $('.bar');
  var percent = $('.percent');
  var status = $('#status');
  var mensageName ="O campo nome está vazio ou contém caracteres inválidos!";
  var mesageDoc="O campo documento está vazio.";  
  $(document.getElementById('formGravaDocumento')).ajaxForm({
        
         beforeSend: function() {
         if((txtNomeDocumento.value=="") || ehLetra(txtNomeDocumento.value)){
         gerarNotificacao("<h2>"+mensageName+"<h2>","error","div#areaNotificacao");
         document.getElementById('txtNomeDocumento').focus();
         document.getElementById('txtNomeDocumento').reset();
         }
       if(document.getElementById('arquivoDescricao').value==""){
           gerarNotificacao("<h2>"+mesageDoc+"<h2>","error","div#areaNotificacao");
           document.getElementById('arquivoDescricao').focus();
           document.getElementById('arquivoDescricao').reset();
          }

          status.empty();
          var percentVal = '0%';
          bar.width(percentVal)
          percent.html(percentVal);
      },
      uploadProgress: function(event, position, total, percentComplete) {
          var percentVal = percentComplete + '%';
          bar.width(percentVal)
          percent.html(percentVal);
      //console.log(percentVal, position, total);
      },
      success: function() {
          var percentVal = '100%';
          bar.width(percentVal)
          percent.html(percentVal);
      },
    complete: function(xhr) {
    status.html(xhr.responseText);
    }
  }); 
})();    
</script>
 <?php
    
      rodape();
    ?>