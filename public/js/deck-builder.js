var $results = $('#results');
var imgBuilder = function(cards) {
    console.log(cards);
    $results.html('');
    cards.forEach(function (element, index) {
        if(index % 4 == 0 && index != 0){
            $results.append("<img class='col-md-2' style='float: left; clear: left;' src=" + element.img + ' name="' + element.name + '">');
        } else{
            $results.append("<img class='col-md-2' style='float: left;' src=" + element.img + ' name="' + element.name + '">');

        }
    });
}
$(document).ready(function() {
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

