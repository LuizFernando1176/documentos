<?php

function cabeca(){
    
    echo '﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><script type="text/javascript" src="util/jq/jquery-1.7.1.min.js"></script>
<script src="js/feather.js" type="text/javascript"></script>     
<script type="text/javascript" src="js/validaCampos.js"></script>
      <script type="text/javascript" src="js/geraNotificacao.js"></script>
      <script type="text/javascript" src="js/jquery.form.js"></script>
      <script type="text/javascript" src="js/jquery.form.js"></script>
      <script type="text/javascript" src="js/jquery.noty.js"></script>
      <script type="text/javascript" src="js/jquery.noty.packaged.js"></script>
   </head>
<body>   

'
    ;
    
};

function rodape(){
    
    echo "  
<script type='text/javascript'>
            feather.replace();
        </script>        
<script>
         var messageUsuario='O campo usuário está vazio!';
         var messageSenha='O campo senha está vazio!';
         document.addEventListener('keypress', function(e){
            if(e.which == 13){
               validaCamposFormLogin(messageUsuario,messageSenha);
            }
         }, false);
      </script>
   </body>
   <div class='nomeEmpresa'></div>
</html>";
};

function descricaoLogin (){
  
    echo '<title> Gestão de Documentos | Login </title>';
    
    
};


?>

