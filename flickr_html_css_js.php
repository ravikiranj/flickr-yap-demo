<?php
    $result = "";
    $yql_url = "http://query.yahooapis.com/v1/public/yql?";
    $query = "SELECT * FROM flickr.photos.recent limit 9";
    $query_url = $yql_url . "q=" . urlencode($query) . "&format=xml";

    $photos = simplexml_load_file($query_url);
    if(isset($photos->results) && isset($photos->results->photo)){
       $result = build_photos($photos->results->photo);
    }else{
       $result = "Failed to get data from Flickr !!!";
    }

    function build_photos($photos){
       $markup = '<ul id="photo-list">';
        if (count($photos) > 0){
            foreach ($photos as $photo){
                $markup .= <<<MARKUP
<li class="photo">
    <a class="photo-link" href="http://www.flickr.com/photos/{$photo['owner']}/{$photo['id']}">
        <img src="http://farm{$photo['farm']}.static.flickr.com/{$photo['server']}/{$photo['id']}_{$photo['secret']}.jpg" width="250" height="250" alt="{$photo['title']}" title="{$photo['title']}"/>
    </a>    
</li>            
MARKUP;
           }
        } else {
            $markup .= 'No Photos Found';
        }
        $markup .= '</ul>';
        $markup .= '<div id="full-img"></div>';
        return $markup;
    }
    $html = <<<MARKUP
<html>
<head>
    <title> Flickr HTML with CSS and JS  </title>
    <link rel="stylesheet" href="css/flickr_photo_search.css" type="text/css">    
</head>
    <body>    
    {$result}
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="js/flickr_photo_search.js"></script>
    </body>
</html>    
MARKUP;
    echo $html;
?>
