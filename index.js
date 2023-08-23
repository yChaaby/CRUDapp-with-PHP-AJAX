var selected;
function chargerTable() {
        $.post("table.php", function (rep) {
            $("#divTable").html(rep);
        });
    console.log("refresed");
    
}
$(document).ready(function () {
    chargerTable();
    
});


$("#Modify").submit(function (e){
    let c = 0
    if(!c){
    console.log("in");
    e.preventDefault();
    $.ajax({
        url: 'modif_exe.php',
        type: 'POST',
        data: {
            id: parseInt(selected.getAttribute('value')) ,
            Titre: $("#titrem").val(),
            Auteur: $("#auteurm").val(),
            date: $("#datem").val(), },
            success: function (response) {
                chargerTable();
                close();
                c++;
        }
    });
    
}
});

$("#Add").submit( function(e) {
    e.preventDefault();
    let c = 0
    if(!c){
    $.ajax({
        url: 'add.php',
        type: 'POST',
        data: {
            Titre: $("#titre").val(),
            Auteur: $("#auteur").val(),
            date: $("#date").val()
        },
        success: function (re) {
            chargerTable();
            c++;
        }
    });
    
}
    
});
function modify(event){
    if(selected!=null)
    selected.parentElement.style.backgroundColor="rgb(0, 123, 255)";
    let x = event.target;
    $("#addForm").hide();
    $("#modifyForm").fadeIn();
    x.parentElement.style.backgroundColor="Red";
    selected = x;

}
function del(event){
    event.preventDefault();
    id=parseInt(event.target.getAttribute('value'));
    if(confirm("are you sure ?"))
    $.ajax({
        type: "POST",
        url: "supp_exe.php",
        data: { id : id },
        success: function (response) {
            chargerTable();
        }
    });
}
function close(){
    $("#modifyForm").hide();
    $("#addForm").fadeIn();
    selected.parentElement.style.backgroundColor="rgb(0, 123, 255)";
    chargerTable();
}
$('#close').click(function (e) { 
    e.preventDefault();
    close()
});


