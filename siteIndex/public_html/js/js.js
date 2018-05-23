// Hide Parent input
// Only Show if date is less than 18 Yrs
var t = new Date()
var is18 = t.getTime() - 567648000000
$('div.pinput').css('display', 'none');
$('input.bday').on('change', function(){
  var d = Date.parse($(this).val());
  if(d >= is18){
    $('div.pinput').css('display', 'block');
  } else {
    $('div.pinput').css('display', 'none');
  }
});

function validateForm() {

  // First Name
  var x = document.forms["regform"]["firstname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (x == "\W") {
    alert("Name must contain characters");
    return false;
  }
  if (x == "\D") {
    alert("First name Must not contain numbers");
    return false;
  }
  if (x == "\s") {
    alert("Must have no whitespace");
    return false;
  }

  // Last Name
  var x = document.forms["regform"]["lastname"].value;
  if (x == "") {
    alert("Last Name must be filled out");
    return false;
  }
  if (x == "\W") {
    alert("Last Name must contain characters");
    return false;
  }
  if (x == "\D") {
    alert("Last Name Must not contain numbers");
    return false;
  }
  if (x == "\s") {
    alert("Last Name must have no spaces");
    return false;
  }

  // Username
  var x = document.forms["regform"]["username"].value;
  if (x == "") {
    alert("Username must be filled out");
    return false;
  }
  if (x == "\W") {
    alert("Username must contain alphanumeric characters");
    return false;
  }
  if (x == "\s") {
    alert("Username have no whitespace");
    return false;
  }
  if (x == "^.{1,3}$") {
    alert("Must contain at least 3 characters");
    return false;
  }

  // Password
  var x = document.forms["regform"]["password"].value;
  if (x == "") {
    alert("Password must be filled out");
    return false;
  }
  if (x == "\s") {
    alert("Password must have no whitespace");
    return false;
  }
  if (x == "\d") {
    alert("Password must contain at least 1 digit character");
    return false;
  }
  if (x == "[A-Z]") {
    alert("Password must contain at a capital character");
    return false;
  }
  if (x == "^.{1,6}$") {
    alert("Password must contain at least 6 characters");
    return false;
  }

  // Mobile Phone
  var x = document.forms["regform"]["mobphone"].value;
  if (x == "^.{8,10}$") {
    alert("Mobile Phone number is invalid");
    return false;
  }

  // Email
  var x = document.forms["regform"]["email"].value;
  // if (x != "[@]") {
  //   alert("Invalid email");
  //   return false;
  // }
}
