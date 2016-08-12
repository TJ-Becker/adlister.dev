var $results = $('#results');
$results.html('');
var imgBuilder = function(img) {
    img.forEach(function (element, index) {
        $results.append("<img src=" + element + ">");
    });
}
$(document).ready(function() {
    var $search = $('#df');
    $search.keydown(function (key) {
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
        console.log(searchEngine(['name'], $searchVal, 'cardId'));
        imgBuilder(searchEngine(['name'], $searchVal, 'img'));
    }
});

