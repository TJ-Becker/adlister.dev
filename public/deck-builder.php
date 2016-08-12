<?php
include_once "../views/partials/common_js.php";
include_once "../views/partials/navbar.php";
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
    <link rel="stylesheet" type="text/css" href="/css/deck-builder-search-bar.css">
    <link rel="stylesheet" type="text/css" href="/css/deck-builder-custom.css">
          <style>
              .nav-pills li a:hover {
                  color: black;
                  background-color: green;
              }
              .nav-pills li a:active {
                  color: black;
                  background-color: green;
              }

              .active1 {
                  background-color: green;
                  color: black;
                  border-radius: 4px;
              }
              .nav_container {
                  height: 100px;
                  /*background-color: orange;*/
                  /*position: fixed;*/
                  /*top: 0;*/
                  /*right: 0;*/
                  /*float: top;*/
                  /*padding-bottom: 100px;*/
              }
              #nav {
                  position: absolute;
                  bottom: 0;
                  right: 10px;

              }

              .listItem {
                  color: green;
                  font-weight: bold;
              }
          </style>




</head>
</head>
<body id="deck-builder">
<!--include the navbar partial-->
<div id="wrapper">
    <form method="get" action="">
        <input type="text" id="df" />
            <div id="checkboxes">
                <input type="checkbox" value="all">All</input>
                <input type="checkbox" value="rarity">Rarity</input>
                <input type="checkbox" value="playerClass">Class</input>
                <input type="checkbox" value="cardSet">Set</input>
                <input type="checkbox" value="type">Type</input>
                <input type="checkbox" value="name">Name</input>
                <input type="checkbox" value="race">Race</input>
                <input type="checkbox" value="mechanics">Mechanic</input>
                <input type="checkbox" value="cost">Cost</input>
                <input type="checkbox" value="text">Text</input>
            </div>
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