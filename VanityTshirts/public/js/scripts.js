$(document).ready(function() {
    $('#adminNav').hide();

    setTimeout(function(){ $('#adminNav').fadeIn(300); }, 50);

    $('#adminNavClose').click(function() {
        $('#adminNav').hide();
    });
});