<div class="container-fluid n_p">
  <div id="test_carousel_indicator_show_indicator" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#test_carousel_indicator_show_indicator" data-slide-to="0" class="active"></li>
      <li data-target="#test_carousel_indicator_show_indicator" data-slide-to="1"></li>
      <li data-target="#test_carousel_indicator_show_indicator" data-slide-to="2"></li>
      <li data-target="#test_carousel_indicator_show_indicator" data-slide-to="3"></li>
      <li data-target="#test_carousel_indicator_show_indicator" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <div class="row">
      <div class="col-xs-12">
        <div class="ads font_100">
          <img src="images/iklan_tron/full.jpg" alt="">
          <div class="__filter_img _blue"></div>
          <span>Nama Iklan</span>
        </div>
      </div>
    </div>
      </div>
      <div class="item">
        <div class="row">
      <div class="col-xs-12">
        <div class="ads font_100">
          <img src="images/iklan_tron/full.jpg" alt="">
          <div class="__filter_img _blue"></div>
          <span>Nama Iklan</span>
        </div>
      </div>
    </div>
      </div>
      <div class="item">
        <div class="row">
      <div class="col-xs-12">
        <div class="ads font_100">
          <img src="images/iklan_tron/full.jpg" alt="">
          <div class="__filter_img _blue"></div>
          <span>Nama Iklan</span>
        </div>
      </div>
    </div>
      </div>
      <div class="item">
        <div class="row">
      <div class="col-xs-12">
        <div class="ads font_100">
          <img src="images/iklan_tron/full.jpg" alt="">
          <div class="__filter_img _blue"></div>
          <span>Nama Iklan</span>
        </div>
      </div>
    </div>
      </div>
      <div class="item">
        <div class="row">
      <div class="col-xs-12">
        <div class="ads font_100">
          <img src="images/iklan_tron/full.jpg" alt="">
          <div class="__filter_img _blue"></div>
          <span>Nama Iklan</span>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>

<script>
    var tag = document.createElement('script');
    // tag.src = "https://www.youtube.com/player_api";
    tag.src = "https://www.youtube.com/iframe_api";

    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    // function onYouTubePlayerAPIReady()
    setTimeout(function onYouTubeIframeAPIReady() {
      player = new YT.Player('player', {
        height:'1400',
        width: '60%',
        videoId: 'HAX3X-Jvdog',
        playerVars:{'autoplay': 1, 'control': 0, 'html5':1},
        events:{
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
      })
    }, 6000);

    function onPlayerReady(event)
    {
      event.target.playVideo();
    }

    var done = false;
    function onPlayerStateChange(event)
    {
      if (event.data == YT.PlayerState.ENDED && !done) {
        setTimeout(location.reload(), 6000);
        done = true;
      }
    }
</script>
<!-- <div class="yt_black_bg">
  <div id="player"></div>
   <iframe width="60%" height="1400px" src="https://www.youtube.com/embed/HAX3X-Jvdog?autoplay=1&controls=0" frameborder="0" allowfullscreen></iframe>
</div> -->
