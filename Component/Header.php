<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <script src="https://kit.fontawesome.com/3d2fa990ba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/Header.css">
</head>

<body>
    <div class="navbar">
        <div class="navbar-left">
            <a href="../Page/HomePage.php" class="logo">
                <img src="../img/Logo.png" alt="Logo">
                <span>Fast Learn</span>
            </a>
        </div>
        <div class="navbar-right">
            <div class="nav-links">
                <a href="../Page/LecturerPage.php">LECTURER</a>
                <a href="../Page/Blog.php">BLOG</a>
                <a href="../Page/Course.php">COURSE</a>
                <a href="../Page/Finance.php">FINANCE</a>
                <!-- <a href="../Page/Q&A.php">Q&A</a> -->
                <label class="popup">
                    <input type="checkbox" />
                    <div tabindex="0" class="burger">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <nav class="popup-window">
                        <ul>
                            <li>
                                <button onclick="window.location.href='../Page/login.php'">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    <span>Log In</span>
                                </button>
                            </li>
                            <li>
                                <button onclick="window.location.href='../Page/Profile.php'">
                                    <i class="fa-regular fa-address-card"></i>
                                    <span>Profile</span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </label>
            </div>


        </div>
    </div>
    <div class="chat-card hidden">
      <div class="chat-header">
        <div class="h2">Fast Learn</div>
      </div>
      <div class="chat-body" id="chat-body">
        <div class="message incoming">
          <p>
            Mình là chuyên viên hỗ trợ khách hàng tự động của Fast Learn. Cảm
            ơn bạn đã đồng hành cùng Fast Learn 🥰 Hãy nhập câu hỏi vào khung chat
            để Tâm hỗ trợ bạn một cách tốt nhất nha 🤗
          </p>
        </div>
      </div>
      <div class="chat-footer">
        <input placeholder="Type your message" type="text" id="user-message" />
        <button onclick="sendMessage()">Send</button>
      </div>
    </div>
    <button class="chat-box">
      <div class="chat">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path
            d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9l.3-.5z"
          />
        </svg>
      </div>
      <div class="chat-text">Chat</div>
    </button>
    
    <script>
      const chatBox = document.querySelector(".chat-box");
      const chatCard = document.querySelector(".chat-card");
      const chatBody = document.getElementById("chat-body");
      const userMessageInput = document.getElementById("user-message");
    
      chatBox.addEventListener("click", () => {
        chatCard.classList.toggle("hidden");
      });
    
      function sendMessage() {
        const message = userMessageInput.value;
        if (message.trim() !== "") {
          // Create a new message element for the outcoming message
          const outcomingMessage = document.createElement("div");
          outcomingMessage.classList.add("message", "outcoming");
          
          const messageText = document.createElement("p");
          messageText.textContent = message;
          
          outcomingMessage.appendChild(messageText);
          chatBody.appendChild(outcomingMessage);
    
          // Clear the input field
          userMessageInput.value = "";
    
          // Scroll to the bottom of the chat
          chatBody.scrollTop = chatBody.scrollHeight;
        }
      }
    </script>
</body>
<script src="../js/login.js"></script>

</html>