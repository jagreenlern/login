<?php require_once "head.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Validación de formulario</title>
        <meta charset = "utf-8">
    		<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    		<meta name = "viewport" content = "width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href = "bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel = "stylesheet">
           <script src = "http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
        
        <script src = "jquery.validate.min.js"></script>
        <script src = "messages_es.js"></script>

    </head>
    <body>
        <style>

form,#form{                               /* make the box translucent (20% opaque) */
   border:1px solid red;
   background-color: grey;
   padding-left: 20px;
   margin-top: 20px;
   color:black;

}
.form-group {                               /* make the box translucent (20% opaque) */

   margin-bottom: 5px;
   /*text-align:justify;*/
   
   

}
#center {                               /* make the box translucent (20% opaque) */
   
   text-align: center;
   background-color:orchid;
   
   
   

}
#backgroundcolor {                               /* make the box translucent (20% opaque) */
   
   background-color: orchid;

   
   

}
.transparente {                               /* make the box translucent (20% opaque) */
   border:1px solid red;
   background-color: black;
   color: red;
   opacity: 0.2;
   filter: alpha(opacity=20);       /* IE8 and lower */
   zoom: 1;       /* set "zoom", "width" or "height" to trigger "hasLayout" in IE 7 and lower */
}
        </style>
            
      <div class="container">




<h2>The form autocomplete attribute</h2>

<p>Fill in and submit the form, then reload the page, start to fill in the form again - and see how autocomplete works.</p>

<p>Then, try to set autocomplete to "off".</p>
<center>
<div class="row">



    <form action="" method="post">
        <p>
            <legend>html5 sin bootstrap:</legend>
          <label>
            <input type="radio" name="title" value="mr">
            Mr
          </label>
          <label>
            <input type="radio" name="title" value="mrs">
            Mrs
          </label>
          <label>
            <input type="radio" name="title" value="miss">
            Miss
          </label>
        </p>
        <p>
          <label>First name</label><br>
          <input type="text" name="first_name">
        </p>
        <p>
          <label>Last name</label><br>
          <input type="text" name="last_name">
        </p>
        <p>
          <label>Email</label><br>
          <input type="email" name="email" >
        </p>
        <p>
          <label>Phone number</label><br>
          <input type="tel" name="phone">
        </p>
        <p>
          <label>Password</label><br>
          <input type="password" name="password">
        </p>
        <p>
          <label>Country</label><br>
          <select>
            <option>China</option>
            <option>India</option>
            <option>United States</option>
            <option>Indonesia</option>
            <option>Brazil</option>
          </select>
        </p>
        <p>
          <label>
            <input type="checkbox" value="terms">
            I agree to the <a href="/terms">terms and conditions</a>
          </label>
        </p>
        <p>
          <input type="submit" name="form3" value="Registro">
          <input type="reset"value="Restablecer">
        </p>
      </form>




    <div class="col-md-12 offset-md-1 form-1-box wow fadeInUp" id="form">

<form action="formtodoenviado.php"  enctype="multipart/form-data" autocomplete="on" target="black"  method="GET">
    
    <fieldset class="form-group border p-3" >

        <legend class="w-auto px-2">Controles sin controlar recuerda que se utiliza name para pasar los valores:</legend>   
        <div class="form-group" id="backgroundcolor">
    
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" autofocus \>
</div>
<div class="form-group" id="backgroundcolor">
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email" title="debe tener el siguiente patron hola@gmail.com" \>
</div>

<div class="form-group"  id="backgroundcolor">
<label for="web">Pagina web:</label>
<input type="url" id="web" name="web" title="debe tener el siguiente patron http://www.google.com o con https" \>
</div>

<div class="form-group" id="backgroundcolor">
<label for="edad">Edad:</label>
<input type="int" id="edad" name="edad" value="1" \>
</div>

<div class="form-group" id="backgroundcolor">

    <label for="datemax">Nacimiento antes de 1980-01-01:</label>
    <input type="date" id="nacimiento" name="nacimiento" max="1979-12-31">
    </div>




<div class="form-group" id="backgroundcolor">
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido">
</div>
    <div class="form-group" id="backgroundcolor">
   
    <label for="male">Male</label>
    <input type="radio" id="hombre" name="genero" value="hombre">
    <label for="nujer">Female</label>
    <input type="radio" id="mujer" name="genero" value="mujer">
    <label for="other">Other</label>
    <input type="radio" id="mujer" name="genero" value="mujer">
    </div>

    <div class="form-group" id="backgroundcolor">
    <label for="quantity">Quantity (between 1 and 5):</label>
    <input type="number" id="quantity" name="quantity" min="1" max="5">
    </div>
    
    <div class="form-group" id="backgroundcolor">
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="0" max="100" step="10" value="30">
    
</div>
    





    <div class="form-group" id="backgroundcolor"><label for=""> Vehiculo</label>
    
    <label for="vehicle1"> Bice</label>
    <input type="checkbox" id="vehicle1" name="vehiculo[]" value="bici">
    <label for="vehicle2"> Coche</label> 
    <input type="checkbox" id="vehicle2" name="vehiculo[]" value="coche">
    <label for="vehicle3"> Bote</label>
    <input type="checkbox" id="vehicle3" name="vehiculo[]" value="bote">
    </div>
   
    <div class="form-group"  id="backgroundcolor">
    <label for="coche">Coche:</label><br>
