<?php require_once  "head.php";?>
        <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->     
            <div class="row">
                <div class="col-md-12" id="progress-1">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div><br><br>
                    </div> 
                <hr></div><br>
                <div class="col-md-12" id="progress-2">
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div><br><br>
                    </div> 
                <hr></div><br>
                <div class="col-md-12" id="progress-3">
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div><br><br>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div><br><br>
                    </div> 
                <hr></div><br> 
            </div> 

        </div>
    </div> 

    <!--Global Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
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