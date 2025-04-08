<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
     <style>
       
        body {
            background-color:rgb(0, 145, 255); /
            color: #333; 
        }

       
        .navbar {
            background-color:rgb(0, 157, 255); 
        }

        
        .btn-outline-success {
            border-color: #58a6d5; 
            color: #58a6d5; 
        }

        .btn-outline-success:hover {
            background-color: #58a6d5; 
            color: white;
        }

       
        input[type="text"] {
            background-color: #f0f8ff; 
            border: 1px solid #a1c8e0; 
        }

      
        button {
            background-color:rgb(0, 157, 255); 
            border-color: #58a6d5; 
            color: white;
        }

        button:hover {
            background-color:rgb(0, 153, 255); 
        }
    </style>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="">Something else here</a></li>
            <li><a class="dropdown-item" href="">Something else here</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <?php
$dayofweek = date("w");

switch ($dayofweek) {
    case 1:
        echo "It is Monday!";
        break;
        case 2:
        echo "It is Tuesday!";
        break;
        case 3:
        echo "It is Wednesday!";
        break;
        case 4:
        echo "It is Thursday!";
        break;
        case 5:
        echo "It is Friday!";
        break;
        case 6:
        echo "It is Saturday!";
        break;
        case 0:
        echo "It is Sunday!";
        break;
}
  ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"></script>

  </body>
</html>