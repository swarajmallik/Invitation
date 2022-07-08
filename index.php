<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
  <div class="container">
    <form action="poster.php" method="POST">
            <h1>Conform your participance</h1>
            <div class="box">
                <p>Enter your name</p>
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input type="text" name="fname" id="fname" required>
                <!-- <input type="text" name="lname" id="lname" required> -->
                <br>
                <p>Enter your whatsapp no</p>
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                <input type="text" name="number" id="pnumber" required>
                <br>
            </div>
            <div class="box">
                <p>Please select your Meal prefrence:</p>
                  <input type="radio" id="html" name="fav_language" required value="Veg" />  
                <label for="html">Vej</label><br />
                  <input type="radio" id="css" name="fav_language" required value="Non-veg"  />  
                <label for="css">Non-vej</label><br />
                <br>
                <button  class="btn" type="submit">Submit</button>
                    
                </form>
        </div>
    </section>
</body>
<script src="https://kit.fontawesome.com/5d744167f9.js" crossorigin="anonymous"></script>
</html>

