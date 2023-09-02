

let popup=document.getElementById("popup");


function openPopup(){
    popup.classList.add("open_popup");
}

function colsePopup(){
    popup.classList.remove("open_popup");
}

function delete_item(){
    document.getElementById("table_item").remove(0);
}
