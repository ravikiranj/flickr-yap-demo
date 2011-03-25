<?php
    $markup = <<<MARKUP
<html>
    <head><title>Handy Flickr Demo List</title>
    <style type="text/css">
.bd ul li{
    list-style-type: none;
    margin: 15px;
    width: 450px;
    border: 1px solid #C0C0C0;
    padding: 15px;
}
.bd ul li span{
    padding-right: 25px;
}
.bd ul li a{
    padding-right: 25px;
}
    </style>    
    </head>
    <body>
        <h1> Flickr Demo Handy Guide </h1>
        <div class="bd">
            <ul>
                <li>
                    <span>Flickr Raw Data  </span> 
                    <a href="flickr_raw.php" target="_blank"/>Demo</a>
                    <a href="http://flickr-yap-demo.svn.sourceforge.net/viewvc/flickr-yap-demo/flickr_raw.php?view=markup" target="_blank"/>Source</a>
                </li>
                <li>
                    <span>Flickr HTML  </span> 
                    <a href="flickr_html.php" target="_blank"/>Demo</a>
                    <a href="http://flickr-yap-demo.svn.sourceforge.net/viewvc/flickr-yap-demo/flickr_html.php?view=markup" target="_blank"/>Source</a>
                </li>
                <li>
                    <span>Flickr HTML with CSS  </span> 
                    <a href="flickr_html_css.php" target="_blank"/>Demo</a>
                    <a href="http://flickr-yap-demo.svn.sourceforge.net/viewvc/flickr-yap-demo/flickr_html_css.php?view=markup" target="_blank"/>Source</a>
                </li>
                <li>
                    <span>Flickr HTML with CSS and JS  </span> 
                    <a href="flickr_html_css_js.php" target="_blank"/>Demo</a>
                    <a href="http://flickr-yap-demo.svn.sourceforge.net/viewvc/flickr-yap-demo/flickr_html_css_js.php?view=markup" target="_blank"/>Source</a>
                </li>
                <li>
                    <span>Flickr YAP FullView  </span> 
                    <a href="flickr_yap_fullview.php" target="_blank"/>Demo</a>
                    <a href="http://flickr-yap-demo.svn.sourceforge.net/viewvc/flickr-yap-demo/flickr_yap_fullview.php?view=markup" target="_blank"/>Source</a>
                </li>
                <li>
                    <span>Flickr YAP SmallView  </span> 
                    <a href="flickr_yap_smallview.php" target="_blank"/>Demo</a>
                    <a href="http://flickr-yap-demo.svn.sourceforge.net/viewvc/flickr-yap-demo/flickr_yap_smallview.php?view=markup" target="_blank"/>Source</a>
                </li>
                <li>
                    <span>Flickr YAP Config  </span> 
                    <a href="ygadget_4xEXsU3c.xml" target="_blank"/>Demo</a>
                    <a href="http://flickr-yap-demo.svn.sourceforge.net/viewvc/flickr-yap-demo/ygadget_4xEXsU3c.xml?view=markup" target="_blank"/>Source</a>
                </li>
                <li>
                    <span>Flickr YAP App in prod </span> 
                    <a href="http://pulse.yahoo.com/y/apps/4xEXsU3c/?yap_intl=in&yap_js=IN" target="_blank"/>Demo</a>
                    <a href="http://developer.apps.yahoo.com/projects/4xEXsU3c" target="_blank"/>Project details</a>
                </li>

            </ul>
        </div>
    </body>
</html>    
MARKUP;
    echo $markup;
?>
