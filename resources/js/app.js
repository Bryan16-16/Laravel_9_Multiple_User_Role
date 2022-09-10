// import "./bootstrap";
//login & register show password
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");
const con_password = document.querySelector("#password-confirm");

togglePassword.addEventListener("click", function (e) {
    // toggle the type attribute
    const type =
        password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    const typecon =
        con_password.getAttribute("type") === "password" ? "text" : "password";
    con_password.setAttribute("type", type);
});

//register validation first name and last name
function validate() {
    var fname = document.getElementById("FirstName");
    var alpha = /^[a-zA-Z\s-, ]+$/;  
    if (fname.value == "") {
        alert('Please enter Name');
        return false;
    }
    else if (!fname.value.match(alpha)) {
        alert('Invalid ');       
        return false;
   }
   else 
   {
    return true;
   }
}


