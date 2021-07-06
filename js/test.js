window.onload = function(){

    var button = document.getElementsByName("change");
    var text = document.getElementById("textLog");

    var socket = new WebSocket("ws://127.0.0.1:1111");

    socket.onerror = function(error){
        console.log("Error: " + error);
    }

    socket.onopen = function(event){
        console.log("Connected to server!");
    }

    button.onclick = function(){
        console.log("Should send message by now");
        socket.send("send_log");
    }

    socket.onmessage = function(event){
        console.log("Recieved a message!");
        var message = event.data;
        text.text = message;
    }
}