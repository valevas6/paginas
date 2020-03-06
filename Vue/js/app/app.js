var Form = function(tags){/*Etiquetas de html para que se pueda mostrar el formulario*/
    this.formArea = tags;
};

Form.prototype.showForm = function() {
    return this.formArea;
};

document.addEventListener('DOMContentLoaded', function(){
    
    var contactForm = new Form("<div class='col-sm-6 offset-sm-3 content wow slideInLeft' data-wow-duration='2s'><h3>Get In Touch</h3><p>Feel free to contact me about anything.</p><form action=''><div class='form-group'><input type='text' class='form-control' placeholder='Full Name'></div><div class='form-group'><input type='email' class='form-control' placeholder='Email'></div><div class='form-group'><textarea class='form-control' rows='3' placeholder='Leave a message...'></textarea></div><button type='submit' class='btn btn-primary'>Send Message</button</form></div>");
    
    var container = document.getElementById('form-container');
    container.innerHTML = contactForm.showForm();
    
});