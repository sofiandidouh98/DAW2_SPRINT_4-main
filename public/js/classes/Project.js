class Project {

    static checkProject() {


        let MIN_LENGTH= 3;
        let MAX_LENGTH= 15;

        let flag = false;
        let name = document.getElementById("projectname").value;
    
        if (name.length < MIN_LENGTH || name.length > MAX_LENGTH) {
            document.getElementById("errorProjectNameAdmin").innerText = "Nom del projecte incorrecte. El nom no compleix els requisits de longitud.";
            document.getElementById("projectname").style.border = '2px solid red';
            flag = true;
        } else {
            document.getElementById("errorProjectNameAdmin").innerText = "";
            document.getElementById("projectname").style.border = '1px solid #ccc';
        } 
    
        let localitat = document.getElementById("location").value;
    
        if (localitat.length < MIN_LENGTH || localitat.length > MAX_LENGTH) {
            document.getElementById("errorProjectLocationAdmin").innerText = "Localitat incorrecte. La localitat no compleix els requisits de longitud.";
            document.getElementById("location").style.border = '2px solid red';
            flag = true;
        } else {
            document.getElementById("errorProjectLocationAdmin").innerText = "";
            document.getElementById("location").style.border = '1px solid #ccc';
        }
    
        let descripcion = document.getElementById("description").value;
    
        if (descripcion.length < MIN_LENGTH) {
            document.getElementById("errorProjectDescriptionAdmin").innerText = "Descripcio incorrecte. La descripcio no compleix els requisits de longitud.";
            document.getElementById("description").style.border = '2px solid red';
            flag = true;
        } else {
            document.getElementById("errorProjectDescriptionAdmin").innerText = "";
            document.getElementById("description").style.border = '1px solid #ccc';
        } 
    
       if (flag != true) {
            document.forms[0].submit();
        } 
    
    } 
    
}