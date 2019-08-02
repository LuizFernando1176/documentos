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
﻿﻿  ﻿﻿<html>
<body>
<form id="formCadastrarPermissao" name="formCadastrarPermissao" method="post" action="index.php?acao=gravarPermissao">
  
  <table width="750" height="156">
  <tr>
    <th height="23" colspan="7" align="center" scope="col">Cadastrar Permissão</th>
  </tr>
    <tr align="left">
      <th width="800" height="20" scope="col">
        Nome Usuário:         <select name="cbxNomeUsuario" id="cbxNomeUsuario" onchange="getStates(this)">
           
         <option value="-1">Selecione um Usuário</option>
                                                     <option value="1">Administrador</option>
                                                 <option value="2">Daniel Filho</option>
                                                 <option value="172">UsuarioDeTeste</option>
                                                 <option value="173">Diego Freire</option>
                                                 <option value="174">Bazinha Maciel</option>
                                                 <option value="175">Adriano</option>
                                                 <option value="176">Prefeitura de Jundia-AL</option>
                               </select>
          </th>
    </tr>
    <tr align="left">
      
  <th height="60" colspan="2" scope="col">
      
      <table width="750" height="80">
        <tr align="left">
          <th width="183" height="24" scope="col" >Cadastrar Usuário</th>
          <th align="center" width="23" scope="col">
                             <input  type="checkbox" name="cxSelcCadastraUsuario" id="cxSelcCadastraUsuario" />
                         </th>
          <th width="160" scope="col">Listar Usuário</th>
          <th align="center" width="27" scope="col">
                      <input type="checkbox" name="cxSelecListarUsuario" id="cxSelecListarUsuario"/>
                      </th>
          <th width="197" scope="col">Listar Log</th>
          <th align="center" width="26" scope="col">
                            <input type="checkbox" name="cxSelecListarLog" id="cxSelecListarLog"  />
                          </th>
        </tr>
        <tr align="left">
          <th height="24" scope="row">Cadastrar Documento</th>
          <th  align="center" height="24" scope="row">
                             <input type="checkbox" name="cxSelecCadastrarDocumento" id="cxSelecCadastrarDocumento"  />
                                  </th>
          <th>Listar Tipo Documento</th>
          <th align="center">
                             <input type="checkbox" name="cxSelecListarTipoDocumento" id="cxSelecListarTipoDocumento" />
                         </th>
          <th>Permissão de Acesso</th>
          <th align="center">
                         <input type="checkbox" name="cxSelecCadastrarPermissaoAcesso" id="cxSelecCadastrarPermissaoAcesso"  />
                         </th>
        </tr>
        <tr align="left">
          <th height="22" scope="row">Cadastrar Tipo Documento</th>
          <th align="center" height="22" scope="row">
                          <input type="checkbox" name="cxSelecCadastrarTipoDocumento" id="cxSelecCadastrarTipoDocumento"  />
                          </th>
          <th>Listar Documentos</th>
          <th align="center">
                        <input type="checkbox" name="cxSelecListarDocumento" id="cxSelecListarDocumento" />
                        </div>
          </th>
          <th>Configurações</th>
          <th align="center">
                         <input type="checkbox" name="cxSelecCadastrarConfiguracao" id="cxSelecCadastrarConfiguracao"  />
                         </th>
        </tr>
      </table>
      </th>
    </tr>
    <tr align="center">
      <th height="34" colspan="2" scope="col">
      <table width="32">
        <tr>
          <th height="28" scope="col">
                <input type="button" name="btGravar" id="btGravar" value="Salvar" onclick="verificaUsuarioSelecionado()" /></th>
          <th scope="col">
                <input type="reset" name="btCancelar" id="btCancelar" value="Cancelar" /></th>
          <th scope="col">
                  <input type="button" name="btLimpar" id="btLimpar" value="Limpar" onclick="limparPermissoes()" /></th>
        </tr>
      </table>
      </th>
    </tr>
  </table>
</form>
<script>
function verificaUsuarioSelecionado(){
  var mensagem ="Selecione o nome do usuário!";
 if(document.getElementById('cbxNomeUsuario').value=="-1"){
  gerarNotificacao("<h2>"+mensagem+"<h2>","error","div#areaNotificacao");
   document.getElementById('cbxNomeUsuario').focus();
 }else{
     document.getElementById('formCadastrarPermissao').submit();
    }//fim do if
  }
function getStates(what) {
      if (what.selectedIndex != '') {
        var codigo = what.value;
        document.location=('index.php?acao=carregarPermissao&codigo='+codigo);
}
}

function limparPermissoes(){

  document.getElementById('cxSelcCadastraUsuario').checked=false;
  document.getElementById('cxSelecListarUsuario').checked=false;
  document.getElementById('cxSelecListarLog').checked=false;
  document.getElementById('cxSelecCadastrarDocumento').checked=false;
  document.getElementById('cxSelecListarTipoDocumento').checked=false;
  document.getElementById('cxSelecCadastrarPermissaoAcesso').checked=false;
  document.getElementById('cxSelecCadastrarTipoDocumento').checked=false;
  document.getElementById('cxSelecListarDocumento').checked=false;
  document.getElementById('cxSelecCadastrarConfiguracao').checked=false;
}
</script>
<?php
    
      rodape();
    ?>