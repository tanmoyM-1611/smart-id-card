<?php
   include("../functionAdmin.php")  ;
   session_start();
   $id=$_SESSION['userID'];
   if($id==null){
    header("location:login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../Admin//style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/5a1010e0a8.js" crossorigin="anonymous"></script>

    <style>
    @media (min-width: 450px) {
        h1.heading {
            font-size: 3.55em;

        }

        .teacher {
            margin-left: 40px;
        }

        .student {
            margin-left: 30px;
        }
    }

    @media (min-width: 760px) {
        h1.heading {
            font-size: 3.05em;
        }

        .teacher {
            margin-left: 310px;
        }

        .student {
            margin-left: 310px;
        }
    }

    @media (min-width: 900px) {
        h1.heading {
            font-size: 3.25em;
            margin: 0 0 0.3em;
        }

        .teacher {
            margin-left: 610px;
        }

        .student {
            margin-left: 320px;
        }
    }
    </style>
</head>

<body>
    <div class="sidenav">
        <a href="template.php">
            <h3>Home</h3>
        </a>
       
        <a href="about.php">
            <h3>About</h3>
        </a>
       
  <a href="contact.php">
                <h3>Contact</h3>
            </a>
        <div style="padding-top:250px" class="ms-4">
            <a href="logout.php"><button type="button" class="btn btn-success">Log out</button></a>
        </div>
    </div>
    </div>
    <div class="main">

        <nav style="background-color: #e3f2fd" class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CSE,Comilla University</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- <div class="d-flex">
   <a href="logout.php"><button type="button" class="btn btn-success">Log out</button></a>
     </div> -->
                </div>
            </div>
        </nav>
        <!-- card -->


        <div style="text-align:center ">
            <img src="../User//assets//images//cselogo.jpg" class="fostrap-logo mt-2 ms-4"/>
            <h1 class="heading">
                Contact Us
            </h1>
        </div>


       
       
        <div class="row row-cols-1 row-cols-md-3 g-4 student mt-1">

            <div class=" col-md-3 col-lg-6 mb-4 ">
                <div class="card " style="width: 300px">
                    <img style="height:340px" src="../User//assets//images//tanmoy.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 style="" class="card-title">Tanmoy Mondal</h5>
                        <p class="card-text">Student,Dept. Of Cse </p>
                        <b  style="color:blue" class="card-text font-weight-bold">Email:mondal.tanmoy50@gmail.com </b>
                        <b style="color:blue" class="card-text font-weight-bold">Phone:01777295553 </b>
                    </div>
                </div>
            </div>
            <div class=" col-md-3 col-lg-6 mb-4">
                <div class="card " style="width: 300px;">
                    <img style="height:340px" src="../User//assets//images//rana.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 style="" class="card-title">Sohel Rana Hridoy</h5>
                        <p class="card-text">Student,Dept. Of Cse </p>
                        <b style="color:blue" class="card-text ">Email:mondal.tanmoy50@gmail.com </b>
                        <b style="color:blue" class="card-text ">Phone:01777295553 </b>
                    </div>
                </div>
            </div>


        </div>


    </div>

    </div>
</body>

</html>