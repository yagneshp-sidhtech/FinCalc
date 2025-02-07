<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('emi.calculator.emi') }}">EMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('compare.loan') }}">Compare Loans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('fd.calculator') }}">FD Calculator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sip.calculator') }}">SIP Calculator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rd.calculator') }}">RD Calculator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Currency Converter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gst.calculator') }}">GST Calculator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ppf.calculator') }}">PPF Calculator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ATM Finder</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bank Finder</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Finance Places</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>
