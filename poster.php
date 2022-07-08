<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Invitation card</title>
</head>
<body>
    <div class="container1">
<h1 class="heading">HURRAH !!</h1>
<br> <br>
<P class="para">Thank you for conform your participate with Us.</P>
<br>
<p class="para">We are Glad to see you with us.</p>
<p class="para">Dear Juniors you are Hosting a Freshers party</p>
    <a href="Black Blue Modern Party Night Club Flyer2.png"><button class="btn">Invitation card <i class="fas fa-download"></i> </button></a>
</div>
<?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "freshersparty");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['fname'];
        $number = $_REQUEST['number'];
        $meal =  $_REQUEST['fav_language'];
       // $address = $_REQUEST['address'];
        //$email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO students_details VALUES ('$first_name',
            '$number','$meal')";
         
        if(mysqli_query($conn, $sql)){
        //   echo "<h3>data stored in a database successfully."
        // . " Please browse your localhost php my admin"
        // . " to view the updated data</h3>"; 

            // echo nl2br("\n$first_name\n $last_name\n "
            //     . "$gender\n $address\n $email");
        } else{
            // echo "ERROR: Hush! Sorry $sql. "
            //     . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
</main>
</body>
</html>