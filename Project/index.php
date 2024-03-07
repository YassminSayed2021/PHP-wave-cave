<?php
include "./conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave Cafe HTML Template by Tooplate</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/tooplate-wave-cafe.css">
<!--
Tooplate 2121 Wave Cafe
https://www.tooplate.com/view/2121-wave-cafe
-->
</head>
<body>
  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-coffee fa-3x tm-site-logo"></i>
            <h1 class="tm-site-name">Wave Cafe</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="#drink" class="tm-page-link active">
                  <i class="fas fa-mug-hot tm-page-link-icon"></i>
                  <span>Drink Menu</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#about" class="tm-page-link">
                  <i class="fas fa-users tm-page-link-icon"></i>
                  <span>About Us</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#special" class="tm-page-link">
                  <i class="fas fa-glass-martini tm-page-link-icon"></i>
                  <span>Special Items</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#contact" class="tm-page-link">
                  <i class="fas fa-comments tm-page-link-icon"></i>
                  <span>Contact</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>        
      </div>
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                <li>
                  <a href="#" class="tm-tab-link active" data-id="cold"><?php $stmt = $conn->prepare("SELECT cat_name from 	categories where cat_id=?");
                                                                    $id=1;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['cat_name'];
                                                                         ?></a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="hot"><?php $stmt = $conn->prepare("SELECT cat_name from 	categories where cat_id=?");
                                                                    $id=2;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['cat_name'];
                                                                         ?></a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="juice"><?php $stmt = $conn->prepare("SELECT cat_name from 	categories where cat_id=?");
                                                                    $id=3;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['cat_name'];
                                        ?></a>
                </li>
              </ul>
            </nav>

            <div id="cold" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">     
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=11;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                 
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=11;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=11;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=11;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>
                  </div>
                </div>


                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=9;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=9;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=9;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=9;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>
                  </div>
                </div>


                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=10;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=10;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=10;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=10;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>
                  </div>
                </div>
                
                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=12;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=12;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=12;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=12;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?> </p>
                  </div>
                </div> 
                                       
              </div>
            </div> 

            <div id="hot" class="tm-tab-content">
              <div class="tm-list">
              
                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=15;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=15;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=15;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=15;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=13;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=13;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=13;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=13;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=14;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=14;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=14;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=14;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=21;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=21;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=21;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=21;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>              
                  </div>
                </div>
                         
              </div>
            </div>

            <div id="juice" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=16;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=16;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=16;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=16;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=17;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=17;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=17;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=17;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=18;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=18;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];  ?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=18;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=18;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                <img src="./img/<?php $stmt = $conn->prepare("SELECT image from beverages where bev_id=?");
                                                                    $id=19;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['image'];  ?> "alt="image"  class="tm-list-item-img">    
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"><?php $stmt = $conn->prepare("SELECT title from beverages where bev_id=?");
                                                                    $id=19;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['title'];?><span class="tm-list-item-price">$<?php $stmt = $conn->prepare("SELECT price from beverages where bev_id=?");
                                                               $id=19;
                                                         $stmt->execute([$id]);
                                                       $data= $stmt->fetch();
                                                          echo $data['price'];  ?></span></h3>
                    <p class="tm-list-item-description"><?php $stmt = $conn->prepare("SELECT description from beverages where bev_id=?");
                                                                    $id=19;
                                                              $stmt->execute([$id]);
                                                            $data= $stmt->fetch();
                                                               echo $data['description'];  ?></p>              
                  </div>
                </div>              
              </div>
            </div>
            <!-- end Drink Menu Page -->
          </div>

          <!-- About Us Page -->
          <div id="about" class="tm-page-content">
            <div class="tm-black-bg tm-mb-20 tm-about-box-1">              
              <h2 class="tm-text-primary tm-about-header">About Wave Cafe</h2>
              <div class="tm-list-item tm-list-item-2">                
                <img src="img/about-1.png" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                <div class="tm-list-item-text-2">
                  <p>Wave Cafe is a one-page video background HTML CSS template from Tooplate. You can use this for your business websites.</p>
                  <p>You can also use this for your client websites which you get paid for your website services. Please tell your friends about us.</p>
                </div>                
              </div>
            </div>
            <div class="tm-black-bg tm-mb-20 tm-about-box-2">              
              <div class="tm-list-item tm-list-item-2">                
                <div class="tm-list-item-text-2">
                  <h2 class="tm-text-primary">How we began</h2>
                  <p>If you wish to support us, please contact Tooplate. Thank you. Duis bibendum erat nec ipsum consectetur sodales.</p>                  
                </div>                
                <img src="img/about-2.png" alt="Image" class="tm-list-item-img tm-list-item-img-big tm-img-right">                
              </div>
              <p>Donec non urna elit. Quisque ut magna in dui mattis iaculis eu finibus metus. Suspendisse vel mi a lacus finibus vehicula vel ut diam. Nam pellentesque, mi quis ullamcorper.</p>
            </div>
          </div>
          <!-- end About Us Page -->

          <!-- Special Items Page -->
          <div id="special" class="tm-page-content">
            <div class="tm-special-items">
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-01.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Special One</h2>
                  <p class="tm-special-item-text">Here is a short text description for the first special item. You are not allowed to redistribute this template ZIP file.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-02.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Second Item</h2>
                  <p class="tm-special-item-text">You are allowed to download, modify and use this template for your commercial or non-commercial websites.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-03.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Third Special Item</h2>
                  <p class="tm-special-item-text">Pellentesque in ultrices mi, quis mollis nulla. Quisque sed commodo est, quis tincidunt nunc.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-04.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Special Item Fourth</h2>
                  <p class="tm-special-item-text">Vivamus finibus nulla sed metus sagittis, sed ultrices magna aliquam. Mauris fermentum.</p>  
                </div>
              </div>      
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-05.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Sixth Sense</h2>
                  <p class="tm-special-item-text">Here is a short text description for sixth item. This text is four lines.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-06.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Seventh Item</h2>
                  <p class="tm-special-item-text">Curabitur eget erat sit amet sapien aliquet vulputate quis sed arcu.</p>  
                </div>
              </div>                      
            </div>            
          </div>
          <!-- end Special Items Page -->

          <!-- Contact Page -->
          <div id="contact" class="tm-page-content">
            <div class="tm-black-bg tm-contact-text-container">
              <h2 class="tm-text-primary">Contact Wave</h2>
              <p>Wave Cafe Template has a video background. You can use this layout for your websites. Please contact Tooplate's Facebook page. Tell your friends about our website.</p>
            </div>
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="" method="POST" id="contact-form">
                <div class="tm-form-group">
                  <input type="text" name="name" class="tm-form-control" placeholder="Name" required="" />
                </div>
                <div class="tm-form-group">
                  <input type="email" name="email" class="tm-form-control" placeholder="Email" required="" />
                </div>        
                <div class="tm-form-group tm-mb-30">
                  <textarea rows="6" name="message" class="tm-form-control" placeholder="Message" required=""></textarea>
                </div>        
                <div>
                  <button type="submit" class="tm-btn-primary tm-align-right">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- end Contact Page -->
        </main>
      </div>    
    </div>
    <footer class="tm-site-footer">
      <p class="tm-black-bg tm-footer-text">Copyright 2020 Wave Cafe
      
      | Design: <a href="https://www.tooplate.com" class="tm-footer-link" rel="sponsored" target="_parent">Tooplate</a></p>
    </footer>
  </div>
    
  <!-- Background video -->
  <div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <source src="video/wave-cafe-video-bg.mp4" type="video/mp4">
      </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>    
  <script>

    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }

    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }    

    function initPage() {
      let pageId = location.hash;

      if(pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`)); 
        showPage($(pageId));
      }
      else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));
      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
    }

    $(document).ready(function(){

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {
        
        if(window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });

      
      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault(); 
        openTab(e, $(e.target).data('id'));
      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function(){
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });
      
  </script>
</body>
</html>