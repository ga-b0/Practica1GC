const API_URL = "http://localhost/practica1gc/start.php";
const $form = document.querySelector("#form");
const $emailInput = document.querySelector("#email");
const $passwordInput = document.querySelector("#password");

$form.addEventListener("submit", submitForm);

function submitForm(event) {
  event.preventDefault();
  login($emailInput.value, $passwordInput.value);
}

function login() {
  fetch("start.php", {
    method: "POST",
    body: JSON.stringify({
      email: $emailInput.value,
      password: $passwordInput.value,
    }),
    headers: {
      "Content-Type": "application/json; charset=UTF-8",
    },
  })
    .then((data) => data.json())
    .then((res) => console.log(res));
}
