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
<table width="922" border="1" align="center">
  <tr>
    <th height="23" colspan="7" align="center" scope="col">Log de Operações</th>
  </tr>
  <tr>
    <th colspan="7" align="center" scope="col">
      <label for="txtPesquisaLog">Pesquisar</label>
      <input name="txtPesquisaLog" type="text" id="txtPesquisaLog" size="60" />
      <input type="button" name="btPesquisar" id="btPesquisar" value="Pesquisar" onClick="pesquisarLog()" />
    </th>
  </tr>
  <tr class="ordenacao_novo_registro">
    <th width="47" scope="row"><div align="left">Código</div></th>
    <th> <div align="left">Usuário</div></th>
    <th><div align="left">Operação</div></th>
    <th width="284" scope="row"><div align="left">Nome do objeto</div></th>
    <th><div align="left">Data</div></th>
    <th><div align="left">Hora</div></th>
    <th><div align="left">Excluir</div></th>
  </tr>
          <tr >
          <td align="left" scope="row">
             5128          </td>
          <td align="left" width="111">
              adferraz          </td>
          <td align="left" width="207">
                Acessou o Sistema          </td>
          <td align="left" scope="row">
              Adriano          </td>
         <td align="left" width="100">
            31-07-2019           </td>
            <td align="left" width="86">
                19:59:17          </td>
          <td align="center" width="58"><a  onClick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirLog','5128','Cancelar')" ><img src="imagens/excluir.png" alt="Excluir Log" title="Excluir Log" /></a></td>
        </tr>
          <tr >
          <td align="left" scope="row">
             5114          </td>
          <td align="left" width="111">
              admin          </td>
          <td align="left" width="207">
                Acessou o Sistema          </td>
          <td align="left" scope="row">
              Administrador          </td>
         <td align="left" width="100">
            31-07-2019           </td>
            <td align="left" width="86">
                19:53:16          </td>
          <td align="center" width="58"><a  onClick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirLog','5114','Cancelar')" ><img src="imagens/excluir.png" alt="Excluir Log" title="Excluir Log" /></a></td>
        </tr>
          <tr >
          <td align="left" scope="row">
             5115          </td>
          <td align="left" width="111">
              admin          </td>
          <td align="left" width="207">
                Atualizou Permissão          </td>
          <td align="left" scope="row">
              UsuarioDeTeste          </td>
         <td align="left" width="100">
            31-07-2019           </td>
            <td align="left" width="86">
                19:55:43          </td>
          <td align="center" width="58"><a  onClick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirLog','5115','Cancelar')" ><img src="imagens/excluir.png" alt="Excluir Log" title="Excluir Log" /></a></td>
        </tr>
          <tr >
          <td align="left" scope="row">
             5116          </td>
          <td align="left" width="111">
              admin          </td>
          <td align="left" width="207">
                Cadastrou usuário          </td>
          <td align="left" scope="row">
              Adriano          </td>
         <td align="left" width="100">
            31-07-2019           </td>
            <td align="left" width="86">
                19:56:50          </td>
          <td align="center" width="58"><a  onClick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirLog','5116','Cancelar')" ><img src="imagens/excluir.png" alt="Excluir Log" title="Excluir Log" /></a></td>
        </tr>
          <tr >
          <td align="left" scope="row">
             5117          </td>
          <td align="left" width="111">
              admin          </td>
          <td align="left" width="207">
                Saiu do Sistema          </td>
          <td align="left" scope="row">
              Administrador          </td>
         <td align="left" width="100">
            31-07-2019           </td>
            <td align="left" width="86">
                19:57:02          </td>
          <td align="center" width="58"><a  onClick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirLog','5117','Cancelar')" ><img src="imagens/excluir.png" alt="Excluir Log" title="Excluir Log" /></a></td>
        </tr>
          <tr >
          <td align="left" scope="row">
             5118          </td>
          <td align="left" width="111">
              adferraz          </td>
          <td align="left" width="207">
                Acessou o Sistema          </td>
          <td align="left" scope="row">
              Adriano          </td>
         <td align="left" width="100">
            31-07-2019           </td>
            <td align="left" width="86">
                19:57:15          </td>
          <td align="center" width="58"><a  onClick="gerarPedidoExclusao('<h3>'+message+'<h3>','information','center','excluirLog','5118','Cancelar')" ><img src="imagens/excluir.png" alt="Excluir Log" title="Excluir Log" /></a></td>
        </tr>
  </table>
﻿<div align="center" class="botoes-pagincao"><a href="?acao=listarLog&fltr=&pg=1"><img src="imagens/priPagina.png" alt="Primeira Página" title="Primeira Página"/></a><a href="?acao=listarLog&fltr=&pg=2"><img src="imagens/prxPagina.png" alt="Próxima Página" title="Próxima Página"/></a><a href="?acao=listarLog&fltr=&pg=1"><img src="imagens/pgAnterior.png" alt="Página Anterior" title="Página Anterior"/></a><a href="?acao=listarLog&fltr=&pg=12"><img src="imagens/ulPagina.png" alt="Ùltima Pagina" title="Ùltima Pagina"/></a></div>
<script> 
     var message="Deseja excluir o registro?";
     function pesquisarLog(){
     var txtPesquisaLog = document.getElementById('txtPesquisaLog');
     window.location="index.php?acao=pesquisarLog&fltr="+txtPesquisaLog.value;
   }
   document.addEventListener('keypress', function(e){
       if(e.which == 13){
          pesquisarLog();
       }
    }, false);
  </script>
</body>
</html>
 
</div>
<?php
    
      rodape();
    ?>