<select id="coche" name="coche" size="3"> 
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
 
</select>
    </div>
    <div class="form-group" id="backgroundcolor">
<label for="textarea">Descripcion:</label><br>
<textarea name="textarea" rows="10" cols="30">
    The cat was playing in the garden.
    </textarea>
</div>
<div class="form-group" id="backgroundcolor">
    <button type="button" onclick="alert('Hello World!')">Click Me!</button>
</div>

       
<div class="form-group" id="backgroundcolor">
        <label for="lname">Navegador:</label>

            <input list="browsers" name="browser">
            <datalist id="browsers">
              <option value="Internet Explorer">
              <option value="Firefox">
              <option value="Chrome">
              <option value="Opera">
              <option value="Safari">
            </datalist>
</div>

<div class="form-group" id="backgroundcolor">
    <label for ="sonido">Sonido</label>
    <input type="range"  id="sonido" name="sonido" value="50"> 50 +
</div>
            <div class="form-group" id="backgroundcolor">
            <input type="number" id="b" name="b" value="50">
            =
            </div>
            <div class="form-group" id="backgroundcolor">
            <output name="x" for="a b"></output>
            </div>
            
            
            <div class="form-group" id="backgroundcolor">
              <legend>Sexo:</legend>
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Male</label><br>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label><br>
          <input type="radio" id="other" name="gender" value="other">
          <label for="other">Other</label>
          </div>
                      
        <div class="form-group" id="backgroundcolor">
          <legend>Sexo:</legend>
      <input type="checkbox" id="male" name="gender[]" value="male">
      <label for="male">Male</label><br>
      <input type="checkbox" id="female" name="gender[]" value="female">
      <label for="female">Female</label><br>
      <input type="checkbox" id="other" name="gender[]" value="other">
      <label for="other">Other</label>
      </div>
           
           
     <div class="form-group" id="backgroundcolor">

    <label for="datemax">Enter a date before 1980-01-01:</label>
    <input type="date" id="datemax" name="datemax" max="1979-12-31">
    </div>
    <div class="form-group" id="backgroundcolor">
    <label for="datemin">Enter a date after 2000-01-01:</label>
    <input type="date" id="datemin" name="datemin" min="2000-01-02">
     </div>
     <div class="form-group" id="backgroundcolor">
    <label for="favcolor">Select your favorite color:</label>
    <input type="color" id="favcolor" name="favcolor">  
    </div>

    <div class="form-group" id="backgroundcolor">
    <label for="birthdaytime">Birthday (date and time):</label>
    <input type="datetime-local" id="birthdaytime" name="birthdaytime">
    </div>

<div class="form-group"  id="backgroundcolor">
    <label for="gsearch">Search Google:</label>
    <input type="search" id="gsearch" name="gsearch">
</div>
<div class="form-group" id="backgroundcolor">
    <label for="bdaymonth">Birthday (month and year):</label>
    <input type="month" id="bdaymonth" name="bdaymonth">    
</div>
<div class="form-group" id="backgroundcolor">
    <label for="appt">Select a time:</label>
    <input type="time" id="appt" name="appt">
</div>
<div class="form-group" id="backgroundcolor">
    <label for="readonly">First name read only:</label>
    <input type="text" id="readonly" name="fname" value="John" readonly>
</div>
<div class="form-group" id="backgroundcolor">

    <label for="disableds">First name disabled:</label>
    <input type="text" id="disabled" name="fname" value="John" disabled>

</div>
<div class="form-group" id="backgroundcolor">
<label for="vol">Volume (between 0 and 50):</label>
<input type="range" id="vol" name="vol" min="0" max="50">
</div>
<div class="form-group" id="backgroundcolor">
<label for="week">Select a week:</label>
<input type="week" id="week" name="week" >
</div>



<div class="form-group" id="center">

    <input type="reset">
    <input type="submit"name="form1" value="Enviar"> 
    

    </div>
</fieldset>

  </form>



</div>
</div><!--fin ROW-->


