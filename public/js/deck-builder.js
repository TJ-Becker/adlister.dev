var $results = $('#results');
var imgBuilder = function (cards) {
    console.log(cards);
    $results.html('');
    cards.forEach(function (element, index) {
        if (index % 5 == 0 && index != 0) {
            if (element.playerClass != null) {
                $results.append("<img data-value='" + element.cost + "' data='" + element.playerClass + "' class='col-md-2 card' style='padding: ; float: right; clear: right;' src=" + element.img + ' name="' + element.name + '">');
            } else {
                $results.append("<img data-value='" + element.cost + "' data='Neutral' class='col-md-2 card' style='padding: ; float: right; clear: right;' src=" + element.img + ' name="' + element.name + '">');
            }
        } else {
            if (element.playerClass != null) {
                $results.append("<img data-value='" + element.cost + "' data='" + element.playerClass + "' class='col-md-2 card' style='padding: ; float: right;' src=" + element.img + ' name="' + element.name + '">');

            } else {
                $results.append("<img data-value='" + element.cost + "' data='Neutral' class='col-md-2 card' style='padding: ; float: right;' src=" + element.img + ' name="' + element.name + '">');

            }

        }
    });
}
$(document).ready(function () {
    var $search = $('#df');
    $search.keyup(function (key) {
        clearTimeout($.data(this, 'timer'));
        if (key.keyCode == 13) {
            event.preventDefault();
        } else {
            $(this).data('timer', setTimeout(search, 500));
        }
    });
    function search() {
        var $searchVal = $('#df').val();
        console.log($searchVal);
        searchEngine($searchVal);
    }
});
///////////////////pick a class function//////////
var $deckEditor = $('#deckEditor');
var $pickaclass = $('#pickaclass');
console.log($pickaclass);
var classes = ['Druid', 'Hunter', 'Mage', 'Paladin', 'Priest', 'Rogue', 'Shaman', 'Warlock', 'Warrior'];
$(document).ready(function () {


    $pickaclass.click(function () {
        $deckEditor.html('');
        classes.forEach(function (e, i) {
            $deckEditor.append("<li><a>" + e + "</a></li>");
        });
    });

});


////////////////// deck editor populator//////
var $cards = $('.card');
$($cards).onclick(function (event) {


});

