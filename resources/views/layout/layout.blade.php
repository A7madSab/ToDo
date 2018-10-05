<!DOCTYPE html>
<html lang="en">
<head>
    <!--Required MetaData-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--BootStrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Title-->
    <title>{{$title}}</title>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">To Do List</a>
        <div class="container">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#anything">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="anything">
                <ul class="navbar-nav">
                    <li class="nav-item active"> 
                        <a href="#" class="nav-link"> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> link </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> link </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> link </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> link </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        @yield('Content')
    </div>
    
    
    
    <footer class="jumbotron ">
        <div class="container">
            <h1 class="display-4">footer</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>


    <!--Scripts-->
    <div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>
</body>
</html>