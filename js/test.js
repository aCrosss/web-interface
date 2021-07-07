var text = document.querySelector("#textLog")

try{
var socket = new WebSocket("ws://127.0.0.1:8000");
}
catch(err){
    
}

socket.onopen = function(event){
    console.log("Connected to server!");
}

socket.onmessage = function(event){
    console.log("Recieved a message!");
    var message = event.data;
    text.value = message;
}

socket.onerror = function(event){
    console.error(event);
}

function sendMessage(){
    console.log("Should send message by now");
    socket.send("send_log");
}