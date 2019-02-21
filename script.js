/* function validateForm() {
  var x = document.forms["myForm"]["fname"]["lname"]["postalcode"]["livingarea"]["email"]["phonenumber"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
} */


function validateForm() { 
    var inputs = document.getElementsByClassName('form-control');

    for (var i = inputs.length - 1; i >= 0; i--) {
      inputs[i].setAttribute("required", "");
    }

    var first_name = document.forms["myForm"]["fname"];
    var last_name = document.forms["myForm"]["lname"];
    var postal_code = document.forms["myForm"]["postalcode"];
    var address = document.forms["myForm"]["livingarea"];                 
    var email = document.forms["myForm"]["email"];    
    var phone = document.forms["myForm"]["phonenumber"];
    var number = document.forms["myForm"]["number"];
    var color = document.forms["myForm"]["color"];
    var privacy = document.forms["myForm"]["privacy"];
   
    if (first_name.value == "")                                  
    { 
        /* window.alert("Please enter your first name."); */
      document.getElementById('red_alert').style.display = 'block';
      document.getElementById('red_alert').innerHTML = 'Vul alsjeblieft je voornaam in.';
      document.getElementById('border_red').style.border = '1px solid red';
        name.focus(); 
        return false; 
    } 

    if (last_name.value == "")                                  
    { 
        /* window.alert("Please enter your last name."); */
        document.getElementById('red_alert').style.display = 'block';
      document.getElementById('red_alert').innerHTML = 'Vul alsjeblieft je achternaam in.';
      document.getElementById('border_red').style.border = '1px solid red';
        name.focus(); 
        return false; 
    }

    if (postal_code.value == "")                                  
    { 
        /* window.alert("Please enter your postal code."); */
        document.getElementById('red_alert').style.display = 'block';
      document.getElementById('red_alert').innerHTML = 'Vul alsjeblieft een geldige postcode in.';
      document.getElementById('border_red').style.border = '1px solid red';
        name.focus(); 
        return false; 
    }
   
    if (address.value == "")                               
    { 
        /* window.alert("Please enter your address."); */
        document.getElementById('red_alert').style.display = 'block';
      document.getElementById('red_alert').innerHTML = 'Vul alsjeblieft een woonplaats in.';
      document.getElementById('border_red').style.border = '1px solid red';
        name.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        /* window.alert("Please enter a valid e-mail address."); */
        document.getElementById('red_alert').style.display = 'block';
      document.getElementById('red_alert').innerHTML = 'Vul alsjeblieft een e-mailadres in.';
      document.getElementById('border_red').style.border = '1px solid red';
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        /* window.alert("Please enter a valid e-mail address."); */
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        /* window.alert("Please enter a valid e-mail address."); */
        email.focus(); 
        return false; 
    } 
   
    if (phone.value == "")                           
    { 
        /* window.alert("Please enter your telephone number."); */
        document.getElementById('red_alert').style.display = 'block';
      document.getElementById('red_alert').innerHTML = 'Vul alsjeblieft een telefoonnummer in.';
      document.getElementById('border_red').style.border = '1px solid red';
        phone.focus(); 
        return false; 
    } 

    if (number.value == "")                                  
    { 
        /* window.alert("Please enter your first name."); */
      document.getElementById('red_alert').style.display = 'block';
      document.getElementById('red_alert').innerHTML = 'Vul alsjeblieft je voornaam in.';
      document.getElementById('border_red').style.border = '1px solid red';
        name.focus(); 
        return false; 
    }

    if (color.value == "")                                  
    { 
        /* window.alert("Please enter your first name."); */
      document.getElementById('red_alert').style.display = 'block';
      document.getElementById('red_alert').innerHTML = 'Vul alsjeblieft je voornaam in.';
      document.getElementById('border_red').style.border = '1px solid red';
        name.focus(); 
        return false; 
    }

    if (privacy.value == "")                                  
    { 
        /* window.alert("Please enter your first name."); */
      document.getElementById('red_alert').style.display = 'block';
      document.getElementById('red_alert').innerHTML = 'Vul alsjeblieft je voornaam in.';
      document.getElementById('border_red').style.border = '1px solid red';
        name.focus(); 
        return false; 
    }   
   
    return true;
}