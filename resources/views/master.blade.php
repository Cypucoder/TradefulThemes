<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets/css/styles.min.css') }}"  rel="stylesheet">

    <!--'resources/css/bootstrap.min.css', 'style.min.css',-->
</head>
<body class="b_3">
<nav class="navbar navbar-dark navbar-expand-md b_2" style="font-family: Alatsi, sans-serif;">
        <div class="container-fluid"><a class="navbar-brand c_W">Dynamic Theme Creator</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active c_W" href="#" data-toggle="modal" data-target="#about">About</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active c_W" href="/angular">View Angular</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="about" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">About</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>This is a demo submission for Tradeful. It showcases the use of both Laravel and Angular versions of a theme picker site. <br /><br />Click &quot;View Angular&quot; or &quot;View Laravel&quot; to see the difference.</p>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>
    @yield('content')

    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>