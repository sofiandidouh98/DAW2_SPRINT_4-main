class Document {

    static checkDocument(){

        const MIN_LENGTH = 3;
        const MAX_LENGTH = 25;
        let flag = false;

        let name = document.getElementById("name").value;

        if (name.length < MIN_LENGTH || name.length > MAX_LENGTH) {
            document.getElementById("errorname").innerText = "Nom incorrecte. El nom no compleix els requisits de longitud.";
            document.getElementById("name").style.border = '2px solid red';
            flag = true;
        } else {
            document.getElementById("errorname").innerText = "";
            document.getElementById("name").style.border = '1px solid #ccc';
        }

        if (!flag) {
            document.forms[0].submit();
        }

        //ficar also numèric a alguns camps
    }

}