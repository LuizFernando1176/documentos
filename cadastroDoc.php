<?php  
include_once './util/corpo.php';
cabeca();
descricaoLIndex();

?>
<div class="menu2 bg-dark">
    <br>
    <ul class="nav flex-column alinhaUl">

        <li class="nav-item">
            <span data-feather="home"></span> <a  href="#">Inicio</a>
        </li>
        <br>
        <li class="nav-item">
            <span data-feather="file-text"></span><a  href="#">Cadastrar Documento</a>
        </li>
        <br>
        <li class="nav-item">
            <span data-feather="file"></span><a  href="#">Cadastrar Tipo de Documento</a>
        </li>
         <br>
        <li class="nav-item">
            <span data-feather="user-plus"></span><a href="#">Cadastrar Usuário</a>
        </li>
         <br>
        <li class="nav-item">
            <span data-feather="lock"></span><a href="#">Cadastrar Permissão</a>
        </li>
         <br>
        <li class="nav-item">
            <span data-feather="database"></span><a href="#">Listar Documentos</a>
        </li>
         <br>
        <li class="nav-item">
            <span data-feather="hard-drive"></span><a href="#">Listar Tipo Documento</a>
        </li>
         <br>
        <li class="nav-item">
            <span data-feather="user-check"></span><a href="#">Listar Usuário</a>
        </li>
         <br>
        <li class="nav-item">
            <span data-feather="cpu"></span><a href="#">Listar Log</a>
        </li>
         <br>
        <li class="nav-item">
            <span data-feather="log-out"></span><a href="#">Logout</a>
        </li>
         <br>
       
    </ul>
</div>

    <div class="container">
        <div class="container-fluid">

            <div class="card" style="margin: 1%;">
                <div class="card-header text-center"><strong class="textCads">Cadastrar Documento</strong></div>

                <form style="margin: 2%;">

                    <div class="row">
                        <div class="col-6">
                            <label class="menuForm">Nome:</label>
                            <input type="text" name="nomeDoc" class="input-group" />
                        </div>
                        <br>
                        <br>
                        <div class="col-6">
                            <label class="menuForm">Tipo Documento: </label>
                            <select name="tipoDoc">
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
                            <br>
                            <br>
                            <label class="menuForm"> Nível Acesso:</label>
                            <select name="nivel">
                                <option value="1">Público</option>
                                <option value="2">Privado</option>
                            </select>

                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <label class="menuForm" >Documento:</label>
                            <input name="arquivo" type="file" height="60" />
                        </div>
                    </div>
                    <br>
                    <br>
                    <center>
                        <div class="row">

                            <div class="col ">

                                <input type="submit" name="btSalvar" class="btn btn-outline-success" value="Cadastrar" />
                                <input type="reset" name="btLimpar" class="btn btn-outline-danger" value="Limpar" onclick="reset" />

                            </div>
                        </div>
                    </center>
                </form>

            </div>
 

        </div>
        
  
<script type='text/javascript'>
            feather.replace();
        </script>
    </div>

    <?php

      rodape();
    ?>