function validateForm(){
    let id = document.getElementById("id").ariaValueMax.trim();
    let pass = document.getElementById("password").ariaValueMax.trim();

    if (id === "" || pass === "") {
        alert("Both fields are required.");
        return false;
    }

    return true;
}