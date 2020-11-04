$(function(){
    var modal = $("#mainModal");
    
    //alert window auto dismiss
    if($('.alert').length > 0){
        setTimeout(function() {
            $('.alert').fadeOut('fast');
        }, 5000);
    }

    $("body").on("click", ".modal-trigger", function () {
        element = $(this);
        target = element.attr("data-target");
        modalBody = $(".modal-body");
        text = element.text();

        element.prop("disabled", true).text("Memuat..");

        $.get(target, function (page) {
            modalBody.html(page);
            modal.modal("show");

            element.prop("disabled", false).text(text);

            // if($('[data-fancybox="preview"]').length > 0) {
            //     $('[data-fancybox="preview"]').fancybox({
            //         thumbs : {
            //           autoStart : true
            //         }
            //     });
            // }

            // $(".single-datepicker").daterangepicker({
            //     singleDatePicker: true,
            //     minDate: moment(),
            //     locale: {
            //         format: "DD/MM/YYYY",
            //     },
            // });
        });
    });

    modal.on("hidden.bs.modal", function (e) {
        $(this).modal("dispose");
    });

    $("body").on("click", ".confirm", function () {
        if (confirm("Proses ini tidak dapat dikembalikan, lanjutkan ?")) {
            return true;
        } else {
            return false;
        }
    });

    $('body').on('blur', 'input[name="code"]', function() {
        e = $(this);
        $.get('area/ajax/code', {code : e.val()}, function(data) {
            if(data.id != null){
                alert('Kode '+ e.val() + ' sudah digunakan');
                e.val('').focus();
            }
        })
    });

});