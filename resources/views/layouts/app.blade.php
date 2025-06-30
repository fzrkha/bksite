<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BK Site</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: hsl(0, 0%, 96%)">
    <div id="app">
        <div class="main-wrapper">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark fixed-top">
                <a href="/" class="navbar-brand ps-3">BK Site</a>
            </nav>
            <div class="main-content pt-5">@yield('content')</div>
            <div class="container-fluid px-4">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-muted">Copyright &copy; RPL 2023</p>
                </footer>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>
</html>