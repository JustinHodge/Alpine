$('.login-page').on('click', '.toggle-register-btn', (e) => {
    console.log('test');
    $('.login-form, .register-form').each((index, element) => {
        const $element = $(element);

        if ($element.hasClass('hidden')) {
            $element.removeClass('hidden');
        } else {
            $element.addClass('hidden');
        }
    });
});

$('#logout-button').on('click', (e) => {
    $.get('index.php', { logout: '1' }, () => {
        window.location = window.location;
    });
});
