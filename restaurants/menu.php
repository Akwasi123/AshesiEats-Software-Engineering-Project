<?php
    session_start();
    include ("Header.php");
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
 
    <title>AshesiEats - Edit menu</title>
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

    <div id="main-page" class="container-fluid ">
        <div class="ml-5">
            <h2>Edit Menu</h2>
            <button class="save-menu btn-primary">Save</button>
            <button class="menu-cancel btn-primary">Cancel</button>
        </div>
        <div>
            <button class="btn-primary">+ Add item</button>
        </div>
        <div>
            <ul>
                <li>Item name</li>
                <li>Description</li>
                <li>Price</li>
                <li>Quantity available</li>
            </ul>
        </div>
        <?php
                //     require_once("../db-connection.php");
                //     $id = $_SESSION['user_id'];
                //     $db = new mysqli(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);
                //     // Check connection
                //     if ($db->connect_error) {
                //         die("Connection failed: " . $db->connect_error);
                //     }else{

                //     }
                //     $sql="SELECT * FROM menu WHERE Restaurant_ID='$id'";
                //     $result = $conn->query($sql);

                //     $menu_rows=array();
                //     $count=$result->num_rows;

                //     if ($count<1) {
                //         echo "<div class='card'>No items in menu yet</div>";
                //     }else{
                //         while($row=$result->fetch_assoc()){    
                //             $menu_row=array(); 
                //             $id=$row[""];             
                //             $item=$row["Customer_ID"];
                //             $description=$row["Cart_ID"];   
                //             $price=$row["total"];
                //             $quantity=$row["Product_ID"];
                //             array_push($menu_row, $id, $item, $description, $price,$quantity);  

                //             array_push($menu_rows, $menu_row);
                //         }
                //         for($x=0; $x<count($table_rows);$x++){
                //             echo "
                //             <div class='card' id='".$menu_rows[x][0]."'>
                //                 <td>".$menu_rows[$x][1]."</td>
                //                 <td>".$menu_rows[$x][5]."</td>
                //                 <td>".$menu_rows[$x][2]."</td>
                //                 <td>".$menu_rows[$x][3]."</td>
                //                 <td>".$menu_rows[$x][4]."</td>
                //             </div>";
                //          }
            ?>   
            </tbody>
        </table>
    </div>
</div>
<?php require_once('../footer.php')  ?>

<script>
    $(document).ready( function () {
        $(".menu-save").click(function(){

        });

        $(".menu-cancel").click(function(){

        });

        $(".item-add").click(function(){

        });

    } );
</script>
</body>
</html>