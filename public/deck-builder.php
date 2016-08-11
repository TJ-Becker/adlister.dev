<?php
function pageController() {

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HearthLister</title>
    <link rel="stylesheet" type="text/css" href="css/deck-builder.css">
</head>
</head>
<body>
<!--include the navbar partial-->
<div id="wrapper">
    <form method="get" action="">
        <input type="text" id="df" value=""/>
        <select>
            <option>all</option>
            <option>rarity</option>
            <option>playerClass</option>
            <option>cardSet</option>
            <option>type</option>
            <option>name</option>
            <option>race</option>
            <option>mechanics</option>
            <option>cost</option>
            <option>text</option>
        </select>
    </form>
</div><!-- #wrapper -->
<div id="results">

</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<?php require_once '../views/partials/common_js.php'; ?>
<script src="js/deck-builder.js"></script>
</body>
</html>