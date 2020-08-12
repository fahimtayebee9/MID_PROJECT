<?php
    include "../Php/DB_Config.php";
    session_start();
    $name = "Admin";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/adminHome.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <title>Admin Homepage</title>
</head>
<body>
    <div class="left-sidebar">
        <div class="container-fluid">
            <div class="row main">
                <div class="col-2 rmv-pad fixed-area" >
                    <div class="menu-bar " id="menu-bar">
                        <div class="heading-area">
                            <img src="../images/logo.png" class="img-fluid w-50" alt="">
                        </div>
                        <div class="menu-list">
                            <ul>
                                <li></i><a class="menu-title" href="admin_home.php">DashBoard</a></li>
                                <li>
                                    <a class="menu-title" href="../layouts/Employee.php">Employee Details</a>
                                    <ul class="submenu-ul">
                                        <li><a href="../layouts/addEmployee.php">Add Employee</a></li>
                                        <li><a href="../layouts/Delete_Emp.php">Delete Employee</a></li>
                                        <li><a href="../layouts/UpdateEmp.php">Update Employee</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-title" href="../layouts/CustomerDetails.php">Customer Details</a>
                                    <ul>
                                        <li><a href="../layouts/CustomerReservationInfo.php">Customer Reservations</a></li>
                                        <li><a href="../layouts/Update_Customer.php">Update Customer</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-title" href="../layouts/Food_Menu.php">Food Menu</a>
                                    <ul>
                                        <li><a href="../layouts/Add_Food_Item.php">Add Food Items</a></li>
                                        <li><a href="../layouts/Update_Food_Item.php">Update Food Items</a></li>
                                        <li><a href="../layouts/Delete_Food_Item.php">Delete Food Items</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-title" href="../layouts/notifications.php">Join Requests</a>
                                </li>
                                <li>
                                    <a class="menu-title" href="../Php/logout.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 rmv-pad scrollable-area">
                    <div class="content-area scrollbar title-header-main">
                        <div class="header-row title-header">
                            <div class="textarea">
                                <h4>Remove Menu Items</h4>
                                <p>Select the menu items to remove...</p>
                            </div>
                            <div class="content-holder">
                                <div class="search-area">
                                    <form action="">
                                        <i class="fas fa-search" aria-hidden="true"></i>
                                        <input type="search" name="search_box" id="search_box">
                                        <input type="submit" value="Search" class="btn btn-primary">
                                    </form>
                                </div>
                                <span class="border-span"></span>
                                <div class="profile-settings nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $name;?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Profile Details</a>
                                        <a class="dropdown-item" href="#">Change Password</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../Php/logout.php">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-pad">
                            <div class="col-12">
                                <h4>Menu List</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Item No</th>
                                            <th scope="col">Item Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Chicken Fry</td>
                                            <td>FastFood</td>
                                            <td>250</td>
                                            <td><img src="" alt="">-</td>
                                            <td><input type="checkbox" name="delte_check" id="delete_check"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Rice with Curry</td>
                                            <td>Dinner</td>
                                            <td>450</td>
                                            <td><img src="" alt="">-</td>
                                            <td><input type="checkbox" name="delte_check" id="delete_check"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Chicken Fry</td>
                                            <td>Breakfast</td>
                                            <td>180</td>
                                            <td><img src="" alt="">-</td>
                                            <td><input type="checkbox" name="delte_check" id="delete_check"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Chicken Fry</td>
                                            <td>Breakfast</td>
                                            <td>180</td>
                                            <td><img src="" alt="">-</td>
                                            <td><input type="checkbox" name="delte_check" id="delete_check"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Chicken Fry</td>
                                            <td>Breakfast</td>
                                            <td>180</td>
                                            <td><img src="" alt="">-</td>
                                            <td><input type="checkbox" name="delte_check" id="delete_check"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <input type="submit" value="" name="submit"> -->
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-4">
                                <div class="button-area text-right">
                                    <a href="../Php/Delete_Emp_Validation.php" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                        <!-- If Submit is pressed then this div area will appear -->
                        <div class="row">
                            <div class="col-4">
                                <p>If Submit is pressed then this div area will appear</p>
                                <div class="confirmation-box">
                                    <h6>Are you sure?</h6>
                                    <p>Delete x times from menu list.</p>
                                    <input type="submit" value="Confirm" name="submit" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>