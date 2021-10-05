var updatedAt = "1970-1-1";
var chats = [];
var firstTime = true;
let time = 0;
let chat_prevLength = 0;

async function startChatFetching(workId, senderId) {
    ChatFetcher(workId, senderId);
    timer = setInterval(function () {
        ChatFetcher(workId, senderId);
    }, 3000);
}

async function ChatFetcher(workId, senderId, isFromSend = false) {
    let allData = "";
    await fetch(`/work/chat/fetch/${workId}/${updatedAt}`)
        .then((response) => response.json())
        .then((data) => {
            allData = data;
        });

    chats = allData[3];

    let messageDiv = document.getElementById("messages");
    messageDiv.innerHTML = "";

    chats.map((chat) => {
        messageDiv.innerHTML += `<li class="list-group-item ${
            chat.sender_id == senderId ? "sender" : "reciever"
        }">${chat.message}</li>`;
    });

    updatedAt = allData[2];
    if (chat_prevLength != chats.length) {
        messageDiv.scrollTo(0, messageDiv.scrollHeight);
        chat_prevLength = chats.length;
    }
}

async function sendMessage(workId, senderId) {
    let button = document.getElementById("sendButton");
    // button.disabled = true;
    let message = document.getElementById("message");

    let data = {
        message: message.value,
        _token: document.getElementById("_token").value,
    };

    message.value = null;
    await fetch(`/work/chat/post/${workId}`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": data._token,
        },
        body: JSON.stringify(data),
    })
        .then((response) => response.json())
        .then((result) => {
            console.log("Success:", result);
            button.disabled = false;
            ChatFetcher(workId, senderId);
        });
}
