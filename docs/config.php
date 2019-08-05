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
﻿﻿<html>
<body>
<form id="formCadastraConfig" name="formCadastraConfig" method="post" action="index.php?acao=gravarConfig">
  <p>&nbsp;</p>
  <table width="382" border="1" align="center">
    <tr>
      <th colspan="2" scope="col">Configurações do Sistema</th>
    </tr>
    <tr>
      <th width="68" align="center" scope="col">Empresa:</th>
      <th width="378" align="center" scope="col">
      <input name="txtNomeEmpresa" type="text" id="txtNomeEmpresa" size="50" maxlength="40"   value="ME SALVA T.I"/></th>
    </tr>
    <tr>
      <th scope="row">Logo:</th>
      <th scope="row"><input name="txtLogo" type="text" id="txtLogo" size="50" maxlength="10"  value="lgt2.png"/></th>
    </tr>
    <tr>
      <th scope="row">Título:</th>
      <th scope="row"><input name="txtTitulo" type="text" id="txtTitulo" size="50" maxlength="40"  value="GESTÃO DE DOCUMENTOS"/></th>
    </tr>
    <tr>
      <th colspan="2" scope="row"><table width="32" border="1">
        <tr>
          <th scope="col"><input type="button" name="btCadastrar" id="btCadastrar" value="Cadastrar" onClick="validaCampoConfig(messageCompany,messageLogo,messageTitle)"  /></th>
          <th scope="col"><input type="button" name="btLimparCampos" id="btLimparCampos" value="Limpar" onClick=limparCamposConfiguracao() /></th>
          <th scope="col"><input type="reset" name="btCancelar" id="btCancelar" value="Cancelar"/></th>
        </tr>
      </table></th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<script type="text/javascript">
   var messageCompany="O campo empresa está vazio!!";
   var messageLogo="O campo logotipo está vazio!";
   var messageTitle="O campo título está vazio!";
</script>
</body>
</html>
 
</div>
 <?php
    
      rodape();
    ?>
 
