
var buttonSubtask = document.getElementById("add-subtask");
cont = 0


function addSubtask(){
    cont += 1
    buttonSubtask.parentElement.children[1].innerHTML += 
`<div class="input">
    <input type="text" name="subtask${cont}" id="subtask" placeholder="e.g. Fazer café">
    <button type="button" onclick="removeSubtask(this)" id="remove-subtask"> X </button>
</div>`;
}

function removeSubtask(buttonRemoveSubtask){
    buttonRemoveSubtask.parentElement.innerHTML = "";
}

function addTask(){
    document.getElementsByClassName("display-none")[0].classList = "";

}