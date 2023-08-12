jQuery(
    (function ($) {
        $(".change-status").on("change", function () {
            let select = $(this);
            $.ajax({
                url:
                    select.closest("form").attr("action") +
                    "?status=" +
                    select.val(),
                method: "GET",
            });
        });

        $(".phone").inputmask({ mask: "+7 (999) 999-99-99" });
    })(jQuery)
);
