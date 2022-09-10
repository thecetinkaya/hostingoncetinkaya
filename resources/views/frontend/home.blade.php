<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
    <section class="py-10 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
            <nav class="flex items-center justify-center mb-24">
                <div class="w-1/6 "> <img src="/assets/img/logo.png"></div>

            </nav>
            <div class="text-center">
                <div class="flex justify-center mb-12">
                    <img src="/assets/img/burak2.png" class="rounded-full w-1/4" />
                </div>
                <h6 class="font-medium text-gray-600 text-lg md:text-2xl uppercase mb-8">
                    burak çetinkaya
                </h6>
                <h1 class="font-normal text-gray-900 text-4xl md:text-7xl leading-none mb-16">
                    Full Stack Developer
                </h1>
                <button href="#"
                    class="font-medium md:font-semibold text-lg px-7 py-3   hover:text-gray-700 text-black  rounded-lg ttransition ease-in-out delay-150  bg-gray-300 hover:-translate-y-1 hover:scale-110 hover:bg-gray-500 duration-200">Download CV</button>
            </div>
        </div>
    </section>
    <section class="py-10 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-20">Skills</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                @if ($skills)
                    @foreach ($skills as $skill)
                        <div class="bg-gray-50 px-8 py-10 rounded-md">

                            <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                                <i class="fa fa-{{ $skill->icon }}"></i>
                            </div>
                            <h4 class="font-medium text-gray-700 text-lg mb-4">{{ $skill->title }}</h4>
                            <p class="font-normal text-gray-500 text-md">
                                {{ $skill->content }}
                            </p>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </section>
    <section class="py-10 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row justify-between">
                <div class="mb-10 lg:mb-0">
                    <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Portfolio</h1>
                    @if($count<1)<p class="font-normal text-gray-500 text-xs md:text-base">
                       şu anda gösterilecek veri yok
                    </p>
                    @else
                    <p class="font-normal text-gray-500 text-xs md:text-base">
                        Lorem ipsum dolor sit amet consectetur.
                     </p>
                    @endif
                </div>
                <div class="space-y-24">
                    @if ($portfolios)
                        @foreach ($portfolios as $portfolio)
                            <a class="flex space-x-6" href="{{ url('/portfolyom' . '/' . $portfolio->id) }}">
                                <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">0{{ $loop->index + 1 }}</h1>
                                <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>
                                <div>
                                    <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">
                                        {{ $portfolio->title }}</h1>
                                    <p class="font-normal text-gray-500 text-xs md:text-base">{{ $portfolio->content }}
                                    </p>
                                </div>

                            </a>
                        @endforeach
                    @endif

                </div>

            </div>
            @if($count>3)
            <a href="{{ url('/portfolyom') }}">
                <button
                    class="float-right mt-10 font-medium md:font-semibold text-lg px-7 py-3   hover:text-gray-700 text-black  rounded-lg ttransition ease-in-out delay-150  bg-gray-300 hover:-translate-y-1 hover:scale-110 hover:bg-gray-500 duration-200">
                    View All
                    <span>
                        <i class="ml-2 fa-solid fa-forward"></i>
                    </span>
                </button>
            </a>
            @endif
            
        </div>

    </section>
    <section class="py-10 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Education</h1>
            <p class="font-normal text-gray-500 text-xs md:text-base mb-20">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                @if ($educations)
                    @foreach ($educations as $education)
                        <div class="bg-gray-50 px-8 py-10 rounded-md">
                            <h4 class="font-medium text-gray-700 text-lg mb-4">{{ $education->title }}</h4>
                            <p class="font-normal text-gray-500 text-md mb-4">{{ $education->content }}</p>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section>
    <section class="py-10 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Experience</h1>
            <p class="font-normal text-gray-500 text-xs md:text-base mb-20">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Ratione, dicta!</p>
            <div class="flex flex-col lg:flex-row justify-between">
                @if ($experiences)


                    <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                        <h6 class="font-medium text-gray-400 text-base uppercase">Company</h6>
                        @foreach ($experiences as $experience)
                            <p class="font-semibold text-gray-600 text-base">
                                {{ $experience->company }}
                                <span class="font-medium text-gray-400"> /{{ $experience->job }}</span>
                            </p>
                        @endforeach


                    </div>
                    <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                        <h6 class="font-medium text-gray-400 text-base uppercase">Position</h6>
                        @foreach ($experiences as $experience)
                            <p class="font-semibold text-gray-600 text-base">
                                {{ $experience->position }}
                            </p>
                        @endforeach

                    </div>
                    <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                        <h6 class="font-medium text-gray-400 text-base uppercase">Year</h6>
                        @foreach ($experiences as $experience)
                            <p class="font-semibold text-gray-600 text-base">
                                {{ date('d.m.Y', strtotime($experience->year));  }}
                            </p>
                        @endforeach

                    </div>
                @endif
            </div>
        </div>
    </section>
    <footer class="py-10 md:py-16 mb-20 md:mb-40 lg::mb-52">

        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="">
                <section class="">
                    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">Contact</h2>
                        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500  sm:text-xl">
                            Have a question? You can let me know...</p>
                        <form action="{{ url('iletisim') }}" method="POST" class="space-y-8">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name and Surname</label>
                                <input type="text" id="name" name="name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-gray-700 focus:border-gray-700 block w-full p-2.5"
                                    placeholder="Burak Çetinkaya" required>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email
                              </label>
                                <input type="email" id="email" name="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-gray-700 focus:border-gray-700 block w-full p-2.5"
                                    placeholder="example@example.com" required>
                            </div>
                            <div>
                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
                                <input type="text" id="subject" name="subject"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 shadow-sm focus:ring-gray-700 focus:border-gray-700  "
                                    placeholder="What do you want help with?" required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Message</label>
                                <textarea id="message" rows="6" name="message"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl shadow-sm border border-gray-300 focus:ring-gray-700 focus:border-gray-700 "
                                    placeholder="Enter your message"></textarea>
                            </div>
                            <button type="submit"
                                class="py-3 px-5 text-sm font-medium text-center bg-gray-300 rounded-xl bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 ">Send</button>
                        </form>
                    </div>
                </section>
                <div class="flex items-center justify-center space-x-8">

                    <a href="#"
                        class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-twitter text-gray-500 hover:text-gray-800 transition ease-in-out duration-500">
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                            </path>
                        </svg>
                    </a>

                    <a href="#"
                        class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-dribbble text-gray-500 hover:text-gray-700 transition ease-in-out duration-500">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path
                                d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32">
                            </path>
                        </svg>
                    </a>

                    <a href="#"
                        class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-facebook text-gray-500 hover:text-gray-700 transition ease-in-out duration-500">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>

                    <a href="#"
                        class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-codepen text-gray-500 hover:text-gray-700 transition ease-in-out duration-500">
                            <polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon>
                            <line x1="12" y1="22" x2="12" y2="15.5"></line>
                            <polyline points="22 8.5 12 15.5 2 8.5"></polyline>
                            <polyline points="2 15.5 12 8.5 22 15.5"></polyline>
                            <line x1="12" y1="2" x2="12" y2="8.5"></line>
                        </svg>
                    </a>

                    <a href="#"
                        class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-at-sign text-gray-500 hover:text-gray-700 transition ease-in-out duration-500">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                        </svg>
                    </a>

                    <a href="#"
                        class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-instagram text-gray-500 hover:text-gray-700 transition ease-in-out duration-500">
                            <rect x="2" y="2" width="20" height="20" rx="5"
                                ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </footer>

    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <script>
        var themeToggleDarkIcon = document.getElementById(
            "theme-toggle-dark-icon"
        );
        var themeToggleLightIcon = document.getElementById(
            "theme-toggle-light-icon"
        );

        // Change the icons inside the button based on previous settings
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            themeToggleLightIcon.classList.remove("hidden");
        } else {
            themeToggleDarkIcon.classList.remove("hidden");
        }

        var themeToggleBtn = document.getElementById("theme-toggle");

        themeToggleBtn.addEventListener("click", function() {
            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle("hidden");
            themeToggleLightIcon.classList.toggle("hidden");

            // if set via local storage previously
            if (localStorage.getItem("color-theme")) {
                if (localStorage.getItem("color-theme") === "light") {
                    document.documentElement.classList.add("dark");
                    localStorage.setItem("color-theme", "dark");
                } else {
                    document.documentElement.classList.remove("dark");
                    localStorage.setItem("color-theme", "light");
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains("dark")) {
                    document.documentElement.classList.remove("dark");
                    localStorage.setItem("color-theme", "light");
                } else {
                    document.documentElement.classList.add("dark");
                    localStorage.setItem("color-theme", "dark");
                }
            }
        });
    </script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>
