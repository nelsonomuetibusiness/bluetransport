<?php

require("functions.php");



if (!isset($_SESSION["user"])) {
    header("location: login.php");
    exit();
}


if (isset($_GET['logout'])) {
    logoutUser();
}


if (isset($_GET['confirm-account-deletion'])) {
    deleteAccount();
}






$sql = "SELECT * FROM bus";
$all_buses = mysqli_query(connect(), $sql);



include 'nav.php';





$bus_selected = $_POST['ibuses'];

$date = $_POST['date'];

"<h1>" . $bus_selected . "</h1>";





$sql = "SELECT * FROM bus where bus_number='$bus_selected' ";
$busdata = mysqli_query(connect(), $sql);


$row = mysqli_fetch_assoc($busdata);

$bus_no = $row['bus_number'];


$route = $row['trip'];


$price = $row['price'];


$date = $date;

$user = $_SESSION["user"];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>








    <div class="relative overflow-x-auto mt-48">
        <?php echo $_SESSION["user"] ?>
        <table class="w-full text-sm text-left text-blue-500 dark:text-blue-400">
            <thead class="text-xs text-blue-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="text-blue-500 px-6 py-3">
                        Bus Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Route
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo "Bus  " . $bus_no; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $route; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $price; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $date; ?>
                    </td>
                </tr>

            </tbody>
        </table>

        <div class="flex items-center justify-center">
            <a class="bg-blue-800 p-2 w-48 font-bold text-blue-400 text-xl m-4 text-center" href="confirm2.php?user=<?php echo $user ?>&bus_number=<?php echo $bus_no ?>&route=<?php echo $route ?>&price=<?php echo $price ?>&date=<?php echo $date ?>">CONFIRM</a>

            <?php echo "Your Trip   ". $user; ?>

        </div>


        <?php 
        
            $_SESSION ['user'] = $user;
            $_SESSION ['bus_number'] = $bus_no;
            $_SESSION ['route'] = $route;
            $_SESSION ['price'] = $price;
            $_SESSION ['date'] = $date;
        ?>

    </div>














    <?php
    include 'footer.php';
    ?>

    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>