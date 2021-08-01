<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('images/g1344.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased">

    <div class="hero min-h-screen bg-base-200">
        <div class="text-center hero-content grid grid-cols-1 lg:grid-cols-2 gap-5">
            
            <img src="{{ asset('images/g898.png') }}" class="max-w-full sm:max-w-sm mb-4">

            <div class="card glass lg:card-side text-neutral-content">
                <div class="max-w-md card-body">
                    <h2 class="card-title">Mohon ditunggu..</h2>
                    <p>
                        <div class="grid grid-cols-4 gap-5 justify-items-center" data-theme="light">
                            <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                                <span class="font-mono text-5xl countdown">
                                    <span id="days" style="--value:15;"></span>
                                </span>
                                days
                            </div>
                            <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                                <span class="font-mono text-5xl countdown">
                                    <span id="hours" style="--value:10;"></span>
                                </span>
                                hours
                            </div>
                            <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                                <span class="font-mono text-5xl countdown">
                                    <span id="minutes" style="--value:24;"></span>
                                </span>
                                min
                            </div>
                            <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                                <span class="font-mono text-5xl countdown">
                                    <span id="seconds" style="--value:60;"></span>
                                </span>
                                sec
                            </div>
                        </div>
                    </p>
                    <div class="card-actions mx-auto">
                        <a href="https://github.com/alifirhas/Rinse/projects/1">
                            <button class="btn glass rounded-full normal-case">
                                <img src="https://github.com/fluidicon.png" class="inline-block w-6 h-6 ml-2 stroke-current mr-2" alt=""> Lihat di GitHub
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Sep 1, 2021 00:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
            // Get today's date and time
            var now = new Date().getTime();
            
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Display the result in the element with id="demo"
            // console.log(days + "d " + hours + "h " + minutes + "m " + seconds + "s ");

            // document.getElementById("days").innerHTML = days;
            // document.getElementById("hours").innerHTML = hours;
            // document.getElementById("minutes").innerHTML = minutes;
            // document.getElementById("seconds").innerHTML = seconds;

            document.getElementById("days").style.cssText = '--value:' + days + ';';
            document.getElementById("hours").style.cssText = '--value:' + hours + ';';
            document.getElementById("minutes").style.cssText = '--value:' + minutes + ';';
            document.getElementById("seconds").style.cssText = '--value:' + seconds + ';';

            
            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
</body>

</html>