var first_name = document.forms["myForm"]["fname"];
    var last_name = document.forms["myForm"]["lname"];
    var postal_code = document.forms["myForm"]["postalcode"];
    var address = document.forms["myForm"]["livingarea"];                 
    var email = document.forms["myForm"]["email"];    
    var phone = document.forms["myForm"]["phonenumber"];    
   
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
   
    return true;