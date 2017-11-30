$(function(){
        $('#modalButton').click(function(){
                $('#modal').modal('show')
                    .find('#modalContent')
                    .load($(this).attr('value'));
            });

    });

function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(cityName).style.display = "block";
}