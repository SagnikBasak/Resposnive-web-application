function validation(){
  var name = document.getElementById('fullname').value;
  var email = document.getElementById('email').value;
  var mobileNumber = document.getElementById('phone').value;
//  var pass = document.getElementById('pass').value;
//  var conpass = document.getElementById('conpass').value;

//For name field
  if(name == ""){
    document.getElementById('username').innerHTML ="** Please fill the Full Name field";
    return false;
  }
  if((name.length <= 2) || (name.length >= 20)) {
    document.getElementById('username').innerHTML ="** Username lenght must be between 2 and 20";
    return false;
  }
  if(!isNaN(name)){
    document.getElementById('username').innerHTML ="** Only characters are allowed";
    return false;
  }

//For email field
  if(email == ""){
    document.getElementById('emailid').innerHTML ="** Please fill the email id field";
    return false;
  }
  if(email.indexOf('@') <= 0 ){
    document.getElementById('emailid').innerHTML ="** @ Invalid Position";
    return false;
  }
  if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
    document.getElementById('emailid').innerHTML ="** Invalid Position";
    return false;
  }

//For mobile number field
  if(mobileNumber == ""){
    document.getElementById('mobileno').innerHTML ="** Please fill the mobile Number";
    return false;
  }
  if(isNaN(mobileNumber)){
    document.getElementById('mobileno').innerHTML ="** user must enter digits only not characters";
    return false;
  }
  if(mobileNumber.length!=10){
    document.getElementById('mobileno').innerHTML ="** Mobile Number must be 10 digits only";
    return false;
  }

//For Password & Confirm password field
  /*if(pass == ""){
    document.getElementById('passwords').innerHTML ="** Please fill the password";
    return false;
  }*/
  if(pass!=confirmpass){
    document.getElementById('confrmpass').innerHTML ="** Password does not match the confirm password";
    return false;
  }
  if(confirmpass == ""){
    document.getElementById('confrmpass').innerHTML ="** Please fill the confirm password field";
    return false;
  }
}

function pass_check()
{
    var pass = document.getElementById("pass").value;

    pass=pass.trim();
    document.getElementById("pass").value=pass;
    if(pass.length>=5)
    {
        document.getElementById("check0").style.color="green";
        document.getElementById("check0").style.transitionDuration = "1s";
    }
    else
    {
       document.getElementById("check0").style.color="red";
    }

    if(pass.length<=10)
    {
        document.getElementById("check1").style.color="green";
        document.getElementById("check1").style.transitionDuration = "1s";
    }
    else
    {
       document.getElementById("check1").style.color="red";
    }

    if(pass.match(/[0-9]/i))
    {
        document.getElementById("check2").style.color="green";
        document.getElementById("check2").style.transitionDuration = "1s";
    }
    else
    {
       document.getElementById("check2").style.color="red";
    }

    if(pass.match(/[^A-Za-z0-9-' ']/i))
    {
        document.getElementById("check3").style.color="green";
        document.getElementById("check3").style.transitionDuration = "1s";
    }
    else
    {
       document.getElementById("check3").style.color="red";
    }

    if(pass.match(' '))
    {
        document.getElementById("check4").style.color="red";
    }
    else
    {
       document.getElementById("check4").style.color="green";
       document.getElementById("check4").style.transitionDuration = "1s";
    }


    if(pass == ""){
      document.getElementById("check5").style.color="red";
    }
    else
    {
       document.getElementById("check5").style.color="green";
       document.getElementById("check5").style.transitionDuration = "1s";
    }
}
