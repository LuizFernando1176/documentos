<?php 

function cabeca(){
    
    echo '
<!doctype html>   
<html>    
   <head>
        <title>Sistema</title>
        <script type="text/javascript" src="../vendor/jquery/jquery.js"></script>
        <script type="text/javascript" src="../vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../vendor/jquery/jquery.min.map"></script>
        <script type="text/javascript" src="../vendor/jquery/jquery.slim.js"></script>
        <script type="text/javascript" src="../vendor/jquery/jquery.slim.min.js"></script>
        <script type="text/javascript" src="../vendor/jquery/jquery.slim.min.map"></script>
        <link type="text/css" href="./vendor/bootstrap/css/bootstrap-grid.css" />
        <link type="text/css" href="./vendor/bootstrap/css/bootstrap-grid.min.css" />
        <link type="text/css" href="./vendor/bootstrap/css/bootstrap-reboot.css" />
        <link type="text/css" href="./vendor/bootstrap/css/bootstrap-reboot.min.css" />
        <link type="text/css" href="./vendor/bootstrap/css/simple-sidebar.css" />
        <link type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css" />
   </head>
<body>  
<div class="menu" id="menu"><br>
        <h1><span data-feather="file-text"></span>Sistema de Gestão de Documentos </h1>
    </div>
    <div class="bg-dark barra"></div>
    <br>
    <div class="menu2 navbar-left bg-dark">
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

'
    ;
    
};

function rodape(){
    
    echo "
   <script type='text/javascript'>
    $('#menu-toggle').click(function(e) {
      e.preventDefault();
      $('#wrapper').toggleClass('toggled');
    });
 </script>
    <script type='text/javascript'>
            feather.replace();
        </script>
    </div>


      <nav class='navbar fixed-bottom navbar-light bg-light justify-content-center '>
  <center><p class='alinha'> Sistema de Gestão de Arquivos - Prefeitura Municipal de Olinda º 2019  </p></center>
</nav>
 </div>
   </body>
   
</html>";
 
};


function descricaoLogin (){
  
    echo '<title> Gestão de Documentos | Login </title>';
    
    
};



function descricaoLIndex(){
  
    echo '<title> Gestão de Documentos | Pagina Inicial  </title>';
    
    
};
