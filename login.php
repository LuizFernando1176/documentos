<?php  
   include_once './util/corpo.php';
   descricaoLogin();
   cabeca();
   
   ?>

   <div class="container">
      <div class="container-fluid">
          <div class="card text-center" style="margin: 6%;"><br>
             <div class="card-img"> <img src="img/olinda.png" class="img-fluid" width="100px" height="80px" > </div>
            <div class="card-text">
               <h1>Acesso ao Sistema</h1>
            </div>
            <div class="card-body">
                <center>  <div class="row">
                    <div class="col-md-12">
                        <div class="col-3">
                            <label><strong data-feather="user"></strong><strong>Usuario:</strong></label><input type="text" class="form-control" placeholder="Usuario" ><br>
                    </div>
                        
                        <div class="col-3">
                         <label ><strong data-feather="key"></strong><strong> Senha:</strong></label><input type="password" class="form-control" placeholder="Senha"  >
                    </div><br>
                        
                        <div class="col-4">
                         <button type="submit" class="btn btn-outline-success">Entar</button>
                   <button type="reset" class="btn btn-outline-danger">Limpar</button>
                    </div>
                    </div>
                    </center>
                </div>
                   
                  
                   
                  
               
            </div>
         </div>
      </div>
   </div>
   </div>
   <?php
      rodape();
      ?>