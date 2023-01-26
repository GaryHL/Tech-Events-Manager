<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>

<body class="container_home">
    <h1 class="title">Home</h1>
    <p class="subtitle"> Eventos destacados:</p>

    <div class="slideshow-container">

        @foreach ($events as $event)
            @if ($event->outstanding === 'yes')
                <div class="mySlides fade" >
                    <a href="/events/{{ $event->id }}">
                        <img src={{ $event->url_img }} style="width:100%" >
                        <h4 class="text">{{ $event->title }}</h4>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
    <nav class="navbar">
        <a href="/home">
            <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json" trigger="hover" class="iconNav"
                colors="primary:#08D698,secondary:#08D698">
            </lord-icon>
        </a>
        <a href="/events">
            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="hover" class="iconNav"
                colors="primary:#ffffff,secondary:#ffffff">
            </lord-icon>
        </a>
        <a href="/profile">
            <lord-icon src="https://cdn.lordicon.com/imamsnbq.json" trigger="hover" class="iconNav"
                colors="primary:#ffffff,secondary:#ffffff">
            </lord-icon>
        </a>
        <a href="/events/tickets/myTickets">
            <lord-icon src="https://cdn.lordicon.com/cjieiyzp.json" colors="primary:#ffffff,secondary:#ffffff" class="iconNav"
                trigger="hover"> </lord-icon>
        </a>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

    <script>
        var slideIndex = 0;

        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex >
                slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000);
        }
    </script>
</body>

</html>
