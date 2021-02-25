function valid(){
    var Name=document.getElementById("Name");
    var Email=document.getElementById("Email");
    var password_1=document.getElementById("password_1");
    var password_2=document.getElementById("password_2");


    if (Name.value.trim()==("")){
    alert("Fill Name");
    return false;
    }
    else if (Email.value.trim()==("")){
    alert("Fill email");
    return false;
    }
    else if (! Email.value.match(/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/)) {
    alert("gmail only");
    return false;
    }

    else if (password_1.value.trim()==("")){
    alert("Fill Password");
    return false;
    }
    else if (! password_1.value.match(/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/)){
    alert("Password must contain at least one letter, at least one number, and be longer than six charaters");
    return false;
    }
    else if (password_2.value.trim()==("")){
    alert("Repeat Passsword");
    return false; 
    }
    else{
        return true;
    }
}