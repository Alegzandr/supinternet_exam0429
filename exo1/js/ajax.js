$(function () {
    $('.error').remove();
    $('.win').remove();

    $('form[name="game"').submit(function () {
        $.ajax({
            url: '/exo1/validate.php',
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                if (data.error) {
                    $('body').append(data.error);
                }
                else {
                    $('body').append(data.win);
                }
            }
        });

        return false;
    });
});
