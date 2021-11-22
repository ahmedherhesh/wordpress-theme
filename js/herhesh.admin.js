jQuery(document).ready(function ($) {
    let mediaUploader;
    $("#upload_button").on("click", function (e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: "Choose a Profile Picture",
            button: {
                text: "Choose Picture",
            },
            multiple: false,
        });
    });
});
