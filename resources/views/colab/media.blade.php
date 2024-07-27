<div class="joms-module__wrapper"><div class="joms-tab__bar">
    <a class="active" href="#joms-app--136">JS Photos</a>
<a href="#joms-app--142">JS Videos</a>
</div>

<div id="joms-app--136" class="joms-tab__content">
<div class="joms-module">

<ul class="joms-list--thumbnail">
<li class="joms-list__item">
<a href="javascript:" onclick="joms.api.photoOpen('40', '6');">
<img title="Uploaded by Siyabonga" src="https://radapps.co.za/digiinc/images/avatar/thumb_a45a72dd30f336eed66ded609c40aa18.jpg" alt="Siyabonga">
</a>
</li>
<li class="joms-list__item">
<a href="javascript:" onclick="joms.api.photoOpen('32', '5');">
<img title="Uploaded by Flamingo" src="https://radapps.co.za/digiinc/images/avatar/thumb_7afd0eceea70c74f9c75fb4a950b98fd.png" alt="Flamingo">
</a>
</li>
<li class="joms-list__item">
<a href="javascript:" onclick="joms.api.photoOpen('29', '4');">
<img title="Uploaded by Zero" src="https://radapps.co.za/digiinc/images/avatar/thumb_910a7762056ff0a32502045b33641ebd.jpg" alt="Zero">
</a>
</li>
<li class="joms-list__item">
<a href="javascript:" onclick="joms.api.photoOpen('20', '3');">
<img title="Uploaded by Kamogelo Ngwenya " src="https://radapps.co.za/digiinc/images/avatar/thumb_d8b16c807d47ef139802a298f7658ce9.jpg" alt="Kamogelo Ngwenya ">
</a>
</li>
<li class="joms-list__item">
<a href="javascript:" onclick="joms.api.photoOpen('10', '2');">
<img title="Uploaded by Mathapelo" src="https://radapps.co.za/digiinc/images/avatar/thumb_0ff8dc39d41e9ed2eff5f04941374840.png" alt="Mathapelo">
</a>
</li>
<li class="joms-list__item">
<a href="javascript:" onclick="joms.api.photoOpen('2', '1');">
<img title="Uploaded by Taks the Dev" src="https://radapps.co.za/digiinc/images/avatar/thumb_a0f6fb3384b99f1f835911df865ac010.png" alt="Taks the Dev">
</a>
</li>
</ul>
</div>        </div>
<div id="joms-app--142" class="joms-tab__content" style="display:none">
<div class="joms-module"><div class="joms-module joms-js--video-module">

<div class="joms-blankslate">No public videos available.</div>
</div>

<div class="joms-gap"></div>
<a href="/digiinc/index.php/colab/videos" class="joms-button--link">
<small>View all videos</small>
</a>

<script>
(function( w ) {
w.joms_queue || (w.joms_queue = []);
w.joms_queue.push(function( $ ) {
var $ct = $('#latest-videos-nav'),
$loading = $ct.find('.joms-js--loading');

function render( json ) {
$list = $('.joms-js--video-module').find('.joms-list--half');
$list.html( json.html || '&nbsp;' );
}

$ct.on( 'click', '.newest-videos', function( e ) {
$loading.show();
joms.ajax({
func: 'frontpage,ajaxGetNewestVideos',
data: [ frontpageVideos ],
callback: function( json ) {
$( e.target ).addClass('active-state').siblings('a').removeClass('active-state');
$loading.hide();
render( json );
}
});
});

$ct.on( 'click', '.featured-videos', function( e ) {
$loading.show();
joms.ajax({
func: 'frontpage,ajaxGetFeaturedVideos',
data: [ frontpageVideos ],
callback: function( json ) {
$( e.target ).addClass('active-state').siblings('a').removeClass('active-state');
$loading.hide();
render( json );
}
});
});

$ct.on( 'click', '.popular-videos', function( e ) {
$loading.show();
joms.ajax({
func: 'frontpage,ajaxGetPopularVideos',
data: [ frontpageVideos ],
callback: function( json ) {
$( e.target ).addClass('active-state').siblings('a').removeClass('active-state');
$loading.hide();
render( json );
}
});
});
});
})( window );
</script>
</div>        </div>