<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Quiz</title>

        <link href="public/css/bootstrap.min.css" rel="stylesheet" />

    </head>
    <body> 
        <header id="header" class="header">
            <div class="container">
				Quiz System
            </div>
        </header>
        <section id="content" class="home-content">
            <div class="container">
                <div class="row">
                    <?php $this->load->view($view_file) ?>
                </div>
            </div>
        </section>

    </body>

</html>
