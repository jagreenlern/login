<?php require_once  "head.php";?>
        <div class="content-inner chart-cont">

            <!--***** FORM LAYOUTS *****-->     
            <div class="row">
                <div class="col-md-12">

                    <!--***** USER INFO *****-->
                    <div class="card form" id="form1">
                        <div class="card-header">
                            <h3><i class="fa fa-user-circle"></i> User Info</h3>
                        </div>
                        <br>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" required>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Accept Term and Conditions</span>
                                        </label> 
                                    </div>
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="cont-number">Contact Number</label>
                                        <input type="email" class="form-control" id="cont-number" aria-describedby="emailHelp" placeholder="Enter Number">
                                    </div> 

                                    <div class="form-group has-success">
                                        <label for="website">Website</label>
                                        <input type="email" class="form-control is-valid" id="website" aria-describedby="emailHelp" placeholder="Enter Website URL">
                                        <div class="valid-feedback">
                                            Please provide a valid email.
                                        </div>
                                    </div>  
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h3 style="border-bottom: 1px solid #ddd;">Address</h3>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="street">Street</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Street Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter City">
                                    </div> 
                                    <div class="form-group">
                                        <label for="post-code">Post Code</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Post Code">
                                    </div> 
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="email" class="form-control" id="cont-number" aria-describedby="emailHelp" placeholder="Enter State">
                                    </div> 

                                    <div class="form-group">
                                        <label for="exampleSelect1">Select your City</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option value="">Select Your City</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BR">Brazil</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="CA">Canada</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CO">Colombia</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EG">Egypt</option>
                                            <option value="EE">Estonia</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="HK">Hong Kong S.A.R., China</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MT">Malta</option>
                                            <option value="MX">Mexico</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MA">Morocco</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="KP">North Korea</option>
                                            <option value="NO">Norway</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PS">Palestinian Territory</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="KR">South Korea</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">USA</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VN">Vietnam</option>
                                        </select>
                                    </div>  
                                </div>
                            </div> 
                            <button type="submit" class="btn btn-general btn-blue mr-2">Submit</button>  
                            <button type="reset" class="btn btn-general btn-white">Cancel</button> 
                        </form>
                    </div>

                    <!--***** PRODUCT INFO *****-->
                    <div class="card form" id="form1">
                        <div class="card-header">
                            <h3><i class="fa fa-archive"></i> Product Info</h3>
                        </div>
                        <br>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="pro-qu">Product Quantity</label>
                                        <input type="text" class="form-control" id="pro-qu" aria-describedby="emailHelp" placeholder="Enter Quantity">
                                    </div>
                                </div>
                                <div class="col-md-6">  

                                    <div class="form-group has-success">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="4"></textarea> 
                                        <div class="valid-feedback">
                                            Please provide a valid email.
                                        </div>
                                    </div>  
                                </div>
                            </div>  
                            <button type="submit" class="btn btn-general btn-blue mr-2">Submit</button>  
                            <button type="reset" class="btn btn-general btn-white">Cancel</button> 
                        </form>
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