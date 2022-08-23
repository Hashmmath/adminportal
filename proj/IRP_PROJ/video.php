<?php 
include_once('database.php')
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width" , initial-scale="1.0">
        <title>Education  portal</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php 
			
            $sql = " SELECT * FROM admin ";
            $result = $con->query($sql);
            $con->close();
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
			echo "<h2 class='page-header'>Videos Details</h2>";?>
			<div class="course-box">
                <div class="courses">
                    <a href="data.html"><img src="images/data.jpg" alt=""></a>
                    <div class="details">
                        <span>Updated 15/08/2022</span>
                        <h6 href="data.html"><?php echo $rows['V_Title'];?></h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(239)</span>
                        </div>
                    </div>
                    <div class="cost">
                        FREE
                    </div>
                </div>
                <?php
                }
                ?>
                <?php>
			$count=1;
			while($row=mysqli_fetch_array($rs))
			{
			?>
		
		<?php
            
		$count++;
    }
		?>	
		</table>
    </body>