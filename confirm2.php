<?php
require("config.php");




$user = $_GET['user'];



$bus_number = $_GET['bus_number'];



$route = $_GET['route'];



$price = $_GET['price'];
echo $price;


echo "<br>";


$date = $_GET['date'];
echo $date;



$conn =  new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connected";
}

$sql = "INSERT INTO trip_history (user, bus_number, route, price, date)
      VALUES ('$user', '$bus_number', '$route', '$price', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Trip Booked Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- component -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <main class="grid min-h-screen w-full place-items-center bg-gray-900">
        <div class="absolute left-1/2 top-1/2 h-96 w-80 -translate-x-1/2 -translate-y-1/2 rotate-6 rounded-2xl bg-gray-400"></div>

        <div class="absolute left-1/2 top-1/2 h-96 w-94 -translate-x-1/2 -translate-y-1/2 rotate-6 space-y-6 rounded-2xl bg-gray-100 p-6 transition duration-300 hover:rotate-0">
            <div class="flex justify-end">
                <div class="h-4 w-4 rounded-full bg-gray-900"></div>
            </div>

            <header class="text-center text-xl font-extrabold text-blue-600"> <?php echo $date?> </header>

            <div>
                <p class="text-center text-5xl font-extrabold text-blue-900"><?php echo $route?></p>
                <p class="text-center text-4xl font-extrabold text-blue-400"><?php echo $price?></p>
            </div>

            <footer class="mb-10 flex justify-center">
                <div class="flex items-baseline gap-2 rounded-lg bg-blue-400 px-4 py-2.5 text-xl font-bold text-white hover:bg-blue-700">
                    <span><?php echo $user?></span>
                    <i class="fas fa-hand-peace text-xl"></i>
                </div>
            </footer>

            <p class="text-blue-500 font-bold text-2xl " >Booking Completed</p>
        </div>
    </main>
</body>

</html>