<?php


//if (isset($_POST['firstname'])) {
    //$firstName = $_POST['firstname'];
    // Use the $firstName variable in further processing
//} else {
    // The $_POST['firstname'] variable is not set or is null
    // Handle the situation accordingly, display an error message or take appropriate action
//}









 
 if ((isset($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['username']) || isset($_POST['password']) ||isset ($_POST['gender']) || isset($_POST['address'])|| isset($_POST['city']) || isset($_POST['state']) || isset($_POST['pincode']) || isset($_POST['checkmeout']))){
 
 
    $firstname=$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $username=$_POST['username'];
     $email = $_POST['email'];
     $password=$_POST['password'];
     $gender = $_POST['gender'];
     $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode=$_POST['pincode'];
    $checkmeout=$_POST['checkmeout'];

 

 }
 

    if(!empty($firstname) || !empty($lastname) || !empty($username)|| !empty($email)||!empty($password)||!empty($gender )||!empty( $address)||!empty( $city )||!empty($state )||!empty($pincode )||!empty($checkmeout )){

            $host="localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "hospital_reccomendation";

         $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);
        if(mysqli_connect_error()){
                die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $SELECT = "SELECT username FROM signup Where username = ? Limit 1";
            $INSERT = "INSERT Into signup(firstname,lastname ,username,email,password,gender,address,city,state,pincode,checkmeout) values(?,?,?,?,?,?,?,?,?,?,?)";


            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s",$username);
             $stmt->execute();
            $stmt->bind_result($username);
             $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum == 0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
             $stmt->bind_param("sssssssssis", $firstname,$lastname,$username,$email,$password,$gender,$address,$city,$state,$pincode,$checkmeout);
             $stmt->execute();
            echo "New record inserted successfully";
            }
             else{
                 echo "Someone already register using this email";
            }

             $stmt->close();
    

        }



    }
    else{
         echo "All field are required";
        die();
        }









?>