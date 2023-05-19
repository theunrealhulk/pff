$(document).ready(function(){
    var projectId=""
    $('.modal').modal();
    $('.T').click((e)=>{
        projectId=e.target.getAttribute('data-project-id');
    })
    $('.collapsible').collapsible();
    $('select').formSelect();
    $('form').submit(function(e) {
        e.preventDefault();

        // Get the submitted form
        var submittedForm = $(this);
        // Get all form values
        var formValues = {};
        submittedForm.find('input, select, textarea').each(function() {
            var inputName = $(this).attr('name')==undefined?'noName': $(this).attr('name');
            var inputValue = $(this).val();
            formValues[inputName] = inputValue;
            formValues["ProjectId"] = projectId;

        });

        // Log form values to the console
        console.log(formValues);
        console.log(submittedForm[0].name);
        const requestOptions = {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify(formValues)
          };
          console.log(requestOptions);
        fetch(submittedForm[0].action, requestOptions)
        .then(response => response.json())
        .then(data => {
            console.log('Response:', data);
            // Handle the response data
            let successMessage = submittedForm[0].name=="login"?"successfully logged In":"Your created a new User"
            
            Swal.fire({
                icon: 'success',
                title: successMessage,
                showConfirmButton: false,
                timer: 1500
              }).then(()=>{
                  window.location.reload();
              })
            
        })
        .catch(error => {
            let failMessage = submittedForm[0].name=="login"?"Fail to log In":"Fail to run Operation"
            console.error('Error:', error);
            // Handle any errors that occurred during the request
            Swal.fire({
                icon: 'error',
                title: failMessage,
                text: error,
              })
        });
    });
    
    
    
})

