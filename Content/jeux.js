let screenshots = [
    {"id": 10492, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/fyf27q7yd0tqwaniyf4a.jpg"},
    {"id": 10493, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/radqp9dbon3hphczz8wo.jpg"},
    {"id": 10494, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/hegewmjbntl4c8yxmgxu.jpg"},
    {"id": 213040, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/su3luh5hh75kdkxshzga.jpg"},
    {"id": 213041, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/ecoazbxlic6pmui7nncf.jpg"},
    {"id": 213042, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/somrevp8tsafpankuwko.jpg"},
    {"id": 213043, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/eyxcarmp44ywmlablc2h.jpg"},
    {"id": 213044, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/wry9gktn3ruwpef8byfj.jpg"},
    {"id": 213045, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/exu3z963lrfkwniys4kg.jpg"},
    {"id": 213046, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/pdaqdb620qftrmjpplo5.jpg"},
    {"id": 213047, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/zdcexvwhvrxa2jqvocku.jpg"},
    {"id": 213048, "url": "https://images.igdb.com/igdb/image/upload/t_1080p/hzhlnbpe2sjrrqlyqs5b.jpg"}
];
var descript = " Jeu de rôle (RPG) japonais, Kingdom Hearts III vous place dans la peau de Sora et sa "+
"petite troupe qui doivent faire face au Maître Xehanort.Ce dernier souhaite déclencher une guerre des Keyblades,"+
"mais vous devrez l'en empêcher en partant à la recherche des sept Gardiens de la Lumière...";
var nameGame ="Kingdom Hearts III";

$('#result').html('');
$('#state').val('');
var searchField = $('#search').val();
var expression = new RegExp(searchField, "i");
var numImg = 1;
$('#game_name').append(nameGame);

$.each(screenshots, function (key, value) {
    if (value.url.search(expression) != -1) {
        $('#result').append('<div class="mySlides fade">'
        +'<div class="numbertext">' + numImg +' /'+ screenshots.length+ '</div>'
        +'<img class="imageSlide" src= ' + value.url + '></div>');
        numImg = numImg+1;
    }
});
$.each(screenshots, function (key, value) {
    if (value.url.search(expression) != -1) {
        $('#span_img').append('<span class="dot"></span>');
    }
});

$('#descr').append(descript);

$('#result').on('click', 'li', function () {
    var click_text = $(this).text().split('|');
    $('#search').val($.trim(click_text[0]));
    $("#result").html('');
});

