class Administrator {

}

function eliminarAdministrador(admin) {
    document.getElementById("admin-name").innerHTML = admin.name;
    document.getElementById("administrators").value = admin.id;

    $('#modalDelAdmin').modal({
        backdrop: 'static',
        keyboard: false
    })
}

function modificarPassAdministrador(admin) {

    document.getElementById("adminNamePass").innerHTML = admin.name;
    document.getElementById("idmodPassAdmin").value = admin.id;

    $('#modal-modPassAdministrador').modal({
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