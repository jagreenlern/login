<?php require_once "head.php";?>

<!--====================================================
                    LOGIN OR REGISTER
======================================================-->
    <section id="login">
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
 
<!--====================================================
                         HOME
======================================================-->
    <section id="home-shop">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/shop/shop-banner-1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2>Sale Box</h2>
               
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/shop/shop-banner-2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2>Cool Shop</h2>
            </div>
          </div> 
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section> 

<!--====================================================
                        SHOP-P1
======================================================--> 
    <section id="shop-p1" class="shop-p1">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="shop-p1-title">  
              <h3>Categories</h3>
              <div class="heading-border-light"></div> 
            </div>
            <div class="list-group">
              <a href="#" class="list-group-item">Books</a>
              <a href="#" class="list-group-item">Shoes</a>
              <a href="#" class="list-group-item">Mobile</a>
              <a href="#" class="list-group-item">Desktop</a>
              <a href="#" class="list-group-item">Cloths</a>
              <a href="#" class="list-group-item">Electronics</a>
            </div>
            <div class="input-group ">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search Product">
              <div class="input-group-addon"><i class="fa fa-search"></i></div>
            </div>
            <div class="shop-p1-title">  
              <h3>Top Sellers</h3>
              <div class="heading-border-light"></div> 
            </div>
            <ul class="list-unstyled top-seller">
                <li>
                  <img class="img-fluid" src="img/shop/shop-item-1.jpg" alt="">
                  <h6>Tshirt sort Style</h6>
                  <p>$15.34</p>
                </li>
                <li>
                  <img class="img-fluid" src="img/shop/shop-item-4.jpg" alt="">
                  <h6>Tshirt sort Style</h6>
                  <p>$23.56</p>
                </li>
                <li>
                  <img class="img-fluid" src="img/shop/shop-item-2.jpg" alt="">
                  <h6>Tshirt sort Style</h6>
                  <p>$45.23</p>
                </li> 
            </ul>  
          </div> 
          <div class="col-lg-9"> 
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-1.jpg" alt=""></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <a href="#">Soft Raymond</a>
                    </div>
                    <strong>$44.99</strong>
                    <div class="cart-icon text-center">
                      <a href="#"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-2.jpg" alt=""></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <a href="#">Soft Raymond</a>
                    </div>
                    <strong>$32.49</strong>
                    <div class="cart-icon text-center">
                      <a href="#"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-3.jpg" alt=""></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <a href="#">Soft Raymond</a>
                    </div>
                    <strong>$55.22</strong>
                    <div class="cart-icon text-center">
                      <a href="#"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-4.jpg" alt=""></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <a href="#">Soft Raymond</a>
                    </div>
                    <strong>$65.42</strong>
                    <div class="cart-icon text-center">
                      <a href="#"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-1.jpg" alt=""></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <a href="#">Soft Raymond</a>
                    </div>
                    <strong>$23.76</strong>
                    <div class="cart-icon text-center">
                      <a href="#"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>   
            </div>
             <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel"> 
               <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="img/shop/shop-banner-4.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="img/shop/shop-banner-3.jpg" alt="Second slide">
                </div> 
               </div>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
               </a>
             </div>
             <div class="row my-4">

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-4.jpg" alt=""></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <a href="#">Soft Raymond</a>
                    </div>
                    <strong>$75.33</strong>
                    <div class="cart-icon text-center">
                      <a href="#"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-2.jpg" alt=""></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <a href="#">Soft Raymond</a>
                    </div>
                    <strong>$45.23</strong>
                    <div class="cart-icon text-center">
                      <a href="#"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>   
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-1.jpg" alt=""></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <a href="#">Soft Raymond</a>
                    </div>
                    <strong>$76.34</strong>
                    <div class="cart-icon text-center">
                      <a href="#"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>    
            </div>
          </div> 
        </div> 
      </div>
    </section>
    <?php require_once "footer.php";?>