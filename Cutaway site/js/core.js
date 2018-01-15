
// return a random integer between 0 and number
function random(number) {

    return Math.floor( Math.random()*(number+1) );
};

// show random quote
$(document).ready(function() {

    var quotes =  $('.quotation');

    $(quotes[random(quotes.length-1)]).show();
});

