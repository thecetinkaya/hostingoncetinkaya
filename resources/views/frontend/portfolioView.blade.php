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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
    <div class="container max-w-screen-xl mx-auto flex justify-end mt-5">
        <a href="{{url('/portfolyom')}}">
            <button class="font-medium md:font-semibold text-lg px-7 py-3   hover:text-gray-700 text-black  rounded-lg ttransition ease-in-out delay-150  bg-gray-300 hover:-translate-y-1 hover:scale-110 hover:bg-gray-500 duration-200">
                <span>
                    <i class="mr-2 fa-solid fa-backward"></i>
                </span>
                Geri Dön 
                
            </button>
        </a>
    </div>
    <section class="py-10 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
                <div class="space-y-24">
                    <div class="flex space-x-6">
                        <div>
                            <h1 class="font-normal text-center mb-10 text-gray-700 text-6xl md:text-4xl">
                                {{$portfolio->title}}
                            </h1>
                            <div class="grid grid-cols-2 gap-12">
                                <div class="">
                                    <p class="font-normal text-gray-500 text-xl md:text-base">
                                        {{$portfolio->content}}
                                    </p>
                                </div>
                                <div class="w-full">
                                    <img src="{{url('assets/images/portfolio').'/'.$portfolio->image}}" alt="">
                                </div>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
        </div>

    </section>

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
