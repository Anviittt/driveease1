<?php
    require './includes/common.php';

    // Check if logged in
    if (!isset($_SESSION["username"])) {
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
    <title>DRIVE EASE</title>

    <script>
    function updateAmount() {
        let vehicleDropdown = document.getElementById("vehicle1");
        let selectedOption = vehicleDropdown.options[vehicleDropdown.selectedIndex];
        let price = selectedOption.getAttribute("data-price");
        document.getElementById("amount").innerText = price;
    }
    </script>

</head>
<body>
    <header>
        <?php
            require './includes/header.php';
            $stud_id = $_SESSION["id"];
            $query = "SELECT s.id, s.name FROM student s WHERE s.id = '$stud_id'";
            $query_result = "SELECT si.stud_id, si.timing, si.vehicle_type FROM student_info si WHERE si.stud_id = '$stud_id'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $result_1 = mysqli_query($conn, $query_result) or die(mysqli_error($conn));
        ?>
    </header>
    
    <main>
        <div class="container my-5">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <h3 class="text-center py-3">Welcome <?php echo $row["name"] ?> </h3>
                <h5 class="text-center py-3">Please do not change the timing and vehicle after submitting unless necessary.</h5>
            <?php } ?>
            
            <form id="studentForm">
                <h3 class="text-center py-5">Select Timing and Vehicle Type</h3>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <label for="timing">Timing</label>
                        <select class="form-control mb-5" id="timing" name="timing">
                            <option value="11-12:30 pm">11-12:30 pm</option>
                            <option value="3-4:30 pm">3-4:30 pm</option>
                            <option value="7-8:30 pm">7-8:30 pm</option>
                        </select>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <p class="text-center">Select the vehicle type:</p>
                        <label for="vehicle1">Vehicle</label>
                        <select class="form-control" id="vehicle1" name="vehicletype" onchange="updateAmount()">
                            <option value="2 tyre vehicle" data-price="500">2 Tyre Vehicle - ₹500</option>
                            <option value="Swift" data-price="1500">Swift - ₹1500</option>
                            <option value="Wagnor" data-price="1800">Wagnor - ₹1800</option>
                            <option value="Ertiga" data-price="2000">Ertiga - ₹2000</option>
                        </select>
                        <p class="text-center mt-3">Amount to Pay: ₹<span id="amount">500</span></p>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                
                <div class="text-center my-5">
                    <button type="button" class="btn btn-warning text-center" id="submitButton">Submit</button>
                </div>
            </form>
        </div>
    </main>
    
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>

    <script>
        document.getElementById("submitButton").addEventListener("click", function() {
            var selectedTiming = document.getElementById("timing").value;
            var vehicleDropdown = document.getElementById("vehicle1");
            var selectedVehicle = vehicleDropdown.options[vehicleDropdown.selectedIndex].text;
            var amount = vehicleDropdown.options[vehicleDropdown.selectedIndex].getAttribute("data-price");

            Swal.fire({
                title: "Confirm Selection",
                text: "You selected " + selectedTiming + " with " + selectedVehicle + ". Proceed to payment?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Proceed",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to payment.html with selected amount
                    window.location.href = "payment.html?amount=" + amount;
                }
            });
        });
    </script>

</body>
</html>
