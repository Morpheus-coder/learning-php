function validate() {
  let user = document.getElementById("username").value.trim();
  let pass = document.getElementById("password").value.trim();
  let msg = document.getElementById("message");

  if (user === "" || pass === "") {
    msg.style.color = "red";
    msg.innerHTML = "Vui lòng nhập đầy đủ username và password!";
  } else {
    msg.style.color = "green";
    msg.innerHTML = "Đăng nhập thành công!";
  }
}
