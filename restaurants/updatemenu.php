<?php
session_start();
require_once "../dbconnection.php";

// Define variables and initialize with empty values
$breakfast = $lunch = $supper = $drinks = "";
$breakfast_err = $lunch_err = $supper_err = $drinks_err = "";

// Processing form data when form is submitted

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    $input_breakfast = trim($_POST["breakfast"]);
    $input_lunch = trim($_POST["lunch"]);
    $input_supper = trim($_POST["supper"]);
    $input_drinks = trim($_POST["drink"]);
    
    $breakfast = $input_breakfast;
    $lunch = $input_lunch;
    $supper = $input_supper;
    $drinks = $input_drinks;
    
    // Prepare an update statement
    $sql = "UPDATE meal SET Breakfast=?, Lunch=?, Drink=?, Supper=? WHERE id=?";
        
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssssi", $param_breakfast, $param_lunch, $param_drink, $param_supper, $param_id);
        
        // Set parameters
        $param_breakfast = $breakfast;
        $param_lunch = $lunch;
        $param_drink = $drinks;
        $param_supper = $supper;
        $param_id = $id;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records updated successfully. Redirect to landing page
            header("location: menu.php");
            exit();
        } else{
            echo "Something went wrong. Please try again later.";
        }
    }
        
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else {
    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Get URL parameter
        $id =  trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM meal WHERE id = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_supper);

            // Set parameters
            $param_supper = $id;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $breakfast = $row["Breakfast"];
                    $lunch = $row["Lunch"];
                    $supper = $row["Supper"];
                    $drinks = $row["Drink"];
                } else {
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($link);
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}

if ($_SESSION['r-Name']) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Update Record</title>
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
                            <h2>Update Menu Item</h2>
                        </div>
                        <p>Please edit the input values and submit to update the menu.</p>
                        <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
        
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
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="menu.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header('location: login.php');
}
