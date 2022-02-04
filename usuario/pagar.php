<?php require_once "head.php";?>




<!--====================================================
                      BUSINESS-GROWTH-P1
======================================================-->
<section id="business-growth-p1" class="business-growth-p1 bg-gray">
      <div class="container">
      

          <div class="col-md-12">
            <h3 class="wow fadeInUp">Elija un método de pago</h3>
</div>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Seleccione tipo de pago</p>

			<form name="payment" method="post" id="payment">
	    <select name="paymethod" >
		 
		<option name="paymethod" value="alcontado">Al contado</option>
	    <option name="paymethod" value="alcontadosw">Al contado(Enviar dinero con Small World)</option>
	     <ption" name="paymethod" value="tarjetacreditodebito">Tarjeta de credito o debito</option>

		 <option name="paymethod" value="paypal">Paypal</option>
		 <option name="paymethod" value="kutxabank">Kutxabank</option>
		 <option name="paymethod" value="stripe">Stripe</option>
		 <option name="paymethod" value="contrarembolso">Contrarembolso</option>
		 <option name="paymethod" value="transferenciabancariacc">Transferencia bancaria(Cuenta corriente)</option>
		 <option name="paymethod" value="transferenciabancariat">Transferencia bancaria(Tarjeta)</option>
		 
		 
		 
		 <option name="paymethod" value="ingresobancario">Ingreso Bancario(recibo)</option>
		 <option name="paymethod" value="mensualidades">Mensualidades(Transferencia bancaria)</option>
		 <option name="paymethod" value="bimestral">Bimestral(Transferencia bancaria)</option>
		 <option name="paymethod" value="trimestral">Trimestral(Transferencia bancaria)</option>
		 <option name="paymethod" value="anual">Anual(Transferencia bancaria)</option>
		  
		 
		 
		 
		 </select><br /><br />	
	     <!--<input type="submit" value="CONTINUAR" name="submit" class="btn btn-primary">-->
		 <button class="btn btn-general btn-green" role="button" onclick="document.getElementById('payment').submit();"><i fa fa-right-arrow></i>Enviar</button>
	    	

	    </form>		

	



<p >Cada vez existen más formas de <strong>enviar dinero</strong> de una persona a otra. Decantarse por un determinado <strong>método de pago</strong> depende mucho de tus necesidades y de las de tu beneficiario, no obstante te recomendamos que siempre compares <strong>la tasa de cambio</strong> que te ofrecen para <strong>transferencias internacionales</strong> así como <strong>la comisión</strong> que te cobran por el servicio.</p>
<p>Estos son los <strong>métodos de pago más habituales</strong>:</p>
<p >Cuenta corriente de la empresa:<strong>47438787343</strong></p>

<p><strong>- Pago con Tarjeta Crédito / Débito</strong></p>

<p>Te permite realizar una <strong>transferencia online</strong> con los dígitos de tu <strong>tarjeta de crédito o débito</strong>. Para realizar una transferencia con este método de pago con <strong>Small World</strong>: entra en <a href="https://transactional.smallworldfs.com/es-es/registersw" class="link"><i class="label">www.smallworldfs.com</i></a>, regístrate, elije el país donde quieres enviar y la cantidad de dinero y escoge como método de pago tarjeta de débito/crédito. Posteriormente, introduce los datos de tu beneficiario y en pocos minutos habrás <strong>enviado tu dinero</strong>.</p>


<p><strong>- Transferencia Bancaria</strong></p>

<p>Se crea una orden con la cantidad que deseamos enviar al beneficiario. Una vez confirmada la orden, se hace una transferencia bancaria a la cuenta de Small World en el mismo país de origen y por la misma cantidad exacta que se hizo la orden, sin olvidar incluir el número de orden en el concepto. Una vez llegue el dinero a la cuenta de Small World, lo enviarán al pagador entre 24 y 48 horas.</p>

<p>Puede tratarse de un proceso un poco más lento pero da un mayor grado de seguridad ya que permite la identificación bancaria, algo obligatorio al menos una vez para cada persona en España que realice transacciones no personales.</p>


<p><strong>- Ingreso Bancario(Recibo)</strong></p>




<p><strong><a href='https://www.smallworldfs.com/es' target='_blank' id='#16' name='' class="btn btn-info" role="button"><i class='icon-money icon-large'></i>contado(Enviar dinero con Small World)</a></strong></p>

<p><strong>Envío de dinero en efectivo a un tercero</strong>. <strong>Small World</strong> cuenta con 162 oficinas en 19 países para que puedas realizar <strong>tu envío de dinero en efectivo de manera rápida y sencilla</strong>. Puedes consultar el <a href="https://www.smallworldfs.com/es/donde-estamos" target="_blank" class="link"><i class="label">mapa de oficinas</i></a>.</p>
<?php pagar::pagar('https://www.paypal.com/paypalme/pagarapablo',"paypal");?> 
<!--<p><strong><a href='https://www.paypal.com/paypalme/pagarapablo' target='_blank' id='#16' name='' class="btn btn-info" role="button"><i class='icon-money icon-large'></i>Paypal</a></strong></p>-->
<p>Es una herramienta online que permite realizar pagos por internet. Tan sólo tendrás que <strong>introducir los dígitos de tu tarjeta de débito/crédito una vez</strong> y posteriormente, puedes realizar tus pagos con tu cuenta de correo electrónico y tu contraseña. Aunque suele ser un servicio rápido, las desventaja radica en que <strong>la tasa de cambio suele ser muy alta y poco competitiva</strong>. Sin embargo sí garantiza la seguridad a la hora de realizar compras en internet en sitios desconocidos.</p>







<a href="https://portal.kutxabank.es/cs/Satellite/kb/es/particulares" target="_blank" id="#16"class="btn btn-info" role="button" name=""><i class="icon-money icon-large"></i>kutxabank</a>
 		<!--<a href='stripepagostarjeta/index.php?cantidad=0&descripcion=Productos Pablo Martín Martín' class="btn btn-info" role="button" name=''><i class='icon-money icon-large'></i>Stripe</a>-->
         <?php pagar::pagar("lib/pagar/stripepagostarjeta/index.php?cantidad=0&descripcion=Productos Pablo Martín Martín","stripe");?> 
        </div> 
        

       
    </section>     



			
					
		
	        
	    
    
	    
		<?php require_once "footer.php";?>