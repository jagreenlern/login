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
    <div id="home-p" class="home-p pages-head3 text-center">
      <div class="container">
        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Shoping Box</h2>
      </div><!--/end container-->
    </div> 

<!--====================================================
                  SINGLE-PRODUCT-P1
======================================================--> 
    <section id="single-product-p1">
      <div class="container">  
            <div class="wrapper row">
              <div class="preview col-md-6">
                
                <div class="preview-pic tab-content">
                  <div class="tab-pane active" id="pic-1"><img src="img/shop/shop-item-1.jpg" /></div>
                  <div class="tab-pane" id="pic-2"><img src="img/shop/shop-item-3.jpg" /></div>
                  <div class="tab-pane" id="pic-3"><img src="img/shop/shop-item-4.jpg" /></div>
                  <div class="tab-pane" id="pic-4"><img src="img/shop/shop-item-5.jpg" /></div>
                  <div class="tab-pane" id="pic-5"><img src="img/shop/shop-item-2.jpg" /></div>
                </div>
                <ul class="preview-thumbnail nav nav-tabs">
                  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/shop/shop-item-1.jpg" /></a></li>
                  <li><a data-target="#pic-2" data-toggle="tab"><img src="img/shop/shop-item-3.jpg" /></a></li>
                  <li><a data-target="#pic-3" data-toggle="tab"><img src="img/shop/shop-item-4.jpg" /></a></li>
                  <li><a data-target="#pic-4" data-toggle="tab"><img src="img/shop/shop-item-5.jpg" /></a></li>
                  <li><a data-target="#pic-5" data-toggle="tab"><img src="img/shop/shop-item-2.jpg" /></a></li>
                </ul>
              </div>
              <div class="details col-md-6">
                <h3 class="product-title">Women trend fashion</h3>
                <div class="rating">
                  <div class="stars">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <span class="review-no">4 reviews</span>
                </div>
                <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                <h4 class="price">current price: <span>$180</span></h4>
                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                <h5 class="sizes">sizes:
                  <span class="size" data-toggle="tooltip" title="small">s</span>
                  <span class="size" data-toggle="tooltip" title="medium">m</span>
                  <span class="size" data-toggle="tooltip" title="large">l</span>
                  <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                </h5>
                <h5 class="colors">colors:
                  <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                  <span class="color green"></span>
                  <span class="color blue"></span>
                </h5>
                <div class="action">
                <div class="title-but"><button class="btn btn-general btn-green" role="button"><i class="fa fa-cart-plus"></i> Add to Cart</button></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="service-h-tab"> 
                  <nav class="nav nav-tabs" id="myTab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Reviews</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Desciption</a> 
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> 
                      <div class="review-block">
                        <div class="row">
                          <div class=" col-sm-3">
                            <img src="img/client/avatar-3.jpg" class="img-rounded">
                            <div class="review-block-name"><a href="#">Nktailor</a></div>
                          </div>
                          <div class="col-sm-9">
                            <div class="rating">
                              <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div> 
                          </div>
                        </div> 
                      </div> 
                      <div class="review-block">
                        <div class="row">
                          <div class="col-sm-3">
                            <img src="img/client/avatar-1.jpg" class="img-rounded">
                            <div class="review-block-name"><a href="#">Nktailor</a></div>
                          </div>
                          <div class="col-sm-9">
                            <div class="rating">
                              <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div> 
                          </div>
                        </div> 
                      </div> 
                      <div class="review-block">
                        <div class="row">
                          <div class="col-sm-3">
                            <img src="img/client/avatar-2.jpg" class="img-rounded"> 
                            <div class="review-block-name"><a href="#">Nktailor</a></div>
                          </div>
                          <div class="col-sm-9">
                            <div class="rating">
                              <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div> 
                          </div>
                        </div> 
                      </div> 
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute</p>

                      <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute</p>
                    </div>  
                  </div>
                </div>
            </div> 
      </div>
    </section>

<!--====================================================
                        SHOP-P1
======================================================--> 
    <section id="shop-p1" class="shop-p1" style="padding-top:0px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="shop-p1-title">  
              <h3>Related More</h3>
              <div class="heading-border-light"></div> 
            </div>  
          </div> 
          <div class="col-lg-12"> 
            <div class="row" style="padding: 0px">
              <div class="col-lg-3 col-md-6 mb-4">
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
              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-2.jpg" alt=""></a>
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
              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-3.jpg" alt=""></a>
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
              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="img/shop/shop-item-2.jpg" alt=""></a>
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
            </div>
          </div> 
        </div> 
      </div>
    </section>

    <?php require_once "footer.php";?>