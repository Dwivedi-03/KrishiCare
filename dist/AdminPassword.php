<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais">
    <title>KrishiCare - Farmer Information System</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/Js/styles.css">
    <script src="../src/Js/code.js"></script>
    <script src="../flowbite.js"></script>
</head>

<body>

    <?php include("Header.php") ?>
    <section class="h-screen w-screen">
        <div class="h-full md:h-[60%] w-full flex items-center justify-center">
            <div class="min-h-full w-full py-6 flex flex-col justify-center sm:py-12 mt-8">
                <div>
                    <!-- <h1 class="text-4xl w-full text-center font-semibold">Laboratory Login Form</h1> -->
                </div>
                <div class="relative py-3 px-4 w-full sm:mx-auto flex justify-center">
                    <div class="relative min-w-96 px-4 py-10 w-[50%] shadow-lg sm:rounded-3xl sm:p-20 md:p-4 grid grid-cols-1 md:grid-cols-2">
                        <div class="w-full h-full mx-auto flex justify-center items-center">
                            <img class="h-full md:h-80 w-full" src="../img/Admin-bro.svg" alt="">
                        </div>
                        <div class="w-full h-full mx-auto pl-4">
                            <form id="ResetPassword" method="post" action="#">
                                <div class="divide-y divide-gray-200">
                                    <div class="pt-8 pb-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="relative">
                                            <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                            <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Email</label>
                                            <span class="text-red-500" id="spanemail"></span>
                                        </div>
                                        <div class="relative w-full">
                                            <div class="relative flex justify-end items-center">
                                                <img id="eyeImg" src="../img/eye.png" alt="" class="absolute h-5 w-5 z-10 cursor-pointer mr-3" onclick="togglepassword('eyeImg','pwd')">
                                                <input autocomplete="off" id="pwd" name="pwd" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                                                <label for="pwd" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Old Password</label>
                                            </div>
                                            <span class="text-red-500" id="spanpass"></span>
                                        </div>
                                        <div class="relative w-full">
                                            <div class="relative flex justify-end items-center">
                                                <img id="ceyeImg" src="../img/eye.png" alt="" class="absolute h-5 w-5 z-10 cursor-pointer mr-3" onclick="togglepassword('ceyeImg','cpwd')">
                                                <input autocomplete="off" id="cpwd" name="cpwd" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                                                <label for="cpwd" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Confirm Password</label>
                                            </div>
                                            <span class="text-red-500" id="spancpass"></span>
                                        </div>
                                        <div class="relative">
                                            <input type="button" onclick="return ResetPassword('admin')" class="outline-none cursor-pointer bg-green-600 hover:bg-green-700 text-lg text-white font-serif py-2 px-16 rounded-md  w-full sm:w-full md:w-fit" value="Change Password">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="w-full h- flex justify-end text-sm items-center">
                                <p><a class="text-green-400 hover:text-green-600 hover:border-b-2 pb-0.5 hover:border-green-600 duration-100" href="Login.php">Login</a></p>
                            </div>
                            <input type="hidden" class="border" name="result" id="status">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("Footer.php") ?>
    </section>

</body>

</html>