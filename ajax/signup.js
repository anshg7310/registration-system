const form = document.querySelector(".wrapper form"),
  errorTxt = form.querySelector(".error-txt");
continueBtn = form.querySelector(".btn");

form.onsubmit = (e) => {
  e.preventDefault();
};

continueBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status == 200) {
        let data = xhr.response;
        if (data === "success") {
          window.location.href = "users.php";
        } else {
          errorTxt.style.display = "initial";
          errorTxt.textContent = data;
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};
