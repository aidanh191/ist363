<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>starbuckrino coffer</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
</head>
<body>
    <header>
        <div class="overlay" id="mobileMenu">

            <button class="btn-ui" id="closeBtn">
                <img src="<?php bloginfo('template_directory');?>/img/close.svg" alt="close menu icon"/>
            </button>

            <nav class="nav-mobile">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/menu">Menu</a>
                    </li>
                    <li>
                        <a href="/partials/locations/list.php">Locations</a>
                    </li>
                    <li>
                        <a href="/partials/employees/list.php">Employees</a>
                    </li>
                    <li>
                        <a href="/partials/products/list.php">Products</a>
                    </li>
                </ul>
            </nav>
        </div><!--/.mobile menu-->

        <div class="container">
            <div class="row align-items-center justify-content-space-between">
                <div class="row">
                    <img 
                    src="<?php bloginfo('template_directory');?>/img/starbucks-logo.svg" 
                    alt="starbucks logo" 
                    class='logo'/>
                    <nav class="nav-primary">
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/menu">Menu</a>
                            </li>
                            <li>
                                <a href="/partials/locations/list.php">Locations</a>
                            </li>
                            <li>
                                <a href="/partials/employees/list.php">Employees</a>
                            </li>
                            <li>
                                <a href="/partials/products/list.php">Products</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="" class="btn btn--secondary">Sign in</a>
                    <a href="" class="btn btn--primary ml-1">Join now</a>
                </div>
                <!--prof says that classes should be agnostic of their responsiveness and thats why this is called header right-->
                <button class="btn-ui" id="menuBtn">
                    <img 
                        src="<?php bloginfo('template_directory');?>/img/menu.svg" alt="menu icon"
                    />
                </button>
                
                
            </div> 
        </div>
    
    </header>
   
    <main>