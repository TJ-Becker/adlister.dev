
//    $('#search').on('keydown')
// relevant attribute types: rarity, playerClass, cardSet, type, name, cardId, cost, race, mechanics.name/text.strposition() for spells with mechanics
// attribute could be an array?????
var attributes = ['rarity', 'playerClass', 'cardSet', 'type', 'name', 'race', 'mechanics', 'cost', 'text'];

//    console.log(search.toLowerCase());
var loopThroughCards = function(set) {
    set.forEach(checkCardAgainstInput);
};

var checkCardAgainstInput = function (card) {
    if (card.collectible && card.type.toLowerCase() != 'hero') {
        attributes.forEach(function(attribute, index) {
            var currentAttribute = card[attribute];
            if (currentAttribute != null && attribute == 'mechanics'){
                currentAttribute.forEach(function (mechanic, indice) {
                    if(mechanic.name.toLowerCase() == search.toLowerCase()){
                        cards.push(card);
                    }
                })
            } else if (currentAttribute != null && attribute == 'text' ){
                if(currentAttribute.toLowerCase().indexOf(search.toLowerCase()) != -1 && Array.isArray(search.match(/[a-z]/i))){
                    cards.push(card);
                }
            } else if (attribute == 'cost') {
                if(currentAttribute == parseInt(search) && Array.isArray(search.match(/[a-z]/i)) != true){
                    cards.push(card);
                }
            } else if (currentAttribute != null) {
                if(currentAttribute.toLowerCase().indexOf(search.toLowerCase()) != -1){
                    cards.push(card);
                }
            }
        })
    }
};

var searchEngine = function(attributes, search){
    $.get('/cards.json', {
        data: {}
    }).done(function (data) {
        var cards = [];
        var sets = Object.keys(data);
        console.log(sets);
        for (var i = 0; i < sets.length; i++) {
            var setName = sets[i];
            loopThroughCards(data[setName]);
        }



        // var cardImages = [];
        // var sets = Object.keys(data);
        // console.log(sets);
        // sets.forEach(function (e, i) {            //// iterates through all sets
        //     data[sets[i]].forEach(function (element, index) {    /// iterates through each card in a set
        //         if (data[sets[i]][index].collectible === true && data[sets[i]][index].type.toLowerCase() != 'hero') {    //// checks if card is usable aka collectible and is not a hero
        //             attributes.forEach(function(ele, ind) {     ////// iterates through all relevant card attributes
        //                 var currentAttribute = data[sets[i]][index][attributes[ind]]; ///// variable containing current attribute path
        //                 if (attributes[ind] == 'mechanics' && currentAttribute != null) {     /// checks mechanics and if property exists
        //                     currentAttribute.forEach(function(elem, inde){ /// iterates through all mechanics and checks against search
        //                         if(currentAttribute[inde].name.toLowerCase() == search.toLowerCase()){
        //                             cardImages.push(data[sets[i]][index][wantedValue]);
        //                         }
        //                     })
        //                     /// checks text and if property exists
        //                 } else if (attributes[ind] == 'text' && currentAttribute != null){
        //                     //checks for substring of search and if search is alphabetic
        //                     if (currentAttribute.toLowerCase().indexOf(search.toLowerCase()) != -1 && Array.isArray(search.match(/[a-z]/i))) {
        //                         cardImages.push(data[sets[i]][index][wantedValue]);
        //                     }
        //                     /// checks cost - all cards have a cost
        //                 }else if (attributes[ind] == 'cost') {
        //                     if(currentAttribute == parseInt(search) && Array.isArray(search.match(/[a-z]/i)) != true){
        //                         cardImages.push(data[sets[i]][index][wantedValue]);
        //                     }
        //
        //                     /// checks if property exists and checks against remaining attributes
        //                 }else if (currentAttribute != null) {
        //                     if(currentAttribute.toLowerCase().indexOf(search.toLowerCase()) != -1){
        //                         cardImages.push(data[sets[i]][index][wantedValue]);
        //                     }
        //
        //
        //                 }
        //
        //             })
        //
        //         }
        //     });
        // });
        return cards;
    });
//
};
searchEngine(['name'], '');



///// below here is working search function//////
// relevant attribute types: rarity, playerClass, cardSet, type, name, cardId, cost, race, mechanics.name/text.strposition() for spells with mechanics
// attribute could be an array?????
var attributes = ['rarity', 'playerClass', 'cardSet', 'type', 'name', 'race', 'mechanics', 'cost', 'text'];
var searchEngine = function(attributes, search, wantedValue){
    $.get('/cards.json', {
        data: {}
    }).done(function (data) {
        var cardImages = [];
        var sets = Object.keys(data);
        console.log(sets);
        sets.forEach(function (e, i) {            //// iterates through all sets
            data[sets[i]].forEach(function (element, index) {    /// iterates through each card in a set
                if (data[sets[i]][index].collectible === true && data[sets[i]][index].type.toLowerCase() != 'hero') {    //// checks if card is usable aka collectible and is not a hero
                    attributes.forEach(function(ele, ind) {     ////// iterates through all relevant card attributes
                        var currentAttribute = data[sets[i]][index][attributes[ind]]; ///// variable containing current attribute path
                        if (attributes[ind] == 'mechanics' && currentAttribute != null) {     /// checks mechanics and if property exists
                            currentAttribute.forEach(function(elem, inde){ /// iterates through all mechanics and checks against search
                                if(currentAttribute[inde].name.toLowerCase() == search.toLowerCase()){
                                    cardImages.push(data[sets[i]][index][wantedValue]);
                                }
                            })
                            /// checks text and if property exists
                        } else if (attributes[ind] == 'text' && currentAttribute != null){
                            //checks for substring of search and if search is alphabetic
                            if (currentAttribute.toLowerCase().indexOf(search.toLowerCase()) != -1 && Array.isArray(search.match(/[a-z]/i))) {
                                cardImages.push(data[sets[i]][index][wantedValue]);
                            }
                            /// checks cost - all cards have a cost
                        }else if (attributes[ind] == 'cost') {
                            if(currentAttribute == parseInt(search) && Array.isArray(search.match(/[a-z]/i)) != true){
                                cardImages.push(data[sets[i]][index][wantedValue]);
                            }

                            /// checks if property exists and checks against remaining attributes
                        }else if (currentAttribute != null) {
                            if(currentAttribute.toLowerCase().indexOf(search.toLowerCase()) != -1){
                                cardImages.push(data[sets[i]][index][wantedValue]);
                            }


                        }

                    })

                }
            });
        });
        console.log(cardImages);
    });
//
};
searchEngine(['name'], '', 'img');


