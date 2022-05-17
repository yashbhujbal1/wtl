function On_Submit() {
    let name = document.getElementById("name");
    if(name.value.length === 0) {
        alert("Name is required");

    }

    let email = document.getElementById("email"); 
    if(email.value.length === 0) {
        alert("Email is required");

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email.value.match(mailformat))
        {
            return true;
        }
        else
        {
            alert("You have entered an invalid email address!");
            document.form.email.focus();
            return false;
        }
    }

    let password = document.getElementById("password");
    if(password.value.length < 8) {
        alert("Password must be at least 8 characters long");
    }

    let mobno = document.getElementById("mob");
    if(mobno.value.length === 0) {
        alert("Mobile number is required");

        var phoneno = /^\d{10}$/;
        if(mobno.value.match(phoneno))
        {
            return true;
        }
        else
        {
            alert("Invalid Mobile Number");
            return false;
        }
    }

    alert("Form successfully submitted");
    
    
}
