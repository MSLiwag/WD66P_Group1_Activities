var targetelement=document.getElementById("alertVerifyOutput");
function verifyLogin (){
    let existingEmailAccount="admin@admin.com";
    let existingPassword="password";
    let inputtedEmail=document.getElementById("inputEmailLogin");
    let inputtedPassword=document.getElementById("inputPasswordLogin");
    if (existingEmailAccount==inputtedEmail.value && existingPassword==inputtedPassword.value){
        removeAddedClass();
        targetelement.classList.add("alert","alert-success");
        targetelement.innerText="Successfully Logged In";
    }
    else if (!inputtedEmail.value || !inputtedPassword.value){
        removeAddedClass();
        targetelement.classList.add("alert","alert-warning");
        targetelement.innerText="Please enter your Email and Password";
    }
    else {
        removeAddedClass();
        targetelement.classList.add("alert","alert-danger");
        targetelement.innerText="Wrong Email and/or Password. Please try again";
    }
}
function removeAddedClass(){
    while (targetelement.classList.length>0){
        targetelement.classList.remove(targetelement.classList.item(0));
    }
}
