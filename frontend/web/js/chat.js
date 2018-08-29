var messages;

var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
    document.getElementById('ChatMessages').value = e.data + '\n' + document.getElementById('ChatMessages').value;
};

conn.onerror = function(e) {
    console.log("Connection failed!");
};

// Запрещаем submit формы, чтобы не обновлять страницу (иначе затираются сообщения)
document.getElementById('messageForm').addEventListener('submit', function (event) {
    event.preventDefault();
    sendMessage();
});

//функция отправки сообщения
function sendMessage(){
    conn.send(document.getElementById('messageInput').value);
}