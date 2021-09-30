function checkform() {
  let name = document.getElementById("name");
  let surname = document.getElementById("surname");
  let phoneno = document.getElementById("phoneno");
  let email = document.getElementById("email");
  let info = document.getElementById("info");
  var pin = document.getElementById("pin");

  if (name.value == "") {
    alert("Please enter your First Name.");
    return false;
  }
  if (surname.value == "") {
    alert("Please enter your Sur Name.");
    return false;
  }
  if (phoneno.value == "" || phoneno.value.length != 10) {
    alert("Please enter a Phone No..");
    return false;
  }
  if (email.value == "") {
    alert("Please enter your E-Mail.");
    return false;
  }
  if (info.value == "") {
    alert("Please enter something about yourself.");
    return false;
  }
  if (pin.value > 999999 || pin.value <= 99999) {
    alert("Please enter a valid Pincode.");
    return false;
  }
}
