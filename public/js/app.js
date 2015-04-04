/**
 * Created by R on 4/4/2015.
 */

// Hiding the form
var uploadForm = document.querySelector('#upload-form');
uploadForm.style.visibility = 'hidden';

var formToggle = document.querySelector('#form-toggle');
formToggle.addEventListener('click', function() {
    // Show or hide form
    if(uploadForm.style.visibility === 'hidden') {
        uploadForm.style.visibility = '';
        formToggle.textContent = 'cancel';
    }
    else {
        uploadForm.style.visibility = 'hidden';
        formToggle.textContent = 'upload';
    }
});

// Firing click event
var fileUpload = document.querySelector('#photo');
var customFile = document.querySelector('#custom-file');

customFile.addEventListener('click', function() {
    fileUpload.click();
});
