$(document).ready(function (){
    $('.glyphicon.glyphicon-play-circle').click(function(e) {
        e.preventDefault(); //a href disabled
        var video_url = $(this).attr('href');
        var matches = video_url.match(/[\\?\\&]v=([^\\?\\&]+)/);
        var video_id = matches[1]; //video id
        var width = 640;           //screen width
        var height = 360;
        var video_object = '<object width="'+width+'"  height="'+height+'"><param name="movie" value="http://www.youtube.com/v/'+video_id+'&amp;hl=en_US&amp;fs=1?rel=0"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed src="http://www.youtube.com/v/'+video_id+'&amp;hl=en_US&amp;fs=1?rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="'+width+'"  height="'+height+'"></embed></object>';
        $(".modal-body").html(video_object);
        setTimeout(function () {
            $('.modal').modal('show');
        },100);
        /*
        Если нужно тоже самое можно сделать на АЯКСЕ (Раскоментировать и все будет работать через файл url_insert)
        $.ajax({
            type:'post',
            data:{youtube_url: video_url},
            url:'http://localhost/bogdan/you_youtube/url_insert.php',
            success: function(data){
                $(".modal-body").html(data);
                setTimeout(function () {
                    $('.modal').modal('show');
                },100);
            }
        });
        */
    });
});