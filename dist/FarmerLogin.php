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
        <div class="h-fit md:h-[60%] w-full flex items-center justify-center my-9">
            <div class="h-full w-full py-6 flex flex-col justify-center sm:py-12 mt-8">
                <div>
                    <h1 class="text-xl w-full text-center font-semibold">Welcome Back</h1>
                    <h1 class="text-lg w-full text-center font-semibold my-4">We are <span class="text-green-500 border-b-2 py-1 border-green-500">Happy</span> to see you back</h1>
                </div>
                <div class="relative px-4 w-full h-full sm:mx-auto flex justify-center">
                    <div class="relative min-w-96 px-4 py-10 w-[50%] h-full shadow-lg sm:rounded-3xl sm:p-20 md:p-4 grid grid-cols-1 md:grid-cols-2">
                        <div class="w-full h-full mx-auto flex justify-center items-center">
                            <img class="h-full md:h-80 p-4 w-full" src="../img/farmer-illustrater.png" alt="">
                        </div>
                        <div class="w-full h-full mx-auto pl-4 py-8">
                            <form id="ValidateUser" method="post" action="#">
                                <div class="divide-y divide-gray-200">
                                    <div class="pt-8 pb-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="relative">
                                            <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                            <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Email</label>
                                            <span class="text-red-500 text-sm" id="spanemail"></span>
                                        </div>
                                        <div class="relative w-full">
                                            <div class="relative flex justify-end items-center">
                                                <img id="eyeImg" src="../img/eye.png" alt="" class="absolute h-5 w-5 z-10 cursor-pointer mr-3" onclick="togglepassword('eyeImg','pwd')">
                                                <input autocomplete="off" id="pwd" name="pwd" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                                                <label for="pwd" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Password</label>
                                            </div>
                                            <span class="text-red-500 text-sm" id="spanpass"></span>
                                        </div>
                                        <div class="relative py-3">
                                            <input type="button" onclick="return validateUser('farmer')" class="outline-none cursor-pointer bg-green-600 hover:bg-green-700 text-lg text-white font-serif py-2 px-16 rounded-md  w-full sm:w-full md:w-fit" value="Login">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="w-full h- flex justify-around text-sm items-center">
                                <p>Don't have an account <a class="text-green-400 hover:text-green-600 hover:border-b-2 pb-0.5 hover:border-green-600 duration-100" href="farmer_reg.php">Register</a></p>
                                <p><a class="text-green-400 hover:text-green-600 hover:border-b-2 pb-0.5 hover:border-green-600 duration-100" href="FarmerPassword.php">Change Password</a></p>
                            </div>
                            <input type="hidden" name="result" id="status">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("Footer.php") ?>
    </section>
</body>

</html>