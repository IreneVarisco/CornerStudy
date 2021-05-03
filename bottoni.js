$("#reg").click(function () {
  var psw = document.getElementById("passwordr").value;
  var username = document.getElementById("usernamer").value;
  window.open("registrazione.php?password=" + psw + "&username=" + username); //mettere a posto
});

$("#log").click(function () {
  console.log("gg");
  var psw = document.getElementById("passwordl").value;
  var username = document.getElementById("usernamel").value;
  window.open("login.php?password=" + psw + "&username=" + username);
});


