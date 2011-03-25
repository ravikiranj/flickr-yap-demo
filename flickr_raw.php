<?php
    $result = "";
    $yql_url = "http://query.yahooapis.com/v1/public/yql?";
    $query = "SELECT * FROM flickr.photos.recent limit 9";
    $query_url = $yql_url . "q=" . urlencode($query) . "&format=xml";

    $photos = simplexml_load_file($query_url);
    if(isset($photos->results) && isset($photos->results->photo)){
        $result = "<div style='border: 1px solid #C0C0C0; margin-bottom: 10px; width: 300px; padding: 10px;'>";
        $r = $photos->results->photo;
        foreach($r->attributes() as $key => $value) {
            $result .= "<span>{$key} =  {$value}</span></br>";
        }
        $result .= "</div>";
        $result .= "Image URL Template = http://farm[farm].static.flickr.com/server/id_secret.jpg" . "</br>";
        $result .= "Actual Image URL = http://farm{$r['farm']}.static.flickr.com/{$r['server']}/{$r['id']}_{$r['secret']}.jpg </br></br>";
        $result .=  "Image Link Template = http://www.flickr.com/photos/owner/id" . "</br>";
        $result .=  "Actual Image Link = http://www.flickr.com/photos/{$r['owner']}/{$r['id']}" . "</br>";
    }else{
        $result = "Failed to get data from Flickr !!!";
    }

    $html = <<<MARKUP
<html>
<head>
    <title> Flickr Raw </title>
</head>
    <body>    
    {$result}
    </body>
</html>    
MARKUP;
    echo $html;    
?>
