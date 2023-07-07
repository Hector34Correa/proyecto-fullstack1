<?php

include("conexion.php");
echo "La conexion a la base de datos se realizó exitosamente";


?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- metas celular -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- metas pagina-->
      <title>System Innovation SCM</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
   </head>

   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_white_section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="header_information">
                           <center><p>¡Digite los datos correctamente!</p></center>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                         <div class="logo"> <a href="index.php"><img src="images/pngwing.com.png" alt="#" width="70" height="20"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section >
         <div class="banner-main">
            <img src="images/banner.jpg" alt="#"/>
            <div class="container">
               <div class="text-bg">
                  <br>
                  <br>
                  <br>
                  <br>
                  <h1>SCM<br><strong class="white">System Innovation</strong></h1>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <div class="container">


                     <form class="main-form" method="post" action="agregar.php">
                        <h3>Registro</h3>

                        <div class="row">
                           <div class="col-md-9">
                              <div class="row">



                                 <div class="form group">
                                    <label class="col-sm-5" for="nombre">Nombre</label>
                                    <input class="form-control" placeholder="Nombre Completo" type="text" id="nombre" name="nombre"required>
                                 </div>

                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Teléfono</label>
                                    <input class="form-control" placeholder="+57" type="text" name="telefono" id="telefono" required> 
                                 </div>
                                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Correo Electrónico</label>
                                    <input class="form-control" placeholder="Correo Personal" type="text" name="correo" id="correo" required>
                                 </div>

                                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Crear Contraseña</label>
                                    <input type="password" placeholder="CONTRASEÑA" class="form-control" placeholder="Mínimo 5 Dígitos" type="text" name="contraseña" id="contraseña" required>
                                 </div>
                                
                                
                                 
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label>Fecha de Registro</label>
                                    <input class="form-control" placeholder="Any" type="date" id="fecha_registro" name="fecha_registro" required>
                                 </div>

                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Descripción</label>
                                    <input class="form-control" placeholder="Descripción Personal" type="text" name="descripcion" id="descripcion" required>
                                 </div>
                                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >AREAS</label>
                                    <select class="form-control" name="nivel">
                                       <option>DESARROLLO</option>
                                       <option>PRUEBAS</option>
                                       <option>DISEÑO</option>
                                    </select>
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Nivel</label>
                                    <select class="form-control" name="rol">
                                       <option>LIDER DE PROYECTO</option>
                                       <option>LIDER TECNICO</option>
                                       <option>ADMINISTRADOR</option>
                                    </select>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group">
                              <div class="col-sm-offset-4 col-sm-8">
                              <button type="submit" class="btn btn-primary">Registrarse</button>
                           </div>


                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <footer>
         <div id="contact" class="footer">
            <div class="container">
            
                  
               <div class="copyright"><br>
                 <div class="container">
                     <p>2023 <a href="#"></a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 3
               }
             }
           })
         })
      </script>
     
   </body>
</html>