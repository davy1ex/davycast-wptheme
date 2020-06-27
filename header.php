<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davycast - Index page</title>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="toggle">
            <div class="menu"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
        <div class="header_wrapper">            
            
            <div class="header_container ">
                <a href="index.html"><div class="header_item logo">davy<span>cast</span></div></a>
            </div>

           
            <?php wp_nav_menu( array(
                'theme_location'    => 'mainmenu',
                'container'         => 'div',
                'menu_class'        => 'header_container',
            ));?>

            <!-- <div class="header_container">
                <ul>
                    <li class="header_item"><a href="index.php">HOME</a></li>
                    <li class="header_item"><a href="about_us.html">ABOUT US</a></li>
                    <li class="header_item"><a href="contacts.html">SPEAKERS</a></li>
                    <li class="header_item"><a href="news.html">NEWS</a></li>

                    <li class="header_item"><a href="contacts.html">CONTACTS</a></li>
                    <li class="header_item"><a href="buy_tickets.html">BUY TICKETS</a></li>
                </ul>
                
            </div> -->
        </div>
    </header>
