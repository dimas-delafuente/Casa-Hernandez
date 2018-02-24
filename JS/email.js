
$(document).ready(function () {

function formSuccess(){
    $('input, textarea').fadeOut();
    $('.writeus-contact').fadeOut();
    $('h2, h3, #form-close').delay(500).fadeIn("slow").delay(300);
}

$('#contact-form').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var nameLabel = form.find('input[name="name"]');
    var phoneLabel = form.find('input[name="phone"]');
    var emailLabel = form.find('input[name="email"]');
    var messageLabel = form.find('input[name="message"]');

    nameLabel.html('Name');
    phoneLabel.html('Phone')
    emailLabel.html('Email');
    messageLabel.html('Message');

    var postdata = form.serialize();

    $.ajax({
        type: 'POST',
        url: './sendmail.php',
        data: postdata,
        dataType: 'json',
        success: function(json) {
            if(json.nameMessage != '') {
                nameLabel.append(' - <span> ' + json.nameMessage + '</span>');
            }
            if(json.emailMessage != '') {
                emailLabel.append(' - <span"> ' + json.emailMessage + '</span>');
            }
            if(json.messageMessage != '') {
                messageLabel.append(' - <span"> ' + json.messageMessage + '</span>');
            }
            
                formSuccess();
            
        }


    });
});
});
