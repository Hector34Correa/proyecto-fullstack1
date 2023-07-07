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
                        <div class="center-desk">
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
                     <form class="main-form">
                        <h3>Ingreso</h3>
                        <div class="row">
                           <div class="col-md-9">
                              <div class="row">
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Nombre</label>
                                    <input class="form-control" placeholder="" type="text" name="">
                                 </div>
                               
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Contraseña</label>
                                    <input class="form-control" placeholder="" type="varchar" name="00.0">
                                 </div>
                              
                                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Nivel</label>
                                    <select class="form-control" name="Any">
                                       <option>Option 1</option>
                                       <option>Option 2</option>
                                       <option>Option 3</option>
                                    </select>
                                 </div>
                                 
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                              <a href="#">Ingresar</a>
                           </div>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          </div>
                         <center><div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                              <a href="registro.php">Registrarse</a>
                           </div></center>
                     </form>
 









                        
                  </div>

               </div>

            </div>

         </div>

      </section>

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