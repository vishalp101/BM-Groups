<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-right-text">
                <h3>Call Us : <a href=tel: +919227421521><i class="fa fa-phone">92274 21521</a></i> Email :  <a href="https://mail.google.com/mail/?view=cm&fs=1&to=jankienterprise311218@gmail.com" target="_blank"><i>jankienterprise311218@gmail.com</a></i></h3>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="logo">
                <a href="Index.php"><img src="images/logo.png" /></a>
            </div>
            <div class="navigation">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="<?php echo ($currentPage == 'Index.php') ? 'active' : ''; ?>">
                                <a href="Index.php">Home</a>
                            </li>
                            <li class="<?php echo ($currentPage == 'About.php') ? 'active' : ''; ?>">
                                <a href="About.php">About</a>
                            </li>
                            <li class="<?php echo ($currentPage == 'Products.php') ? 'active' : ''; ?>">
                                <a href="Products.php">Products</a>
                            </li>
                            <li class="<?php echo ($currentPage == 'Contact.php') ? 'active' : ''; ?>">
                                <a href="Contact.php">Contact Us</a>
                            </li>
                        </ul>

                        <div class="clearfix"> </div>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>