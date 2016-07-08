/**
 * Created by parthchokshi on 07/04/16.
 */
$(document).ready(function(){
    $('ul.tabs').tabs();
});

$(document).ready(function() {
    $('select').material_select();
});

$(document).ready(function(){
    $('.tabs-wrapper .row').pushpin({ top: $('.tabs-wrapper').offset().top });
});