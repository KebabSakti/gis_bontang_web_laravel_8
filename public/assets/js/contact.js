$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                phone: {
                    required: true,
                    minlength: 5,
                    number: true
                },
                messages: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "kolom nama tidak boleh kosong",
                    minlength: "nama minimal 2 karakter"
                },
                subject: {
                    required: "kolom subjek tidak boleh kosong",
                    minlength: "subjek minimal 4 karakter"
                },
                number: {
                    required: "kolom no hp tidak boleh kosong",
                    minlength: "no hp minimal 5 karakter"
                },
                phone: {
                    required: "kolom no hp tidak boleh kosong",
                    minlength: "no hp minimal 5 karakter",
                    number: "hanya boleh menggunakan angka"
                },
                messages: {
                    required: "kolom pesan tidak boleh kosong",
                    minlength: "pesan minimal 20 karakter"
                }
            }
            // submitHandler: function(form) {
            //     $(form).ajaxSubmit({
            //         type:"POST",
            //         data: $(form).serialize(),
            //         url:"contact_process.php",
            //         success: function() {
            //             $('#contactForm :input').attr('disabled', 'disabled');
            //             $('#contactForm').fadeTo( "slow", 1, function() {
            //                 $(this).find(':input').attr('disabled', 'disabled');
            //                 $(this).find('label').css('cursor','default');
            //                 $('#success').fadeIn()
            //                 $('.modal').modal('hide');
		    //             	$('#success').modal('show');
            //             })
            //         },
            //         error: function() {
            //             $('#contactForm').fadeTo( "slow", 1, function() {
            //                 $('#error').fadeIn()
            //                 $('.modal').modal('hide');
		    //             	$('#error').modal('show');
            //             })
            //         }
            //     })
            // }
        })
    })
        
 })(jQuery)
})