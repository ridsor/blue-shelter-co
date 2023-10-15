// handle label form input
const inputs = document.querySelectorAll("#form-login>.form-input>input");
for (const input of inputs) {
  const label = input.nextElementSibling;
  input.addEventListener("change", function () {
    if (input.value) {
      label.classList.add("!-top-2", "px-3", "text-[12px]", "!left-1");
    } else {
      label.classList.remove("!-top-2", "px-3", "text-[12px]", "!left-1");
    }
  });
}

// handle show password
const btnShowPassword = document.getElementById("show-password");
btnShowPassword.addEventListener("click", function () {
  if (
    !btnShowPassword.previousElementSibling.previousElementSibling.classList.contains(
      "active"
    )
  ) {
    btnShowPassword.previousElementSibling.previousElementSibling.type = "text";
    btnShowPassword.previousElementSibling.previousElementSibling.classList.add(
      "active"
    );
  } else {
    btnShowPassword.previousElementSibling.previousElementSibling.classList.remove(
      "active"
    );
    btnShowPassword.previousElementSibling.previousElementSibling.type =
      "password";
  }
});
