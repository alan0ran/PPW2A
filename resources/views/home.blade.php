<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Portofolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="/posts">Creation</a>
        <a class="nav-item nav-link" href="/education">Education</a>
        <a class="nav-item nav-link" href="/projects">Projects</a>
        <a class="nav-item nav-link" href="/about">About</a>
        </div>
    </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
