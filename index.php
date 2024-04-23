<!DOCTYPE html>
<html lang="en">
<?php
include_once 'db-connect.php';

if(isset($_GET['user'])){
  $user = $_GET['user'];
  $stmt = $conn->prepare("SELECT usr_nombre, usr_primerapellido, usr_segundoapellido, usr_genero FROM usuarios WHERE usr_qr = ?;");
	$stmt->bind_param("s", $user);
	$stmt->execute();
	$stmt->bind_result($usr_nombre,$usr_primerapellido,$usr_segundoapellido,$usr_genero);
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Karla:ital,wght@0,200..800;1,200..800&family=Noto+Sans+Limbu&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <title>Madrid Police</title>
</head>

<body>
  <div class="bigcontainer">
    <div class="drone">
     <!--<img class="logo" src="logoLanding.png" alt="logoLanding">-->
      <div class="title">
        <p> ¿QUIERE QUE SU
          <font color="#E30613">POLICÍA LOCAL</font>
          <br>
          TENGA
          <font color="#E30613">SUPERPODERES</font>?
        </p>
      </div>
    </div>
    <div class="subtitle">
      <p>Estimado <font color="#E30613"> <?php echo $usr_nombre; ?></font><br> agende una <font color="#E30613">Reunión</font> y <br>le explicamos en detalle:</p>
    </div>
    <div class="calendar">




<!-- Google Calendar Appointment Scheduling begin -->
<iframe src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ2G0CYYzE4sEMGGtaAFYULie9VRqBIfrPshFDtrmUmg-j6Teed6U4RpkmO9X_h9ADqQ35pRFfLe?gv=true" style="border: 0" width="100%" height="600" frameborder="0"></iframe>
<!-- end Google Calendar Appointment Scheduling -->
    </div>

  </div>


</body>

</html>