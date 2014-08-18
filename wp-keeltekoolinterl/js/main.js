$(document).ready(function () {
    var modalNarrow = $('#modal-narrow');
    // enable custom checkbox/radio buttons (requires prettyCheckable.js)
//  $('.prettyCheckable input').prettyCheckable();

    // jQuery placeholder (requires jquery.placeholder.js)
    $('input, textarea').placeholder();

    // Dropdowns
    var frontSelector = $('.langSelect2');
    $('.langSelect').click(function (e) {
        $('.list').slideToggle('fast');
        e.stopPropagation();
    });
    frontSelector.find('.holder').click(function (e) {
        frontSelector.find('.list').slideToggle('fast');
        e.stopPropagation();
    });
    frontSelector.find('.list a').click(function (e) {
        var txt = $(this).text();
        frontSelector.find('.holder').text(txt);
        frontSelector.find('.list').slideToggle('fast');
        e.stopPropagation();
    });
    $('body,html').click(function () {
        $('.list').slideUp('fast');
    });

    // Show contact
    $('.toggleContact').click(function () {
        $('#kirjuta-meile').slideToggle();
        return false;
    });
    var hash = window.location.hash;
    if(hash && hash == '#open'){
        $('#kirjuta-meile').show();
    }

    // Trans modal
    $('.showTransForm').click(function () {
        modalNarrow.fadeToggle();
    });
    modalNarrow.find('.btn-close').click(function () {
        modalNarrow.fadeOut();
    });
    modalNarrow.find('.modal-content').click(function(e){
        e.stopPropagation();
    })
    modalNarrow.click(function(){
        modalNarrow.fadeOut();
    });

//  Cycle for clients
    $('#sliderClients').cycle({
        fx: 'scrollHorz',
        timeout: false,
        speed:  1500,
        prev:   '.prev',
        next:   '.next'
    });
    var testNav = $('#testNavi li');
    $('#testSlider').cycle({
        fx: 'scrollHorz',
        timeout: 0,
        speed:  1500,
        startingSlide: 3,
        after:   onAfter
    });
    testNav.click(function(){
        var index = $(this).index();     
        if( $("html").hasClass("lt-ie9") )    
            index = Math.floor(index / 2);
        
        $('#testSlider').cycle(index);
        return false;
    });
    function onAfter(curr, next, opts) {
        var index = opts.currSlide;
        testNav.removeClass('current-item');
        testNav.eq(index).addClass('current-item');
    }
    // Tabs
    $('.list-accordion > li > .title').click(function(){
        var elem = $(this);
        var parent = elem.parent();
        if(!parent.hasClass('open')){
//            $('.list-accordion > li ul').slideUp();
            $('.list-accordion > li').removeClass('open');
        }
        parent.toggleClass('open');
        return false;
    });
    if(window.location.hash) {
        var hash = window.location.hash;
        $('.list-accordion > li').removeClass('open');
        $(hash).addClass('open');
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 500);
        return false;
    }
    var thumbnails = 'a:has(img)[href$=".jpg"]:not(".disabled"),a:has(img)[href$=".JPG"]:not(".disabled"),a:has(img)[href$=".png"]:not(".disabled")';
    $('#middleArea ' + thumbnails).fancybox();
    $('a.fancybox').fancybox({
        padding:0
    });
    $('.contentArea .block-grid.two-up').masonry({
        itemSelector: 'li'
    });
    $('#terms').fancybox({
        type: 'iframe',
        afterShow: function () {

        }
    });
});