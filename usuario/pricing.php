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
    <div id="home-p" class="home-p pages-head1 text-center">
      <div class="container">
        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Pricing Tables</h2>
      </div><!--/end container-->
    </div> 
 
<!--====================================================
                      PRICING TABLES
======================================================-->
    <section id="price">  
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricing-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="price-Value">
                            <span class="currency">$</span>10
                        </div>
                        <span class="month">per month</span>
                        <div class="pricingHeader">
                            <h3 class="title">STANDARD</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li>Accounts &amp; Contact</li>
                                <li>Task &amp; Event Tracking</li>
                                <li>Google Apps</li>
                                <li>Mobile Access</li>
                                <li>Content library</li>
                            </ul>
                        </div>
                        <a href="#" class="pricingTable-signup">Sign Up</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable active">
                        <div class="pricing-icon">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="price-Value">
                            <span class="currency">$</span>20
                        </div>
                        <span class="month">per month</span>
                        <div class="pricingHeader">
                            <h3 class="title">Star</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li>Oportunity Tracking</li>
                                <li>Customizable Sale</li>
                                <li>Email Template</li>
                                <li>10 Type Persona Form</li>
                                <li>Dashboards</li>
                            </ul>
                        </div>
                        <a href="#" class="pricingTable-signup">Sign Up</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricing-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="price-Value">
                            <span class="currency">$</span>40
                        </div>
                        <span class="month">per month</span>
                        <div class="pricingHeader">
                            <h3 class="title">Business</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li>Mass Email</li>
                                <li>Compaigns</li>
                                <li>Sales Teams</li>
                                <li>Offline Access</li>
                                <li>Custom Apps access</li>
                            </ul>
                        </div>
                        <a href="#" class="pricingTable-signup">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <?php require_once "footer.php";?>