$(function () {
    $('form[name="game"').submit(function () {
        $('.error').remove();
        $('.win').remove();

        $.ajax({
            url: '/exo1/validate.php',
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                if (data.error) {
                    $('main').append(data.error);
                }
                else {
                    $('main').append(data.win);
                }
            }
        });

        return false;
    });
});
