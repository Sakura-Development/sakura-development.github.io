<!DOCTYPE html>
<html lang="en">
<title>Mugen Hub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://sakura-development.github.io/css-packages/sakura-w3/sw3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
<script src="https://kit.fontawesome.com/f712031e9d.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/newWallet.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar sw3-sakura w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large sw3-sakura" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="https://sakura-development.github.io/MugenHub" class="w3-bar-item w3-button w3-padding-large sw3-hover-sakura">Home</a>
    <a href="https://sakura-development.github.io/MugenHub/get-started" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Get Started</a>
    <a href="https://sakura-development.github.io/MugenHub/wallet" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">NWallet</a>
    <a href="https://sakura-development.github.io/MugenHub/docs" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Docs</a>
    <a href="https://github.com/Sakura-Development/Mugen" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">GitHub</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="https://sakura-development.github.io/MugenHub/get-started" class="w3-bar-item w3-button w3-padding-large">Get Started</a>
    <a href="https://sakura-development.github.io/MugenHub/wallet" class="w3-bar-item w3-button w3-padding-large">Wallet</a>
    <a href="https://sakura-development.github.io/MugenHub/docs" class="w3-bar-item w3-button w3-padding-large">Docs</a>
    <a href="https://github.com/Sakura-Development/Mugen" class="w3-bar-item w3-button w3-padding-large">GitHub</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-metro-darken w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo sw3-text-sakura">Wallet</h1>
  <p class="w3-xlarge">Access Mugen Wallets</p>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container w3-metro-darken">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 class="sw3-text-sakura">Create Wallet</h1>
    </div>

    <div class="w3-third w3-center sw3-xxxjumbo">
      <i class="fas fa-wallet w3-padding-64 sw3-text-sakura"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-metro-darken w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center sw3-xxxjumbo">
      <i class="fa fa-lock w3-padding-64 sw3-text-sakura w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1 class="sw3-text-sakura">Access Wallet</h1>
        <?php
          
        ?>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-metro-darken">  
  <div class="sw3-xxxlarge w3-padding-32">
  	<a href="https://github.com/Sakura-Development/Mugen" class="fab fa-github w3-button w3-hover-opacity w3-round-xxlarge"></a>
 </div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
