$('form').submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "../mailer/smart.php",
        data: $(this).serialize()
    }).done(function () {
        $(this).find("input").val("");
        alert("Сообщение успешно отправлено");
        $("form").trigger("reset");
        $('.modal').modal('hide');
    });
    return false;
});
$('.sl').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    adaptiveHeight: true,
    prevArrow: "<img src='https://svgshare.com/i/6Ei.svg' class='prev' alt='1'>",
    nextArrow: "<img src='https://svgshare.com/i/6Gf.svg' class='next' alt='2'>",
    cssEase: 'linear'
});
$('.monials-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    arrows: false,
    adaptiveHeight: true,
    cssEase: 'linear'
});
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    swipe: false,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    infinite: true,
    swipe: false,
    focusOnSelect: true
});
