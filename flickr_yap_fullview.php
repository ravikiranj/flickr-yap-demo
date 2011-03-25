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

    /* Start of functions */
    function build_photos($photos){
       $markup = '<ul id="photo-list">';
        if (count($photos) > 0){
            foreach ($photos as $photo){
                $markup .= <<<MARKUP
<li class="photo">
    <a class="photo-link" href="http://www.flickr.com/photos/{$photo['owner']}/{$photo['id']}">
        <img src="http://farm{$photo['farm']}.static.flickr.com/{$photo['server']}/{$photo['id']}_{$photo['secret']}.jpg" width="150" height="150" alt="{$photo['title']}" title="{$photo['title']}"/>
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

    function getCSS() {
        $style = '';
        $file = "css/flickr_photo_search.css";
        if(file_exists($file)) {
            $style = file_get_contents($file);
        }
        $css = <<<STYLE
<style type="text/css">
    {$style}
</style>        
STYLE;
        return $css;
    }

    function getJS() {
        $js = '';
        $file = "js/flickr_photo_search-min.js";
        if(file_exists($file)) {
            $js = file_get_contents($file);
        }
        $scripts = <<<SCRIPTS
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript">
    {$js}
</script>
SCRIPTS;
        return $scripts;
    }
    /* End of Functions */

    /* Being Markup Preparetion */
    $css = getCSS();
    $js = getJS();

    $html = <<<MARKUP
<head>
    {$css}
</head>
<body>    
    {$result}
    {$js}
</body>
MARKUP;
    echo $html;
?>
