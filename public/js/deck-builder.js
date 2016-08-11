// $(document).ready(function() {
//     var $search = $('#df');
//     $search.keyup(function (key) {
//         clearTimeout($.data(this, 'timer'));
//         if (key.keyCode == 13) {
//             search(true);
//         } else {
//             $(this).data('timer', setTimeout(search, 500));
//         }
//     });
//     function search(force) {
//         var existingSearch = $search.val();
//         if (!force && existingSearch.length < 3) {
//             return;
//         }
//         //console.log(existingSearch)
//         $.get(existingSearch, function (data) {
//             $('div#results').html(data);
//             $('#results').show();
//         });
//     }
// });