<?php require_once  "head.php";?>
        <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->     
                <div class="row">
                    <div class="col-md-12">
                        <div class="invoice-title ">
                            <div><img src="img/logo.png" alt=""> <p class="pull-right mt-3">Order # 12345</p></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                <strong>Billed To:</strong><br>
                                    John Smith<br>
                                    1234 Main<br>
                                    Apt. 4B<br>
                                    Springfield, ST 54321
                                </address>
                            </div>
                            <div class="col-md-6 text-right">
                                <address>
                                <strong>Shipped To:</strong><br>
                                    Jane Smith<br>
                                    1234 Main<br>
                                    Apt. 4B<br>
                                    Springfield, ST 54321
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Payment Method:</strong><br>
                                    Visa ending **** 4242<br>
                                    jsmith@email.com
                                </address>
                            </div>
                            <div class="col-md-6 text-right">
                                <address>
                                    <div><p class="mb-0">Order Date : March 7, 2018</p>
                                    <p>Term : Due on Receipt</p></div><br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Order summary</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table borderless">
                                        <thead>
                                            <tr class="bg-info text-white">
                                                <td><strong>Item</strong></td>
                                                <td class="text-center"><strong>Price</strong></td>
                                                <td class="text-center"><strong>Quantity</strong></td>
                                                <td class="text-right"><strong>Totals</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <tr>
                                                <td>BS-200</td>
                                                <td class="text-center">$10.99</td>
                                                <td class="text-center">1</td>
                                                <td class="text-right">$10.99</td>
                                            </tr>
                                            <tr>
                                                <td>BS-400</td>
                                                <td class="text-center">$20.00</td>
                                                <td class="text-center">3</td>
                                                <td class="text-right">$60.00</td>
                                            </tr>
                                            <tr>
                                                <td>BS-1000</td>
                                                <td class="text-center">$600.00</td>
                                                <td class="text-center">1</td>
                                                <td class="text-right">$600.00</td>
                                            </tr>
                                            <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                <td class="thick-line text-right">$670.99</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Shipping</strong></td>
                                                <td class="no-line text-right">$15</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Total</strong></td>
                                                <td class="no-line text-right">$685.99</td>
                                            </tr>
                                        </tbody> 
                                    </table>
                                    <div class="text-right">
                                        <a class="btn btn-general btn-blue mr-3" href="invoice-page.php" target="_empty"><i class="fa fa-print"></i> Go Print</a>
                                        <button class="btn btn-general btn-white">Submit The Invoice</button>
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