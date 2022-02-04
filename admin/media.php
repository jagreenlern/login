<?php require_once  "head.php";?>
        <div class="content-inner media-cont">

            <!--***** MEDIA *****-->     
            <div class="row" id="media">
                 <div class="row no-gutters">
                    <div class="col-md-4 col-sm-4">
                        <div class="img-wrapper">
                            <a href="img/work/1.jpg" title="Work Description Goes Here">
                                <img src="img/work/1.jpg" class="img-fluid" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="img-wrapper">
                            <a href="img/work/2.jpg" title="Work Description Goes Here">
                                <img src="img/work/2.jpg" class="img-fluid" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="img-wrapper">
                            <a href="img/work/3.jpg" title="Work Description Goes Here">
                                <img src="img/work/3.jpg" class="img-fluid" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="img-wrapper">
                            <a href="img/work/4.jpg" title="Work Description Goes Here">
                                <img src="img/work/4.jpg" class="img-fluid" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="img-wrapper">
                            <a href="img/work/5.jpg" title="Work Description Goes Here">
                                <img src="img/work/5.jpg" class="img-fluid" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="img-wrapper">
                            <a href="img/work/6.jpg" title="Work Description Goes Here">
                                <img src="img/work/6.jpg" class="img-fluid" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="img-wrapper">
                            <a href="img/work/7.jpg" title="Work Description Goes Here">
                                <img src="img/work/7.jpg" class="img-fluid" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="img-wrapper">
                            <a href="img/work/8.jpg" title="Work Description Goes Here">
                                <img src="img/work/8.jpg" class="img-fluid" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="img-wrapper">
                            <a href="img/work/4.jpg" title="Work Description Goes Here">
                                <img src="img/work/4.jpg" class="img-fluid" alt="Work">
                            </a>
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
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script>
        $(function () {
            $("#work").magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
</body>

</html>