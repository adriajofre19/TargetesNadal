<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive VUE Login/Register made@ Satoripop</title>
  
<link href="https://fonts.googleapis.com/css?family=Comfortaa|Spartan&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="style/style-header.css">
<link rel="stylesheet" href="style/style-register.css">

</head>
<body>

<body>

<div>
    <?php include 'header.php'; ?>
</div>

<div class="container">
      <div class="content">

        <div class="login-container animated fadeInDown" style="animation-delay:.3s;">
         <!--   Login   --> 
            <div class="login justify-content-center" id="login-form">
              <h1 class="form-title"><i class="fas fa-user" style="color: black;"></i> <br> ENVIA LA TEVA TARGETA  <hr></h1>
       
               <div class="form-container animated fadeIn" style="animation-delay:.7s;">
                <form id="myForm" class="form-registrar" action="index.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="r" value="doregister">
                   
                    <label for=""><i class="fas fa-user"></i> Nom </label>
                    <input type="text" name="nom" id="nom" placeholder="Nom" required=''>

                    <label for=""><i class="fas fa-user"></i> Cognoms </label>
                    <input type="text" name="cognoms" id="cognoms" placeholder="Cognoms" required=''>

                    <label for=""><i class="fas fa-user"></i> Data de Naixament </label>
                    <input type="date" name="data_naix" id="data_naix" placeholder="Data de Naixament" required=''>

                    <label for=""><i class="fas fa-user"></i> Adreça </label>
                    <input type="text" name="adreca" id="adreca" placeholder="Adreça" required=''>

                    <label for=""><i class="fas fa-users"></i> Grup </label>
                    <input type="text" name="grup" id="grup" placeholder="Grup" required=''>

                    <label for=""><i class="fas fa-users"></i> Targeta </label>
                    <input type="file" name="targeta" id="targeta" class="form-control container-m10" accept=".pdf, .jpg, .jpeg, .png" required=''>
                    
                    
                    <div class="submit-buttons">
                        <input type="submit" value="Enviar la targeta">
                    </div>
                    
                </form>
              </div>
            </div>
            
            <div class="login animated fadeIn" style="animation-delay:.7s;animation-duration:4s;" id="login-bg"></div>
            
        </div>
        
      </div> 
    </div>

</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>´
<script  src="script/script.js"></script>
<script  src="script/script-header.js"></script>

</body>
</html>
