$(document).ready(function () {
    $('#button').click(function() {
        $.get('http://localhost:63342/projectWIN/bomba.html', function (data) {
            $('#pagina').html(data);


        });
    });
});
