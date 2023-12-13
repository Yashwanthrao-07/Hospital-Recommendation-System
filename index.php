<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css"> 
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Hospital Reccomendation System</title>
    <script>
        function redirectToPage() {
            window.location.href = "searchhospitals.php"; 
        }
    </script>
  </head>
  <body>
     <nav class="navbar navbar-expand-md bg">
        <a href="" class="navbar-brand fs-3 ms-3 text-white">Hospital Reccomendation System</a>
     
     <button class="navbar-toggler me-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
        <i class='bx bx-menu bx-md'></i>
     </button>  
     <div class="collapse navbar-collapse ul-bg" id="btn">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="#" class="nav-link mx-3 text-white fs-5">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link mx-3 text-white fs-5">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link mx-3 text-white fs-5">Services</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link mx-3 text-white fs-5">News</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link mx-3 text-white fs-5">Contact</a>
            </li>

        </ul>

     </div> 
     </nav>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!----Image--->
                    
                    <div class="text">
                       <p>Explore your great Hospital assist</p> 
                    </div>
                </div> 
                    <div class="col-md-6 right">
                        <div class="input-box" action="logindb.php" method="POST">
                            <h1>Create account</h1>
                            <div class="check">
                                <select name="admin" required>
                                     <option selected hidden value="">User Role</option>
                                    <option value="admin">Administrator</option>
                                 <option value="user/patient">User/Patient</option>
                        
                                </select>
                            </div>
                        </div> 
                            <div class="inputsdiv">
                                <div class="input-field">
                                    <input type="text" class="input" id="username" required autocomplete="off">
                                    <label for="username">username</label>
                                <div class="input-field">
                                    <input type="password" class="input" id="password" required >
                                    <label for="password">Password</label>
                                
                                </div>
                                <div class="input-field">
                                    <input type="submit" class="submit" value="Login" onclick="redirectToPage()">
                                </div>
                                <div class="signin">
                                    <span>If you don't have an account? <a href="signupform.php">Sign Up here</a></span>
                                </div>
                            </div>
                         </div>
                    </div>
                
            </div>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>