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
﻿﻿﻿<html>
<body>
<table width="907" border="1" align="center">
  <tr class="titulos_listas"  >
    <th height="23" colspan="10" align="center" scope="col">
Registered documents</th>
  </tr>
  <tr>
    <th colspan="10" align="center" scope="col">
      <label for="txtPesquisaDocumento">Pesquisar</label>
      <input name="txtPesquisaDocumento" type="text" id="txtPesquisaDocumento" size="60" />
      <input type="submit" name="btPesquisar" id="btPesquisar" value="Pesquisar" onClick="pesquisarDocumento()"/>
    </th>
  </tr>
  <tr class="ordenacao_novo_registro">
    <th width="56" scope="row"><div align="left">Código</div></th>
    <th width="277" scope="row" align="left">Nome</th>
    <th><div align="left">Autor</div></th>
    <th aling="left">Tipo</th>
    <th align="left">Categoria</th>
    <th align="left">Data</th>
    <th align="left">Visualizar</th>
    <th align="left">Download</th>
    <th align="left">Excluir</th>
  </tr>
<tr>
          
  <td height="40" scope="row" aling="left">128</td>
  <td align="left" scope="row"> teste b1</td>
  <td align="left" width="107">admin </td>
  <td aling="left" width="39">pdf</td>
   <td aling="left" width="39">Teste do Sistema</td>
  <td align="left" width="100">28-07-2019</td>
  
  <td width="62" align="center">
    <a href="index.php?acao=visualizarDocumento&data=28-07-2019&nome=b1.pdf&codigo=128"><img src="imagens/visualizarDoc.png" alt="Visualizar Documento" title="Visualizar Documento" /></a>

    </td>
  <td width="70" align="center"><a href="download.php?arquivo=arquivos/28-07-2019/b1.pdf"><img src="imagens/download.png" alt="Baixar Arquivo" title="Baixar Arquivo"></a></td>

  <td width="64" align="center"><a  onClick="gerarPedidoExclusaoDoc('<h3>'+message+'<h3>','information','center','excluirDocumento','128','28-07-2019','b1.pdf','Cancelar')"><img src="imagens/excluir.png" alt="Excluir Arquivo" title="Excluir Arquivo" /></a></td>
</tr>
  <tr>
          
  <td height="40" scope="row" aling="left">127</td>
  <td align="left" scope="row"> teste</td>
  <td align="left" width="107">admin </td>
  <td aling="left" width="39">png</td>
   <td aling="left" width="39">COOPERATIVO</td>
  <td align="left" width="100">28-07-2019</td>
  
  <td width="62" align="center">
    <a href="index.php?acao=visualizarDocumento&data=28-07-2019&nome=logo-gnre.png&codigo=127"><img src="imagens/visualizarDoc.png" alt="Visualizar Documento" title="Visualizar Documento" /></a>

    </td>
  <td width="70" align="center"><a href="download.php?arquivo=arquivos/28-07-2019/logo-gnre.png"><img src="imagens/download.png" alt="Baixar Arquivo" title="Baixar Arquivo"></a></td>

  <td width="64" align="center"><a  onClick="gerarPedidoExclusaoDoc('<h3>'+message+'<h3>','information','center','excluirDocumento','127','28-07-2019','logo-gnre.png','Cancelar')"><img src="imagens/excluir.png" alt="Excluir Arquivo" title="Excluir Arquivo" /></a></td>
</tr>
  <tr>
          
  <td height="40" scope="row" aling="left">126</td>
  <td align="left" scope="row"> teste</td>
  <td align="left" width="107">admin </td>
  <td aling="left" width="39">jpg</td>
   <td aling="left" width="39">COOPERATIVO</td>
  <td align="left" width="100">24-07-2019</td>
  
  <td width="62" align="center">
    <a href="index.php?acao=visualizarDocumento&data=24-07-2019&nome=Koala.jpg&codigo=126"><img src="imagens/visualizarDoc.png" alt="Visualizar Documento" title="Visualizar Documento" /></a>

    </td>
  <td width="70" align="center"><a href="download.php?arquivo=arquivos/24-07-2019/Koala.jpg"><img src="imagens/download.png" alt="Baixar Arquivo" title="Baixar Arquivo"></a></td>

  <td width="64" align="center"><a  onClick="gerarPedidoExclusaoDoc('<h3>'+message+'<h3>','information','center','excluirDocumento','126','24-07-2019','Koala.jpg','Cancelar')"><img src="imagens/excluir.png" alt="Excluir Arquivo" title="Excluir Arquivo" /></a></td>
