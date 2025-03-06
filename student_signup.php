<?php
require "./includes/common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="img/favicon.ico" rel="icon">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- External Css -->
    <link rel="stylesheet" href="style.css">

     <!-- title -->
    <title>DRIVE EASE</title>



<style>
    .error-message {
        color: red;
        margin-top: 5px; /* Add a small margin to separate error messages */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var form = document.querySelector('form');

        form.addEventListener('submit', function (event) {
            var nameInput = document.getElementById('name');
            var emailInput = document.getElementById('email');
            var mobileInput = document.getElementById('phone');
            var usernameInput = document.getElementById('uname');
            var addressInput = document.getElementById('address');
            var checkboxes = document.querySelectorAll('input[name="vehicles[]"]');
            var checkboxesChecked = false;
            var errorContainer = document.getElementById('error-container');
            clearErrors(); // Clear previous error messages

            // Validate Name
var fullName = nameInput.value.trim();
if (fullName === '' || fullName.split(' ').length < 2) {
    displayError('Name should contain both first name and last name.', nameInput);
    event.preventDefault(); // Prevent form submission
}


            // Validate Email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                displayError('Enter a valid email address.', emailInput);
                event.preventDefault(); // Prevent form submission
            }

            // Validate Mobile Number
            if (mobileInput.value.length !== 10 || isNaN(mobileInput.value)) {
                displayError('Mobile number should be a 10-digit number.', mobileInput);
                event.preventDefault(); // Prevent form submission
            }

            // Validate Username
            if (usernameInput.value.trim() === '') {
                displayError('Username cannot be empty.', usernameInput);
                event.preventDefault(); // Prevent form submission
            }

            // Validate Address
            if (addressInput.value.trim() === '') {
                displayError('Address cannot be empty.', addressInput);
                event.preventDefault(); // Prevent form submission
            }

            // Validate at least one checkbox is selected
            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    checkboxesChecked = true;
                }
            });

            if (!checkboxesChecked) {
                displayCheckboxError('Please select at least one checkbox.', checkboxes[0]); // Display error below the first checkbox
                event.preventDefault(); // Prevent form submission
            }
        });

        function displayError(errorMessage, targetElement) {
            var errorNode = document.createElement('div');
            errorNode.className = 'error-message';
            errorNode.innerHTML = errorMessage;
            targetElement.parentNode.appendChild(errorNode);
        }

        function displayCheckboxError(errorMessage, targetElement) {
            var errorNode = document.createElement('div');
            errorNode.className = 'error-message';
            errorNode.innerHTML = errorMessage;
            targetElement.parentNode.parentNode.appendChild(errorNode);
        }

        function clearErrors() {
            var errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function (errorMessage) {
                errorMessage.parentNode.removeChild(errorMessage);
            });
        }
    });
</script>




</head>
<body>
<header>
      <?php
			require './includes/header.php';
		  ?>
    </header>
          <div class="banner">
            <h2 class="text-center t1">Road To Motor Training Excellence</h2>
          </div>
     <main>
      <h2 class="text-center py-4">Fill The Form For Registration</h2>
      <form method="post" action="student_signup_script.php">
        <div class="container">
          <div class="row">
            <div class="col">
              <label for="name" class="form-label">Full Name</label>
              <input type="name" class="form-control" id="name" name="name" placeholder="FirstName  Middlename  LastName">
            </div>
            <div class="col-sm">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="xyz@gmail.com" required>
            </div>
          </div>
          <div class="row py-4">
            <div class="col">
              <label for="phone" class="form-label">Mobile No.</label>
              <input type="phone" class="form-control" id="phone" name="phone" placeholder="10 Digit Number">
            </div>
          <div class="col-sm">
              <label for="uname" class="form-label">UserName</label>
              <input type="name" class="form-control" id="uname" name="username" placeholder="" required>
            </div>
          </div> 
          <div class="row">
            <div class="col">
              <label for="address" class="form-label">Address</label>
              <textarea type="address" class="form-control form2" id="address" name="address" placeholder="Floor No., Building Name, Area Name, City - Pincode" style="height: 100px"></textarea>
            </div>
            <div class="col-sm">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Set Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Want To Learn
            </p>
          </div>
          <div class="row">
            <div class="col" >
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="vehicles[]" value="MC 50cc" id="inlineCheckbox1">
                <label class="form-check-label" for="inlineCheckbox1">MC 50cc</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="vehicles[]" value="LMV-NT" id="inlineCheckbox2">
                <label class="form-check-label" for="inlineCheckbox2">LMV-NT</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="vehicles[]" value="FVG" id="inlineCheckbox3">
                <label class="form-check-label" for="inlineCheckbox3">FVG</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="vehicles[]" value="MC EX50CC" id="inlineCheckbox3">
                <label class="form-check-label" for="inlineCheckbox3">MC EX50CC</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="vehicles[]" value="MCWG" id="inlineCheckbox3">
                <label class="form-check-label" for="inlineCheckbox3">MCWG</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="vehicles[]" value="HGMV" id="inlineCheckbox3" >
                <label class="form-check-label" for="inlineCheckbox3">HGMV</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="vehicles[]" value="HPMV" id="inlineCheckbox3">
                <label class="form-check-label" for="inlineCheckbox3">HPMV</label>
              </div>
            </div>
            
            <div class="row py-4">
              <div class="col text-center">
                <button type="submit" class="btn btn-primary" >Submit</button>
              </div>
            </div>
          
          <h4>Refrences</h4>
      <p class="text-muted pb-5">
      MC 50cc - 

      Vehicles that have an engine capacity of 50cc or less than that.<br>

      LMV-NT - 

      Vehicles like jeep and motor cars fall under the Light Motor Vehicle Category but these are of non-transport class.<br>

      FVG - 

      Vehicles without gears fall under this category like scooters and mopeds.<br>

      MC EX50CC - 
      
      Vehicles like motorcycles with gears whose engine capacity is of 50CC or more.<br>

      MCWG - 

      Vehicles like motorcycles both with and without gear fall under this category.<br>

      HGMV - 

      Vehicles like trailers, larger trucks, and other similar vehicles used for transport of goods fall under the category of HGMV.<br>

      HPMV -  
      
      Vehicles that runs for commercial purpose and has an All India Permit to carry passengers falls under the HPMV category.<br>
      </p>
        </div>
        
      </form>
      
           
    </main>
    <footer>
        <?php
        require './includes/footer.php';
        ?>
    </footer>
</body>
</html>