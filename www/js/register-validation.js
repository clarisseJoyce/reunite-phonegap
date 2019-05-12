function validateForm() {
    var firstName = document.forms["newUser"]["first-name"].value;
    var lastName = document.forms["newUser"]["last-name"].value;
    var email = document.forms["newUser"]["emailAdd"].value;
    var pass = document.forms["newUser"]["password"].value;
    var country = document.forms["newUser"]["cntry"].value;

    var fLabel = document.getElementById('fname');
    var lLabel = document.getElementById('lname');
    var emailLabel = document.getElementById('eAdd');
    var passLabel = document.getElementById('pass');
    var countryLabel = document.getElementById('country');

    var input = 0;

    if (firstName == "") {
        fLabel.style.display = "inline-block";
    }
    else {
        fLabel.style.display = "none";
        input++;
    }

    if (lastName == "") {
        lLabel.style.display = "inline-block";
    }
    else {
        lLabel.style.display = "none";
        input++;
    }

    if (email == "") {
        emailLabel.style.display = "inline-block";
    }
    else {
        emailLabel.style.display = "none";
        input++;
    }

    if (pass == "") {
        passLabel.style.display = "inline-block";
    }
    else {
        passLabel.style.display = "none";
        input++;
    }

    if (country == "") {
        countryLabel.style.display = "inline-block";
    }
    else {
        countryLabel.style.display = "none";
        input++;
    }

    if (input >= 5) {

    }
    else {
        return false;
    }
}