<div class="row">
    <div class="col-md-12 offset-md-1 form-1-box wow fadeInUp">
  


  <form action="formtodovalidarpattern.php"  enctype="multipart/form-data" autocomplete="on" target="black" method="POST" >
  <fieldset>
    <legend>Controles controlados el valor para que funcione la etiqueta pattern debe debe ser tipo texto:</legend>
    <div class="form-group" id="backgroundcolor">
        <label for="country_code">Cuenta bancaria:</label>
        <input type="int" id="cuenta" name="cuenta"  placeholder="cuenta"  pattern="[0-9]{10}" title="El campo cuenta debe tener 10 dígitos" />
        </div>
        
        <div class="form-group" id="backgroundcolor">
            <label for="americanexpress">Tarjeta credito american express:</label>
            <input type="int"  name="americanexpress"  placeholder="americanexpress"  pattern="[0-9]{4} *[0-9]{6} *[0-9]{5}" title="El campo cuenta debe tener 10 dígitos" />  
            </div>

            <div class="form-group" id="backgroundcolor">
            <label for="americanexpress">Tarjeta credito:</label>
            <input type="int" name="tarjeta"  placeholder="tarjeta"  id="" pattern="[0-9]{13,16}" title="El campo debe soportar una expresion regular" />  
            </div>
            
            <div class="form-group" id="backgroundcolor">
                <label for="americanexpress">Tarjeta credito diners club:</label>
                <input type="int" name="dinersclub" placeholder="tarjeta"  pattern="^([30|36|38]{2})([0-9]{12})$" title="El campo debe soportar una expresion regular" />  
                </div>
                
            

    <div class="form-group" id="backgroundcolor">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" pattern="[A-Za-z]{1,9}" />
        
        
        </div>
        <div class="form-group" id="backgroundcolor">
        <label for="clave">Clave (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars):</label>


        

        <input type="password" id="clave" name="clave" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"  \>
    </div>
    <div class="form-group" id="backgroundcolor">
        <label for="clave2">Clave (UpperCase, LowerCase and Number):</label>
        
    
        

        <input type="password" id="clave2" name="clave2" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"  \>
    </div>
    <div class="form-group" id="backgroundcolor">
<label for="email">Enter your email:</label>
<input type="email" id="email"  pattern="[^@\s]+@[^@\s]+\.[^@\s]+" name="email" title="patron hola@gmail.com" >
</div>
<div class="form-group" id="backgroundcolor">
<label for="paginaweb">Pagina web:</label>
<input type="url" id="paginaweb" name="paginaweb"pattern="^(((https?)|(ftp)):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$" title="debe tener el siguiente patron http://www.google.com o con https" >
</div>
<div class="form-group" id="backgroundcolor">
<label for="archivo">Choose file to upload</label>
<input type="file" id="archivo" name="excel"  accept=".csv,text/csv,.xlsx,.xls" pattern="^.+\.(xlsx|xls|csv)$" />
<input type="file" id="archivo" name="imagen" accept=".jpg, .jpeg, .png" pattern="([^\s]+(\.(?i)(jpg|jpeg|png))$)"  />
<input type="file" id="archivo" name="sonido"  pattern="([^\s]+(\.(?i)(mp3|mpeg))$)" accept="audio/mpeg, audio/mp3"   />
<input type="file" id="archivo" name="video"  pattern="([^\s]+(\.(?i)(asf|asx|avi|wav|wax|wma|wm|ogg))$)"  accept=" .asf, .asx, .avi, .wav, .wax, .wma, .wm, .ogg" />
<input type="file" id="archivo" name="word"  pattern="([^\s]+(\.(?i)(doc|docx))$)"  accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
<input type="file" id="archivo" name="todo"  />
</div>





<div class="form-group" id="backgroundcolor">
<label for="archivos">Choose file to upload</label>
<input type="file" id="archivos" name="excels[]"  accept=".csv,text/csv,.xlsx,.xls" multiple="multiple" pattern="^.+\.(xlsx|xls|csv)$" />
<input type="file" id="archivos" name="imagenes[]" accept=".jpg, .jpeg, .png" multiple="multiple" pattern="([^\s]+(\.(?i)(jpg|jpeg|png))$)"  />
<input type="file" id="archivos" name="sonidos[]"  pattern="([^\s]+(\.(?i)(mp3|mpeg))$)" multiple="multiple" accept="audio/mpeg, audio/mp3"   />
<input type="file" id="archivos" name="videos[]"  pattern="([^\s]+(\.(?i)(asf|asx|avi|wav|wax|wma|wm|ogg))$)" multiple="multiple"  accept=" .asf, .asx, .avi, .wav, .wax, .wma, .wm, .ogg" />
<input type="file" id="archivos" name="words[]"  pattern="([^\s]+(\.(?i)(doc|docx))$)" multiple="multiple" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
<input type="file" id="archivos" name="todos[]"  multiple="multiple"  />
</div>


<div class="form-group" id="backgroundcolor">
<label for="country_code">CP:</label>
<input type="text"  id="country_code" name="country_code"  title="El campo cuenta debe tener 5 dígitos validos"  pattern="^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$" autofocus  />
</div>


<div class="form-group" id="backgroundcolor">
<label for="nif">NIF:
<input type="text" placeholder="NIF"  size="9"  maxlength="9" name="nif" id="nif" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" title="Introduzca el dni"   />
</label>
</div>
<div class="form-group" id="backgroundcolor">
<label for="tel">Teléfono (9 dígitos comenzando por 9, 8, 7 o 6)</label>
<input type="text" pattern="^[9|8|7|6]\d{8}$" title="debe tener el siguiente patron 8 digitos 620206090" o con https" >
</div>


<div class="form-group" id="center">
<input type="reset">
<input type="submit" alt="Submit" name="form2" value="Enviar">
</div>

</fieldset>

</form>




</div>
</div><!--fin ROW-->

</div><!--fin container-->
</center>
</body>
<?php require_once "foot.php";?>
</html>