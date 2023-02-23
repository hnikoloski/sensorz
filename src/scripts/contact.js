import axios from 'axios';
jQuery(document).ready(function ($) {

    $('.send-contact-form').on('submit', function (e) {
        e.preventDefault();
        var $form = $(this);
        let api_url = $form.attr('action');

        // serialize the form data
        var formData = $form.serialize();

        $form.find('input, button, textarea').prop('disabled', true);
        $form.find('.form-response').hide(); // hide the response div first just in case

        axios.post(api_url, formData)
            .then(function (response) {
                $form.find('.form-response p').text(response.data.message);
                $form.find('input, button, textarea').prop('disabled', false);
                if (response.data.error == true) {
                    $form.find('.form-response').removeClass('success');
                    $form.find('.form-response').addClass('error');
                    $form.find('.form-response').show();
                } else {
                    $form[0].reset();
                    $form.find('.form-response').removeClass('error');
                    $form.find('.form-response').addClass('success');
                    $form.find('.form-response').show();
                }
            })
            .catch(function (error) {
                console.log(error);
            });

    });

});