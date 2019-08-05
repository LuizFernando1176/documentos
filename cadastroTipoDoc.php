<?php  
include_once './util/corpo.php';
cabeca();
descricaoLIndex();

?>
    <div class="menu2 bg-dark">
        <br>
        <ul class="nav flex-column alinhaUl">

            <li class="nav-item">
                <span data-feather="home"></span> <a href="#">Inicio</a>
            </li>
            <br>
            <li class="nav-item">
                <span data-feather="file-text"></span><a href="#">Cadastrar Documento</a>
            </li>
            <br>
            <li class="nav-item">
                <span data-feather="file"></span><a href="#">Cadastrar Tipo de Documento</a>
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
                <div class="card-header text-center"><strong class="textCads">Cadastrar Tipo de Documento</strong></div>

                <form style="margin: 2%;">

                    <div class="row">
                        <div class="col-6">
                            <label class="menuForm">Nome:</label>
                            <input type="text" name="nomeDoc" class="input-group" />
                            <br>
                            <br>
                            <input type="submit" name="btSalvar" class="btn btn-outline-success" value="Cadastrar" />
                            <input type="reset" name="btLimpar" class="btn btn-outline-danger" value="Limpar" onclick="reset" />

                        </div>

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