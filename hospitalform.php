<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Hospital Form</title>
  </head>
  <body>
   <div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display-6">Welcome to Hospital Registration page</h1>
       </header>
   </div>
   <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3 p-3"action="hospitaldb.php" method="POST">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Hospital Name</label>
            <input type="text" class="form-control" id="hospitalname" name="hospitalname" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city"  required>
          </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">District</label>
          <input type="text" class="form-control" id="district" name="district">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">State</label>
          <input type="text" class="form-control" id="state" name="state">
        </div>
        <div class="col-12">
          <label for="gender" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor" >
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">STD_Code </label>
          <input type="text" class="form-control" id="stdcode" name="stdcode">
        </div>
        <div class="col-12">
          <label for="gender" class="form-label">Telephone </label>
          <input type="text" class="form-control" id="telephone" name="telephone">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Status</label>
          <select id="status" class="form-select" name="status">
            <option selected>Choose...</option>
            <option>Open</option>
            <option>Closed</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">PPN_Hospital</label>
          <input type="text" class="form-control" id="ppnhospital" name="ppnhospital">
        </div>
      

        <div class="col-md-2">
          <label for="inputpincode" class="form-label">PPN_City</label>
          <input type="text" class="form-control" id="ppncity" name="ppncity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Disease</label>
          <select id="disease" class="form-select" name="disease">
            <option selected>Choose...</option>
            <option>EYE</option>
            <option>EAR</option>
            <option>Bones</option>
            <option>Fever</option>
            <option>Cancer</option>

          </select>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkmeout" id="gridCheck" name="checkmeout">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
   </section>
  </body>
</html>