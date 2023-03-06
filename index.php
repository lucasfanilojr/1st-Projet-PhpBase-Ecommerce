<?php require 'Controller/accueil.php'; ?>
<?php require 'Layout/header.php'; ?>

      <!-- request -->
      <div id="contact" class="request">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Souhaiter nous contacter</h2>
                     <span>Veuillez remplir tous les champs necessaire ci-dessous</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="black_bg">
                     <div class="row">
                        <div class="col-md-7 ">


                           <form class="main_form" method="post" action="">
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Votre Nom" type="text" name="nom">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Numero Telephone" type="text" name=" telephone">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Adresse E-mail" type="text" name="email">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="textarea" placeholder="Votre Message" type="text" name="message" >                                 </div>
                                 <div class="col-sm-12">
                                    <button class="send_btn" type="submit" name="envoyer">Envoyer</button>
                                 </div>
                              </div>

                              <?php if($erreur): ?>
                                 <h1><?=$erreur  ?></h1>                              
                              <?php endif; ?>

                           </form>


                        </div>
                        <div class="col-md-5">
                           <div class="mane_img">
                              <figure><img src="public/images/mane_img.jpg" alt="#"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- end request -->


      <?php require 'Layout/section.php'; ?>


      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Nos proposition et Service</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <h3>Achat avec Service Apres Vente</h3>
                                          <p><i class="padd_rightt0"><img src="public/images/te1.png" alt="#"/></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <i class="padd_leftt0"><img src="public/images/te2.png" alt="#"/></i> <br>form, by injected humour, or randomised words which don't look even slightly believable</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <h3>Garantie de 1 ans</h3>
                                          <p><i class="padd_rightt0"><img src="public/images/te1.png" alt="#"/></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <i class="padd_leftt0"><img src="public/images/te2.png" alt="#"/></i> <br>form, by injected humour, or randomised words which don't look even slightly believable</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <h3>Essaye avant l'achat</h3>
                                          <p><i class="padd_rightt0"><img src="public/images/te1.png" alt="#"/></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <i class="padd_leftt0"><img src="public/images/te2.png" alt="#"/></i> <br>form, by injected humour, or randomised words which don't look even slightly believable</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Precedent</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Suivant</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
<?php require 'Layout/footer.php'; ?>