<?php require_once  "head.php";?>
        <div class="content-inner chart-cont">

            <!--***** CONTENT *****--> 
            <div class="card p-4">    
                <div class="row">   
                    <hgroup class="mb20">
                        <h1>Search Results</h1>
                        <h2 class="lead"><strong class="cl-blue">3</strong> results were found for the search for <strong class="cl-blue">Business</strong></h2>                               
                    </hgroup>

                    <section class="col-xs-12 col-sm-6 col-md-12">
                        <article class="search-result row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="img/search/s-1.jpg" class="img-fluid" alt="Lorem ipsum" /></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <ul class="meta-search">
                                    <li><i class="fa fa-calendar"></i> <span>02/15/2014</span></li>
                                    <li><i class="fa fa-clock-o"></i> <span>4:28 pm</span></li>
                                    <li><i class="fa fa-tags"></i> <span>People</span></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                                <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p> 
                            </div>
                            <span class="clearfix borda"></span>
                        </article>

                        <article class="search-result row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="img/search/s-2.jpg" class="img-fluid" alt="Lorem ipsum" /></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <ul class="meta-search">
                                    <li><i class="fa fa-calendar"></i> <span>02/13/2014</span></li>
                                    <li><i class="fa fa-clock-o"></i> <span>8:32 pm</span></li>
                                    <li><i class="fa fa-tags"></i> <span>Food</span></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7">
                                <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p> 
                            </div>
                            <span class="clearfix borda"></span>
                        </article>

                        <article class="search-result row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="img/search/s-3.jpg" class="img-fluid" alt="Lorem ipsum" /></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <ul class="meta-search">
                                    <li><i class="fa fa-calendar"></i> <span>01/11/2014</span></li>
                                    <li><i class="fa fa-clock-o"></i> <span>10:13 am</span></li>
                                    <li><i class="fa fa-tags"></i> <span>Sport</span></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7">
                                <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p> 
                            </div>
                            <span class="clearfix border"></span>
                        </article>          

                    </section>
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