<!--Partial view for common javascipt files-->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
<script>
    //    $('#search').on('keydown')
    // relevant attribute types: rarity, playerClass, cardSet, type, name, cardId, cost, race, mechanics.name/text.strposition() for spells with mechanics
    // attribute could be an array?????
    var attributes = ['rarity', 'playerClass', 'cardSet', 'type', 'name', 'race', 'mechanics', 'cost', 'text'];
    var cardImages = [];
    var search = 'War';
    console.log(search.toLowerCase());

    $.get('/cards.json', {
        data: {}
    }).done(function (data) {
        var sets = Object.keys(data);
        console.log(sets);
        sets.forEach(function (e, i) {                            //// iterates through all sets
            data[sets[i]].forEach(function (element, index) {    /// iterates through each card in a set
                if (data[sets[i]][index].collectible === true && data[sets[i]][index].type.toLowerCase() != 'hero') {    //// checks if card is collectible and is not a hero aka usable
                    attributes.forEach(function(ele, ind) {                        ////// iterates through all relevant card attributes
                        if (attributes[ind] == 'mechanics' && data[sets[i]][index][attributes[ind]] != null) {     /// checks mechanics and if property exists
                                data[sets[i]][index][attributes[ind]].forEach(function(elem, inde){
                                    if(data[sets[i]][index][attributes[ind]][inde].name.toLowerCase() == search.toLowerCase()){
                                        cardImages.push(data[sets[i]][index].img);
                                    }
                                })
                            /// checks text and if property exists
                        } else if (attributes[ind] == 'text' && data[sets[i]][index][attributes[ind]] != null){
                            //checks for substring of search and if search is alphabetic
                                if (data[sets[i]][index][attributes[ind]].toLowerCase().indexOf(search.toLowerCase()) != -1 && Array.isArray(search.match(/[a-z]/i))) {
                                    cardImages.push(data[sets[i]][index].img);
                                }
                            /// checks cost - all cards have a cost
                        }else if (attributes[ind] == 'cost') {
                            if(data[sets[i]][index][attributes[ind]] == parseInt(search) ){
                                cardImages.push(data[sets[i]][index].img);
                            }

                            /// checks if property exists and checks against remaining attributes
                        }else if (data[sets[i]][index][attributes[ind]] != null) {
                            if(data[sets[i]][index][attributes[ind]].toLowerCase().indexOf(search.toLowerCase()) != -1){
                                cardImages.push(data[sets[i]][index].img);
                            }


                        }

                    })

                }
            });
        });
        console.log(cardImages);
        // cardImages.forEach(function(e,i) {
        //     //iterate cards images into html///
        //
        // });
    });
</script>