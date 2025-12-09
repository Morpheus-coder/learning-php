window.onload = function () {
  const form = document.getElementById("myForm");

  form.addEventListener("submit", function (e) {
    const firstname = document.getElementById("firstname").value;
    if (firstname === "") {
      alert("Vui long nhap thong tin");
    } else {
      console.log("firstname");
    }
  });
};
