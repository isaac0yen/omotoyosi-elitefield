$(document).ready(function() {
    "use strict";

    // Configuration for the contact form validation
    $('#contactForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            subject: {
                required: true,
                minlength: 4
            },
            number: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true,
                minlength: 20
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must be at least 2 characters long"
            },
            subject: {
                required: "Please provide a subject",
                minlength: "Your subject must be at least 4 characters long"
            },
            number: {
                required: "Please enter your phone number",
                minlength: "Your phone number must be at least 5 digits"
            },
            email: {
                required: "Email address is required",
                email: "Please enter a valid email address"
            },
            message: {
                required: "Please enter your message",
                minlength: "Your message must be at least 20 characters long"
            }
        },
        /**
         * Handles the form submission after successful validation.
         * @param {HTMLFormElement} form - The form element.
         * @param {Event} event - The submit event.
         */
        submitHandler: function(form, event) {
            event.preventDefault(); // Prevent the default form submission

            const $form = $(form);
            const $submitButton = $form.find('button[type="submit"]');

            // Disable button to prevent multiple submissions and provide feedback
            $submitButton.prop('disabled', true).text('Sending...');

            $.ajax({
                type: "POST",
                url: "contact_process.php", // The URL to your processing script
                data: $form.serialize()
            })
            .done(function(response) {
                // On success, disable all form fields and show the success modal
                $form.find(':input').prop('disabled', true);
                $form.find('label').css('cursor', 'default');
                $('#success').modal('show'); // Assumes you're using Bootstrap modals
            })
            .fail(function() {
                // On error, show the error modal
                $('#error').modal('show');
            })
            .always(function() {
                // On failure, you might want to re-enable the button.
                // For this example, if the request fails, the user can refresh.
                // If you want them to be able to try again without a refresh:
                // if (jqXHR.status !== 200) {
                //   $submitButton.prop('disabled', false).text('Send Message');
                // }
            });
        }
    });

    /* * The custom validation method 'answercheck' was removed because it was not
     * being used in the validation rules. If you need it for a CAPTCHA-like
     * field, you can add it back like this:
     *
     * jQuery.validator.addMethod('answercheck', function (value, element) {
     * return this.optional(element) || /^\bcat\b$/i.test(value); // i for case-insensitive
     * }, "Please type the correct answer.");
    */
});