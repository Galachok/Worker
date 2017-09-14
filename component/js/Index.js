$(document).ready(function () {
    $(".work").css("width", "61%");
    var currentPage = parseInt($("#currentPage").attr('title'));
    var totalPage = Math.ceil($("#secret").attr('title') / 10);
    var visible_page = 10;
    var url = window.location.href;
    var flag = false;
    var newUrl = "";
    for (var i = url.length; i > 0; i--) {
        if (url[i] == '/') {
            flag = true;
            flag = i;
            break;
        }
    }
    for (var i = 0; i <= flag; i++) {
        newUrl += url[i];
    }

    $('#pagination').pagination({
        items: totalPage,
        itemOnPage: visible_page,
        currentPage: currentPage,
        cssStyle: 'compact-theme',
        prevText: 'Prev',
        nextText: 'Next',
        hrefTextPrefix: '',
        onInit: function () {
        },
        onPageClick: function (page, event) {
            newUrl += page;
            $(location).attr('href', newUrl);
        }
    });
});

/*function Send() {

}

function Worker(page) {
    $.ajax({
        url: 'function/function.php',
        type: 'GET',
        cache: false,
        data: {'page': page},
        datatype: 'json',
        beforeSend: Send,
        success: function (data) {

        }
    });
}*/
