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
?>


<!DOCTYPE html>
<html lang="en">



<body>

    <div class="container my-24 px-6 mx-auto">


        <section class="mb-32">
            <div class="relative overflow-hidden bg-no-repeat bg-cover " style="
background-position: 50%;
background-image: url('./images/bus.jpeg');
height: 500px;
">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.75)">
                    <div class="flex justify-center items-center h-full">
                        <div class="text-center text-blue-200 px-6 md:px-12">
                            <h2 class="text-5xl font-bold tracking-tight leading-tight mb-12">
                                Bookings
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <div class="page">


        <h2 class="text-center text-2xl font-bold text-blue-200">Welcome <span class="text-4xl uppercase text-blue-500"> <?php echo $_SESSION["user"] ?> </span> </h2>
        <h4 class=" text-2xl font-bold text-blue-200">This is your account </h4>



        <p class=" text-2xl font-bold text-blue-300">Proceed to enter your Information and confirm your Trip</p>


        <div class="flex mt-12 text-center items-center justify-center">
            <a class="text-2xl font-bold text-red-300" href="?logout">Logout</a>


            <span class="w-24"></span>


            <?php
            if (isset($_GET['delete-account'])) {
            ?>
                <p class="confirm-deletion">
                    Are you sure you want to delete your account?
                    <a class="text-2xl font-bold text-red-600  confirm-deletion" href="?confirm-account-deletion">Delete account</a>
                </p>
            <?php
            } else {
            ?>
                <a class="text-2xl font-bold text-red-600" href="?delete-account">Delete account</a>
            <?php
            }


            ?>



        </div>



    </div>




    <!-- booking form -->
    <h1 class="text-center mt-24 font-bold text-2xl text-blue-700">Enter Trip Booking Information</h1>
    <div class="flex flex-wrap items-center justify-center p-12">


        <form method="post" action="#">
            <div class="mb-5">
                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                    Destination
                </label>
                <select list="buses" name="buses" value="" type="text" class="text-blue-700  mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-xl shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
      disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
      invalid:border-pink-500 invalid:text-pink-600
      focus:invalid:border-pink-500 focus:invalid:ring-pink-500
    ">
                    <?php
                    while ($buses = mysqli_fetch_array($all_buses, MYSQLI_ASSOC)) :;
                    ?>

                        <option value="<?php echo $buses["id"]; ?>"><?php echo $buses["trip"] . " " . "&#8358;" . $buses["price"]; ?></option>

                    <?php
                    endwhile;
                    ?>

                </select>

            </div>

            <input class="w-48 font-bold text-blue-400 text-xl m-4" type="date" name="date">
            <button class="bg-blue-800 p-2 w-48 font-bold text-blue-400 text-xl m-4" type="submit" name="search">SEARCH</button>
        </form>

    </div>

   
        <div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <td>
                                bus number
                            </td>
                            <td>
                                route
                            </td>
                            <td>
                                price
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $bus_number[1] ?>
                            </td>
                            <td>
                                <?php echo $route[2] ?>
                            </td>
                            <td>
                                <?php echo $price[3] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    <?php


    

    ?>

    <!-- make payment -->
    <section class="bg-white dark:bg-gray-900 mb-12 drop-shadow-2xl mt-24 ">
        <p class="text-center font-bold text-4xl mt-12 text-blue-400">Steps to Booking</p>
        <div class="container px-6 py-10 mx-auto">


            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-4 ">
                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl hover:bg-blue-100 ">
                    <span class="inline-block text-blue-500 dark:text-blue-400">

                        <img src="./images/1.png" alt="">
                    </span>

                    <h1 class="text-2xl font-bold text-blue-700 capitalize dark:text-white">Select Your Trip</h1>

                    <p class="text-blue-500 dark:text-gray-300">
                        The process of selecting your trip involves browsing available destinations, choosing preferred dates, selecting desired amenities, and making a booking online.
                    </p>


                </div>

                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl hover:bg-blue-100">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <img src="./images/2.png" alt="">
                    </span>

                    <h1 class="text-2xl font-bold text-blue-700 capitalize dark:text-white">Book & Confirm</h1>

                    <p class="text-blue-500 dark:text-gray-300">
                        book and confirm your trip, choose your desired destination, select dates, provide passenger details.
                    </p>


                </div>

                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl hover:bg-blue-100">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <img src="./images/3.png" alt="">
                    </span>

                    <h1 class="text-2xl font-bold text-blue-700 capitalize dark:text-white">Make Payment</h1>

                    <p class="text-blue-500 dark:text-gray-300">
                        make a payment, select your preferred payment method, enter the necessary details, verify the transaction, and receive a payment confirmation.
                    </p>


                </div>


                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl hover:bg-blue-100">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <img src="./images/4.png" alt="">
                    </span>

                    <h1 class="text-2xl font-bold text-blue-700 capitalize dark:text-white">Start Your Roadtrip</h1>

                    <p class="text-blue-500 dark:text-gray-300">
                        Start your road trip by packing essentials,
                        and embarking on an exciting journey of exploration and adventure.
                    </p>

                </div>
            </div>
        </div>
    </section>




    <!-- What they are saying-->

    <div class="bg-blue-100 flex justify-center items-center min-h-screen p-10">
        <div class="md:w-3/5 w-3/4 px-10 flex flex-col gap-2 p-5 bg-white text-blue-500">
            <h1 class="py-5 text-4xl">Reviews</h1>


            <!-- Tags -->
            <div class="flex flex-wrap gap-2 w-full py-2">
                <span class="px-2 p-1 bg-white ">Experience</span>
                <span class="px-2 p-1 bg-white ">Quality</span>

                <span class="px-2 p-1 bg-white ">Features</span>
                <span class="px-2 p-1 bg-white ">Value</span>

            </div>

            <!-- Item Container -->
            <div class="flex flex-col gap-3 mt-14">
                <div class="flex flex-col gap-4 bg-white p-4">
                    <!-- Profile and Rating -->
                    <div class="flex justify justify-between">
                        <div class="flex gap-2">
                            <div class="w-7 h-7 text-center rounded-full bg-red-500">J</div>
                            <span>John Adewale</span>
                        </div>
                        <div class="flex p-1 gap-1 text-orange-300">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half"></ion-icon>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-center text-2xl font-bold text-blue-400">"Traveling with this company was a breeze. The online booking process was seamless, and the trip itself was fantastic. The buses were in great condition, the staff was attentive, and the overall value for money was excellent. I highly recommend them for your next trip."</h1>
                    </div>

                    <div class="flex justify-between">
                        <span>Feb 13, 2023</span>

                    </div>
                </div>

                <div class="flex flex-col gap-4 bg-blue-200 p-4">
                    <!-- Profile and Rating -->
                    <div class="flex justify justify-between">
                        <div class="flex gap-2">
                            <div class="w-7 h-7 text-center rounded-full bg-yellow-500">A</div>
                            <span>Alice Okechukwu</span>
                        </div>
                        <div class="flex p-1 gap-1 text-orange-300">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>

                        </div>
                    </div>

                    <div>
                        <h1 class="text-center text-2xl font-bold text-blue-400">"I had an amazing experience on my recent trip with this company. The buses were comfortable, the staff was friendly and helpful, and the journey was smooth. Highly recommended!"</h1>
                    </div>

                    <div class="flex justify-between">
                        <span>Mar 1, 2023</span>

                    </div>
                </div>

                <div class="flex flex-col gap-4 bg-white p-4">
                    <!-- Profile and Rating -->
                    <div class="flex justify justify-between">
                        <div class="flex gap-2">
                            <div class="w-7 h-7 text-center rounded-full bg-green-500">S</div>
                            <span>Sir Vincent</span>
                        </div>
                        <div class="flex p-1 gap-1 text-orange-300">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half"></ion-icon>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-center text-2xl font-bold text-blue-400">"I can't say enough good things about my experience. The bus was comfortable, the seats were spacious, and the onboard entertainment made the time fly by. The driver was friendly and made sure we had a smooth and pleasant journey."</h1>
                    </div>

                    <div class="flex justify-between">
                        <span>June 2, 2023</span>

                    </div>
                </div>

                <div class="flex flex-col gap-4 bg-blue-200 p-4">
                    <!-- Profile and Rating -->
                    <div class="flex justify justify-between">
                        <div class="flex gap-2">
                            <div class="w-7 h-7 text-center rounded-full bg-purple-500">M</div>
                            <span>Martini Agba</span>
                        </div>
                        <div class="flex p-1 gap-1 text-orange-300">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half"></ion-icon>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-center text-2xl font-bold text-blue-400">"The customer service was exceptional from the moment I booked my trip. The staff was responsive, accommodating, and made sure all my queries were addressed. The journey itself was enjoyable, and the onboard amenities were a nice bonus."</h1>
                    </div>

                    <div class="flex justify-between">
                        <span>Dec 13, 2023</span>

                    </div>
                </div>

                <div class="flex flex-col gap-4 bg-white p-4">
                    <!-- Profile and Rating -->
                    <div class="flex justify justify-between">
                        <div class="flex gap-2">
                            <div class="w-7 h-7 text-center rounded-full bg-red-500">P</div>
                            <span>Precious Idan</span>
                        </div>
                        <div class="flex p-1 gap-1 text-orange-300">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half"></ion-icon>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-center text-2xl font-bold text-blue-400">"I was impressed with the level of professionalism and safety measures taken during my trip. The driver was skilled, the bus was clean, and the overall service exceeded my expectations. I will definitely travel with them again."</h1>
                    </div>

                    <div class="flex justify-between">
                        <span>Jan 21, 2023</span>

                    </div>
                </div>
            </div>
        </div>
    </div>










    <?php
    include 'footer.php';
    ?>

    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>