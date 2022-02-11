<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Dashboard</a>
        <div class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://user-images.githubusercontent.com/97863651/153309749-6598d9bd-fa96-489f-abf8-f87e6316954c.png" width="40" height="40" class="rounded-circle">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <h5 class="text-center"><?php echo $_SESSION['name']?></h5>
                    <hr />
                    <a class="dropdown-item" href="action.php?pages=dashboard">Dashboard</a>
                    <a class="dropdown-item" href="action.php?pages=data-entry">Product Entry</a>
                    <a class="dropdown-item" href="action.php?pages=all-data">All Product</a>
                    <a class="dropdown-item" href="action.php?pages=logs">Logs</a>
                    <a class="dropdown-item" href="action.php?pages=task">App</a>
                    <a class="dropdown-item" href="action.php?pages=signout">Log Out</a>
                </div>
            </li>
        </div>
    </div>
</nav>




