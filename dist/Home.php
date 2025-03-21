<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
        href="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais">
    <title>KrishiCare - Farmer Information System</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/Js/styles.css">
    <script src="../src/Js/code.js"></script>
    <script src="../flowbite.js"></script>
</head>

<body id="home" onload="initializeCarousel()"> 
    <?php include ("Header.php"); ?>
    <!-- section 1 -->
    <section class="h-screen w-full">
        <!-- Carousel -->
        <div class="carousel-container h-3/4 w-full flex overflow-hidden relative">
            <div class="carousel-items h-full w-full flex transition-transform duration-500 ease-linear">
                <div
                    class="carousel-item h-full w-full shrink-0 px-4 text-gray-100 flex-col flex justify-center items-start bg-cover bg-norepeat bg-[url(../img/bg-img2.jpg)]">
                    <h1 class="text-6xl font-[poppins] h-fit pl-16">"FARMING IS A PEOFESSION OF HOPE"</h1>
                    <span class="text-2xl font-normal capitalize px-20">Taking agriculture To The Next Level , Join us
                        in
                        revolutionizing
                        <br> farming practices with Krishicare. Together, let's cultivate a brighter future for
                        agriculture.
                    </span>
                    <div class="mt-10 px-20">
                        <a class="bg-green-500 hover:bg-green-600 text-white hover:text-black/45 duration-200 py-2 px-4 rounded font-bold text-2xl"
                            href="FarmerLogin.php">Get Started</a>
                    </div>
                </div>
                <div
                    class="carousel-item h-full w-full shrink-0 px-4 text-gray-100 flex-col flex justify-center items-start bg-cover bg-norepeat bg-[url(../img/thumbnail-img-1.jpg)]">
                    <h1 class="text-6xl font-[poppins] h-fit pl-16">"As the earth yields its treasures, <br /> so does
                        the
                        farmer sow the seeds of prosperity for the nation."</h1>
                    <span class="text-2xl font-normal capitalize px-20">Taking agriculture To The Next Level , Join us
                        in
                        revolutionizing
                        <br> farming practices with Krishicare. Together, let's cultivate a brighter future for
                        agriculture.
                    </span>
                    <div class="mt-10 px-20">
                        <a class="bg-green-500 hover:bg-green-600 text-white hover:text-black/45 duration-200 py-2 px-4 rounded font-bold text-2xl"
                            href="FarmerLogin.php">Get Started</a>
                    </div>
                </div>
                <div
                    class="carousel-item h-full w-full shrink-0 px-4 text-gray-100 flex-col flex justify-center items-start bg-cover bg-norepeat bg-[url(../img/thumbnail-img-2.jpg)]">
                    <h1 class="text-6xl font-[poppins] h-fit pl-16">"Farming is not merely about growing crops, <br />
                        it's
                        about nurturing life and preserving traditions."</h1>
                    <span class="text-2xl font-normal capitalize px-20">Taking agriculture To The Next Level , Join us
                        in
                        revolutionizing
                        <br> farming practices with Krishicare. Together, let's cultivate a brighter future for
                        agriculture.
                    </span>
                    <div class="mt-10 px-20">
                        <a class="bg-green-500 hover:bg-green-600 text-white hover:text-black/45 duration-200 py-2 px-4 rounded font-bold text-2xl"
                            href="FarmerLogin.php">Get Started</a>
                    </div>
                </div>
                <div
                    class="carousel-item h-full w-full shrink-0 px-4 text-gray-100 flex-col flex justify-center items-start bg-cover bg-norepeat bg-[url(../img/bg-img1.jpg)]">
                    <h1 class="text-6xl font-[poppins] h-fit pl-16">"From the sweat of the farmer's <br /> brow springs
                        the
                        bounty that sustains us all."</h1>
                    <span class="text-2xl font-normal capitalize px-20">Taking agriculture To The Next Level , Join us
                        in
                        revolutionizing
                        <br> farming practices with Krishicare. Together, let's cultivate a brighter future for
                        agriculture.
                    </span>
                    <div class="mt-10 px-20">
                        <a class="bg-green-500 hover:bg-green-600 text-white hover:text-black/45 duration-200 py-2 px-4 rounded font-bold text-2xl"
                            href="FarmerLogin.php">Get Started</a>
                    </div>
                </div>
                <div
                    class="carousel-item h-full w-full shrink-0 px-4 text-gray-100 flex-col flex justify-center items-start bg-cover bg-norepeat bg-[url(../img/satallite-img2.jpg)]">
                    <h1 class="text-6xl font-[poppins] h-fit pl-16">"Farming is not just a livelihood, <br /> it's a way
                        of
                        life deeply rooted in our culture."</h1>
                    <span class="text-2xl font-normal capitalize px-20">Taking agriculture To The Next Level , Join us
                        in
                        revolutionizing
                        <br> farming practices with Krishicare. Together, let's cultivate a brighter future for
                        agriculture.
                    </span>
                    <div class="mt-10 px-20">
                        <a class="bg-green-500 hover:bg-green-600 text-white hover:text-black/45 duration-200 py-2 px-4 rounded font-bold text-2xl"
                            href="FarmerLogin.php">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="indicators absolute bottom-2 left-0 w-full text-center">
                <span class="indicator inline-block w-2.5 h-2.5 rounded-full cursor-pointer my-1 bg-gray-200"></span>
                <span class="indicator inline-block w-2.5 h-2.5 rounded-full cursor-pointer my-1 bg-gray-200"></span>
                <span class="indicator inline-block w-2.5 h-2.5 rounded-full cursor-pointer my-1 bg-gray-200"></span>
                <span class="indicator inline-block w-2.5 h-2.5 rounded-full cursor-pointer my-1 bg-gray-200"></span>
                <span class="indicator inline-block w-2.5 h-2.5 rounded-full cursor-pointer my-1 bg-gray-200"></span>
            </div>
            <button
                class="prev absolute bg-gray-200 h-10 w-10 flex justify-center items-center bg-opacity-40 text-white text-xl font-bold rounded-full top-1/2 left-2 transform -translate-y-1/2">
                &lt;
            </button>
            <button
                class="next absolute bg-gray-200 h-10 w-10 flex justify-center items-center bg-opacity-40 text-white text-xl font-bold rounded-full top-1/2 right-2 transform -translate-y-1/2">
                &gt;
            </button>
        </div>
        <div class="h-1/4" id="newtech">
            <div class="h-full pb-12 w-full flex flex-col justify-center items-center">
                <h1 class="text-4xl font-[poppins] h-full flex justify-center items-center uppercase">Benifit of Website
                </h1>
                <hr class="w-[90%]">
            </div>
        </div>
    </section>

    <!-- section 2 -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 mx-auto bg-white">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="xl:w-1/4 md:w-1/2">
                    <div class="p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center hover:shadow-lg mb-6 hover:border"
                            src="https://www.nicheagriculture.com/wp-content/uploads/2020/10/ezgif.com-gif-maker-9-1.webp"
                            alt="content">
                        <h2 class="text-lg text-gray-900 font-bold title-font mb-4">New Technology In Farming</h2>
                        <p class="leading-relaxed text-base text-justify px-2">By utilizing KrishiCare, farmers gain
                            instant
                            access to information about new advancements in agricultural practices, techniques, and
                            technologies.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 ">
                    <div class="p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6 hover:shadow-lg hover:border"
                            src="https://cdn.uc.assets.prezly.com/712d7152-a1c1-4e19-82f5-2d505c9f4dea/-/resize/1200x/-/format/auto/"
                            alt="content">
                        <h2 class="text-lg text-gray-900 font-bold title-font mb-4">Farmer Collab with Lab</h2>
                        <p class="leading-relaxed text-base text-justify px-2">Farmers can easily connect with
                            accredited
                            labs to analyze soil samples and receive comprehensive reports on the health and composition
                            of their land.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 ">
                    <div class="p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6 hover:shadow-lg hover:border"
                            src="https://www.india.gov.in/sites/upload_files/npi/files/spotlights/soil-health-card-inner.jpg"
                            alt="content">
                        <h2 class="text-lg text-gray-900 font-bold title-font mb-4">Soil Health Card</h2>
                        <p class="leading-relaxed text-base text-justify px-2">KrishiCare simplifies soil health reports
                            from labs into easily understandable soil health cards for farmers.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 ">
                    <div class="p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6 hover:shadow-lg hover:border"
                            src="https://cdn.britannica.com/87/192187-050-B42C0C0B/Doppler-radars-signal-echo-target-National-Weather.jpg"
                            alt="content">
                        <h2 class="text-lg text-gray-900 font-bold title-font mb-4">Weather Forecasting</h2>
                        <p class="leading-relaxed text-base text-justify px-2">KrishiCare provides real-time weather
                            forecasting, offering farmers invaluable access to up-to-date weather data crucial for
                            farming
                            decisions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 3 -->
    <section class="h-full py-8">
        <div class="h-[20%]">
            <div class="h-full w-full pb-8 flex flex-col justify-center items-center">
                <h1 class="text-4xl py-8 font-[poppins] h-full flex justify-center items-center uppercase">Weather</h1>
                <hr class="w-[90%]">
            </div>
        </div>
        <div class="h-fit w-full flex justify-center items-center">
            <div class="h-full w-[90%] text-start">
                <h1 class="text-3xl title-font font-[poppins] font-bold mb-4 uppercase">importance Of Weather in farming
                </h1>
                <p class="text-lg mt-4 text-gray-700 mb-4 text-justify">Weather plays a pivotal role in the success and
                    sustainability of farming, serving as both a blessing and a challenge for agricultural endeavors.
                    Every
                    aspect of farming, from crop selection to cultivation practices, is profoundly influenced by weather
                    patterns such as temperature, precipitation, humidity, wind, and sunlight. Timely rainfall and
                    moderate
                    temperatures can foster optimal crop growth, while extremes in weather conditions, such as droughts,
                    floods, heatwaves, or frost, can devastate crops and livelihoods. Additionally, changing climate
                    patterns due to global warming have brought unpredictability and volatility to weather systems,
                    further
                    complicating farming operations. Farmers rely on accurate weather forecasts and data-driven insights
                    to
                    make informed decisions about planting, irrigation, pest control, and harvesting, mitigating risks
                    and
                    maximizing yields. Moreover, advancements in technology, such as satellite imaging and weather
                    monitoring systems, have enabled farmers to monitor weather conditions in real-time, empowering them
                    to
                    adapt and innovate in response to changing environmental conditions. In essence, the importance of
                    weather in farming cannot be overstated; it is the ultimate arbiter of success or adversity, shaping
                    the
                    agricultural landscape and the lives of farmers around the world.
                </p>
            </div>
        </div>
        <div class="w-[90%] flex flex-col justify-between items-center h-96 bg-grey-lightest mx-auto shadow-xl rounded pb-4 bg-center bg-cover"
            style="color:#606F7B;background-color: rgb(165, 182, 198); background-image:url('https://68.media.tumblr.com/f6a4004f3092b0d664daeabb95d5d195/tumblr_oduyciOJNb1uhjffgo1_500.gif');">
            <div class="mt-2 p-4 text-center">
                <span class="text-4xl font-thin text-white">Weather nfluencing crop growth and agricultural
                    practices.</span>
                <span class="hidden sm:inline-block align-bottom text-xs">( 94041 )</span>
            </div>

            <div class="flex justify-center text-gray-100">
                <div class="text-center p-2">
                    <div class="text-lg text-grey-light">
                        <span class="text-right">45˚F</span>
                        <span class="text-center text-5xl mx-6  font-thin">49˚F</span>
                        <span class="text-left">58˚F</span>
                    </div>
                    <div class="text-grey-light tracking-wide">
                        Saturday | 30 Dec | 10:30pm
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h-full py-8 body-font overflow-hidden">
        <div class="h-[20%]">
            <div class="h-full w-full flex flex-col justify-center items-center">
                <h1 class="text-4xl py-8 font-[poppins] h-full flex justify-center items-center uppercase">Services</h1>
                <hr class="w-[90%]">
            </div>
        </div>
        <!-- <div class="text-gray-700 body-font bg-cover bg-center" style="background-image: url('https://images.pexels.com/photos/192136/pexels-photo-192136.jpeg?auto=compress&cs=tinysrgb&w=600');"> -->
        <div class="flex flex-wrap -m-4 mx-48 py-8 text-center">
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full flex justify-center items-center">
                <div class="border-2 w-full min-w-fit border-gray-200 px-12 py-6 rounded-lg bg-gray-100">
                    <img class="h-28 mx-auto"
                        src="https://cdn-icons-png.freepik.com/256/2998/2998906.png?uid=R129996386&ga=GA1.1.1933265658.1701935286&semt=ais"
                        alt="">
                    <h2 class="font-bold font-mono text-5xl text-gray-900">
                        <div class="counter" data-speed="1000">400</div>
                    </h2>
                    <p class="text-xl font-bold font-serif ">visiters</p>
                </div>
            </div>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full flex justify-center items-center">
                <div class="border-2 w-full min-w-fit border-gray-200 px-12 py-6 rounded-lg bg-gray-100">
                    <img class="h-28 mx-auto"
                        src="https://cdn-icons-png.freepik.com/256/14133/14133245.png?uid=R129996386&ga=GA1.1.1933265658.1701935286&semt=ais"
                        alt="">
                    <h2 class="font-bold font-mono text-5xl text-gray-900">
                        <div class="counter" data-speed="1000">25</div>
                    </h2>
                    <p class="text-xl font-bold font-serif ">Reports</p>
                </div>
            </div>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full flex justify-center items-center">
                <div class="border-2 w-full min-w-fit border-gray-200 px-12 py-6 rounded-lg bg-gray-100">
                    <img class="h-28 mx-auto"
                        src="https://cdn-icons-png.freepik.com/256/10839/10839252.png?uid=R129996386&ga=GA1.1.1933265658.1701935286&semt=ais"
                        alt="">
                    <h2 class="font-bold font-mono text-5xl text-gray-900">
                        <div class="counter" data-speed="1000">100</div>
                    </h2>
                    <p class="text-xl font-bold font-serif ">Farmers</p>
                </div>
            </div>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full flex justify-center items-center">
                <div class="border-2 w-full min-w-fit border-gray-200 px-12 py-6 rounded-lg bg-gray-100">
                    <img class="h-28 mx-auto"
                        src="https://cdn-icons-png.freepik.com/256/9088/9088919.png?uid=R129996386&ga=GA1.1.1933265658.1701935286&semt=ais"
                        alt="">
                    <h2 class="font-bold font-mono text-5xl text-gray-900">
                        <div class="counter" data-speed="1000">35</div>
                    </h2>
                    <p class="text-xl font-bold font-serif ">Labotatory</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-manrope text-4xl text-center text-gray-900 font-bold mb-14">Our results in numbers</h2>
            <div class="flex flex-col gap-5 xl:gap-8 lg:flex-row lg:justify-between">
                <div
                    class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                    <div class="flex gap-5">
                        <div class="font-manrope text-2xl flex justify-center items-center font-bold text-green-600">
                            <div class="counter" data-speed="1000">90</div>%
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl text-gray-900 font-semibold mb-2">Growth of farming</h4>
                            <p class="text-xs text-gray-500 leading-5">Farming remarkable growth journey as we
                                continually innovate and drive towards new heights of success.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                    <div class="flex gap-5">
                        <div class="font-manrope text-2xl flex justify-center items-center font-bold text-green-600">
                            <div class="counter" data-speed="1000">100</div>+
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl text-gray-900 font-semibold mb-2">Help Farmers</h4>
                            <p class="text-xs text-gray-500 leading-5">Our very talented team members are the powerhouse
                                of pagedone and pillars of our success. </p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                    <div class="flex gap-5">
                        <div class="font-manrope text-2xl flex justify-center items-center font-bold text-green-600">
                            <div class="counter" data-speed="1000">253</div>+
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl text-gray-900 font-semibold mb-2">Reports Completed</h4>
                            <p class="text-xs text-gray-500 leading-5">We have accomplished more than 250 reports and we
                                are still counting many more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        (() => {
            const counter = document.querySelectorAll('.counter');
            // covert to array
            const array = Array.from(counter);
            // select array element
            array.map((item) => {
                // data layer
                let counterInnerText = item.textContent;

                let count = 1;
                let speed = item.dataset.speed / counterInnerText

                function counterUp() {
                    item.textContent = count++
                    if (counterInnerText < count) {
                        clearInterval(stop);
                    }
                }
                const stop = setInterval(() => {
                    counterUp();
                }, speed);
            })
        })()
    </script>

    <?php include ("Footer.php"); ?>
</body>

</html>