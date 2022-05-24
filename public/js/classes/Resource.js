class Resource {
    
}

function eliminarRecurs(resource) {
    document.getElementById("resource-name").innerHTML = resource.name;
    document.getElementById("resources").value = resource.id;

    $('#modalRecurs').modal({
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