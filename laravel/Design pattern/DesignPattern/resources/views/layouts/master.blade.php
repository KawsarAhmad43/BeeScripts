<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            transition: background-color 0.5s;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Add your custom styles for light and dark modes here */
        .dark-mode {
            background-color: #333;
            color: #fff;
        }

        .container {
            margin-top: 50px;
        }

        nav {
            background-color: #007bff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .navbar-toggler:focus {
            outline: none;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .nav-item {
            margin: 0 15px;
        }

        .nav-link {
            font-size: 1.2rem;
            color: #fff;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .form-check-input {
            background-color: #fff;
        }

        .form-check-label {
            color: #fff;
            margin-left: 5px;
        }

        h1 {
            margin-top: 20px;
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Design pattern Laravel</title>
</head>
<body>


    @include('includes.navbar') <!-- Include the navbar blade file -->

    <div class="container">
        @yield('content') 
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
    }
</script>

</body>
</html>
