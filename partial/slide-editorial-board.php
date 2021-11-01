<div class="editor-box">
        <marquee id="myMarquee" behavior="alternate" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();" direction="up">


        <?php 
include_once('database/dbcon.php');
$sql = "SELECT * FROM slide_editors ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    ?>
            <div class="editor-card">
                <div class="editor-img">
                    <img src="assets/all-editors/slider/<?php echo $row["image"];  ?>" alt="">

                </div>

                <div class="editor-details">
                    <div class="editor-name">
                        <span><?php echo $row["name"];  ?></span>

                    </div>

                    <div class="editor-degi">
                        <span><?php echo $row["university"];  ?></span>
                        <span><?php echo $row["details"];  ?></span>
                        

                    </div>
                </div>
            </div>


            <?php

}
} else {
echo "0 results";
}
$con->close();

?>


















        </marquee>


    </div>