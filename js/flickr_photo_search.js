YAHOO.namespace("flickr");

YAHOO.flickr = function(){
    var YUE = YAHOO.util.Event;
    var YUD = YAHOO.util.Dom;
    var selId = '';
    function __init() {
        YUE.addListener("photo-list", "click", _handleClick);
        YUE.addListener("full-img", "click", _handleClick);
    }
    function _handleClick(e) {
        var targ = YUE.getTarget(e);
        var target = targ;
        var tagName = targ.tagName.toUpperCase();
        if(tagName != 'A' && tagName != 'INPUT' && tagName != 'BUTTON' && tagName != 'IMG') {
            return;
        }
        if(!targ.className) {
            while(target){
                target = target.parentNode;
                if(target.className){ 
                    targ = target;
                    break;
                }
            }
            if(!targ.className) {
                return;
            }
        }
        /*Process for various events based on className*/
        if(YUD.hasClass(targ, "photo-link")) {
            showPhoto(targ);
            YUE.preventDefault(e);
        }else if(YUD.hasClass(targ, "back-to-photos")){
            backToPhotos(targ);
            YUE.preventDefault(e);
        }
    }

    function showPhoto(targ) {
        //Hide photo list
        var photolist = YUD.get('photo-list');
        YUD.setStyle(photolist, 'display', 'none');
        //Show big photo 
        var img = YUD.getChildrenBy(targ, function(el){if(el.tagName.toUpperCase() == "IMG"){return true;}return false;})[0];
        var markup = '<a href="#" class="back-to-photos" style="display:block; margin-bottom:10px;">Back To Photos</a>';
        markup += '<img src="'+img.src+'" width="450" height="450" />';
        var fullimg = YUD.get('full-img');
        fullimg.innerHTML = markup;
        YUD.setStyle(fullimg, 'display', 'block');
    }
    function backToPhotos(targ) {
        //Hide Big Photo
        var fullimg = YUD.get('full-img');
        YUD.setStyle(fullimg, 'display', 'none');

        //Show photolist
        var photolist = YUD.get('photo-list');
        YUD.setStyle(photolist, 'display', 'block');
    }
   /*Call __init*/
    __init();
}();
