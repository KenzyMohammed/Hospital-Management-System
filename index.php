<?php

$conn = mysqli_connect('localhost','root','','hospital') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $specialty = mysqli_real_escape_string($conn, $_POST['specialty']);
   $addr = mysqli_real_escape_string($conn, $_POST['addr']);
   $phone1 = $_POST['phone1'];
   $phone2 = $_POST['phone2'];

   $insert = mysqli_query($conn, "INSERT INTO `Doctor`(name, specialty, addr, phone1, phone2)  VALUES('$name','$specialty','$addr','$phone1','$phone2')") or die('query failed');

   if($insert){
      $message[] = 'registeration  made successfully!';
   }else{
      $message[] = 'registeration failed';
   }

}
?>

<?php

$conn = mysqli_connect('localhost','root','','hospital') or die('connection failed');

if(isset($_POST['submit1'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $type = mysqli_real_escape_string($conn, $_POST['type']);
   $addr = mysqli_real_escape_string($conn, $_POST['addr']);
   $age = $_POST['age'];
   $phone1 = $_POST['phone1'];
   $phone2 = $_POST['phone2'];

   $insert = mysqli_query($conn, "INSERT INTO `Staff`(name, type, addr, age, phone1, phone2)  VALUES('$name','$type','$addr', '$age','$phone1','$phone2')") or die('query failed');

   if($insert){
      $message[] = 'registeration  made successfully!';
   }else{
      $message[] = 'registeration failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by win coder</title>

    <style>
:root{
    --green:#bc8f8f;
    --black:#444;
    --light-color:#111;
    --box-shadow:.5rem .5rem 0 rgba(22, 160, 133, .2);
    --text-shadow:.4rem .4rem 0 rgba(0, 0, 0, .2);
    --border:.2rem solid var(--green);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-transform: capitalize;
    transition: all .2s ease-out;
    text-decoration: none;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}

section:nth-child(even){
    background: #f5f5f5;
}

.heading{
    text-align: center;
    padding-bottom: 2rem;
    text-shadow: var(--text-shadow);
    text-transform: uppercase;
    color:var(--black);
    font-size: 5rem;
    letter-spacing: .4rem;
}

.heading span{
    text-transform: uppercase;
    color:var(--green);
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    padding: .5rem;
    padding-left: 1rem;
    border:var(--border);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    color:var(--green);
    cursor: pointer;
    font-size: 1.7rem;
    background: #fff;
}

.btn span{
    padding:.7rem 1rem;
    border-radius: .5rem;
    background: var(--green);
    color:#fff;
    margin-left: .5rem;
}

.btn:hover{
    background: var(--green);
    color:#fff;
}

.btn:hover span{
    color: var(--green);
    background:#fff;
    margin-left: 1rem;
}

.header{
    padding:2rem 9%;
    position: fixed;
    top:0; left: 0; right: 0;
    z-index: 1000;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #bc8f8f;
}

.header .logo{
    font-size: 2.5rem;
    color: var(--black);
}

.header .logo i{
    color: #c0392b;
}

.header .navbar a{
    font-size: 1.7rem;
    color: var(--light-color);
    margin-left: 2rem;
}

.header .navbar a:hover{
    color:red;
}

#menu-btn{
    font-size: 2.5rem;
    border-radius: .5rem;
    background: var(--green);
    color:#fff;
    padding: 1rem 1.5rem;
    cursor: pointer;
    display: none;
}

.home{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-top: 10rem;
}

.home .image{
    flex:1 1 45rem;
}

.home .image img{
    width: 100%;
}

.home .content{
    flex:1 1 45rem;
}

.home .content h3{
    font-size: 4.5rem;
    color:var(--black);
    line-height: 1.8;
    text-shadow: var(--text-shadow);
}

.home .content p{
    font-size: 1.7rem;
    color:var(--light-color);
    line-height: 1.8;
    padding: 1rem 0;
}


.Doctors .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:2rem;
}
 
.Doctors .row .image{
    flex:1 1 45rem;
}

.Doctors .row .image img{
    width: 100%;
}

.Doctors .row form{
    flex:1 1 45rem;
    background: #fff;
    border:var(--border);
    box-shadow: var(--box-shadow);
    text-align: center;
    padding: 2rem;
    border-radius: .5rem;
}
.Doctors .row form .message{
    margin-bottom: 2rem;
    border-radius: .5rem;
    padding: 1.5rem 1rem;
    font-size: 1.7rem;
    text-align: center;

}
.Doctors .row form h3{
    color:var(--black);
    padding-bottom: 1rem;
    font-size: 3rem;
}

.Doctors .row form .box{
    width: 100%;
    margin:.7rem 0;
    border-radius: .5rem;
    border:var(--border);
    font-size: 1.6rem;
    color: var(--black);
    text-transform: none;
    padding: 1rem;
}

.Doctors .row form .btn{
    padding:1rem 4rem;
}



.staff .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:2rem;
}
 
.staff .row .image{
    flex:1 1 45rem;
}

.staff .row .image img{
    width: 100%;
}

.staff .row form{
    flex:1 1 45rem;
    background: #fff;
    border:var(--border);
    box-shadow: var(--box-shadow);
    text-align: center;
    padding: 2rem;
    border-radius: .5rem;
}
.staff .row form .message{
    margin-bottom: 2rem;
    border-radius: .5rem;
    padding: 1.5rem 1rem;
    font-size: 1.7rem;
    text-align: center;

}
.staff .row form h3{
    color:var(--black);
    padding-bottom: 1rem;
    font-size: 3rem;
}

.staff .row form .box{
    width: 100%;
    margin:.7rem 0;
    border-radius: .5rem;
    border:var(--border);
    font-size: 1.6rem;
    color: var(--black);
    text-transform: none;
    padding: 1rem;
}

.staff .row form .btn{
    padding:1rem 4rem;
}

</style>
</head>
<body>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Hospital</strong> </a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="index.php">Medical trade</a>
        <a href="second.php">registeration</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>


</section>

<!-- home section ends -->

<!-- icons section starts  -->

<!-- icons section ends -->

<!-- appointmenting section starts   -->

<section class="Doctors" id="Doctors">

    <h1 class="heading"> <span>Doctors</span> </h1>    

    <div class="row">

       
            <img src="image/hospital.png" alt="">
        

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $msg) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="text"name="specialty" placeholder="your specialty" class="box">
            <input type="text"name="addr" placeholder="your address" class="box">
            <input type="number"name="phone1" placeholder="your first number" class="box">
            <input type="number"name="phone2" placeholder="your second number" class="box">
            <input type="submit" name="submit" value="save" class="btn">
        </form>

    </div>

</section>

<section class="staff" id="staff">

    <h1 class="heading"> <span>staff</span> </h1>    

    <div class="row">

       
            <img src="image/hospital.png" alt="">
        

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $msg) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="text"name="type" placeholder="Nurse or Ward boy" class="box">
            <input type="text"name="addr" placeholder="your address" class="box">
            <input type="number"name="age" placeholder="your age" class="box">
            <input type="number"name="phone1" placeholder="your first number" class="box">
            <input type="number"name="phone2" placeholder="your second number" class="box">
            <input type="submit" name="submit1" value="save" class="btn">
        </form>

    </div>

</section>
<!-- appointmenting section ends -->



</body>
</html>
