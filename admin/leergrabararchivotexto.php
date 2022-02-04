<?php
require_once "head.php";
//require_once $baseurl . "lib\xml\xml.class.php";
require_once baseurl . "lib/archivosdirectorios/archivo.class.php";
//require_once "carpeta.class.php";
//$iarchivo = new archivo("test.txt");
//$iarchivo->nuevo();
$iarchivo = new archivo("config.txt");
$iarchivo->abrircrearparaleeroescribir();


//$iarchivo->leer();


//xfc $icarpeta->deletedir();


//$icarpeta->deleteDirectory()



//$ixml=new xml("nodos.conf.php");
//$colecciones=$ixml->leerxml();

//$ixml->grabarxml($colecciones);
if (!isset($_POST["controllerdefault"]))
{
    
   // $colecciones=$ixml->actualizarxml($colecciones,$_POST);}
   
//   $iarchivo->grabar($_POST["controllerdefault"]);
  $iarchivo->escribir($_POST["controllerdefault"]);
}

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
                                        <textarea class="form-control" id="controllerdefault" aria-describedby="emailHelp"  name="controllerdefault" rows="5"><?php $iarchivo->leer();?></textarea>
                                        <?php $iarchivo->cerrar();?>
                                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                    </div>
                                    
                           
                                    
                                                   
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