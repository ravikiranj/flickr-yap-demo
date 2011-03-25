<?php
    $markup = <<<MARKUP
<style type="text/css">
.bd {
    text-align: center;
    margin: auto;
}
.bd h2{
    margin-bottom: 10px;    
    margin-top: 10px
}
.bd .photo-link{
    list-style-type: none;
    display: block;
    margin-bottom: 5px;
}
</style>        
<div class="bd">
    <h2> Flickr Photo Search </h2>
    <a href="http://www.flickr.com/photos/32434075@N00/5521513575" class="photo-link">
        <img width="250" height="250" title="cloudy" alt="cloudy" src="http://farm6.static.flickr.com/5174/5521513575_d120a9ee3e.jpg">
    </a>    
    <yml:a view="FullView">Click here to search Flickr Photos</yml:a></br>
</div>
MARKUP;
    echo $markup;
?>
