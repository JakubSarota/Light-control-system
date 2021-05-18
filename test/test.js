$(document).ready(function() {
    $('#btnToggle').on('click', function(e){
        let status;
        if($(this).text() == 'Turn On') {
            $(this).text('Turn Off')
            $(this).removeClass().addClass('btn btn-block btn-light');
            status = 'on';
        } else {
            $(this).text('Turn On');
            $(this).removeClass().addClass('btn btn-block btn-dark');
            status = 'off';
        }
    });
});