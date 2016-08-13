<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <!--            <a id="menu-toggle" href="#" class="navbar-toggle">-->
            <!--                <span class="sr-only">Toggle navigation</span>-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
        </div>
        <div id="sidebar-wrapper" class="sidebar-toggle">
            <ul id="deckEditor" class="sidebar-nav">
                <li>
                    <a href="#item1" id="pickaclass">Pick a Class</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div id="custom-search-input">
            <div class="input-group col-md-10 col-md-offset-2">
                <form method="get">
                    <input type="text" class="search-query form-control" id="df" placeholder="Search" />
                    <div id="checkboxes" class="input-group col-md-8 col-md-offset-3">
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
            </div>
        </div>
    </div>
</div>
<div id="results"></div>
<!--<div style="background-color: black; height: 450px; width: 400px; position: fixed; right: 40px; top: 250px;" class="col-md-2">-->
<!--    <h1>Deck Editor</h1>-->
<!--</div>-->
