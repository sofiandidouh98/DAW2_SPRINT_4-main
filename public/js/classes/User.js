class User {
    
}

function eliminarUsuari(users) {
    document.getElementById("user-name").innerHTML = users.name;
    document.getElementById("users").value = users.id;

    $('#modalDelUsers').modal({
        backdrop: 'static',
        keyboard: false
    })
}

function modificarPassUser(users) {

    document.getElementById("userNamePass").innerHTML = users.name;
    document.getElementById("idmodPassUser").value = users.id;

    $('#modalModPassUser').modal({
        backdrop: 'static',
        keyboard: false
    })
}

$(document).ready(function () {
    $("#alert").hide();
    $("#alert")
      .fadeTo(4000, 1000)
      .slideUp(1000, function () {
        $("#alert").slideUp(1000);
    });
});