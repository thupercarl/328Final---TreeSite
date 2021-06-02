    let form = document.getElementById("pizzaform");
    form.onsubmit = validate;

    /* Make all error messages invisible */
    function clearErrors() {
        let errors = document.getElementsByClassName("text-danger");
        for (let i=0; i<errors.length; i++) {
            errors[i].classList.add("d-none");
        }
    }

    /* Validate the pizza form */
    function validate() {

        clearErrors();

        //Create an error flag
        let isValid = true;

        //Validate first name
        let first = document.getElementById("fname").value;
        if (first == "") {
            let errFname = document.getElementById("err-fname");
            errFname.classList.remove("d-none");
            //alert("First name is required");
            isValid = false; //Stay on the page
        }

        //Validate last name
        let last = document.getElementById("lname").value;
        if (last == "") {
            let errLname = document.getElementById("err-lname");
            errLname.classList.remove("d-none");
            //alert("Last name is required");
            isValid = false; //Stay on the page
        }
        return isValid;
    }