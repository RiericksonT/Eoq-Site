$(function () {
    function loadPost(action) {
        var load_dir = $("#postAjax")
        if (action === "open") {
            load_dir.fadeIn().css("display", "flex")
        } else {
            load_dir.fadeOut();
        }
    }
    function loadComment(action) {
        var load_dir = $("#commentAjax")
        if (action === "open") {
            load_dir.fadeIn().css("display", "flex")
        } else {
            load_dir.fadeOut();
        }
    }
    $('#formPost').submmit(function (e) {
        e.preventDefault();
        var form = $(this);
        var form_ajax = $("#postAjax")
        var posts = $(".create");

        $.ajax({
            url: form.attr("action"),
            data: form.serialize(),
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                loadPost("open");
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
                loadPost("close");
            }
        });
    });

    $('#formComment').submmit(function (e) {
        e.preventDefault();
        var form = $(this);
        var comment = $(".create");

        $.ajax({
            url: form.attr("action"),
            data: form.serialize(),
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                loadComment("open");
            },
            success: function (callback) {
                if (callback.message) {
                    form_ajax.html(callback.message).fadeIn();
                } else {
                    form_ajax.fadeOut(function () {
                        $(this).html("");
                    });
                }
                if (callback.comment) {
                    comment.prepend(callback.comment);
                }
            },
            complete: function () {
                loadComment("close");
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
