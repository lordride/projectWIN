$(document).ready(function () {
    $('#button1').click(function() {
        $.get('http://localhost:63342/projectWIN/INICIO.php', function (data) {
            $('#pagina').html(data);
        });
    });
});
$(document).ready(function () {
    $('#button2').click(function() {
        $.get('http://localhost:63342/projectWIN/COLUNA2.php', function (data) {
            $('#pagina').html(data);
        });
    });
});
$(document).ready(function () {
    $('#button3').click(function() {
        $.get('http://localhost:63342/projectWIN/bomba.html', function (data) {
            $('#pagina').html(data);
        });
    });
});
