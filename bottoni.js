$("#reg").click(function () {
  var psw = document.getElementById("password").value;
  var username = document.getElementById("username").value;
  window.open("registrazione.php?password=" + psw + "&username=" + username);
});

$("#log").click(function () {
  var psw = document.getElementById("password").value;
  var username = document.getElementById("username").value;
  window.open("login.php?password=" + psw + "&username=" + username);
});


