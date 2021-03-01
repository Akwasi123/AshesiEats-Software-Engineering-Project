<?php
session_start();
// Include config file
require_once "../dbconnection.php";

// Define variables and initialize with empty values
$breakfast = $lunch = $supper = $drinks = "";
$breakfast_err = $lunch_err = $supper_err = $drinks_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate breakfast
    $input_breakfast = trim($_POST["breakfast"]);
    $breakfast = $input_breakfast;


    // Validate lunch
    $input_lunch = trim($_POST["lunch"]);
    $lunch = $input_lunch;
    

    // Validate supper
    $input_supper = trim($_POST["supper"]);
    $supper = $input_supper;
    

    // Validate drinks
    $input_drinks = trim($_POST["drink"]);
    $drinks = $input_drinks;


    // Prepare an insert statement
    $sql = "INSERT INTO meal (Breakfast, Lunch, Drink, Supper) VALUES (?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssss", $param_breakfast, $param_lunch, $param_supper, $param_drinks);

        // Set parameters
        $param_breakfast = $breakfast;
        $param_lunch = $lunch;
        $param_supper = $supper;
        $param_drinks = $drinks;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            header("location: menu.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
}
if($_SESSION['r-Name']){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Akonnor - Add Menu Item</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add Menu Item</h2>
                    </div>
                    <p>Please fill this form and submit to add a meal item to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="form-group <?php echo (!empty($breakfast_err)) ? 'has-error' : ''; ?>">
                            <label>Breakfast</label>
                            <input type="text" name="breakfast" class="form-control" value="<?php echo $breakfast; ?>">
                            <span class="help-block"><?php echo $breakfast_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($lunch_err)) ? 'has-error' : ''; ?>">
                            <label>Lunch</label>
                            <input type="text" name="lunch" class="form-control" value="<?php echo $lunch; ?>">
                            <span class="help-block"><?php echo $lunch_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($supper_err)) ? 'has-error' : ''; ?>">
                            <label>Supper</label>
                            <input type="text" name="supper" class="form-control" value="<?php echo $supper; ?>">
                            <span class="help-block"><?php echo $supper_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($drinks_err)) ? 'has-error' : ''; ?>">
                            <label>Drink</label>
                            <input type="text" name="drink" class="form-control" value="<?php echo $drinks; ?>">
                            <span class="help-block"><?php echo $drinks_err; ?></span>
                        </div>
                        <input type="submit"  class="btn btn-primary" value="Submit">
                        <a href="menu.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
}
else {
    header('location: login.php');
}