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
<<<<<<< HEAD
	
	// First Name
    var x = document.forms["regform"]["firstname"].value;
    if (x == "") {
        alert("First name must be filled out");
        return false;
    }
	if (x == "\W") {
        alert("First name must contain characters");
        return false;
    }
	if (x != "\D") {
        alert("First name must not contain numbers");
        return false;
	}
	if (x == "\s") {
        alert("First name must have no whitespace");
        return false;
	}
	
	// Last Name
	var x = document.forms["regform"]["lastname"].value;
    if (x == "") {
        alert("Last name must be filled out");
        return false;
    }
	if (x == "\W") {
        alert("Last name must contain characters");
        return false;
    }
	if (x != "\D") {
        alert("Last name must not contain numbers");
        return false;
	}
	if (x == "\s") {
        alert("Last name must have no whitespace");
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
        alert("Username must have no whitespace");
        return false;
    }
		if (x == "^.{1,3}$") {
        alert("Username must contain at least 3 characters");
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
	if (x != "[A-Z]") {
        alert("Password must contain at a capital character");
        return false;
    }
	if (x == "^.{1,6}$") {
        alert("Password must contain at least 6 characters");
        return false;
    }
	
	// Mobile Phone
	var x = document.forms["regform"]["mobphone"].value;
    if (x == "") {
        alert("Phone must be filled out");
        return false;
    }
	if (x != "\d") {
        alert("Phone must be numbers");
        return false;
    }
	if (x != "^.{8,10}$") {
        alert("Phone number is invalid");
        return false;
    }
	
	// Email
	var x = document.forms["regform"]["email"].value;
	if (x == "") {
        alert("Email must be filled out");
        return false;
    }
	if (x != "[@]") {
        alert("Invalid email");
        return false;
    }
=======

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
  if (x != "\D") {
    alert("Must not contain numbers");
    return false;
  }
  if (x == "\s") {
    alert("Must have no whitespace");
    return false;
  }

  // Last Name
  var x = document.forms["regform"]["lastname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (x == "\W") {
    alert("Name must contain characters");
    return false;
  }
  if (x != "\D") {
    alert("Must not contain numbers");
    return false;
  }
  if (x == "\s") {
    alert("Must have no whitespace");
    return false;
  }

  // Username
  var x = document.forms["regform"]["username"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (x == "\W") {
    alert("Name must contain alphanumeric characters");
    return false;
  }
  if (x == "\s") {
    alert("Must have no whitespace");
    return false;
  }
  if (x == "^.{1,3}$") {
    alert("Must contain at least 3 characters");
    return false;
  }

  // Password
  var x = document.forms["regform"]["password"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (x == "\s") {
    alert("Must have no whitespace");
    return false;
  }
  if (x != "\d") {
    alert("Must contain at least 1 digit character");
    return false;
  }
  if (x != "[A-Z]") {
    alert("Must contain at a capital character");
    return false;
  }
  if (x == "^.{1,6}$") {
    alert("Must contain at least 6 characters");
    return false;
  }

  // Mobile Phone
  var x = document.forms["regform"]["mobphone"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (x != "\d") {
    alert("Must be numbers");
    return false;
  }
  if (x != "^.{8,10}$") {
    alert("Number is invalid");
    return false;
  }

  // Email
  var x = document.forms["regform"]["email"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (x != "[@]") {
    alert("Invalid email");
    return false;
  }
>>>>>>> f575ff241d8f0c1b1105f48f60ef5da2bb6ee4c8
}
