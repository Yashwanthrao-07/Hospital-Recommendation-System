<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Hospital Reccomendation System</title>
    <link rel="stylesheet" href="style1.css">
    <script>
      function redirectToPage() {
       window.location.href = "#"; // Replace with the desired URL
      }
    </script>
    
  </head>
  <body>

  <div class="container">
  
          <label for="inputState" class="form-label">Search by the location</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>Hyderabad</option>
          </select>
        
          <label for="inputState" class="form-label">Search by the disease</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>Fever</option>
            <option>Cancer</option>
            <option>Fracture</option>
            <option>ENT</option>
            <option>EYE</option>
            <option>Cardiac arrest</option>
          </select>
        <button class="button" onclick="redirectToPage()" >Submit</button>
        
    </div>
    <div class="table">
    <table>
            <tr>
                <th>Id</th>
                <th>Hospital_name</th>
                <th>Location</th>
                <th>City</th>
                <th>District</th>
                <th>State</th>
                <th>Address</th>
                <th>STD_Code</th>
                <th>Tel_no</th>
                <th>Status</th>
                <th>PPN_Hospital</th>
                <th>PPN_City</th>
                <th>Disease</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Appolo Hospitals</td>
                <td>Film Nagar</td>
                <td>Hyderabad</td>
                <td>Hyderabad</td>
                <td>Telangana</td>
                <td>1-132 road no: 3</td>
                <td>08413</td>
                <td>040-23607777</td>
                <td>Open</td>
                <td>8900080328488</td>
                <td>Hyderabad</td>
                <td>All</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Care Hospital </td>
                <td>Road No. 1, Banjara Hills</td>
                <td>Hyderabad</td>
                <td>Hyderabad</td>
                <td>Telangana</td>
                <td>Road No. 1, Banjara Hills</td>
                <td>08413</td>
                <td>040-68106589</td>
                <td>Open</td>
                <td>8900080160842</td>
                <td>Hyderabad</td>
                <td>All</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Krishna Institute of Medical Sciences(KIMS) </td>
                <td>Secunderabad</td>
                <td>Hyderabad</td>
                <td>Hyderabad</td>
                <td>Telangana</td>
                <td>No. 1-8-31/1, Minister Road, Secunderabad, Telangana, India</td>
                <td>08413</td>
                <td>040-44885000</td>
                <td>Open</td>
                <td>8900080160842</td>
                <td>Hyderabad</td>
                <td>All</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Basava Tarakam Cancer Hospitals </td>
                <td>Banjara Hills</td>
                <td>Hyderabad</td>
                <td>Hyderabad</td>
                <td>Telangana</td>
                <td>No. 1-8-31/1,Banjara hills, Telangana, India</td>
                <td>08413</td>
                <td>040-44885000</td>
                <td>Open</td>
                <td>8900080348912</td>
                <td>Hyderabad</td>
                <td>Cancer</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Kamineni Hospital </td>
                <td>L.B Nagar</td>
                <td>Hyderabad</td>
                <td>Hyderabad</td>
                <td>Telangana</td>
                <td>L.B. Nagar, Hyderabad - 500068</td>
                <td>08413</td>
                <td>040-44885000</td>
                <td>Open</td>
                <td>8900080348912</td>
                <td>Hyderabad</td>
                <td>All</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Yashoda Super Speciality Hospital  </td>
                <td>Somajiguda</td>
                <td>Hyderabad</td>
                <td>Hyderabad</td>
                <td>Telangana</td>
                <td>Raj Bhavan Road, Somajiguda, Hyderabad</td>
                <td>08413</td>
                <td>040-44885000</td>
                <td>Open</td>
                <td>8900080348912</td>
                <td>Hyderabad</td>
                <td>All</td>
            </tr>
        </table>
    </div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>