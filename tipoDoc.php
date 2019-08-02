<?php  
include_once './util/corpo.php';
cabeca();

?>
<body>
<header class="barra-superior">
<img src="imagens/lgt2.png"/>
<div class="menu-superior">
  <p > Bem-Vindo:Administrador</p> 
    <div class="botoes-barra-superior-direita" >
     <a href="index.php"><img  class="botaoHome" src="imagens/home-05.png" alt="Página Incial" title="Página Incial"/></a>
     <a href="index.php?acao=editorTexto"><img  class="botaoEditorTexto" src="imagens/editar.png" alt="Editor de Texto" title="Editor de Texto"/></a> 
     <a href="index.php?acao=config"><img class="botaoConfig" src="imagens/config.png" alt="Configurações" title="Configurações"></a>
     <a href="logoff.php"><img  class="botaoSair" src="imagens/exit.png" alt="Sair" title="Sair"/></a>
      </div>
  </div>
</header>
<div class="menu">
		<ul> 
		       
			<li><a href="index.php?acao=cadastrarDocumento"><div class="imagensMenu"><img src="imagens/menu/documento.png"></div>Cadastrar Documento</a></li>
        	        				<li><a href="index.php?acao=cadastrarTipoDoc"><div class="imagensMenu"><img src="imagens/menu/tipoDoc.png"></div>Cadastrar Tipo de Documento</a></li>
									<li><a href="index.php?acao=cadastrarUsuario" ><div class="imagensMenu"><img src="imagens/menu/usuario.png"></div>Cadastrar Usuário</a></li>
						            <li><a href="index.php?acao=cadastrarPermissao"><div class="imagensMenu"><img src="imagens/menu/permissao.png"></div>Cadastrar Permissão</a></li>
                    	        	<li><a href="index.php?acao=listarDocumento"><div class="imagensMenu"><img src="imagens/menu/listarDocumento.png"></div>Listar Documentos</a></li>
									<li><a href="index.php?acao=listarTipoDocumento"><div class="imagensMenu"><img src="imagens/menu/listarTipoDoc.png"></div>Listar Tipo Documento</a></li>
									<li><a href="index.php?acao=listarUsuario"><div class="imagensMenu"><img src="imagens/menu/listarUsuario.png"></div>Listar Usuário</a></li>
                                    <li><a href="index.php?acao=listarLog"><div class="imagensMenu"><img src="imagens/menu/listarLog.png"></div>Listar Log</a></li>
                                     <li><a href=index.php?acao=config><div class="imagensMenu"><img src="imagens/menu/cdrConfig.png"></div>Configurações</a></li>
                         
          </ul>
	</div>

<div id="areaNotificacao" class="areaNotificacao"></div>
<div class="area">
﻿﻿﻿﻿﻿<html>
<body>
<form id="formCadastraTipoDocumento" name="formCadastraTipoDocumento" method="post" action="index.php?acao=gravaTipoDoc&codigo=">
  <p>&nbsp;</p>
  <table width="460" border="1" align="center">
    <tr>
      <th colspan="3" scope="col">Cadastrar Tipo de Documento</th>
    </tr>
    <tr>
      <th colspan="3" scope="col" align="center">Nome: 
    <input name="txtTipoDocumento" type="text" id="txtTipoDocumento" size="50" maxlength="80" onkeypress="return somenteCaracteres(event)"
    value=""/>
      </th>
    </tr>
    <tr>
      <th width="155" scope="row">
            <input type="button" name="btCadastrar" id="btCadastrar" value="Cadastrar" onclick="validaCampoCadastroTipoDocumento(messageName,messageletter)"  />
      </th>
      <th width="124" scope="row">
            <input type="reset" name="btLimparCampos" id="btLimparCampos" value="Limpar" onclick="reset" />
      </th>
      <th width="159" scope="row">
            <input type="reset" name="btCancelar" id="btCancelar" value="Cancelar" onclick="javascript:history.back()"/>
     </th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<script type="text/javascript">
   var messageName="O campo nome está vazio ou contém caracteres inválidos!";
   var messageletter="Somente letras nesse campo!";
</script>
</body>
</html>
 
</div>
 <?php
    
      rodape();
    ?>