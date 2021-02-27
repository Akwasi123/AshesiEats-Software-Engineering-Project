<?php
    session_start();
    include ("Header.php");
    $_SESSION["user_id"]=1;
    $_SESSION["username"]="Akornor";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/39aa2f0e20.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/orders.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.23/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-print-1.6.5/cr-1.5.3/fh-3.1.8/kt-2.6.1/r-2.2.7/rr-1.2.7/sb-1.0.1/sp-1.2.2/datatables.min.css"/>
 
    <title>AshesiEats - Profile</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.23/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-print-1.6.5/cr-1.5.3/fh-3.1.8/kt-2.6.1/r-2.2.7/rr-1.2.7/sb-1.0.1/sp-1.2.2/datatables.min.js"></script>

    <?php
        $id= $_SESSION["user_id"];
        $user= $_SESSION["username"];
        $header = new Header($id, $user);
        $header->show();
    ?>
    <div class="page-title">
        <h2>Profile</h2>
    </div>
    <div class="main-page">
        <div class="bio">
            <?php  
                // echo "<h3>".$_SESSION["username"]."</h3>"; 
                // require_once("../db-connection.php");
                // $id = $_SESSION['user_id'];
                // $db = new mysqli(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);
                // // Check connection
                // if ($db->connect_error) {
                //     die("Connection failed: " . $db->connect_error);
                // }else{
                //     $sql="SELECT * FROM restaurants WHERE Restaurant_ID='$id'";
                //     $result = $conn->query($sql);
                //     $row=$result->fetch_assoc();

                //     if ($count<1) {
                //         echo "<p><em>Empty bio</em></p>";
                //     }else{
                //         echo "<p class='bio-text'>".$row["bio"]."</p>";
                //     }
                // }
            ?>
            <button class="btn-primary bio-edit">Edit bio</button>
            <div class="bio-box" style="display:none;">
                <textarea class="bio-tbox" rows="3" cols="140"></textarea>
                <div>
                    <button class="btn-primary bio-save">Save</button>
                    <button class="btn-primary bio-cancel">Cancel</button>
                </div>
            </div>
        </div>
        <div class="menu-group">
            <div>
                <h5>Menu</h5>
                <a href="menu.php" class="btn-primary menu-edit">Edit menu</a>
            </div>
            <table class="menu-table table">
                <tr>
                    <th>Item name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Available quantity</th>
                </tr>
                <tbody>
                <?php  
                    // require_once("../db-connection.php");
                    // $id = $_SESSION['user_id'];
                    // $db = new mysqli(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);
                    // // Check connection
                    // if ($db->connect_error) {
                    //     die("Connection failed: " . $db->connect_error);
                    // }else{
                    //     $table_rows=array();

                    //     $sql="SELECT * FROM restaurants WHERE Restaurant_ID='$id'";
                    //     $result = $conn->query($sql);

                    //     if ($count<1) {
                    //         echo "<tr>No items in menu</tr>";
                    //     }else{
                    //         while($row=$result->fetch_assoc()){    
                    //             $table_row=array();     

                    //             $name=$row["Customer_ID"];
                    //             $description=$row["Cart_ID"];   
                    //             $price=$row["Customer_ID"];
                    //             $available_qty=$row["Cart_ID"];
                    //             array_push($table_row, $name, $description, $price,$available_qty); 
                    //             array_push($table_rows, $table_row); 
                    //          }

                    //         for($x=0; $x<count($table_rows);$x++){
                    //         echo "
                    //         <tr>
                    //             <td>".$table_rows[$x][1]."</td>
                    //             <td>".$table_rows[$x][5]."</td>
                    //             <td>".$table_rows[$x][2]."</td>
                    //             <td>".$table_rows[$x][3]."</td>
                    //         </tr>";
                    //         }
                    //     }

                    // }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php require_once('../footer.php')?>
    <script>
    $(document).ready( function () {
        // $('.menu-table').DataTable();

        $(".bio-edit").click(function(){
            $(".bio-box").toggle();
            $(this).toggle();
            $(".bio-text").toggle();
        });

        $(".bio-save").click(function(){
            $(".bio-box").toggle();
            $(".bio-text").val($(".bio-tbox").text());
            $(".bio-tbox").val("");
            $(".bio-text").toggle();
        });

        $(".bio-cancel").click(function(){
            $(".bio-box").toggle();
            $(".bio-tbox").val("");
            $(".bio-text").toggle();
            $(".bio-edit").toggle();
        });
    } );
</script>
</body>
</html>