$(function () {
    $('form[name="game"]').submit(function () {
        if ($('input[name="match4"]').is(':disabled')) {
            $('input[name="match4"]').removeAttr("disabled");
            $('input[name="match5"]').removeAttr("disabled");
            $('input[name="match6"]').removeAttr("disabled");
        }
        else if ($('input[name="match7"]').is(':disabled')) {
            $('input[name="match7"]').removeAttr("disabled");
            $('input[name="match8"]').removeAttr("disabled");
            $('input[name="match9"]').removeAttr("disabled");
        }
        else if ($('input[name="match10"]').is(':disabled')) {
            $('input[name="match10"]').removeAttr("disabled");
            $('input[name="match11"]').removeAttr("disabled");
            $('input[name="match12"]').removeAttr("disabled");
        }
        else if ($('input[name="match13"]').is(':disabled')) {
            $('input[name="match13"]').removeAttr("disabled");
        }

        return false;
    });
});
