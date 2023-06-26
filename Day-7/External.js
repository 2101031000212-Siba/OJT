

function demoExternalAlert() {
    alert("External Alert");
}
function demoExternalConfirm() {
    if (confirm("Are you sure..??")) {
        alert("YESS");
    }
    else {
        alert("NOOO");
    }
}
function demoExternalPrompt() {
    var fName = prompt("Enter Firstname here..");
    var LName = prompt("Enter Lastname here..");
    alert(fName + "" + lName);
}
