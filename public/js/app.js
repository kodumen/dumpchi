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

var fileUpload = document.querySelector('#photo');
var customFile = document.querySelector('#custom-file');

fileUpload.style.visibility = 'hidden';

// Firing file input click event
customFile.addEventListener('click', function() {
    fileUpload.click();
});

// Display filename of selected file
// after selection
var filenameBox = document.querySelector('#filename-box div');
fileUpload.addEventListener('change', function() {
    filenameBox.textContent = fileUpload.value;
});
