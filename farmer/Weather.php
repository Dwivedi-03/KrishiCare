<!-- Weather Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Weather</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Weather-amico.png" alt="">
        </div>
        <div class="w-[70%] h-full flex items-center">
            <div class="relative h-32 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
                <div
                    class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  ">
                </div>
                <h1
                    class="z-10 h-full flex justify-center items-center text-6xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">
                    Weather Details</h1>
            </div>
        </div>
    </div>
    <!-- Weather Data -->
    <!-- <div class="bg-gray-200 p-8 my-8 rounded shadow-md max-w-md w-full md:col-span-1">
        <div>
            <h1 class="text-2xl font-bold mb-4">Weather details</h1>
            <form action="" method="post" class="mb-4">
                <div class="flex items-center mb-4">
                    <label for="state" class="mr-2">State:</label>
                    <select id="state" name="state" onchange="loadCities()" class="state border rounded w-full px-2 py-1 focus:outline-none focus:border-blue-500"></select>
                </div>
                <div class="flex items-center mb-4">
                    <label for="city" class="mr-2">City:</label>
                    <select id="city" name="city" class="city border rounded w-full px-2 py-1 focus:outline-none focus:border-blue-500"></select>
                </div>
                <button type="submit" name="getWeather" class="mt-2 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:bg-green-600">Get Weather</button>
            </form>
        </div>
    </div> -->
    <section class="text-gray-600 dark:text-gray-300 my-8 bg-gray-200 rounded-lg dark:bg-slate-700">
        <!-- <div class="h-fit px-5 pt-10">
            <form id="weatherForm">
                <div class="flex justify-end space-x-4">
                    <div>
                        <h1 class="p-2">Enter Your City For Weather Detail</h1>
                        <select type="text" name="state" id="state" onchange="loadCities()"
                            class="state py-2 h-10 border m-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-700"></select>
                    </div>
                    <div>
                        <h1 class="p-2">Enter Your State For weather Details</h1>
                        <select type="text" name="city" id="city"
                            class="city py-2 h-10 border m-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-700"></select>
                    </div>
                </div>
            </form>
        </div> -->
        <div class="container px-5 mx-auto py-10">
            <div class="flex flex-wrap w-full">
                <div class="lg:w-1/2 w-full lg:mb-0">
                    <?php echo '<h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 dark:text-gray-50 text-gray-900">Weather Forecast</h1>'; ?>
                    <div class="h-1 w-28 bg-green-500 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="h-full w-fit p-8"></div>
            </div>
            <?php
            getWeatherForecastData($api_key, $location, $city, $state);
            ?>
        </div>
    </section>
    <div class="h-7"></div>
</section>