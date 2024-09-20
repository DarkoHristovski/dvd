<!-- AUTHOR : IVAN BELOVARI -->
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Ford Showroom - Autoactiva Werbeagentur</title>
  <meta name="description" content="Ford Showroom">
  <meta name="author" content="SitePoint">

  <meta property="og:title" content="Ford Showroom - Autoactiva Werbeagentur">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Ford Showroom">
  <meta property="og:image" content="image.png">

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link href="https://www.av-hall.at/template/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

  <link rel="stylesheet" href="assets/css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</head>

<body>
      <!--
  <div style="" class="absolute-menu">
    <button id="sidebar-toggle" class="sidebar-toggle-button" onclick="hideSidebar()"> <i class="fa fa-bars" aria-hidden="true"></i> </button>

    <div class="off-canvas-menu" id="myDIV" style="display: none;">

      <a href="output#opel1,-32,-0.16,70.0" target="pano-embed-content" rel="noopener noreferrer">Astra</a>
      <a href="output#opel2,15,0,70.0" target="pano-embed-content" rel="noopener noreferrer">Astra GSE</a>
      <a href="output#opel1,-162,3.9,70.0" target="pano-embed-content" rel="noopener noreferrer">Astra E</a>
      <a href="output#opel1,1.27,2.04,70.0" target="pano-embed-content" rel="noopener noreferrer">Astra Sports Tourer</a>
      <a href="output#opel2,-49,0.49,70.0" target="pano-embed-content" rel="noopener noreferrer">Astra Plug-In Hybrid</a>
      <a href="output#opel2,-22,-2.49,70.0" target="pano-embed-content" rel="noopener noreferrer">Astra Sports Tourer Plug-In Hybrid</a>
      <a href="output#opel3,-32,5.5,70.0" target="pano-embed-content" rel="noopener noreferrer">Astra Sports Tourer GSE </a>
      <a href="output#opel3,-93.5,70.0" target="pano-embed-content" rel="noopener noreferrer">Corsa </a>
      <a href="output#opel3,20,3.92,70.0" target="pano-embed-content" rel="noopener noreferrer">Mokka </a>
      <a href="output#opel1,112,4.49,70.0" target="pano-embed-content" rel="noopener noreferrer">Grandland</a>
      <a href="output#opel2,172,-6.49,70.0" target="pano-embed-content" rel="noopener noreferrer">Grandland GSE</a>
      <a href="output#opel4,10,2.46,70.0" target="pano-embed-content" rel="noopener noreferrer">Corsa E</a>
      <a href="output#opel4,168,4.12,70.0" target="pano-embed-content" rel="noopener noreferrer">Grandland Plug-In Hybrid</a>
      <a href="output#opel4,-18,5.12,70.0" target="pano-embed-content" rel="noopener noreferrer">Mokka E</a>
      <a href="output#opel4,-50,3.86,70.0" target="pano-embed-content" rel="noopener noreferrer">Rocks E</a>
      <a href="output#opel4,-173,0.48,70.0" target="pano-embed-content" rel="noopener noreferrer">Crossland X</a>
      <a href="output#opel5,15,3.66,70.0" target="pano-embed-content" rel="noopener noreferrer">Combo Life</a>
      <a href="output#opel5,-21,4.66,70.0" target="pano-embed-content" rel="noopener noreferrer">Zafira Life</a>
      <a href="output#opel6,-117.24,3.33,70.0" target="pano-embed-content" rel="noopener noreferrer">Combo Cargo</a>
      <a href="output#opel5,144,2.69,70.0" target="pano-embed-content" rel="noopener noreferrer">Insignia Sports Tourer</a>
      <a href="output#opel5,-177,2.43,70.0" target="pano-embed-content" rel="noopener noreferrer">Insignia Grand Sport</a>
	  <a href="output#opel6,-7.96,1.43,70.0" target="pano-embed-content" rel="noopener noreferrer">Zafira Crosscamp </a>


<button style="display:none" class="accordion">Restaurant</button>
      <div class="panel">
        <a href="showroom/Output_20210826#Raum1" target="pano-embed-content" rel="noopener noreferrer">Lounge</a>
        <a href="showroom/Output_20210826#Raum2" target="pano-embed-content" rel="noopener noreferrer">Gastraum Unten</a>
        <a href="showroom/Output_20210826#Raum2Oben" target="pano-embed-content" rel="noopener noreferrer">Gastraum Oben</a>
        <a href="showroom/Output_20210826#Kueche" target="pano-embed-content" rel="noopener noreferrer">Große Küche</a>
        <a href="showroom/Output_20210826#Bar1" target="pano-embed-content" rel="noopener noreferrer">Bar Lounge</a>
      </div>

    </div>
  </div>
-->  </div>
  <div class="scroll-column">
  </div>


  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {

        for (i = 0; i < acc.length; i++) {
          var panel = acc[i].nextElementSibling;
          acc[i].classList.remove("active");
          panel.style.maxHeight = null;
        }
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }

    function hideSidebar() {

      var x = document.getElementById("myDIV");
      var y = document.getElementById("sidebar-toggle")

      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>


  <div id="pannoscont" class="embed-containerframe">
    <embed id="pano-embed-content" name="pano-embed-content" src="output" width="100%" height="100%">
  </div>
</body>

</html>