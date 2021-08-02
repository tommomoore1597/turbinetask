<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wind Turbine Insepction</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script>
    //Ajax load turbine inspect list
        $(document).ready(function() {
            $("#btn").click(function(){
                $("#test").load(
                    "server.php"
                );
            });
        });
    </script>
</head>

<body>

<!--navigation menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="index.php"><img src="./img/ihawklogo.png"  alt=""> iHAWK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sites</a>
      </li>
     
    </ul>
  </div>
</nav>

<!--Turbine inspection Section-->
  <div class= "container mt-5 ">
    <div class="row">
      <div class="col">
      <h2 class="mb-3">Langford Wind Farm, UK</h2>
      <span class="error alert p-1 alert-info">Please Select a Turbine</span>
      <div class=" mt-3 site-map">

           

      <div class="item">
        <h4 class="turbinelabel1 text-light label" >Turbine 1</h4> <span class="dot" id="turbine1"></span>
      </div>
      <div class="item">
        <h4 class="turbinelabel2 text-light label" >Turbine 2</h4> <span class="dot" id="turbine2"></span>
      </div>
      <div class="item">
        <h4 class="turbinelabel3 text-light label" >Turbine 3</h4> <span class="dot" id="turbine3"></span>
      </div>
      <div class="item">
        <h4 class="turbinelabel4 text-light label" >Turbine 4</h4>  <span class="dot" id="turbine4"></span>
      </div>
      <div class="item">
        <h4 class="turbinelabel5 text-light label" >Turbine 5</h4> <span class="dot" id="turbine5"></span>
      </div>
      <div class="item">
        <h4 class="turbinelabel6 text-light label" >Turbine 6</h4> <span class="dot" id="turbine6"></span>
      </div>
      <div class="item">
        <h4 class="turbinelabel7 text-light label" >Turbine 7</h4> <span class="dot" id="turbine7"></span>
      </div>
      <div class="item">
        <h4 class="turbinelabel8 text-light label" >Turbine 8</h4> <span class="dot" id="turbine8"></span>
      </div>
      <div class="item">
        <h4 class="turbinelabel9 text-light label" >Turbine 9</h4> <span class="dot" id="turbine9"></span>
      </div>
     
  </div>
</div>

    <div class="col">
      <div id="test"></div>
    </div>

  </div>
 
      <div class="mt-2">
          <button id="btn" type="button" class="btn btn-warning inspect  font-weight-bold ">Inspect</button>
          <a href="index.php" id="btn" class="btn btn-danger  font-weight-bold ">Reset</a>
      </div>
      
</div>


        

<script>
//colour change when Turbine selected
$(".dot").click(function () {
  $('.dot').removeClass('green');
   $(this).toggleClass("green");
});

//show turbine title if selected
$('.item h4').hide();

$('.item span').click(function(e){
    
    e.preventDefault();
    // hide all titles not selected
    var $this = $(this).parent().find('h4');
    $(".item h4").not($this).hide();
    
    $this.toggle();

//display message when turbine isnt selected
    var error = $('.dot').hasClass("green");

  if(error){
   $('.error').hide();
  
  }else{
   $('.error').show();
  
  }
 

    
});


</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>