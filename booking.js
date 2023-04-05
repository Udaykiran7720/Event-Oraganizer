/*booking details validation script*/

var nameError = document.getElementById('name-error');
var phoneError = document.getElementById('phone-error');
var addressError = document.getElementById('address-error');
var eventnameError = document.getElementById('eventname-error');
var locationError = document.getElementById('location-error');
var emailError = document.getElementById('email-error');
var dateError = document.getElementById('date-error');
var guestError = document.getElementById('guest-error');
var messageError = document.getElementById('message-error');
var submitError = document.getElementById('submit-error');

function validateName(){
    var name = document.getElementById('bookername').value;

    if(name.length == 0){
        nameError.style.display = 'block';
        nameError.innerHTML = 'Name is required';
        setTimeout(function(){nameError.style.display = 'none';}, 5000);
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        nameError.style.display = 'block';
        nameError.innerHTML = 'Write Full name';
        setTimeout(function(){nameError.style.display = 'none';}, 5000);
        return false;
    }
    nameError.style.display = 'block';
    nameError.innerHTML = '<i class="fa fa-check-circle"></i>';
    setTimeout(function(){nameError.style.display = 'none';}, 5000);
    return true;
}

function validatePhone(){
    var phone = document.getElementById('phoneno').value;

    if(phone.length == 0){
        phoneError.style.display = 'block';
        phoneError.innerHTML = 'Number is required';
        setTimeout(function(){phoneError.style.display = 'none';}, 5000);
        return false;
    }
    if(phone.length !== 10){
        phoneError.style.display = 'block';
        phoneError.innerHTML = 'Should be 10 digits';
        setTimeout(function(){phoneError.style.display = 'none';}, 5000);
        return false;
    }
    if(!phone.match(/^[0-9]{10}$/)){
        phoneError.style.display = 'block';
        phoneError.innerHTML = 'Only number is required';
        setTimeout(function(){phoneError.style.display = 'none';}, 5000);
        return false;
    }
    phoneError.style.display = 'block';
    phoneError.innerHTML = '<i class="fa fa-check-circle"></i>';
    setTimeout(function(){phoneError.style.display = 'none';}, 5000);
    return true;
}

function validateguest(){
    var guest = document.getElementById('no_of_guest').value;

    if(guest.length == 0){
        guestError.style.display = 'block';
        guestError.innerHTML = 'Number is required';
        setTimeout(function(){guestError.style.display = 'none';}, 5000);
        return false;
    }
    
    guestError.style.display = 'block';
    guestError.innerHTML = '<i class="fa fa-check-circle"></i>';
    setTimeout(function(){guestError.style.display = 'none';}, 5000);
    return true;
}

function validateEmail(){
    var email = document.getElementById('email_id').value;

    if(email.length == 0){
        emailError.style.display = 'block';
        emailError.innerHTML = 'Email-Id is required';
        setTimeout(function(){emailError.style.display = 'none';}, 5000);
        return false;
    }
    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        submitError.style.display = 'block';
        emailError.innerHTML = 'Email-Id Invaild';
        setTimeout(function(){emailError.style.display = 'none';}, 5000);
        return false;
    }
    submitError.style.display = 'block';
    emailError.innerHTML = '<i class="fa fa-check-circle"></i>';
    setTimeout(function(){emailError.style.display = 'none';}, 5000);
    return true;
}

function validateMessage(){
    var message = document.getElementById('event_description').value;
    var required = 30;
    var left = required - message.length;

    if(left>0){
        messageError.style.display = 'block';
        messageError.innerHTML = left + ' more characters required';
        setTimeout(function(){messageError.style.display = 'none';}, 5000);
        return false;
    }
    messageError.style.display = 'block';
    messageError.innerHTML = '<i class="fa fa-check-circle"></i>';
    setTimeout(function(){messageError.style.display = 'none';}, 5000);
    return true;
}

function validateForm(){
    if(!validateName() || !validatePhone() || !validateEmail() || !validateMessage()){
        submitError.style.display = 'block';
        submitError.innerHTML = 'Please fix error to submit';
        setTimeout(function(){submitError.style.display = 'none';}, 5000);
        return false;
    }
}
