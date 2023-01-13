// NECESSARY DATA FOR EMAIL WITH SPLIT FOR SECURITY
const myDomain = "gmail.com";
const myZinzin = "zimprobagnais"
const mySep = "@";
const CR = "%0D%0A"; // CR LF


//=== START - FORM DECLARE ===//    

(function() {
    let form = document.getElementById('contactForm');
    let btonSend = document.querySelector("#postMsg")

    //When the button [Envoyer] is clicked
    btonSend.addEventListener('click', function(event) {
        
        // init variables for mail
        console.clear()
        console.log("start CONTROLS...");
        let allOK = true;
        const myDate = new Date();
        let message = "Date du message : "+ myDate.toLocaleString('fr-FR') + CR + CR;
        
        // store + scan each data from the Form 
        let tt=Array.from(form.elements).forEach((input) => {            
             
            if (input.type !== "button") { //check every item except the button 

                console.log("=================");
                console.log("CHECK " + input.name);

                //if invalid entry (return was false)
                if (!validateFields(input)) {
                    console.log('test ERR !');
                    allOK = false;
                    //event.preventDefault();
                    //event.stopPropagation();
                    
                    input.classList.remove("is-valid");

                    //put invalid class
                    input.classList.add("is-invalid");
                    //show error msg
                    input.nextElementSibling.style.display = 'block';
                } 
                //if data is valid (return was true) 
                else {
                    // prepare data for email content ----------------
                    console.log ('test OK ');
                    message += input.name +" : " 
                    message += removeTags(input.value)  + CR + CR;

                    //hide error msg 
                    input.nextElementSibling.style.display = 'none';
                    input.classList.remove("is-invalid");
                    input.classList.add("is-valid");
                }
            }
        });
        // if OK, send msg
        if (allOK) {
            console.log ("All data are ok for a mail!");        
            sendMail(myDomain, mySep, myZinzin, message)
        }

    }, false)
})()

//=== END - FORM DECLARE ===============//


//=== START - FIELDS VALIDATION ===//

function validateFields(input) {

    let fieldName = input.name;

    switch (input.name){
    case "firstName" : {
        return (
            //champ obligatoire renseigné ?
            validateRequired(input)
             //format saisie ok ?
            && checkFormat(input, "^([A-Za-z ,.'-]){2,35}$")
            )
        }
        
    case "lastName" :{
        return (
            validateRequired(input)
            && checkFormat(input, "^([A-Za-z ,.'-]){2,35}$")
            )
    }
        
    case "email" :{
        return (
            validateRequired(input)
            && checkFormat(input, "(@)(.+)$")
            && validateEmail(input)
            )
        }
 
    case "phoneNumber" :{
        return (
            validateRequired(input)
            && validatePhoneNumber(input)
        )
    }
    
    case "message" :{
        return (
            validateRequired(input)
            //length ok ?     
            && validateLength(input, 2, 500)
            )
    }
    // ...... NOT USED, BUT I LEAVE IT FOR MY FUTURE ENHANCEMENTS........
    // case "address" :{
        //     return (
            //         validateRequired(input)
            //         && validateAddress(input)
            //     )
            // }    
            // case "city" :{
                //     return (
                    //         validateRequired(input)
                    //         )
                    //     }        
                    // case "postCode" :{
                        //     return (
                            //         validateRequired(input)
                            //         && validatePostCode(input)
                            //         )
    //     }        
    // case "conditions" :{
        //     return (
            //         input
            //         )
            //     }
        }
    }
    //=== END - FIELDS VALIDATION  ===//
    
    // Checking Regex values
    function checkFormat(input, regex){
        return input.value.match(regex);
    }
    
    // Validate if field is REQUIRED
    function validateRequired(input) {
    console.log("validate required non vide = " + !(input.value == null || input.value == ""))
    return !(input.value == null || input.value == "");
}

// Validation number of chars : MIN & MAX
function validateLength(input, minLength, maxLength) {
    return !(input.value.length < minLength || input.value.length > maxLength);
}

// Validate an e-mail
function validateEmail(input) {
    let EMAIL = input.value;
    let POSAT = EMAIL.indexOf("@");
    let POSDOT = EMAIL.lastIndexOf(".");
    
    return !(POSAT < 1 || (POSDOT - POSAT < 2));
}

// Validate one Phone number
function validatePhoneNumber(input) {
    return input.value.match(/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/);
}


// ...... NOT USED, BUT I LEAVE IT FOR MY FUTURE ENHANCEMENTS........
// Validation Address
// function validateAddress(input) {
//     return input.value.match(/^\s*\S+(?:\s+\S+){2}/);
// }
// Validation Postal code
// function validatePostCode(input) {
//     return input.value.match("^(0[1-9]|[1-9][0-9])[0-9][0-9][0-9]$");
// }
// Validation checkbox
// function validateTerms(input) {
//     return input.checked;
// }

// for blocking html injections
function removeTags(str) {
    if ((str===null) || (str===''))
        return false;
    else {
        str = str.toString();
        // Regular expression to identify HTML tags in 
        // the input string. Replacing the identified 
        // HTML tag with a null string.
        return str.replace( /(<([^>]+)>)/ig, '');
    }
}

// ----- FUNCTION SEND A MAIL -----
function sendMail(domain, sep, zinzin, myMsg){
    console.log("PREPARE TO SEND EMAIL")

    let btonSend = document.createElement("a")
    const mel = zinzin+sep+domain
    console.log("mail: "+mel)
    btonSend.href = "mailto:" + mel + "?subject=Message depuis le site les ZIMPROBAGNAIS" + "&body=" + myMsg 
    btonSend.click()
}

