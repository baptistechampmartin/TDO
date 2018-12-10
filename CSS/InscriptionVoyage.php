<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="footer, links, icons" />
  <title> TDO Accueil</title>
  <link rel="stylesheet" href="../CSS/style.css" >
  <link rel="stylesheet" href="../CSS/Login.css" >
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  </head>

  



     <header id="Menu">
           <?php include("Header.php"); ?>
        </header>
      
        <nav >

            <?php include("nav.php"); ?>

          </nav>

        <body>

              <div class="login">
                <div class="heading">
                  <h2>Sign in</h2>
                <form action="#">

                  <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Username or email">
               </div>

                 <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="password" class="form-control" placeholder="Password">
                  </div>

               <a href="InscriptionVoyage1.html" class="button"> Login </a>
                 </form>
                </div>
              </div>



        </body>

     <footer class="footer-distributed">

          <?php include("footer.php"); ?>

     </footer>


</html>