

<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['comment'] )){
  require_once "lib/emailme/emailme.class.php";
  $iemailme = new emailme();
  $iemailme->enviaremail($_POST['name'] ,$_POST['email'],$_POST['subject'], $_POST['comment']);
}else{
  echo "Debes rellenar todo el formulario.";
}

?>
<?php require_once "head.php";?>

<!--====================================================
                    LOGIN OR REGISTER
======================================================-->
    <!--<section id="login">
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header" align="center">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span class="fa fa-times" aria-hidden="true"></span>
                      </button>
                  </div>
                  <div id="div-forms">
                      <form id="login-form">
                          <h3 class="text-center">Login</h3>
                          <div class="modal-body">
                              <label for="username">Username</label> 
                              <input id="login_username" class="form-control" type="text" placeholder="Enter username " required>
                              <label for="username">Password</label> 
                              <input id="login_password" class="form-control" type="password" placeholder="Enter password" required>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox"> Remember me
                                  </label>
                              </div>
                          </div>
                          <div class="modal-footer text-center">
                              <div>
                                  <button type="submit" class="btn btn-general btn-white">Login</button>
                              </div>
                              <div>
                                  <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                              </div>
                          </div>
                      </form>
                      <form id="register-form" style="display:none;">
                          <h3 class="text-center">Register</h3>
                          <div class="modal-body"> 
                              <label for="username">Username</label> 
                              <input id="register_username" class="form-control" type="text" placeholder="Enter username" required>
                              <label for="register_email">E-mailId</label> 
                              <input id="register_email" class="form-control" type="text" placeholder="Enter eMail" required>
                              <label for="register_password">Password</label> 
                              <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                          </div>
                          <div class="modal-footer">
                              <div>
                                  <button type="submit" class="btn btn-general btn-white">Register</button>
                              </div>
                              <div>
                                  <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </section>      
-->
<!--====================================================
                       HOME-P
======================================================-->
    <div id="home-p" class="home-p pages-head4 text-center">
      <div class="container">
        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Contact Us</h2>
      </div><!--/end container-->
    </div> 

<!--====================================================
                        CONTACT-P1  
======================================================--> 
    <section id="contact-p1" class="contact-p1">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="contact-p1-cont">
              <h3>Contact our experienced team</h3>
              <div class="heading-border-light"></div> 
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model texty.</p>
            </div>
          </div>
          <div class="col-md-4"> 
            <div class="contact-p1-cont2"> 
              <address class="address-details-f">
                25, Dist town Street, Logn <br>
                California, US <br>
                Phone: 800 123 3456 <br>
                Fax: 800 123 3456 <br>
                Email: <a href="mailto:jagrenlern@gmail.com" class="">jagrenlern@gmail.com</a>
              </address>
              <ul class="list-inline social-icon-f top-data">
                <li><a href="https://www.facebook.com/share.php?v=4&src=bm&u=http://192.168.1.92/trabajo/login/usuario/contact.php" target="_empty"><i class="fa top-social fa-facebook" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>
                <!--<li><a href="#" target="_empty"><i class="fa top-social fa-twitter" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>-->
                <!--<li><a href="#" target="_empty"><i class="fa top-social fa-google-plus" style="height: 35px; width:35px; line-height: 35px;"></i></a></li> -->
              </ul>
            </div>
          </div>  
        </div>
      </div>
    </section>

<!--====================================================
                        CONTACT-P2 
======================================================--> 
    <service class="contact-p2" id="contact-p2">
      
      <div class="container">
 
         <!-- <div class="row con-form">
            <div class="col-md-4">
              <input type="text" name="full-name" placeholder="Full Name" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" placeholder="Email Id" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="text" name="subject" placeholder="Subject" class="form-control">
            </div>
            <div class="col-md-12"><textarea name="" id=""></textarea></div>
            <div class="col-md-12 sub-but"><button class="btn btn-general btn-white" role="button">Send</button></div>
            <input type="submit" name="contantame" value="enviar">
        
          </div>-->



                 <form method="POST" id="emailme">  

       <div class="row con-form">
            <div class="col-md-4">
              <input type="text" name="name" placeholder="Full Name" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" placeholder="Email Id" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="text" name="subject" placeholder="Subject" class="form-control">
            </div>
            <div class="col-md-12"><textarea name="comment" id="comment" ></textarea></div>
            <div class="col-md-12 sub-but"><button class="btn btn-general btn-green" onClick="document.getElementById('emailme').submit();"" role="button">Enviar</button></div>
            
        
          </div>
</form>





      </div>
   </service>

<!--====================================================
                       MAP
======================================================--> 
    <section id="contact-add">
      <div id="map">
        <div class="map-responsive">
           <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div> 
    </section>
    <?php require_once "footer.php";?>