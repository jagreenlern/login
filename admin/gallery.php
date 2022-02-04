
<?php require_once  "head.php";?>

        <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->     
            <div class="row">
                <div class="col-md-4 col-sm-6 mt-1">
                    <div class="box-4">
                        <img src="img/gallery/g-2.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-1">
                    <div class="box-4">
                        <img src="img/gallery/g-1.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-1">
                    <div class="box-4">
                        <img src="img/gallery/g-3.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-4.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-5.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-6.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-7.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-1.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-2.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
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