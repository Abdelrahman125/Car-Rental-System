
function validateEmail(){
    const email_exten=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const email = document.getElementById("email").value;
    if(!email_exten.test(email)){
        window.alert("Please enter a valid email");
    }else{
        
    }
}