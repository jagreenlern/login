<?php require_once  "head.php";?>

        <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->     
            <div class="row mt-2" id="card-prof">
                <div class="col-md-3">
                    <div class="card hovercard">
                        <div class="cardheader"></div>
                        <div class="avatar">
                            <img alt="" src="../<?=$_SESSION['foto']?>" class="img-fluid">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="mailto:<?=$_SESSION['email']?>"><?=$_SESSION['usuario']?></a>
                            </div>
                            <div class="desc"><?=$_SESSION['email']?></div> 
                            <hr>
                        </div>
                        <nav class="nav text-center prof-nav">
                            <ul  class="list-unstyled ">
                                <li><a href="#">Profile</a></li> 
                                <li><a href="#">Inbox</a></li> 
                                <li><a href="#">Setting</a></li> 
                                <li><a href="../logout.php">Logout</a></li> 
                                <li><a href="../loginbootstrap.php">Logeo</a></li> 
                                <li><a href="../registrobootstrap.php">Registro</a></li> 
                            </ul>
                        </nav>
                        <div class="bottom">
                            <a class="btn btn-info btn-twitter btn-sm" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" rel="publisher"
                               href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a class="btn btn-primary btn-sm" rel="publisher"
                               href="#">
                                <i class="fa fa-facebook"></i>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card hovercard">
                        <div class="tab" role="tabpanel"> 
                            <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item ">
                                <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><span><i class="fa fa-user"></i></span> Profile</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><span><i class="fa fa-inbox"></i></span> Inbox</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#references" role="tab" data-toggle="tab"><span><i class="fa fa-cog"></i></span> Setting</a>
                              </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                              <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel, malesuada lorem. Nullam faucibus lorem at eros consectetur lobortis. Maecenas nec nibh congue, placerat sem id, rutrum velit. </p>
                                    <div class="row" id="report4">
                                        <div class="col-md-4">
                                            <div class="card text-center social-bottom sb-fb">
                                                <i class="fa fa-facebook"></i>
                                                <div>3250 +</div>
                                                <p>Likes</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center social-bottom sb-tw">
                                                <i class="fa fa-twitter"></i>
                                                <div>2345 +</div>
                                                <p>Following</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center social-bottom sb-gp">
                                                <i class="fa fa-google-plus"></i>
                                                <div>1253 +</div>
                                                <p>Followers</p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row mt-3">
                                        <h5 class="col-12 mb-2">User Info</h5>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-envelope"> E-mail: </i></strong>    steena@gmail.com
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-phone"> Phone: </i></strong>   +91 1233 45 5678
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-map"> City: </i></strong>    New York
                                            </div> 
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-globe"> Country: </i></strong>    steena@gmail.com
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-map-marker"> Address: </i></strong>   25, Dist town Street, Logn California, US 
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-globe"> Website: </i></strong>    www.Businessbox.com
                                            </div> 
                                        </div>
                                    </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="buzz">
                                    <div class="panel panel-default widget">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-comment"></i> Messages</h3>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/avatar-2.jpg" class="img-circle img-fluid" alt="" /></div>
                                                        <div class=" col-md-10">
                                                            <div>
                                                                <a href="#">
                                                                    Congratulations</a>
                                                                <div class="mic-info">
                                                                    By: <a href="#">Check My Athletics</a> on 12 Jun 2018
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                We would like to congratulate John on his achievement...
                                                            </div>
                                                            <a  href="#" class="btn btn-sm btn-hover btn-primary" href="#reply" ><span class="fa fa-share-alt" style="padding-right:3px;"></span></a>
                                                            <a href="#" class="btn btn-sm btn-hover btn-danger"><span class="fa fa-remove" style="padding-right:3px;"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/avatar-3.jpg" class="img-circle img-fluid" alt="" /></div>
                                                        <div class=" col-md-10">
                                                            <div>
                                                                <a href="#">Great Job</a>
                                                                <div class="mic-info">
                                                                    By: <a href="#">Coacher</a> on 11 May 2018
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/avatar-2.jpg" class="img-circle img-fluid" alt="" /></div>
                                                        <div class=" col-md-10">
                                                            <div>
                                                                <a href="#">Great Job</a>
                                                                <div class="mic-info">
                                                                    By: <a href="#">Coacher</a> on 11 May 2018
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            
                                        </div>
                                    </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="references">
                                    <div class="row mx-2">
                                        <div class="col-md-12 panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-comment"></i> Edit Info</h3><br>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group row">
                                                <label for="example-text-input" style="width: 85px;" class=" col-form-label">Name</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="text" value="Steena Ben" id="example-text-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-email-input" style="width: 85px;" class=" col-form-label">Email</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="email" value="steena@gmail.com" id="example-email-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" style="width: 85px;" class=" col-form-label">URL</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="url" value="www.Businessbox.com" id="example-url-input">
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="example-text-input" style="width: 85px;" class=" col-form-label">Department</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="text" value="Programming" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" style="width: 85px;" class=" col-form-label">Hire Date</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="date" value="2018-08-19" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" style="width: 85px;" class=" col-form-label">Telephone</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="tel" value="+91-(555)-555-5555" id="example-tel-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

        </div>
    </div> 

    <!--Global Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.validate.min.js"></script> 
    <script src="js/chart.min.js"></script> 
    <script src="js/front.js"></script> 
    
    <!--Core Javascript -->
    <script>
        new Chart(document.getElementById("myChart-nav").getContext('2d'), {
          type: 'doughnut',
          data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
              backgroundColor: [
                "#2ecc71",
                "#3498db",
                "#95a5a6",
                "#9b59b6",
                "#f1c40f",
                "#e74c3c",
                "#34495e"
              ],
              data: [12, 19, 3, 17, 28, 24, 7]
            }]
          },
          options: {
              legend: { display: false },
              title: {
                display: true,
                text: ''
               } 
            }
        });
    </script> 
</body>

</html>