<?php
include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hotelLandingPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .nav-item a{
          color: gray;
        }
                   .nav-item a:hover{
          color: rgb(8, 126, 100);
         border-bottom: 2px solid rgb(8, 126, 100);
         border-right: 2px solid rgb(8, 126, 100);
         border-radius: 
         10px;
        }
       
  #name:hover,#email:hover,#msg:hover{
    box-shadow: 0 0 2px 2px #087e64;
  }
 
      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 px-3 " >
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-family:fantasy;color: rgb(197, 194, 194); font-size: 30px;">Cro<span style="color: rgb(8, 126, 100);">Wny</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
            <form class="d-flex" role="search">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                  <li class="nav-item ">
                    <a class="nav-link " aria-current="page" href="index.html" >Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="menu.html">Menu</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " aria-current="page" href="book.php">Book</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " aria-current="page" href="contact.php">Contact</a>
                  </li>
                </ul>
            </form>
          </div>
        </div>
      </nav>
<div class="container">
      <div class="px-4 pt-5 my-1 text-center border-bottom">
        <h1 class="display-6  ">Contact <span style="color: rgb(6, 107, 85);">Us</span></h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
            </div>
          </div>
     
          <div class="container my-3">
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Full Name" style="width: 100%; border: 1px solid rgb(126, 123, 123);border-radius: 5px; outline: none;"class="p-2 my-2" id="name"><br>
                <input type="email" name="email" placeholder="Enter Email" style="width: 100%; border: 1px solid rgb(126, 123, 123);border-radius: 5px; outline: none;"class="p-2 my-2" id="email"><br>
                <input type="text" name="msg" placeholder="Type Your Message" style="width: 100%; border: 1px solid rgb(126, 123, 123);border-radius: 5px; outline: none;"class="p-2 my-2" id="msg" ><br>
                <input type="submit" name="submit"  style="width: 100%; border: none;background-color: rgb(8, 126, 100); color: whitesmoke;border-radius: 5px;"class="p-2 my-1" >
              </form>
          </div>

         

          <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="contactfetch.php" class="nav-link px-2 text-body-secondary">View feedback</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
          </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

<?php
error_reporting(0);
if($_POST['submit']){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $msg=$_POST['msg'];
  

$query="INSERT INTO crownycontact VALUES ('$name','$email','$msg')";

$data=mysqli_query($conn,$query);

  if($data){
    // echo "insertion done";
    header("location:contact.php");
  }

  else{

    echo "insertion failed";
  }

}

?>