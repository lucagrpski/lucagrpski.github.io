<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- The core Firebase JS SDK is always required and must be listed first -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>

<link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

        <link rel="stylesheet" href="css/style.css">

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAANSecDsHjl5U8McNVnicd46Cf7J5mP7w",
    authDomain: "chat-98c3d.firebaseapp.com",
    databaseURL: "https://chat-98c3d.firebaseio.com",
    projectId: "chat-98c3d",
    storageBucket: "chat-98c3d.appspot.com",
    messagingSenderId: "1059302908480",
    appId: "1:1059302908480:web:e04fbaa9a748b3339135a5",
    measurementId: "G-RVK6FD7EEF"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  firebase.database().ref("messages").on("child_removed", function (snapshot) {
    document.getElementById("message-" + snapshot.key).innerHTML = "Diese Nachricht wurde gelöscht";
  });

  function deleteMessage(self) {
    var messageId = self.getAttribute("data-id");
    firebase.database().ref("messages").child(messageId).remove();
  }

  function sendMessage() {
    var message = document.getElementById("message").value;
    firebase.database().ref("messages").push().set({
      "message": message,
      "sender": myName
    });
    return false;
  }
</script>

<style>
  figure.avatar {
    bottom: 0px !important;
  }
  .btn-delete {
    background: red;
    color: white;
    border: none;
    margin-left: 10px;
    border-radius: 5px;
  }
</style>

<div class="chat">
  <div class="chat-title">
    <h1>Live Chat</h1>
    <h2>luca_grpski</h2>
    <figure class="avatar">
      <img src="https://scontent-dus1-1.cdninstagram.com/v/t51.2885-19/s150x150/73320893_582793455880609_631371771743830016_n.jpg?_nc_ht=scontent-dus1-1.cdninstagram.com&_nc_ohc=cwU9djuQEmkAX_8zNBS&oh=b22baa706b041d7dbf909be121142755&oe=5F8728F0" /></figure>
  </div>
  <div class="messages">
    <div class="messages-content"></div>
  </div>
  <div class="message-box">
    <textarea type="text" class="message-input" id="message" placeholder="Schreib was nettes..."></textarea>
    <button type="submit" class="message-submit">Senden</button>
  </div>

</div>
<div class="bg"></div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>

        <script src="js/index.js?v=<?= time(); ?>"></script>