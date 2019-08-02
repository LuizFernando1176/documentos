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
﻿﻿﻿﻿  ﻿<html>
<body>
  <p>
    <label for="txnomeUsuario"></label>
  </p>
  <form id='formCadastraUsuario' method='post' action="index.php?acao=cadastraNovoUsuario&codigo=">
  <table width="295" border="1" align="center">
    <tr>
      <th colspan="2" align="center">Cadastro de Usuário</th>
    </tr>
    <tr>
      <th width="41">Nome:</th>
      <td width="360"><label for="txtNomeUsuario">
        <input name="txtNomeUsuario" type="text" id="txtNomeUsuario" value="" size="40" maxlength="60"/>
      </label></td>
    </tr>
    <tr>
      <th>Login:</th>
      <td><label for="txtLogin"></label>
      <input name="txtLogin" type="text" id="txtLogin" value="" size="40" maxlength="20"/></td>
    </tr>
    <tr>
    <th>Senha:</th>
      <td><label for="txtSenha"></label>
      <input name="txtSenha" type="password" id="txtSenha" size="40" /></td>
      </tr>
    <tr>
      <th>Perfil:</th>
      <td><label for="cbxPerfilUsuario"></label>
        <select name="cbxPerfilUsuario" id="cbxPerfilUsuario" >
          <option value="1">Administrador</option>
          <option value="2">Usuário</option>
      </select></td>
    </tr>
    <tr>
      <td height="43" colspan="2"><table width="193" border="1" align="center">
        <tr>
          <td width="53"><input type="button" name="btGravarUsuario" id="btGravarUsuario" value="Cadastrar" onclick="validaCamposCadastraUsuario(messageName,messageSenha,messageLogin);"/></td>
          <td width="56"><input type="button" name="btLimparCamposUsuario" id="btLimparCamposUsuario" value="Clear" onclick="limparCamposCadastraUsuario()" /></td>
          <td width="62"><input type="reset" name="btCancelarUsuario" id="btCancelarUsuario" value="Cancelar" onclick="javascript:history.back()" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  </form>
  <script>
    var messageName="O campo nome está vazio ou contém caracteres inválidos!";
    var messageSenha="O campo senha está vazio ou contém caracteres inválidos!";
    var messageLogin="O campo login  está vazio ou contém caracteres inválidos!";
    
   </script>
 </body>
</html>
 
</div>
<?php
    
      rodape();
    ?>