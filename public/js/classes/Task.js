class Task {

    static checkTask(){

        const MIN_LENGTH = 3;
        const MAX_LENGTH = 25;
        const MAX_LENGTH_desc = 144;
        let flag = false;

        let name = document.getElementById("taskname").value;

        if (name.length < MIN_LENGTH || name.length > MAX_LENGTH) {
            document.getElementById("errortaskname").innerText = "Nom incorrecte. El nom no compleix els requisits de longitud.";
            document.getElementById("taskname").style.border = '2px solid red';
            flag = true;
        } else {
            document.getElementById("errortaskname").innerText = "";
            document.getElementById("taskname").style.border = '1px solid #ccc';
        }

        let desc = document.getElementById("taskdesc").value;
        if (desc.length < MIN_LENGTH || desc.length > MAX_LENGTH_desc) {
            document.getElementById("errortaskdesc").innerText = "Descripció incorrecta. La descripció no compleix els requisits de longitud.";
            document.getElementById("taskdesc").style.border = '2px solid red';
            flag = true;
        } else {
            document.getElementById("errortaskdesc").innerText = "";
            document.getElementById("taskdesc").style.border = '1px solid #ccc';
        }


        if (!flag) {
            document.forms[0].submit();
        }

    }

}

/*popover for showing task description*/
$(function() {
    $(".tasks-draggable").popover({
                trigger: "hover"
            });
});

function allowDrop(ev) {
    ev.preventDefault(); //default is not to allow drop
}

/* start dragging the task */
function onDragStart(event) {
    event
        .dataTransfer
        .setData('text/plain', event.target.id);

    /*event
      .currentTarget
      .style
      .backgroundColor = '#A4D1BB';*/
}

/* while dragging the task*/
function onDragOver(event) {
    event.preventDefault();
}

/*dropping the task*/
function onDrop(event) {
    const id = event
        .dataTransfer
        .getData('text');
    var draggableElement = document.getElementById(id);
    const dropzone = event.target;
    dropzone.appendChild(draggableElement); //adding element to the list
    event
        .dataTransfer
        .clearData();

    changeState(id, draggableElement);//change state frontend
}


function changeState(id, draggableElement) {//change state frontend
    var state = document.getElementById(id).parentElement.id;//looking for the column
    var id_state;
    if (state == "todo") {
        id_state = 1;
        draggableElement.classList.remove('inprogress', 'done');
        draggableElement.classList.add('todo');
    } else if (state == "inprogress") {
        id_state = 2;
        draggableElement.classList.remove('todo', 'done');
        draggableElement.classList.add('inprogress');
    } else if (state == "done") {
        id_state = 3;
        draggableElement.classList.remove('inprogress', 'todo');
        draggableElement.classList.add('done');
    }

    var todo = document.querySelectorAll('.todo');
    var inprogress = document.querySelectorAll('.inprogress');
    var done = document.querySelectorAll('.done');
    for (let i = 0; i < todo.length; i++) {
        todo[i].style.backgroundColor = '#010c1a';
    }
    for (let i = 0; i < inprogress.length; i++) {
        inprogress[i].style.backgroundColor = '#003d88';
    }
    for (let i = 0; i < done.length; i++) {
        done[i].style.backgroundColor = '#0068e7';
    }


    asyncChangeState(id,id_state);

}

function noAllowDrop(ev) {
    ev.stopPropagation();
}