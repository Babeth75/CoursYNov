var socket = io.connect('http://localhost:3000'); // On se connecte au socket du serveur pour avoir les informations en temps r�el

// Si le socket nous informe qu'il y a une notification qui se nomme UserState, il executera le callback. 
socket.on('UserState', function (data) {
    // nous ins�rons dans la span la valeur envoy�e par le socket
    $('.connected-number').text(data);
});