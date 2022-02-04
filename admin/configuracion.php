<?php
require_once "head.php";
require_once $baseurl . "lib\xml\xml.class.php";

$ixml=new xml("nodos.conf.xml");
$colecciones=$ixml->leerxml();

//$ixml->grabarxml($colecciones);
if (isset($_POST["controllerdefault"]) || isset($_POST["actiondefault"]) || isset($_POST["idioma"]) || isset($_POST["fondo"]) || isset($_POST["letra"]))
{
   
    $colecciones=$ixml->actualizarxml($colecciones,$_POST);}



?>


        <div class="content-inner form-cont">
            <div class="row">
                <div class="col-md-12">

                    <!--***** BASIC FORM *****-->
                    <div class="card form" id="form1">
                        <div class="card-header">
                            <h3>Basic Form</h3>
                        </div>
                        <br>
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="controllerdefault">controllerdefault</label>
                                        <input type="text" class="form-control" id="controllerdefault" aria-describedby="emailHelp" placeholder="controllerdefault" name="controllerdefault" value="<?php
                                        		foreach($colecciones as $elemento)
                                                {
                                                
                                                echo $elemento->controllerdefault;
                                                };?>">
                                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                    </div>
                                    <div class="form-group">
                                        <label for="actiondefault">actiondefault</label>
                                        <input type="text" class="form-control" id="actiondefault" placeholder="actiondefault" name="actiondefault" value="<?php
                                        		
                                                foreach($colecciones as $elemento)
                                                {
                                                
                                                echo $elemento->actiondefault;
                                                };?>">
                                    </div>  
                           
                                    
                                    <div class="form-group">
                                        <label for="idioma">idioma</label>
                                        <input type="text" class="form-control" id="idioma" placeholder="idioma" name="idioma" value="<?php
                                        		foreach($colecciones as $elemento)
                                                {
                                                
                                                echo $elemento->idioma;
                                                };?>"> 
                                    </div>

                                    <div class="form-group">
                                        <label for="idioma">fondo</label>
                                        <input type="text" class="form-control" id="fondo" placeholder="fondo" name="fondo" value="<?php
                                        		foreach($colecciones as $elemento)
                                                {
                                                
                                                echo $elemento->fondo;
                                                };?>"> 
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="idioma">letra</label>
                                        <input type="text" class="form-control" id="letra" placeholder="letra" name="letra" value="<?php
                                        		foreach($colecciones as $elemento)
                                                {
                                                
                                                echo $elemento->letra;
                                                };?>"> 
                                    </div>
                                    
                                                   <!--
                                    <div class="form-group">
                                        <label for="rol">Rol</label>
                                        <select class="form-control" id="rol" name="rol">
                                            <option>admin</option>
                                            <option>usuario</option>
                                            
                                        </select>
                                    </div>
                     
                                    <fieldset class="form-group">
                                        <legend>Radio buttons</legend>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option one is this and that&mdash;be sure to include why it's great
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one
                                            </label>
                                        </div> 
                                    </fieldset>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelect1">Example select</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea">Example textarea</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                 </div>
                            </div> -->
                            <button type="submit" class="btn btn-general btn-blue mr-2">Submit</button>  
                            <button type="reset" class="btn btn-general btn-white">Cancel</button>
                        </form>
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