
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


              <link rel="stylesheet" type="text/css" href="estilo.css" /> 



            <style>
              .card-login {
                padding: 50px 0px 100px 0px;
                width: 350px;
                margin: 20 auto;
              }  
                   

    </style>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="navtec">   
      <a class="navbar-brand" href="#"> 
        <img src="logo.png" width="40" height="40" class="d-inline-block align-top" alt=""> 
    </div> </a> <div class="help">Help desk</div> 
  
   
   <div class="inscrevase"> <a href="index.php">Inicio</a> </div>
</nav> 


    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Inscreva-se
            </div>
                        <div class="card-body">

        <form method="post" action="registra_usuario.php" id="formCadastrarse">
          <div class="form-group">
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
          </div>
          
          <div class="form-group">
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
          </div>
          
          <button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
        </form>

      </div>
    </div>
  </div>
</div>
</div>


<!----------------------------------------------------- Rodape -------------------------------->

                          <style type="text/css">
                            
                            footer {
                              
                              background: #EEEEEE;
                              padding: 50px 0px 80px 10px;
                              position: relative;
                              color: white;
                              font-family: ;
                              margin-bottom: ;
                              margin: ;

                          }

                       .body, .navtec, .help{
                      padding: 0px 0px 1px 160px;                       
                          }

                          .navbar {
                          background: #EEEEEE;


                          }

                          .help{
                            font-weight: ;
                            font-size: 20px; 
                            color: black;
                            margin: 10px 942px 10px -290px;
                            font-weight: 400;

                          }


                          .inscrevase> a{
                            color: black;
                            font-weight: ;
                             margin: 50px 10px 10px -190px;
                              font-size: 20px; 
                              font-weight: 400;

                          }

                          .item-rede-social {
                              
                              float: right;
                              margin: 10px;
                          }

                          .inscrevase> a:hover{
                            color: #17A2B8;
                          }

                          a {

                            color: black;
                          }


                          a:hover, footer {

                            color: #17A2B8;
                            background: ;
                            text-decoration: none;
                           font-weight: 500;



                          }

                          #rodape h4 {
                              color: black;
                              font-size: 15px;
                              text-transform: uppercase;
                              font-weight: ;
                              padding: 10px;
                              margin-left: -67px;                              
                          }


                          .h4{  /*faz com que o h4 fique alinhado*/
                                text-align: right;

                          }
                          .nav {

                            padding: 5px;
                            text-align: left;
                          }
                          .img-logo {
                            font-weight: bold
                          }

          
                          </style>


           <!--faz com que o h4 fique alinhado -->
    <div class="text-center">
    
-      <footer id="rodape">
          <div class="container">

                   <div class="row">
                   <div class="col-md-2">
                    <img src="logo-web-transparent.png" width="130" height="80" class="d-inline-block align-top" alt="">
                   </div> <!--fecha o col md-2-->
                  
                       <div class="col-md-2">
                       <h4>Companhia</h4>
                       <ul class="nav">
                       <li><a href="">A Empresa</a></li>
                       <li><a href="">Nosso Blog</a></li>
                       <li><a href="">Desenvolvimento</a></li>
                       <li><a href="">Duvidas frequentes</a></li>
                     </ul>
                       
                       </div>  <!--fecha o col md-2-->
                      

                      <div class="col-md-2">
                      <h4>Serviços</h4>
                      <ul class="nav">
                      <li><a href="">Site institucional</a></li>
                       <li><a href="">E-Commerce</a></li>
                       <li><a href="">Recomendações</a></li>
                     </ul>
                      </div> <!--fecha o col md-2-->




                     <div class="col-md-2">
                      <h4>Links Uteis</h4>
                      <ul class="nav">
                      <li><a href="">Contato</a></li>
                      <li><a href="">Recomendações</a></li>
                     </ul>
                      </div> <!--fecha o col md-2-->
                  

                     
                  

                        <div class="col-md-4">
                        <ul class="nav">
                        <li class="item-rede-social"><a href=""><img src="imagens/facebook.png"></a></li>
                        <li class="item-rede-social"><a href=""><img src="imagens/instagram.png"></a></li>
                        <li class="item-rede-social"><a href=""><img src="imagens/twitter.png"></a></li>
                        <li class="item-rede-social"><a href=""><img src="imagens/linkedin4.png"></a></li>
                        </ul>
                        </div> <!--fecha o col md-2-->
                  
              </div><!--/row--->
              </div>
            </div>
           
        </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>

  </body>
</html>