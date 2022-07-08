<?php 
    require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style type="text/css">
        body{
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                                <div class="col-11">
                                    <div class="card-title"><h2>PRODUCTs LIST</h2></div>
                                </div>
                                <div class="col-1">
                                    <a href="add_product.php" class="btn btn-sm btn-outline-primary">+ New </a>
                                </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ProductID</th>
                            <th>ProductName</th>
                            <th>Quantity</th>
                            <th>UnitPrice</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM products";
                            $result = mysqli_query($conn,$query);
                            foreach($result as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['No']; ?></td>
                            <td><?php echo $row['Product_ID']; ?></td>
                            <td><?php echo $row['Product_Name']; ?></td>
                            <td><?php echo $row['Quantity']; ?></td>
                            <td><?php echo $row['Unit_Price']; ?></td>
                            <td>
                                <a href="edit_product.php?ProductId=<?php echo $row['No']; ?>">Edit</a> |
                                <a href="">Delete</a> 
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6"><b></b></td>
                        </tr>
                    </tfoot>
                </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>  
</body>
</html>