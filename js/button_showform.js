var inscription
document.getElementById("form_button").style.display = "none";

var buttons = document.getElementsByClassName("switchbutton");

for(let button of buttons) {
    button.addEventListener("click", switchforms);
}

function switchforms(e) {
    if(document.getElementById("form_button").style.display == "none") {
        document.getElementById("form_button").style.display = "block";
    }
}