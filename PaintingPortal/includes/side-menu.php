<?php 
require "config.php";
?>

<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Genre</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
  
        <ul class="nav">
         
            <?php
            
             mysqli_select_db($con, $database);
             $query = "SELECT id, genreName FROM genre";
             $result = mysqli_query($con,$query);
             if (!$result) {
                printf("Error: %s\n", mysqli_error($con));
                exit();
            }
          
             //$row = mysqli_fetch_array($result);
             if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<li class="dropdown menu-item"> <a href="genre.php?genre='.$row["id"].'">'.$row["genreName"]." </a> </li>";
                }
            } else {
                echo "0 results";
            }
           
            ?>
            
             
                        

</ul>
    </nav>
</div>