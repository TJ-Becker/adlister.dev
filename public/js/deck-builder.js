var $results = $('#results');
var imgBuilder = function(cards) {
    console.log(cards);
    $results.html('');
    cards.forEach(function (element, index) {
        $results.append("<img src=" + element.img + ">");
    });
}
$(document).ready(function() {
    var $search = $('#df');
    $search.keypress(function (key) {
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

