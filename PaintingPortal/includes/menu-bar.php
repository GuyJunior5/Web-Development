<?php 
require "config.php";
?>
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="active dropdown yamm-fw">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
				
			</li>
           <?php
            mysqli_select_db($con, $database);
             $query = "SELECT id, genreName FROM genre";
             $result = mysqli_query($con,$query);
             if (!$result) {
                printf("Error: %s\n", mysqli_error($con));
                exit();
            }
            ?>
            
			<li class="dropdown yamm">
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<li class="dropdown yamm"> <a href="genre.php?genre='.$row["id"].'">'.$row["genreName"]." </a> </li>";
                }
            } else {
                echo "0 results";
            }
            ?>
			
			
             
			
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div>
</div>


            </div>
        </div>
    </div>
</div>