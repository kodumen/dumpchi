/**
 * Created by R on 4/4/2015.
 */

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