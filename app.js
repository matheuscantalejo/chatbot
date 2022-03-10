const btnSend = document.getElementById("btn");
const chat = document.getElementById("chat");

const getMessage = (msg) => {

  const xhr = new XMLHttpRequest();
  
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = xhr.responseText;
      const chatBody = document.querySelector(".scroller");
      const divCpu = document.createElement("div");
      divCpu.className = "bot visible";
      divCpu.innerHTML = response;
      const divUser = document.createElement("div");
      divUser.className = "me visible";
      divUser.textContent = msg;

      chatBody.append(divUser);

      var objDiv = document.getElementById("chatbody");
      objDiv.scrollTop = objDiv.scrollHeight;
          
      document.getElementById("chat").disabled = true;
      
      setTimeout(() => {
        chatBody.append(divCpu);

        document.getElementById("chat").disabled = false;

        var objDiv = document.getElementById("chatbody");
        objDiv.scrollTop = objDiv.scrollHeight;
        
        document.getElementById("chat").focus();

      }, 600);
      
    }
  };

  xhr.open("GET", "bot/chat.php?msg=" + msg, true);
  xhr.send();
};

btnSend.addEventListener("click", (e) => {
  e.preventDefault();
  if (chat.value == "") {
  } else {
    getMessage(chat.value);
    chat.value = "";
  }
});
