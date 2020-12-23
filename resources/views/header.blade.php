<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <title>Phizza Hut</title>

</head>

<body>

    @guest
    
        <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
            <!-- Image and text -->
            <a class="navbar-brand text-white" href="/">
                <img src="{{ asset('assets/logopizza.png') }}" width="30" height="30" class="d-inline-block align-top"
                    alt="" loading="lazy">
                Phizza Hut
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </nav>

    @else
        @if (auth()->user()->role == 'Member')
            <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
                <!-- Image and text -->
                <a class="navbar-brand text-white" href="/">
                    <img src="{{ asset('assets/logopizza.png') }}" width="30" height="30" class="d-inline-block align-top"
                        alt="" loading="lazy">
                    Phizza Hut
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/transactionhistory">View Transaction History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/viewcart">View Cart</a>
                        </li>
                        <li class="nav-item dropdown nav">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="" class="nav-link dropdown-toggle text-white">Member</a>
                            <div class="dropdown-menu">
                                <a href="/logout" class="dropdown-item">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        @endif

        @if (auth()->user()->role == 'Admin')
            <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
                <!-- Image and text -->
                <a class="navbar-brand text-white" href="/">
                    <img src="{{ asset('assets/logopizza.png') }}" width="30" height="30" class="d-inline-block align-top"
                        alt="" loading="lazy">
                    Phizza Hut
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/viewalltransaction">View All User Transaction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/viewalluser">View All User</a>
                        </li>
                        <li class="nav-item dropdown nav">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="" class="nav-link dropdown-toggle text-white">Admin</a>
                            <div class="dropdown-menu">
                                <a href="/logout" class="dropdown-item">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        @endif

    @endguest

    <div style="padding-top: 5rem">
        @yield('content');
    </div>

</body>

</html>
