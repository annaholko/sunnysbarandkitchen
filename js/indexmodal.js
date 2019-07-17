$(function () {
    $('.pop').on('click', function () {
        var title = $(this).data('title');
        var desc = $(this).data('desc');
        var source = $(this).data('source');
        $('.title').text(title);
        $('.desc').text(desc);
        $('.source').html(source);
        $('.imagepreview').attr('src', $(this).find('img').attr('src'));
        $('#imagemodal').modal('show');
    });
});