$(function () {
    function load(action) {
        var load_div = $(".ajax_load");
        if (action === "open") {
            load_div.fadeIn().css("display", "flex");
        } else {
            load_div.fadeOut();
        }
    }

    $("formPost").submmit(function (e) {
        e.preventDefault();
        var form = $(this);
        var form_ajax = $(".postAjax");
        var posts = $(".posts");

        $.ajax({
            url: form.attr("action"),
            data: form.serialize(),
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                load("open");
            },
            success: function (callback) {
                if (callback.message) {
                    form_ajax.html(callback.message).fadeIn();
                } else {
                    form_ajax.fadeOut(function () {
                        $(this).html("");
                    });
                }

                if (callback.post) {
                    posts.prepend(callback.post);
                }
            },
            complete: function () {
                load("close");
            }
        });
    });

    $("body").on("click", "[data-action]", function (e) {
        e.preventDefault();
        var data = $(this).data();
        var div = $(this).parent();

        $.post(data.action, data, function () {
            div.fadeOut();
        }, "json").fail(function () {
            alert("Erro ao processar requisição!");
        });
    });
});
