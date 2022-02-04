<?php require_once "head.php";?>
<!--====================================================
                    LOGIN OR REGISTER
======================================================-->
<!--    <section id="login">
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
    <div id="home-p" class="home-p pages-head1 text-center">
      <div class="container">
        <h2 class="wow fadeInUp" data-wow-delay="0.1s">News</h2>
        <p>Discover more</p>
      </div><!--/end container-->
    </div> 

<!--====================================================
                      NEWS DETAILS
======================================================--> 
    <section id="single-news-p1" class="single-news-p1">
      <div class="container">
        <div class="row">

          <!-- left news details -->
          <div class="col-md-8">
            <div class="single-news-p1-cont">
              <div class="single-news-img">
                <img src="img/news/news-box.jpg" alt="" class="img-fluid">
              </div>
              <div class="single-news-desc">
                <h3>Reduction of AC energy wastage through clamp meter</h3>
                <ul class="list-inline">
                  <li>Posted: <span class="text-theme-colored2"> 9/9/2018</span></li>
                  <li>By: <span class="text-theme-colored2">Admin</span></li>
                  <li><i class="fa fa-comments-o"></i> 1 comments</li>
                </ul>
                <hr>
                <div class="bg-light-gray">
                  <p>Clamp meter connected to an AC monitors the current flow and indicates usage (range) through green, orange and red colour codes. The four friends had learnt about capacitor and its use in many electronic appliances in their physics class. Ageing of these, leads to lesser efficiency of the appliance. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose </p>  
                  <blockquote class="blockquote">
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.  consectetur adipiscing elit. Integer posuere erat a ante</p>
                  <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">Source Title</cite>
                  </footer>
                  </blockquote>
                </div>
                <div class="comments-container"> 
                  <ul id="comments-list" class="comments-list">
                    <li>
                      <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="img/client/avatar-2.jpg" alt=""></div>
                        <!-- Contenedor del Comentario -->
                        <div class="comment-box">
                          <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="#">John Boss</a></h6>
                            <span>before 20 minutes</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                          </div>
                          <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                          </div>
                        </div>
                      </div>
                      <!-- Respuestas de los comentarios -->
                      <ul class="comments-list reply-list">
                        <li>
                          <!-- Avatar -->
                          <div class="comment-avatar"><img src="img/client/avatar-6.jpg" alt=""></div>
                          <!-- Contenedor del Comentario -->
                          <div class="comment-box sub-comment-box">
                            <div class="comment-head">
                              <h6 class="comment-name"><a href="#">Tresa Ben</a></h6>
                              <span>hace 10 minutos</span>
                              <i class="fa fa-reply"></i>
                              <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                          </div>
                        </li>

                        <li>
                          <!-- Avatar -->
                          <div class="comment-avatar"><img src="img/client/avatar-2.jpg" alt=""></div>
                          <!-- Contenedor del Comentario -->
                          <div class="comment-box sub-comment-box">
                            <div class="comment-head">
                              <h6 class="comment-name by-author"><a href="#">John Boss</a></h6>
                              <span>before 10 minutes</span>
                              <i class="fa fa-reply"></i>
                              <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="img/client/avatar-1.jpg" alt=""></div>
                        <!-- Contenedor del Comentario -->
                        <div class="comment-box">
                          <div class="comment-head">
                            <h6 class="comment-name"><a href="#">Blensan Trul</a></h6>
                            <span>before 10 minutes</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                          </div>
                          <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="comment-box-sn">
                  <h5>Leave a Reply</h5>
                  <textarea name="" id="" placeholder="Comment" ></textarea>
                  <input type="text" name="email" placeholder="Email Id" class="form-control"><br>
                  <input type="text" name="text" placeholder="Name" class="form-control"><br>
                  <button class="btn btn-general btn-green" style="width: 100%;" role="button">Send</button>
                </div>
              </div>
            </div>  
            <hr>
          </div>

          <!-- Right news details -->
          <div class="col-md-4">
            <div class="small-news-box">
              <a href="">
                <div class="right-side-sn-cont">
                  <img src="img/news/news-6.jpg" alt="" class="img-fluid">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                </div>
              </a>
              <a href="">
                <div class="right-side-sn-cont">
                  <img src="img/news/news-9.jpg" alt="" class="img-fluid">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                </div>
              </a>
              <a href="">
                <div class="right-side-sn-cont">
                  <img src="img/news/news-7.jpg" alt="" class="img-fluid">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                </div>
              </a>
              <a href="">
                <div class="right-side-sn-cont">
                  <img src="img/news/news-3.jpg" alt="" class="img-fluid">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                </div>
              </a>
            </div>
            <div class="ad-box-sn"> 
              <h3 class="pb-2">Current News</h3>
              <div class="card">
                <div class="desc-comp-offer-cont">
                <div class="thumbnail-blogs">
                    <div class="caption">
                      <i class="fa fa-chain"></i>
                    </div>
                    <img src="img/news/news-8.jpg" class="img-fluid" alt="...">
                </div>
                <h3>Reduction of AC energy</h3>
                <p class="desc">Clamp meter connected to an AC monitors the current flow and indicates usage (range) through green, orange and red colour codes.</p>
                <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
                </div>
              </div>
              <div class="card">
                <div class="desc-comp-offer-cont">
                <div class="thumbnail-blogs">
                    <div class="caption">
                      <i class="fa fa-chain"></i>
                    </div>
                    <img src="img/news/news-9.jpg" class="img-fluid" alt="...">
                </div>
                <h3>Hilly terrain cart</h3>
                <p class="desc">Three equidistant wheels on a single axle attached to two similar sets in different planes, allowing flexibility in movement with respect to each other. </p>
                <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
                </div>
              </div>
              <div class="card">
                <div class="desc-comp-offer-cont">
                <div class="thumbnail-blogs">
                    <div class="caption">
                      <i class="fa fa-chain"></i>
                    </div>
                    <img src="img/news/news-11.jpg" class="img-fluid" alt="...">
                </div>
                <h3>Indicator for dead landline phones</h3>
                <p class="desc">Contrary to popular </p>
                <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>
 

    <?php require_once "footer.php";?>