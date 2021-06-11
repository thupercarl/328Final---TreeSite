/*
  This is the javascript for the Woodland Wiki website
  Authors: Jake Donaldson & Aubrey Davies
  File: script.js
  Date: 6/15/2021
*/

    //alert("Hello");
    let form = document.getElementById("signupForm");
    form.onsubmit = validate;

    /* Make all error messages invisible */
    function clearErrors() {
        let errors = document.getElementsByClassName("err");
        for (let i=0; i<errors.length; i++) {
            errors[i].classList.add("d-none");
        }
    }

    /* Validate the tree sub form */
    function validate() {

        clearErrors();

        //Create an error flag
        let isValid = true;

        //Validate first name
        let first = document.getElementById("fname").value;
        if (first == "") {
            let errFname = document.getElementById("err-fname");
            errFname.style.display = "inline";
            errFname.classList.remove("d-none");
            //alert("First name is required");
            isValid = false; //Stay on the page
        }

        //Validate last name
        let last = document.getElementById("lname").value;
        if (last == "") {
            let errLname = document.getElementById("err-lname");
            errLname.style.display = "inline";
            errLname.classList.remove("d-none");
            //alert("Last name is required");
            isValid = false; //Stay on the page
        }

        //Validate treeName name
        let tree = document.getElementById("treeName").value;
        if (tree == "") {
            let errTreeName = document.getElementById("err-treeName");
            errTreeName.style.display = "inline";
            errTreeName.classList.remove("d-none");
            //alert("Tree name is required");
            isValid = false; //Stay on the page
        }
        return isValid;
    }