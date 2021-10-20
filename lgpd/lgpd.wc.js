$(function () {
    var WcAjax = $("link[rel='base']").attr('href') + "/_cdn/widgets/lgpd/lgpd.ajax.php";
    var wcCookiePolicy = localStorage.getItem("wcCookiePolicy");
    
    $("#cookiePolicy").css("display", "block");
    if (!!wcCookiePolicy && wcCookiePolicy === "agree") {
        $("#cookiePolicy").css("display", "none");
    }

    //COOKIE POLICY
    $("[data-cookie]").click(function (e) {
        e.preventDefault();
        var cookiePolicy = $("#cookiePolicy");
        var datacookie = $(this).attr('data-cookie');

        $(".main_footer").css("margin-bottom", 0);
        cookiePolicy.fadeOut();

        $.post(WcAjax, { action: 'cookiePolicy', cookie: datacookie }, function (data) {
            if (data.agree) {
                localStorage.setItem("wcCookiePolicy", "agree");
                window.location.reload();
            }
        }, 'json');
    });

    var cookiePolicy = $("#cookiePolicy");
    if (!cookiePolicy.hasClass("ds-none")) {
        $(".main_footer").css("margin-bottom", 0);
    }
});


