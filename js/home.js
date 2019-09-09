//Overlay

var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function openModal(){
    document.getElementById('id01').style.display='block';
}