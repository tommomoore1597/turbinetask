<?php 

//define fault count
$var = range(1, 100); ?>


<!--Turbine Fault display-->
<div class="card border mt-3 border-dark justify-content-left" >
    <a type="button" href="index.php" class="close d-flex mr-4 justify-content-end " >
        <span aria-hidden="true">&times;</span>
    </a>
        
    <div class="card-body ">
        <h5 class="card-title">Inspection Complete</h5>
        <h6 class="card-subtitle mb-4  text-danger" >Faults Detected</h6>
            
        <div class="scroll" >

        <?php foreach ($var as &$number)
        //display Turbine faults
        {


            if($number % 3 == 0 &&  $number % 5 == 0) 
            {
            echo "<span class='d-block'><p class='card-text d-inline-block'>Coating Damage & Lightning Strike</p> <i class='fas  fa-times text-danger d-inline-block'></i></span>";
            } 
            elseif ($number % 5 == 0) 
            {
            echo "<span class='d-block'><p class='card-text d-inline-block'>Lightning Strike </p> <i class='fas fa-times d-inline-block text-danger'></i></span>";
            }   
            elseif ($number % 3 == 0) 
            {
            echo "<span class='d-block'><p class='card-text d-inline-block'>Coating Damage </p> <i class='fas fa-times d-inline-block text-danger'></i></span>";
            }else {
            echo "<p class='card-text'>". $number . " <i class='fas fa-check-circle text-success'></i></p>" ;
            }

        }

        ?>
        
        </div>
    </div>
</div>