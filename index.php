<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- fotawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    
    <!-- google font -->

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/custom.css">
    
    <title>OSMS </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class= "navbar pl-5 navbar-dark bg-danger fixed-top navbar-expand-sm">

    <a href="index.php" class="navbar-brand">OSMS</a>
    <span class="navbar-text">Customer's Hoappiness Is Our Aim</span>
    <button type="button" class="navbar-toggler" data-toggler="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="#myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
    
   <li class="navbar-item"><a href="index.php" class="nav-link">Home</a></li>
   <li class="navbar-item"><a href="#Service" class="nav-link">Service</a></li>
   <li class="navbar-item"><a href="#Registration" class="nav-link">Registration</a></li>
   <li class="navbar-item"><a href="#Login" class="nav-link">Login</a></li>
   <li class="navbar-item"><a href="#About" class="nav-link">About</a></li>
   <li class="navbar-item"><a href="#Contact" class="nav-link">Contact</a></li>
</ul>
    </div>


    </nav>
    <header class="jumbotron back-image" style="background-image:url(images/Banner1.jpeg);">
    <div class="mainHeading">
    <h1 class="text-Uppercase text-danger margin-top font-weight-bold"> Welcome to OSMS</h1>
    <p class="font-italic">Customer's Happiness Is Our Aim</p>
    
    </div>
</header>
<div class="container">


<div class="jumbotron" id="About">

<h1 class="text-center">OSMS Services</h1>
<p>
        OSMS Services is India’s leading chain of multi-brand Electronics and Electrical service
        workshops offering wide array of services. We focus on enhancing your uses experience by offering world-class
        Electronic Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
        services to
        keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped Electronic Appliances service centres and fully trained mechanics, we
        provide quality
        services with excellent packages that are designed to offer you great savings.

        Our state-of-art workshops are conveniently located in many cities across the country. Now you
        can book
        your service online by doing Registration.
 </p>
</div>
</div>

<div class="container text-center border-bottom" id="Service">

    <h2>Our Services</h2>
    <div class="row mt-4">
<div class="col-sm-4">
<a href="#"><i class="fa fa-desktop" style="font-size:75px;color:blue;"></i></a>
    <h2 class="mt-4">Electronic Appiances</h2>

</div>
<div class="col-sm-4">
    <a href="#"><i class="fa fa-sliders-h" style="font-size:75px;color:green;"></i></a>
    <h2 class="mt-4">Preventive Maintenance</h2>

</div>
<div class="col-sm-4">
    <a href="#"><i class="fa fa-cogs" style="font-size:75px;color:blue;"></i></i></a>
    <h2 class="mt-4">Fault Repair</h2>
</div>
 </div>
</div>

<?php include 'registration.php';?>


<div class="jumbotron bg-danger">
    <div class="container">
        <h2 class="text-center text-white">Happy Customers</h2>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;" alt="avt1">

                        <h4 class="card-title">Vijay Singh</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum , adducimus voluptas nesciunt debitis numquam.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;" alt="avt2">

                        <h4 class="card-title">Manisha Singh</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum , adducimus voluptas nesciunt debitis numquam.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;" alt="avt3">

                        <h4 class="card-title">Shriyank Singh</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum , adducimus voluptas nesciunt debitis numquam.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;" alt="avt4">

                        <h4 class="card-title">Prachi Singh</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum , adducimus voluptas nesciunt debitis numquam.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include 'contact.php';?>


<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
<div class="row py-3">
<div class="col-md-6">
<span class="pr-2">Follow Us :</span>

<a href="#" target="_blank" class="pr-2 fi-color"><i class="fa fa-facebook-f"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fa fa-youtube"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fa fa-google-plus-g"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fa fa-rss"></i></a>
</div>
<div class="col-md-6 text-right">
    <small>Designed by Er. Arpit Thakur &copy; 2020</small>
    <small class="ml-2"><a href="#">Admin Login</a></small>
</div>
</div>
    </div>
</footer>
    
</body>
</html>