<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
/*TIPO*/
$field_tipo = isset($_POST['cf_tipo']) ? $_POST['cf_tipo'] : false;
   if($field_tipo) {
      echo htmlentities($_POST['cf_tipo'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     exit; 
   }
/*Cierre TIPO*/
$field_ancho1 = $_POST['cf_ancho1'];
$field_alto1 = $_POST['cf_alto1'];
$field_cant1 = $_POST['cf_cant1'];
$field_color = $_POST['cf_color'];

/*CENEFA*/
$field_cenefa = isset($_POST['cf_cenefa']) ? $_POST['cf_cenefa'] : false;
   if($field_cenefa) {
      echo htmlentities($_POST['cf_cenefa'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     exit; 
   }
/*Cierre CENEFA*/
/*MANDO*/
$field_mando = isset($_POST['cf_mando']) ? $_POST['cf_mando'] : false;
   if($field_mando) {
      echo htmlentities($_POST['cf_mando'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     exit; 
   }
/*cierre MANDO*/
$field_ancho2 = $_POST['cf_ancho2'];
$field_numerotelos = $_POST['cf_numerotelos'];
/*CENEFA2*/
$field_cenefa2 = isset($_POST['cf_cenefa2']) ? $_POST['cf_cenefa2'] : false;
   if($field_cenefa2) {
      echo htmlentities($_POST['cf_cenefa2'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     exit; 
   }
/*Cierre CENEFA2*/
/*TIPO2*/
$field_tipo2 = isset($_POST['cf_tipo2']) ? $_POST['cf_tipo2'] : false;
   if($field_tipo2) {
      echo htmlentities($_POST['cf_tipo2'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     exit; 
   }
/*Cierre TIPO2*/

$field_moto = $_POST['cf_moto'];
/*MOTO*/
$field_moto = isset($_POST['cf_moto']) ? $_POST['cf_moto'] : false;
   if($field_moto) {
      echo htmlentities($_POST['cf_moto'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     exit; 
   }
/*Cierre MOTO*/
$mail_to = 'andreslarrottapino911@gmail.com';
$subject = $field_name.', Te ha ha contactado desde la pagina web www.decoracionesintexab.com ';


$body_message = '
	<table width="650px" height="auto" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
		  <td>
		    <img src="http://develop.cristal-code.com/cr1st4l_c0d3/img/mail.jpg" height="278" width="650" alt="">
		  </td>
		</tr>
		<tr>
			<td style="padding: 10px 30px; font-size: 18px;font-family: "Ubuntu", sans-serif; color: #011f2c;">
			    <p>
			    	<span>Hola, <b>'.$field_name.' </b>te ha enviado el formulario de cotizacion desde <b>www.decoracionesintexab.com</b><br>
			    	<hr>
			    	<span>tipo:'.$field_tipo.'<br></span><br>
			    	<span>ancho : '.$field_ancho1.'cm y de alto: '.$field_alto1.'cm cantidad: '.$field_cant1.'<br></span><br>
			    	<span>color: '.$field_color.' cenefa '.$field_cenefa.' mando: '.$field_mando.' Ancho de telos : '.$field_ancho2.' Numero de Telos :'.$field_numerotelos.' <br>
			    		</span><br>
			    	<span> Cenefa : '.$field_cenefa2.'<br> tipo:'.$field_tipo2.' <br> Mototizada : '.$field_moto.' <br> Observaciones '.$field_message.' </span><br><br>
			    	<span>puedes contestarle a este correo electrónico:<br>
			    		<b>'.$field_email.'</b></span><br>
				</p>
			</td>
		</tr>
		<tr>
		</tr>
	</table>';

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";
/* $headers .= "CC: devius123@gmail.com\r\n"; 
$headers .= "CC: devius123@hotmail.com\r\n";*/
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Gracias por tu mensaje, pronto nos contactaremos contigo.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('El mensaje no pudo ser enviado. Por favor intenta de nuevo o contactate con mateo.aguilar@cristal-code.com');
		window.location = 'index.html';
	</script>
<?php
}
?>