<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{title}}</title> 

        <?php wp_head(); ?>

    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" 
                        data-target="#menu-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WINDING RIVERS</a>
            </div>
            <div class="collapse navbar-collapse" id="menu-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="about.html" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    </li>
                    <li><a href="properties.html">Development</a></li>
                    <li><a href="financial_model.html">Financial Model</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <form class="navbar-form navbar-right" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="PEXH3B2NKBGX6">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </nav>