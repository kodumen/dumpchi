/**
 * Created by R on 4/4/2015.
 */

// Hiding the form
var uploadForm = document.querySelector('#upload-form');
uploadForm.style.display = 'none';

var formToggle = document.querySelector('#form-toggle');
formToggle.addEventListener('click', function() {
    // Show or hide form
    if(uploadForm.style.display === 'none') {
        uploadForm.style.display = '';
        formToggle.textContent = 'cancel';
    }
    else {
        uploadForm.style.display = 'none';
        formToggle.textContent = 'upload';
    }
})

// Styling the form
var fileUpload = document.querySelector('#photo');
var fileSelectEvent = document.createEvent('HTMLEvents');
var customFile = document.querySelector('#custom-file');
customFile.addEventListener('click', function() {
    fileSelectEvent.initEvent('click', true, false);
    fileUpload.dispatchEvent(fileSelectEvent);
})
