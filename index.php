<!DOCTYPE html>
<html lang="en">
<?php
include_once 'db-connect.php';

if(isset($_GET['user'])){
  $user = $_GET['user'];
  $query = $conn->query("SELECT * FROM ld_users WHERE usr_qr='".$user."';");
  if($query->num_rows==1){
    $res = $query->fetch_assoc();
    $query = $conn->query("UPDATE ld_users SET usr_visitado=1 WHERE usr_qr='".$user."';");
  }
  
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
      <p>Estimad<?php if($res['usr_genero']=='H'){echo "o";}else{echo "a";} ?> <font color="#E30613"> <?php echo $res['usr_nombre'].' '.$res['usr_primerapellido']  ?></font><br> agende una <font color="#E30613">Reunión</font> y <br>le explicamos en detalle:</p>
    </div>
    <div class="calendar">




<!-- Google Calendar Appointment Scheduling begin -->
<iframe src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ2G0CYYzE4sEMGGtaAFYULie9VRqBIfrPshFDtrmUmg-j6Teed6U4RpkmO9X_h9ADqQ35pRFfLe?gv=true" style="border: 0" width="100%" height="600" frameborder="0"></iframe>
<!-- end Google Calendar Appointment Scheduling -->
    </div>

  </div>


</body>

</html>