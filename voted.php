
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <?php 
        if(empty($_GET["vote"])){
            echo "<div style=\"color: red;\"> <b> You didn't voted ! <b></div>";
        }else{
            $vote=$_GET["vote"];
            //echo $vote." voted";
        }
        
        $sum=0;
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "votes";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

    
        if($vote=="valFacebook"){
            //echo "FACEBOOK";
            $string="update vote set facebook = facebook+1;";
        }else if($vote=="valMessenger"){
            //echo "MESSENGER";
            $string="update vote set messenger = messenger+1;";
        }else if($vote=="valInstagram"){
            //echo "INSTAGRAM";
            $string="update vote set instagram = instagram+1;";
        }else if($vote=="valSnapchat"){
            //echo "SNAPCHAT";
            $string="update vote set snapchat = snapchat+1;";
        }else if($vote=="valOther"){
            //echo "DIFFERENT";
            $string="update vote set different = different+1;";
        }
    
    
        if ($conn->query($string) === TRUE) {
            //echo "Successfuly saved to database !";
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $sql="select facebook, messenger, instagram, snapchat, different from vote;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $rows=0;
            while($row = $result->fetch_assoc()) {
                $fb = $row["facebook"];
                $ms = $row["messenger"];
                $in = $row["instagram"];
                $sn = $row["snapchat"];
                $di = $row["different"];
                
            }
        }
    
        $sum=$fb+$ms+$in+$sn+$di;
            
    
        $fbg=($fb/$sum)*100;
        $msg=($ms/$sum)*100;
        $ing=($in/$sum)*100;
        $sng=($sn/$sum)*100;
        $dig=($di/$sum)*100;
    
        echo "<div style=\"width: 40%; height: 180px; margin-top: 10px;\">
        <b>State of votes: </b>
        <div style=\"border: 1px solid black;\">
        <div style=\"margin-top: 5px;\">
        <div style=\"background-color: #3b5998; width: ".$fbg."%; height: 10%; color: white; text-align: center; float:left;\"><b>".round($fbg,2)."%</b></div><i style=\"margin-left: 5px;\">facebook</i>
        </div>
        <div style=\"margin-top: 5px;\">
        <div style=\"background-color: #44bec7; width: ".$msg."%; height: 10%; color: white; text-align: center; float:left;\"><b>".round($msg,2)."%</b></div><i style=\"margin-left: 5px;\">messenger</i>
        </div>
        <div style=\"margin-top: 5px;\">
        <div style=\"background-color: #c13584; width: ".$ing."%; height: 10%; color: white; text-align: center; float:left;\"><b>".round($ing,2)."%</b></div><i style=\"margin-left: 5px;\">instagram</i>
        </div>
        <div style=\"margin-top: 5px;\">
        <div style=\"background-color: #fffc00; width: ".$sng."%; height: 10%; color: white; text-align: center; float:left;\"><b>".round($sng,2)."%</b></div><i style=\"margin-left: 5px;\">snapchat</i>
        </div>
        <div style=\"margin-top: 5px;\">
        <div style=\"background-color: orange; width: ".$dig."%; height: 10%; color: white; text-align: center; float:left;\"><b>".round($dig,2)."%</b></div><i style=\"margin-left: 5px;\">other</i>
        </div>
        </div>
        <div style=\"height: 15%; color: black; margin-top: 5px; text-align: left;\"><b>Total votes: ".$sum."</b></div>
        
    </div>";
    
     $conn->close();
        
        ?>
    
    
    
    
            
    <div style="text-align: left;">
        <form method="get" action="form.php">
            <input type="submit" value="BACK">
        </form>
    </div>
    
</body>
</html>