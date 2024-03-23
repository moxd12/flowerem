function JSalert() {
  if (document.getElementById("chck").checked) {
    window.location.href = "info.html";
  } else {
    alert("You have not yet accepted the terms and conditions of the site!");
  }
}
function Next() {
  var inp = document.getElementById("inp").value;
  if (1000 >= inp && inp > 0) {
    if (inp != "") {
      setTimeout(function () {
        window.location.href = "login.html";
      }, 2000);
    } else {
      alert("folwer request must be more than 0");
    }
  } else {
    alert("flower request must be in range of 0 and 1000");
  }
}
function Close() {
  window.location.href = "index.html";
}
