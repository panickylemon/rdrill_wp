jQuery(document).ready(function () {
//youtube script
    var tag = document.createElement('script');
    tag.src = "http://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var p = document.getElementById ("player");
    $(p).hide();

    var player;

    onYouTubeIframeAPIReady = function () {
        player = new YT.Player('player', {
            height: '244',
            width: '434',
            videoId: $(p).attr("data-video-id"),  // youtube video id
            playerVars: {
                'autoplay': 0,
                'rel': 0,
                'showinfo': 0
            },
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    };

    onPlayerStateChange = function (event) {
        if (event.data == YT.PlayerState.ENDED) {
            $('.start-video').fadeIn('normal');
        }
    };

    $(document).on('click', '.start-video', function () {
        $(this).hide();
        $("#player").show();
        $("#thumbnail_container").hide();
        player.playVideo();
    })});