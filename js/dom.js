

let popup=document.getElementById("popup");
var index, table = document.getElementById('table');

function openPopup(){
    popup.classList.add("open_popup");
}

function colsePopup(){
    popup.classList.remove("open_popup");
}


for(var i = 1; i < table.rows.length; i++)
{
    table.rows[i].cells[7].onclick = function()
    {
        var c = confirm("do you want to delete this row");
        if(c === true)
        {
            index = this.parentElement.rowIndex;
            table.deleteRow(index);
        }
        
        //console.log(index);
    };
    
}