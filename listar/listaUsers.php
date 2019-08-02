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
<table width="629" border="1" align="center">
  <tr class="titulos_listas"  >
    <th height="23" colspan="6" align="center" scope="col">
    Usuários Cadastrados    </th>
  </tr>
  <tr>
    <th height="31" colspan="6" align="center" scope="col">
      <label for="txtPesquisaUsuario">Pesquisar</label>
      <input name="txtPesquisaUsuario" type="text" id="txtPesquisaUsuario" size="60" />
      <input type="button" name="btPesquisar" id="btPesquisar" value="Pesquisar" onclick="pesquisarUsuario()" />
    </th>
  </tr>
  <tr>
    <th width="45" scope="row"><div align="left">Código</div></th>
    <th width="219" scope="row"><div align="left">Nome</div></th>
    <th width="141" scope="row"><div align="left">Login</div></th>
    <th width="84" scope="row"><div align="left">Profile</div></th>
    <th><div align="left">Editar</div></th>
    <th><div align="left">Excluir</div></th>
    </td>
  </tr>
          <tr >
          <td align="left" scope="row" >
                  1 
           </td>
          <td align="left"  scope="row">
                  Administrador          </td>
          <td align="left"  scope="row">
                admin          </td>
          <td align="left"  scope="row">
                ADM          </td>
          <td width="51" align="center">
                  <a href="index.php?acao=alterarUsuario&amp;codigo=1">
                   <img src="imagens/editar.png" alt="Editar Usuário" title="Editar Usuário" /></a>
          </td>
          <td width="49" align="center">
          <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirUsuario','1',
            'Cancelar')" >
          <img src="imagens/excluir.png" alt="Excluir Usuário" title="Excluir Usuário" /></a>
          </td>
        </tr>
          <tr >
          <td align="left" scope="row" >
                  175 
           </td>
          <td align="left"  scope="row">
                  Adriano          </td>
          <td align="left"  scope="row">
                adferraz          </td>
          <td align="left"  scope="row">
                USR          </td>
          <td width="51" align="center">
                  <a href="index.php?acao=alterarUsuario&amp;codigo=175">
                   <img src="imagens/editar.png" alt="Editar Usuário" title="Editar Usuário" /></a>
          </td>
          <td width="49" align="center">
          <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirUsuario','175',
            'Cancelar')" >
          <img src="imagens/excluir.png" alt="Excluir Usuário" title="Excluir Usuário" /></a>
          </td>
        </tr>
          <tr >
          <td align="left" scope="row" >
                  174 
           </td>
          <td align="left"  scope="row">
                  Bazinha Maciel          </td>
          <td align="left"  scope="row">
                bazinha          </td>
          <td align="left"  scope="row">
                ADM          </td>
          <td width="51" align="center">
                  <a href="index.php?acao=alterarUsuario&amp;codigo=174">
                   <img src="imagens/editar.png" alt="Editar Usuário" title="Editar Usuário" /></a>
          </td>
          <td width="49" align="center">
          <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirUsuario','174',
            'Cancelar')" >
          <img src="imagens/excluir.png" alt="Excluir Usuário" title="Excluir Usuário" /></a>
          </td>
        </tr>
          <tr >
          <td align="left" scope="row" >
                  2 
           </td>
          <td align="left"  scope="row">
                  Daniel Filho          </td>
          <td align="left"  scope="row">
                dfilho          </td>
          <td align="left"  scope="row">
                USR          </td>
          <td width="51" align="center">
                  <a href="index.php?acao=alterarUsuario&amp;codigo=2">
                   <img src="imagens/editar.png" alt="Editar Usuário" title="Editar Usuário" /></a>
          </td>
          <td width="49" align="center">
          <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirUsuario','2',
            'Cancelar')" >
          <img src="imagens/excluir.png" alt="Excluir Usuário" title="Excluir Usuário" /></a>
          </td>
        </tr>
          <tr >
          <td align="left" scope="row" >
                  173 
           </td>
          <td align="left"  scope="row">
                  Diego Freire          </td>
          <td align="left"  scope="row">
                diegofreire          </td>
          <td align="left"  scope="row">
                ADM          </td>
          <td width="51" align="center">
                  <a href="index.php?acao=alterarUsuario&amp;codigo=173">
                   <img src="imagens/editar.png" alt="Editar Usuário" title="Editar Usuário" /></a>
          </td>
          <td width="49" align="center">
          <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirUsuario','173',
            'Cancelar')" >
          <img src="imagens/excluir.png" alt="Excluir Usuário" title="Excluir Usuário" /></a>
          </td>
        </tr>
          <tr >
          <td align="left" scope="row" >
                  176 
           </td>
          <td align="left"  scope="row">
                  Prefeitura de Jundia-AL          </td>
          <td align="left"  scope="row">
                jundia          </td>
          <td align="left"  scope="row">
                ADM          </td>
          <td width="51" align="center">
                  <a href="index.php?acao=alterarUsuario&amp;codigo=176">
                   <img src="imagens/editar.png" alt="Editar Usuário" title="Editar Usuário" /></a>
          </td>
          <td width="49" align="center">
          <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirUsuario','176',
            'Cancelar')" >
          <img src="imagens/excluir.png" alt="Excluir Usuário" title="Excluir Usuário" /></a>
          </td>
        </tr>
  </table>
﻿<div align="center" class="botoes-pagincao"><a href="?acao=listarUsuario&fltr=&pg=1"><img src="imagens/priPagina.png" alt="Primeira Página" title="Primeira Página"/></a><a href="?acao=listarUsuario&fltr=&pg=2"><img src="imagens/prxPagina.png" alt="Próxima Página" title="Próxima Página"/></a><a href="?acao=listarUsuario&fltr=&pg=1"><img src="imagens/pgAnterior.png" alt="Página Anterior" title="Página Anterior"/></a><a href="?acao=listarUsuario&fltr=&pg=2"><img src="imagens/ulPagina.png" alt="Ùltima Pagina" title="Ùltima Pagina"/></a></div>
<script> 
     var message="Deseja excluir o registro?";
     function pesquisarUsuario(){
     var txtPesquisaUsuario = document.getElementById('txtPesquisaUsuario');
     window.location="index.php?acao=pesquisarUsuario&fltr="+txtPesquisaUsuario.value;
    }
    document.addEventListener('keypress', function(e){
       if(e.which == 13){
          pesquisarUsuario();
       }
    }, false);
  </script>
</body>
</html>
 
</div>
 <?php
    
      rodape();
    ?>
