$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':
            $('meta[name="csrf-token"]').attr('content')
        }
    });

    const form = $('#contact-form');
    const formMessages = $('.form-message');

    form.on('submit', function (e) {

        e.preventDefault();

        const submitBtn = form.find('[type="submit"]');

        submitBtn.prop('disabled', true);

        $.ajax({
            type: 'POST',
            url: form.data('url'),
            data: form.serialize()
        })

        .done(function (response) {

            formMessages
                .removeClass('error')
                .addClass('success')
                .text(response.message || response);

            form.trigger('reset');

        })

        .fail(function (xhr) {

            formMessages
                .removeClass('success')
                .addClass('error');

            if (xhr.responseJSON?.errors) {

                let errors = [];

                $.each(xhr.responseJSON.errors, function (key, value) {
                    errors.push(value[0]);
                });

                formMessages.html(errors.join('<br>'));

            } else {

                formMessages.text(
                    'Ocorreu um erro ao enviar a mensagem.'
                );

            }

        })

        .always(function () {
            submitBtn.prop('disabled', false);
        });

    });

});