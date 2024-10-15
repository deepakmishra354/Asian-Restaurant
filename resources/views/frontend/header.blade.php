<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background-color: white; /* Background color set to white */
        }
         .nav{
            left:600px
         }
        

        @media (max-width: 767px) {
            .navbar-nav {
                display: none; /* Hide nav items by default on small screens */
                text-align: center;
            }

            .navbar-nav.show {
                display: block; /* Show nav items when the class is added */
            }
            .nav{
            left:0px;
         }

            .navbar-toggle {
                float: right;
                margin-right: 15px;
                display: block; /* Ensure the toggle button is displayed */
            }
        }

        /* Adjust styles for navbar */
        .navbar {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <img src="img/logo.jpg" alt="" class="navbar-brand scroll-top" style="width: 100px; height:100px ; border-radius:50px">
            <!-- <a href="#" class="navbar-brand scroll-top" style="width: auto;">Victory</a> -->
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <img src="img/togal.png" alt="" height="40px" width="100px">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" style="margin-top: 20px; font-weight: 800;">
                        <li><a href="{{route('data')}}">Home</a></li>
                        <li><a href="{{route('menus')}}">Our Menus</a></li>
                        <li><a href="{{route('blogs-data')}}">Blog Entries</a></li>
                        <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#nav-toggle').click(function () {
                $('#main-nav').collapse('toggle'); // Toggle the collapse
                $('.navbar-nav').toggleClass('show'); // Toggle show class on .navbar-nav
            });
        });
    </script>
</body>
</html>