</tr>
  <tr>
          
  <td height="40" scope="row" aling="left">55</td>
  <td align="left" scope="row"> Nicho</td>
  <td align="left" width="107">admin </td>
  <td aling="left" width="39">pdf</td>
   <td aling="left" width="39">DEMONSTRAÇÃO</td>
  <td align="left" width="100">02-09-2017</td>
  
  <td width="62" align="center">
    <a href="index.php?acao=visualizarDocumento&data=02-09-2017&nome=nicho.pdf&codigo=55"><img src="imagens/visualizarDoc.png" alt="Visualizar Documento" title="Visualizar Documento" /></a>

    </td>
  <td width="70" align="center"><a href="download.php?arquivo=arquivos/02-09-2017/nicho.pdf"><img src="imagens/download.png" alt="Baixar Arquivo" title="Baixar Arquivo"></a></td>

  <td width="64" align="center"><a  onClick="gerarPedidoExclusaoDoc('<h3>'+message+'<h3>','information','center','excluirDocumento','55','02-09-2017','nicho.pdf','Cancelar')"><img src="imagens/excluir.png" alt="Excluir Arquivo" title="Excluir Arquivo" /></a></td>
</tr>
  <tr>
          
  <td height="40" scope="row" aling="left">54</td>
  <td align="left" scope="row"> Persona</td>
  <td align="left" width="107">admin </td>
  <td aling="left" width="39">pdf</td>
   <td aling="left" width="39">DEMONSTRAÇÃO</td>
  <td align="left" width="100">02-09-2017</td>
  
  <td width="62" align="center">
    <a href="index.php?acao=visualizarDocumento&data=02-09-2017&nome=PERSONA.pdf&codigo=54"><img src="imagens/visualizarDoc.png" alt="Visualizar Documento" title="Visualizar Documento" /></a>

    </td>
  <td width="70" align="center"><a href="download.php?arquivo=arquivos/02-09-2017/PERSONA.pdf"><img src="imagens/download.png" alt="Baixar Arquivo" title="Baixar Arquivo"></a></td>

  <td width="64" align="center"><a  onClick="gerarPedidoExclusaoDoc('<h3>'+message+'<h3>','information','center','excluirDocumento','54','02-09-2017','PERSONA.pdf','Cancelar')"><img src="imagens/excluir.png" alt="Excluir Arquivo" title="Excluir Arquivo" /></a></td>
</tr>
  <tr>
          
  <td height="40" scope="row" aling="left">51</td>
  <td align="left" scope="row"> Manual Usuário GED</td>
  <td align="left" width="107">admin </td>
  <td aling="left" width="39">pdf</td>
   <td aling="left" width="39">DEMONSTRAÇÃO</td>
  <td align="left" width="100">02-09-2017</td>
  
  <td width="62" align="center">
    <a href="index.php?acao=visualizarDocumento&data=02-09-2017&nome=Manual Usuário-V2.0.pdf&codigo=51"><img src="imagens/visualizarDoc.png" alt="Visualizar Documento" title="Visualizar Documento" /></a>

    </td>
  <td width="70" align="center"><a href="download.php?arquivo=arquivos/02-09-2017/Manual Usuário-V2.0.pdf"><img src="imagens/download.png" alt="Baixar Arquivo" title="Baixar Arquivo"></a></td>

  <td width="64" align="center"><a  onClick="gerarPedidoExclusaoDoc('<h3>'+message+'<h3>','information','center','excluirDocumento','51','02-09-2017','Manual Usuário-V2.0.pdf','Cancelar')"><img src="imagens/excluir.png" alt="Excluir Arquivo" title="Excluir Arquivo" /></a></td>
</tr>
  </table>

﻿<div align="center" class="botoes-pagincao"><a href="?acao=listarDocumento&fltr=&pg=1"><img src="imagens/priPagina.png" alt="Primeira Página" title="Primeira Página"/></a><a href="?acao=listarDocumento&fltr=&pg=2"><img src="imagens/prxPagina.png" alt="Próxima Página" title="Próxima Página"/></a><a href="?acao=listarDocumento&fltr=&pg=1"><img src="imagens/pgAnterior.png" alt="Página Anterior" title="Página Anterior"/></a><a href="?acao=listarDocumento&fltr=&pg=6"><img src="imagens/ulPagina.png" alt="Ùltima Pagina" title="Ùltima Pagina"/></a></div>
<script> 

     var message="Deseja excluir o registro?";
     function pesquisarDocumento(){
		 var txtPesquisaDocumento = document.getElementById('txtPesquisaDocumento');
		 window.location="index.php?acao=pesquisarDocumento&fltr="+txtPesquisaDocumento.value;
	 }

   document.addEventListener('keypress', function(e){
       if(e.which == 13){
          pesquisarDocumento();
       }
    }, false);
  </script>
</body>
</html>
 </div>
<?php
    
      rodape();
    ?>
