<!--partial view for navbar-->
<nav style="background-color: black;" class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 nav_container" id="header_nav">
                <ul class="social-network social-circle">
                    <!--                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>-->
                    <!-- <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li> -->
<!--                    <li><a href="https://www.twitter.com/rksugarfree" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>-->
<!--                     <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>-->
<!--                    <li><a href="https://www.linkedin.com/in/robert-kerr-818590124" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>-->
                </ul>

                <ul class="nav nav-pills" id="nav">
                    <li role="presentation" class="navbutton" id="user-edit"><a class="listItem" href="user-edit">
                            <?= "Hello " . $_SESSION['IS_LOGGED_IN'] ?></a></li>
                    <!-- <li role="presentation" class="navbutton blogProjects"><a class="listItem" href="blog.html">Blog</a></li> -->
                    <li role="presentation" class="navbutton" id="decks"><a class="listItem" href="decks">Decks</a></li>
                    <li role="presentation" class="navbutton" id="deckBuilder"><a class="listItem" href="deck-builder">DeckBuilder</a></li>
                    <li role="presentation" class="navbutton" id="logout"><a class="listItem" href="/logout">Logout</a></li>
<!--                    <li role="presentation" class="navbutton" id="logIn"><a class="listItem" href="login.php">LogIn</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</nav>