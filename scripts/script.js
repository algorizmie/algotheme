(function($){
    'use strict';
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((block) => {
            hljs.highlightBlock(block);
        });
    });
    const header = $('#header');
    if($(this).scrollTop() >= 60&& !header.hasClass('header--background')) header.addClass("header--background");
    $(document).on('scroll', function () {
        let scrollTop = $(this).scrollTop();
        if(scrollTop >= 60 && !header.hasClass('header--background')) header.addClass("header--background");
        if(scrollTop < 60 && header.hasClass('header--background')) header.removeClass("header--background");
    });
}(jQuery))