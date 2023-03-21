var uname = document.getElementById("username");
var address = document.getElementById("add");
var phone = document.getElementById("ph");
var btn = document.getElementById("btn");

function nameCheck(){
    uname.onblur = function() {
      if(uname.value.length < 5 || uname.value.length > 32) {
        uname.value = "";
        uname.style.borderColor = 'red';
        // alert("Name must be between 5 and 32 characters.");
      }
      else uname.style.borderColor = 'black';
    };
  }
  

function addressCheck(){
    address.onblur = function()
        {
            if(!/^[a-zA-Z0-9\s-]+$/.test(address.value)){
                address.value = "No special characters allowed";
                address.style.borderColor = 'red';
                // alert("Name must be between 5 and 32 characters.");
              }
              else address.style.borderColor = 'black';
            
        };
}

function phCheck(){
    phone.onblur = function()
        {
            if(!/^\+92/.test(phone.value) ){
                phone.value = "Should start with +92";
                phone.style.borderColor = 'red';
                // alert("Name must be between 5 and 32 characters.");
              }
              else phone.style.borderColor = 'black';
            
        };
}


nameCheck(),phCheck(),addressCheck();
