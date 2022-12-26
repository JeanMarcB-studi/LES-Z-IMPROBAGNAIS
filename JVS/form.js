
//=== START - FORM DECLARE ===//    

(function() {
    let form = document.getElementById('contactForm');

    //quand submit sera cliqué
    form.addEventListener('submit', function(event) {
    // console.log("start CONTROLS");
        // stocker + scanner chaque elt du formulaire 
        let tt=Array.from(form.elements).forEach((input) => {
            
            //on ne checke pas l'element bouton  
            if (input.type !== "submit") {

                //si la validation de ce champ retourne false
                if (!validateFields(input)) {
                    // alert('1')
                    event.preventDefault();
                    event.stopPropagation();
                    
                    input.classList.remove("is-valid");

                    //faire afficher que le champ est valide
                    input.classList.add("is-invalid");
                    //afficher l'elt HTML suivant qui contient un msg erreur
                    input.nextElementSibling.style.display = 'block';
                } 
                //si donnée dans le champ est valide 
                else {
                    // alert('3')
                    //re-cacher l'elt HTML suivant qui contient msg erreur
                    input.nextElementSibling.style.display = 'none';
                    input.classList.remove("is-invalid");
                    input.classList.add("is-valid");
                }
            }
        });
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
            //longueur champ ok ?     
            && validateLength(input, 2, 20)
            //format saisie ok ?
            && checkFormat(input, "^[A-Za-z]+$")
            )
        }

    case "lastName" :{
        return (
            validateRequired(input)
            && validateLength(input, 2, 20)
            && checkFormat(input, "^[A-Za-z]+$")
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

function checkFormat(input, regex){
    return input.value.match(regex);
}

// Validation d'un champ REQUIRED
function validateRequired(input) {
    console.log("test de "+input.name)
    console.log("validate required = " + !(input.value == null || input.value == ""))
    return !(input.value == null || input.value == "");
}

// Validation du nombre de caractéres : MIN & MAX
function validateLength(input, minLength, maxLength) {
    return !(input.value.length < minLength || input.value.length > maxLength);
}

// Validation des caractères : LATIN & LETTRES
function validateText(input) {
    return input.value.match("^[A-Za-z]+$");
}

// Validation d'un e-mail
function validateEmail(input) {
    let EMAIL = input.value;
    let POSAT = EMAIL.indexOf("@");
    let POSDOT = EMAIL.lastIndexOf(".");

    return !(POSAT < 1 || (POSDOT - POSAT < 2));
}

// Validation Code Postal
function validatePostCode(input) {
    return input.value.match("^(0[1-9]|[1-9][0-9])[0-9][0-9][0-9]$");
}

// Validation Adresse
function validateAddress(input) {
    return input.value.match(/^\s*\S+(?:\s+\S+){2}/);
}

// Validation du Numéro de téléphone
function validatePhoneNumber(input) {
    return input.value.match(/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/);
}

// Validation d'un checkbox
function validateTerms(input) {
    return input.checked;
}
