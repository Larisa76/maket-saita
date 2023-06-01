function request() {
    let fio = $("#v-1").val();
    let phone = $("#v-2").val();
    let email = $("#v-3").val();
    let adress = $("#v-4").val();
    let message = $("#text").val();



    let str = "fio="+fio+"&phone="+phone+"&email="+email+"&message="+message + "&adress="+adress;

    $.ajax({

        type: "POST",
        url: "model/mail.php",
        data: str,
        success: function(smr) {
            let openBtn = document.querySelector('.btn-contact');
            let Popup = document.querySelector('.feedback_form1');
            let closeBtn = document.querySelector('.form');
        
        
            function showPopup() {
            Popup.style.display = 'block'
            closeBtn.style.display = 'none'
            }
            openBtn.addEventListener('click', showPopup);

        }
       
    });
}




function validation(form) {

    function removeError(input) {
          const parent = input.parentNode;
    
          if (parent.classList.contains('error')) {
          parent.querySelector('.error-label').remove()
          parent.classList.remove('error')
         }
        }

    function createError(input, text) {
        const parent = input.parentNode;
        const errorLabel = document.createElement('label')
        
        errorLabel.classList.add('error-label')
        errorLabel.textContent = text
        parent.classList.add('error')
        parent.append(errorLabel)
        }
        


    let result = true; 

    const allInputs = form.querySelectorAll('input');
    for (const input of allInputs) {

        removeError(input)

        if (input.dataset.required == "true") {
            if (input.value == "") {
            console.log('Ошибка поля')
            createError(input, 'Поле не заполнено!')
            result = false
        }

        }

    }
    
    return  result 
}

 
document.getElementById('form2').addEventListener('submit', function(event) {
 event.preventDefault()


  if (validation(this) == true) {



  } 

})
  
  


