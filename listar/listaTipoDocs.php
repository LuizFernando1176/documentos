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
<table width="568" border"1" align="center">
  <tr>
    <th height="23" colspan="4" align="center" scope="col">
    Tipos de Documentos Cadastrados    </th>
  </tr>
  <tr>
    <th colspan="4" align="center" scope="col">
      <label for="txtPesquisaDocumento">Pesquisar</label>
      <input name="txtPesquisaDocumento" type="text" id="txtPesquisaDocumento" size="40" />
      <input type="button" name="btPesquisar" id="btPesquisar" value="Pesquisar" onClick="pesquisarTipoDocumento()"/>
    </th>
  </tr>
  <tr>
    <th width="50" scope="row"><div align="left">Código</div></th>
    <th width="367" scope="row"><div align="left">Nome</div></th>
    <th><div align="left">Editar</div></th>
    <th><div aling="left">Excluir</div></th>
  </tr>
          <tr >
          <td align="left"  scope="row">
              36          </td>
          <td align="left" scope="row">
              COOPERATIVO          </td>
          <td width="62" align="center">
                 <a href="index.php?acao=alterarTipoDoc&amp;codigo=36">
                 <img src="imagens/editar.png" alt="Editar Tipo de Documento"     title="Editar Tipo de Documento" /></a>
          </td>
          <td width="61" align="center">
              <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirTipoDoc','36','Cancelar')" >
             <img src="imagens/excluir.png" alt="Excluir Tipo de Documento" title="Excluir Tipo de Documento" /></a>
          </td>
        </tr>
          <tr >
          <td align="left"  scope="row">
              40          </td>
          <td align="left" scope="row">
              RECIBOS          </td>
          <td width="62" align="center">
                 <a href="index.php?acao=alterarTipoDoc&amp;codigo=40">
                 <img src="imagens/editar.png" alt="Editar Tipo de Documento"     title="Editar Tipo de Documento" /></a>
          </td>
          <td width="61" align="center">
              <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirTipoDoc','40','Cancelar')" >
             <img src="imagens/excluir.png" alt="Excluir Tipo de Documento" title="Excluir Tipo de Documento" /></a>
          </td>
        </tr>
          <tr >
          <td align="left"  scope="row">
              43          </td>
          <td align="left" scope="row">
              CONTRATOS          </td>
          <td width="62" align="center">
                 <a href="index.php?acao=alterarTipoDoc&amp;codigo=43">
                 <img src="imagens/editar.png" alt="Editar Tipo de Documento"     title="Editar Tipo de Documento" /></a>
          </td>
          <td width="61" align="center">
              <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirTipoDoc','43','Cancelar')" >
             <img src="imagens/excluir.png" alt="Excluir Tipo de Documento" title="Excluir Tipo de Documento" /></a>
          </td>
        </tr>
          <tr >
          <td align="left"  scope="row">
              104          </td>
          <td align="left" scope="row">
              NFe          </td>
          <td width="62" align="center">
                 <a href="index.php?acao=alterarTipoDoc&amp;codigo=104">
                 <img src="imagens/editar.png" alt="Editar Tipo de Documento"     title="Editar Tipo de Documento" /></a>
          </td>
          <td width="61" align="center">
              <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirTipoDoc','104','Cancelar')" >
             <img src="imagens/excluir.png" alt="Excluir Tipo de Documento" title="Excluir Tipo de Documento" /></a>
          </td>
        </tr>
          <tr >
          <td align="left"  scope="row">
              123          </td>
          <td align="left" scope="row">
              CONTAS DA COPEL          </td>
          <td width="62" align="center">
                 <a href="index.php?acao=alterarTipoDoc&amp;codigo=123">
                 <img src="imagens/editar.png" alt="Editar Tipo de Documento"     title="Editar Tipo de Documento" /></a>
          </td>
          <td width="61" align="center">
              <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirTipoDoc','123','Cancelar')" >
             <img src="imagens/excluir.png" alt="Excluir Tipo de Documento" title="Excluir Tipo de Documento" /></a>
          </td>
        </tr>
          <tr >
          <td align="left"  scope="row">
              135          </td>
          <td align="left" scope="row">
              DEMONSTRAÇÃO          </td>
          <td width="62" align="center">
                 <a href="index.php?acao=alterarTipoDoc&amp;codigo=135">
                 <img src="imagens/editar.png" alt="Editar Tipo de Documento"     title="Editar Tipo de Documento" /></a>
          </td>
          <td width="61" align="center">
              <a  onclick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirTipoDoc','135','Cancelar')" >
             <img src="imagens/excluir.png" alt="Excluir Tipo de Documento" title="Excluir Tipo de Documento" /></a>
          </td>
        </tr>
    <script>  
     var messageField="O campo nome está vazio ou contém caracteres inválidos!";
     var message="Deseja excluir o registro?";
     function pesquisarTipoDocumento(){
     var txtPesquisaDocumento = document.getElementById('txtPesquisaDocumento');
     window.location="index.php?acao=pesquisarTipoDocumento&fltr="+txtPesquisaDocumento.value;

    }
      document.addEventListener('keypress', function(e){
       if(e.which == 13){
          pesquisarTipoDocumento();
       }
    }, false);
  </script>
</table>
﻿<div align="center" class="botoes-pagincao"><a href="?acao=listarTipoDocumento&fltr=&pg=1"><img src="imagens/priPagina.png" alt="Primeira Página" title="Primeira Página"/></a><a href="?acao=listarTipoDocumento&fltr=&pg=2"><img src="imagens/prxPagina.png" alt="Próxima Página" title="Próxima Página"/></a><a href="?acao=listarTipoDocumento&fltr=&pg=1"><img src="imagens/pgAnterior.png" alt="Página Anterior" title="Página Anterior"/></a><a href="?acao=listarTipoDocumento&fltr=&pg=4"><img src="imagens/ulPagina.png" alt="Ùltima Pagina" title="Ùltima Pagina"/></a></div>
</body>
</html>
 
</div>
 <?php
    
      rodape();
    ?>
