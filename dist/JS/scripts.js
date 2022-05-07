$('#login-page').on('click', '.toggle-register-btn', (e) => {
    $('.login-form, .register-form').each((index, element) => {
        const $element = $(element);

        if ($element.hasClass('hidden')) {
            $element.removeClass('hidden');
        } else {
            $element.addClass('hidden');
        }
    });
});
