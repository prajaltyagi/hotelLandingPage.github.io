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
      <div class="container my-3">
        
       

        <div class="card shadow-sm">
            <img src="images/book.jpeg" alt=""class="bd-placeholder-img card-img-top">
            <div class="card-body">
              <form action="#" method="POST">
                <input type="text" name="name" placeholder="Full Name" style="width: 20%; border: 1px solid rgb(126, 123, 123);border-radius: 5px; outline: none;"class="p-2 my-2" id="name">
                <input type="email" name="email" placeholder="Enter Email" style="width: 20%; border: 1px solid rgb(126, 123, 123);border-radius: 5px; outline: none;"class="p-2 my-2" id="email">
                <input type="date" name="date" placeholder="for which day" style="width: 20%; border: 1px solid rgb(126, 123, 123);border-radius: 5px; outline: none;"class="p-2 my-2" id="msg" >
                <input type="time" name="time" placeholder="For how many hours" style="width: 20%; border: 1px solid rgb(126, 123, 123);border-radius: 5px; outline: none;"class="p-2 my-2" id="email">
                <input type="submit" name="book" value="book" style="width: 10%; border: none;background-color: rgb(8, 126, 100); color: whitesmoke;border-radius: 5px;"class="p-2 my-1" ><br>
              </form>
          </div>
        </div>
        <footer class="py-3 my-2">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="bookfetch.php" class="nav-link px-2 text-body-secondary">View Booking</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

<?php
error_reporting(0);
if($_POST['book']){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $date=$_POST['date'];
  $time=$_POST['time'];

$query="INSERT INTO crownybook VALUES ('$name','$email','$date','$time')";

$data=mysqli_query($conn,$query);

  if($data){
    // echo "insertion done";
    header("location:book.php");
  }

  else{

    echo "insertion failed";
  }

}

?>

