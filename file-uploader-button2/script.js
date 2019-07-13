jQuery(document).ready(function($){
    //wp file uploader
    var file_frame;
    $('.rng-button-banner2').live('click', function (event) {
        event.preventDefault();
        window.prev_element = $(this).prev('.rng-link-banner2');
        window.next_element = $(this).next('.rng-btn-reset2');
        if (file_frame) {
            file_frame.open();
            return;
        }
        file_frame = wp.media.frames.file_frame = wp.media();

        file_frame.on('select', function () {
            attachment = file_frame.state().get('selection').first().toJSON();
            prev_element.val(attachment.url);
            next_element.prop("disabled", false);
        });
        file_frame.open();
    });
    $('.rng-btn-reset2').on('click', function (event) {
        event.preventDefault();
        $(this).prev('.rng-button-banner2').prev('.rng-link-banner2').val('');
        $(this).prop("disabled", true);

    });
});