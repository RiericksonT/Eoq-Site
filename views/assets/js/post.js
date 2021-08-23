$('#formPost').submmit(function (e) {
    e.preventDefault();
    var form = $(this);
    var posts = $(".create");

    $.ajax({
        url: form.attr("action"),
        data: form.serialize(),
        type: "POST",
        dataType: "json",
        success: function (callback) {
            if (callback.post) {
                posts.prepend(callback.post);
            }
        }
    });
});

$('#formcomment').submmit(function (e) {
    e.preventDefault();
    var form = $(this);
    var posts = $(".create");

    $.ajax({
        url: form.attr("action"),
        data: form.serialize(),
        type: "POST",
        dataType: "json",
        success: function (callback) {
            if (callback.post) {
                posts.prepend(callback.post);
            }
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
