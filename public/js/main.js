$(document).ready(function () {
    "use strict";

    $('ul a').click(function (e) {


            if ($($(this).data('value')).hasClass('close')) {
                $($(this).data('value')).fadeIn().removeClass('close').addClass('open');
            } else if($($(this).data('value')).hasClass('open')){
                $($(this).data('value')).hide().addClass('close').removeClass('open');
            }else {
                return;
            }

        e.preventDefault();
    });




});