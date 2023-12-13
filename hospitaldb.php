<?php


//if (isset($_POST['firstname'])) {
    //$firstName = $_POST['firstname'];
    // Use the $firstName variable in further processing
//} else {
    // The $_POST['firstname'] variable is not set or is null
    // Handle the situation accordingly, display an error message or take appropriate action
//}









 
 if ((isset($_POST['hospitalname']) || isset($_POST['location']) || isset($_POST['city']) || isset($_POST['district']) ||isset ($_POST['state']) || isset($_POST['address'])|| isset($_POST['stdcode']) || isset($_POST['telephone']) || isset($_POST['status']) || isset($_POST['ppnhospital'])|| isset($_POST['ppncity']) || isset($_POST['disease']) || isset($_POST['checkmeout']))){
 
 
    $hospitalname=$_POST['hospitalname'];
    $location =$_POST['location'];
    $city=$_POST['city'];
     $district = $_POST['district'];
     $state=$_POST['state'];
     $address = $_POST['address'];
     $stdcode = $_POST['stdcode'];
    $telephone = $_POST['telephone'];
    $status = $_POST['status'];
    $ppnhospital=$_POST['ppnhospital'];
    $ppncity=$_POST['ppncity'];
    $disease=$_POST['disease'];
    $checkmeout = $_POST['checkmeout'];

 

 }
 

    if(!empty($hospitalname) || !empty($location) || !empty($city)|| !empty($district)||!empty($state)||!empty($address )||!empty( $stdcode)||!empty( $telephone)||!empty($status )||!empty($ppnhospital)||!empty($ppncity )|| !empty($disease) || !empty($checkmeout)){

            $host="localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "hospital_reccomendation";

         $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);
        if(mysqli_connect_error()){
                die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $SELECT = "SELECT location FROM hospitaldetails Where location = ? Limit 1";
            $INSERT = "INSERT Into hospitaldetails(hospitalname,location ,city,district,state,address,stdcode,telephone,status,ppnhospital,ppncity,disease,checkmeout) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";


            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s",$location);
             $stmt->execute();
            $stmt->bind_result($location);
             $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum == 0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
             $stmt->bind_param("sssssssisssss", $hospitalname,$location,$city,$district,$state,$address,$stdcod,$telephone,$status,$ppnhospital,$ppncity,$disease,$checkmeout);
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