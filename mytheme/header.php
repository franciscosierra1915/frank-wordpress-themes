<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Francisco Sierra Theme</title>
    <?php wp_head();?>
</head>
<body>
    <header>
        <div class="container">
        <?php wp_nav_menu(
            array(
                'theme-location' => 'top-menu',
                //'menu' => 'Top Bar',
                'menu_class' => 'top-bar',
            )
        );
        ?>
        </div>
    </header>
