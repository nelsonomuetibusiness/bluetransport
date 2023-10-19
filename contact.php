<?php
include 'nav.php';
?>


<!DOCTYPE html>
<html lang="en">



<body>

    <!-- contact image and info -->
    <section class="bg-white dark:bg-gray-900 mt-24">
        <div class="container px-6 py-12 mx-auto">
            <div class="text-center ">
                <p class="font-bold text-4xl text-blue-500 dark:text-blue-400">Contact us</p>

                <h1 class="mt-2 text-2xl font-semibold text-blue-400 md:text-3xl dark:text-white">We’d love to hear from you</h1>
            </div>

            <img class="object-cover w-full h-64 mt-10 rounded-lg lg:h-96" src="./images/cont.jpg" alt="">

            <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3 sm:grid-cols-2 ">
                <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                    <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Chat for help</h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Speak to our  team.</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">
                        <a href="mailto:hello@bluetransport.com">hello@bluetransport.com</a>
                    </p>

                </div>

                <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                    <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Visit us</h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Visit our office HQ..</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400"> New Horizons Haruna, Ikorodu. Lagos State </p>
                </div>

                <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                    <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Call us</h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-sun 24/7.</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400"><a href="tel:+2348134664831">+234-81-3466-4831</a></p>
                </div>
            </div>
        </div>
    </section>






    <!-- contact form -->
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-blue-500 dark:text-white">Send Us a Message</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-blue-400 dark:text-gray-400 sm:text-xl">Got a any issue? Want to send feedback ? Need details about our Business plan? Let us know.</p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-md font-medium text-blue-500 dark:text-gray-300">Your email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@gmail.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 ttext-md font-medium text-blue-500 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-md font-medium text-blue-500 dark:text-gray-400">Your message</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                <button class=" w-48 h-12 bg-blue-100 rounded-lg font-medium text-center text-blue-900 "> Send message </button>
            </form>
        </div>
    </section>






    <!-- contact map -->

    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <div>
                <p class="font-bold  text-2xl   text-blue-500 dark:text-blue-400">More Contact Options</p>



                <p class="mt-3 text-blue-500 dark:text-gray-400">Our team would love to hear from you.</p>
            </div>

            <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3">
                <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-1">
                    <div>
                        <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Chat for help</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Speak to our friendly team.</p>
                        <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">
                            <a href="mailto:hello@bluetransport.com">hello@bluetransport.com</a>
                        </p>
                    </div>

                    <div>
                        <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Visit us</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Visit our office HQ..</p>
                        <p class="mt-2 text-sm text-blue-500 dark:text-blue-400"> New Horizons Haruna, Ikorodu. Lagos State </p>
                    </div>

                    <div>
                        <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Call us</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri 24/7.</p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400"><a href="tel:+2348134664831">+234-81-3466-4831</a></p>
                    </div>
                </div>

                <div class="overflow-hidden rounded-lg lg:col-span-2 h-96 lg:h-auto">
                    
                    <iframe  width="100%" height="100%" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.179167160047!2d3.491872975929245!3d6.6246542219776545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bed5c544073bd%3A0x924dd9c7bacf16e0!2sNew%20Horizons%20Computer%20Learning%20Center%20Ikorodu!5e0!3m2!1sen!2sng!4v1685538912305!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>




    <?php
    include 'footer.php';
    ?>


    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>