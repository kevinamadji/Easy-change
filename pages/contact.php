<?php
    session_start();
    $page="Contact";
?>
<!DOCTYPE HTML>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../style/contact.css">
    </head>

    <body>
    <header>
         <?php
            $repRacine = false;
            include("../include/nav.php");
        ?>    
    </header>

         <section class="contact pt-100 pb-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <p>EasyChange</p>
                     <h4>NOUS CONTACTER</h4>
                  </div>
               </div>
            </div>
            <div class="row text-center">
                  <div class="col-md-8">
                     <form action="#" class="contact-form">
                        <div class="row">
                           <div class="col-xl-6">
                              <input type="text" placeholder="NOM">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="MAIL">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="SUJET">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="TELEPHONE">
                           </div>
                           <div class="col-xl-12">
                              <textarea placeholder="MESSAGE" cols="30" rows="10"></textarea>
                              <input type="submit" value="ENVOYER">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-4">
                     <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                        <h5>Address</h5>
                        <p>661 Lefferts, NY 11203, USA</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <p>(+1) 517 397 7100</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>infor@personal.com</p>
                     </div>
                  </div>
            </div>
         </div>
      </section>





    </body>
</html>