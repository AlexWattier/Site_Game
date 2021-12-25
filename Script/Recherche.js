$(document).ready(function () {
    $.ajaxSetup({cache: false});
    $('#search').keyup(function () {
        $('#resultsearch').html('');
        $('#state').val('');
        var searchField = $('#search').val();
        $.ajax({
            url: "/WEBR4?s=" + searchField + "&action=search&json=1",
            data: {},
            success: function (data) {
                if (data) {
                    $.each(data, function (key, value) {
                        $('#resultsearch').append(
                             '<a href="?action=game&id= '+value.id +'">'
                            + '<li class="list-group-item link-class">'
                            + '<img class="miniature" src= ' + value.coverUrl + '>'
                            + value.name + ' | <span class="text-muted">'
                            + value.id + '</span>'
                            + '</li></a>'
                        );
                    });
                }
            }
        });
    });
    $('#resultsearch').on('click', 'li', function () {
        var click_text = $(this).text().split('|');
        $('#search').val($.trim(click_text[0]));
        $("#resultsearch").html('');
    });
});
