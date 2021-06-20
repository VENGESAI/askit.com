 function openLoginWindow(){
    loginWindow = window.open("http://localhost/askitzim/login.php", "_self");
}
function openIndexWindow(){
    indexWindow = window.open("http://localhost/askitzim.php", "_self");
}

function openSignUpWindow(){
    indexWindow = window.open("http://localhost/askitzim/sign-up.php", "_self");
}
function goToLogin(){
    tt = document.getElementsByClassName(".btn-sign-up").value;
    tt.value = "Successfully submitted.";
    alert("Hello");
}


