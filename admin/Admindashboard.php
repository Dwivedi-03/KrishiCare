<?php
session_start();

if ($_SESSION["admin"] == null) {
    header('Location: ' . '../dist/Login.php');
}
include ("../Backend/config.php");

?>
<!DOCTYPE html>
<html lang="en" id="html" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="https://cdn-icons-png.freepik.com/256/4140/4140048.png?ga=GA1.1.253096211.1707907143&"> -->
    <title>KrishiCare - Farmer Information System</title>
    <link rel="icon"
        href="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/Js/styles.css">
    <script src="../src/Js/code.js"></script>
    <script src="../flowbite.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- chart admin dashboard -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body onload="adminMenuLoader('dashboard')" class="overflow-hidden dark:text-white ">
    <div class="h-screen w-screen sm:min-w-96 sm:min-h-screen">
        <header class="sticky w-full h-[10%]">
            <div
                class="dark:bg-gray-800 bg-gray-200 w-full h-full text-gray-500 dark:text-gray-300 flex justify-around items-center">
                <div onclick="adminMenuLoader('dashboard')" class="flex justify-center items-center sm:w-[20%]">
                    <img src="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais"
                        class="sm:h-10 h-6" alt="">
                    <h1 class="sm:text-3xl font-serif cursor-pointer">KrishiCare</h1>
                </div>
                <div class="flex justify-around items-center sm:w-[80%]">
                    <div class="flex sm:mx-4 w-[60%]">
                        <label name="search"
                            class="sm:text-2xl cursor-pointer hover:bg-gray-900 rounded-md p-1 mr-1">🔎</label>
                        <input name="search" type="text" placeholder="Search..."
                            class="outline-none bg-gray-300 dark:bg-slate-900 rounded-md font-light sm:text-lg text-xs px-2 w-[80%]">
                    </div>
                    <div class="flex justify-center items-center sm:mx-4 space-x-2">
                        <div
                            class="toggle-btn sm:w-10 sm:h-5 bg-slate-500 dark:bg-slate-500 bg-opacity-50 rounded-full flex items-start">
                            <input type="checkbox" id="modeCheckbox" class="hidden">
                            <label onclick="toggleModeAdmin()" for="modeCheckbox"
                                class="toggle-ball transition-all duration-300 ease-in-out w-3 h-3 dark:pl-2 -mt-0.5 rounded-full relative inline-block cursor-pointer">
                                <i
                                    class="fa-solid fa-circle-half-stroke text-slate-600 dark:text-slate-200 dark:rotate-180 duration-150 text-xl"></i>
                            </label>
                        </div>
                        <div class="hidden sm:block">
                            <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                                class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                                type="button">
                                <svg class="w-5 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 14 20">
                                    <path
                                        d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                                </svg>
                                <div
                                    class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
                                </div>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNotification"
                                class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
                                aria-labelledby="dropdownNotificationButton">
                                <div
                                    class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                                    Notifications
                                </div>
                                <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                    <?php
                                    $query = "select * from `contact_detail`;";
                                    $contact = mysqli_query($con, $query);
                                    if ($contact) {
                                        while ($row = mysqli_fetch_assoc($contact)) {
                                            ?>
                                            <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-full w-11 h-11" src="../img/profile.png"
                                                        alt="Profile image">
                                                    <div
                                                        class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                        <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 18 18">
                                                            <path
                                                                d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                            <path
                                                                d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="w-full ps-3">
                                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message
                                                        from <span class="font-semibold text-gray-900 dark:text-white"><?php echo $row['email']; ?></span>: <?php echo $row['message']; ?></div>
                                                    <div class="text-xs text-blue-600 dark:text-blue-500">Reply
                                                    </div>
                                                </div>
                                            </a>
                                        <?php }
                                    }
                                    ?>

                                </div>
                                <!-- <a href="#"
                                    class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                                    <div class="inline-flex items-center ">
                                        <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                            <path
                                                d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                        </svg>
                                        View all
                                    </div>
                                </a> -->
                            </div>
                        </div>
                        <div class="hidden sm:block">
                            <button>
                                <i
                                    class="hover:text-black dark:hover:bg-gray-900 rounded-md text-2xl fa-solid fa-comment-dots px-2">
                                </i>
                            </button>
                        </div>
                        <div class="hidden sm:block w-full">
                            <div class="flex justify-end items-center ml-16 text-right ">
                                <div>
                                    <h2 class="font-mono">Jyoti Dwivedi</h2>
                                    <span class="text-[12px]">jyoti@gmail.com</span>
                                </div>
                                <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                                    class="text-white focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                                    type="button">
                                    <?php
                                    $adminQuery = "SELECT `adminprofile`,`name`, `password` FROM `admin` WHERE `admin_id`= '" . $_SESSION["admin"] . "';";
                                    $result = mysqli_query($con, $adminQuery);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            if (file_exists($row["adminprofile"]) == true) {
                                                echo " <img src='../img/" . $row["adminprofile"] . "' class='h-12 w-12 rounded-full object-cover' alt=''>";
                                            } else {
                                                echo " <img src='../img/profile.png' class='h-12 w-12 rounded-full' alt=''>";
                                            }
                                        }
                                    }
                                    ?>
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownDivider"
                                    class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32 dark:bg-gray-800 dark:divide-gray-600">
                                    <ul class="py-2 text-md text-gray-700 dark:text-gray-200 text-start"
                                        aria-labelledby="dropdownDividerButton">
                                        <li onclick="adminMenuLoader('dashboard')"
                                            class="w-full py-3 space-x-2 text-gray-900 dark:text-gray-300 duration-700 hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-600 font-bold">
                                            <div class="cursor-pointer hidden sm:block">Dashboard</div>
                                        </li>
                                        <li onclick="adminMenuLoader('setting')"
                                            class="w-full py-3 space-x-2 text-gray-900 dark:text-gray-300 duration-700 hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-600 font-bold">
                                            <div class="cursor-pointer hidden sm:block">Setting</div>
                                        </li>
                                        <li onclick="adminMenuLoader('profile')"
                                            class="w-full py-3 space-x-2 text-gray-900 dark:text-gray-300 duration-700 hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-600 font-bold">
                                            <div class="cursor-pointer hidden sm:block">Profile</div>
                                        </li>
                                    </ul>
                                    <div onclick="logoutUser('admin')"
                                        class="py-2 rounded-md dark:hover:bg-gray-600 text-center">
                                        <a href=""
                                            class="rounded-md text-gray-900 dark:text-gray-300 duration-700 font-mono">Logout
                                            <i class="fa-solid fa-right-from-bracket"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="w-full h-[90%] flex">
            <!-- side navbar -->
            <div class="sm:w-[16%] w-[18%] h-full dark:bg-gray-800 bg-gray-200">
                <div class="sm:h-fit h-[60%] pt-4">
                    <div class="flex justify-start px-2 items-center text-white my-2 sm:hidden">
                        <?php
                        $adminQuery = "SELECT `adminprofile`,`name`, `password` FROM `admin` WHERE `admin_id`= '" . $_SESSION["admin"] . "';";
                        $result = mysqli_query($con, $adminQuery);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if (!$row["adminprofile"] == null) {
                                    echo " <img src='../img/" . $row["adminprofile"] . "' class='h-12 w-12 rounded-full object-cover' alt=''>";
                                } else {
                                    echo " <img src='../img/profile.png' class='h-12 w-12 rounded-full' alt=''>";
                                }
                            }
                        }
                        ?>
                    </div>
                    <!-- MENU -->
                    <div>
                        <h1 class="font-light sm:text-xl text-gray-500 sm:px-8 hidden sm:block">MENU</h1>
                    </div>
                    <ul class="sm:mb-8 sm:px-8">
                        <li onclick="adminMenuLoader('dashboard')"
                            class="w-full py-3 space-x-2 text-gray-900 dark:text-gray-300 duration-700 hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-solid fa-house"></i>
                            <div class="cursor-pointer hidden sm:block">Dashboard</div>
                        </li>
                        <li onclick="adminMenuLoader('farmer')"
                            class="w-full py-3 space-x-2 text-gray-900 dark:text-gray-300 duration-700 hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-solid fa-person-digging"></i>
                            <div class="cursor-pointer hidden sm:block">Farmer</div>
                        </li>
                        <li onclick="adminMenuLoader('laboratory')"
                            class="w-full py-3 space-x-2 text-gray-900 dark:text-gray-300 duration-700 hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-solid fa-flask-vial"></i>
                            <div class="cursor-pointer hidden sm:block">Laboratory</div>
                        </li>
                        <li onclick="adminMenuLoader('report')"
                            class="w-full py-3 space-x-2 text-gray-900 dark:text-gray-300 duration-700 hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-solid fa-file-lines"></i>
                            <div class="cursor-pointer hidden sm:block">Report</div>
                        </li>
                        <!-- <li onclick="adminMenuLoader('messages')" class="w-full py-3 space-x-2 text-gray-900 dark:text-gray-300 duration-700 hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-brands fa-facebook-messenger"></i>
                            <div class="cursor-pointer hidden sm:block"> Messages</div>
                        </li> -->
                        <!-- <li onclick="adminMenuLoader('notification')"
                            class="w-full py-3 space-x-2 text-gray-900 dark:text-gray-300 duration-700 hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-solid fa-bell"></i>
                            <div class="cursor-pointer hidden sm:block"> Notification</div>
                        </li> -->
                    </ul>
                </div>
                <div class="h-fit">
                    <div>
                        <h1 class="font-light sm:text-xl text-gray-500 sm:px-8 hidden sm:block">SETTING</h1>
                    </div>
                    <li onclick="adminMenuLoader('profile')"
                        class="flex hover:rounded py-3 sm:mx-8 px-4 text-gray-900 dark:text-gray-300 duration-700 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                        <i class="sm:mr-2 sm:text-xl fa-solid fa-user"></i>
                        <div class="cursor-pointer hidden sm:block">Profile</div>
                    </li>
                    <li onclick="adminMenuLoader('setting')"
                        class="flex hover:rounded py-3 sm:mx-8 px-4 text-gray-900 dark:text-gray-300 duration-700 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                        <i class="sm:mr-2 sm:text-xl fa-solid fa-gear"></i>
                        <div class="cursor-pointer hidden sm:block">Setting</div>
                    </li>
                    <li onclick="logoutUser('admin')"
                        class="flex hover:rounded py-3 sm:mx-8 px-4 text-gray-900 dark:text-gray-300 duration-700 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                        <i class="sm:mr-2 sm:text-xl fa-solid fa-right-from-bracket"></i>
                        <div class="cursor-pointer hidden sm:block">Logout</div>
                    </li>
                </div>
            </div>
            <!-- main contents -->
            <div class="w-full h-full">
                <div id="adminProcess" class="h-full w-full bg-gray-100 dark:bg-slate-700 duration-300 overflow-y-auto">
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>