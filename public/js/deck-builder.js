$(document).ready(function() {
    var $search = $('#df');
    $search.keydown(function (key) {
        clearTimeout($.data(this, 'timer'));
        if (key.keyCode == 13) {
            event.preventDefault();
            search(true);
        } else {
            $(this).data('timer', setTimeout(search, 500));
        }
    });
    function search(force) {
        var existingSearch = $search.val();
        if (!force && existingSearch.length < 1) {
            return;
        }
        //console.log(existingSearch)
        var $searchVal = $('#df').val();
        searchEngine(['name'], $searchVal);
    }
});