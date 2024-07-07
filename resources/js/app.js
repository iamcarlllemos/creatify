import 'bootstrap'

$('.hamburger-wrapper').on('click', function() {
    if(!$('.hamburger').hasClass('active')) {
        $('.hamburger').addClass('active');
    } else {
        $('.hamburger').removeClass('active');
    }

    if(!$('.sidebar').hasClass('active')) {
        $('.sidebar').addClass('active');
    } else {
        $('.sidebar').removeClass('active');
    }

    if(!$('.content').hasClass('active')) {
        $('.content').addClass('active');
    } else {
        $('.content').removeClass('active');
    }
});


$('#show-preferences').on('click', function() {
    if(!$('.preferences').hasClass('active')) {
        console.log(123);
        $('body, .preferences, .backdrop').addClass('active');
    } else {
        console.log(456);
        $('body, .preferences, .backdrop').removeClass('active');
    }
});

$('#hide-preferences').on('click', function() {
    $('body, .preferences, .backdrop').removeClass('active');
});

$('#hide-sidebar').on('click', function() {
    $('.sidebar, .content, .hamburger').removeClass('active');
})

$('.form-control').on('focus', function() {
    $(this).addClass('active');
}).on('blur', function() {
    if ($(this).val().trim() === '') {
        $(this).removeClass('active');
    }
});

// $(".skills-multiple-select").select2({
//     width: '100%',
//     theme: 'classic',
//     placeholder: ' - CHOOSE SKILLS - ',
//     allowClear: false
// });