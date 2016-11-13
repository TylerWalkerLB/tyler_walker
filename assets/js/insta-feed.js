/**
 * Created by Tyler on 9/26/15.
 */

function getAuth() {
    var authO;
    var authReq;
    if (window.XMLHttpRequest) {
        authReq = new XMLHttpRequest();
    } else {
        authReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
    authReq.onload = function() {
        authO = this.responseText;
        getInsta(authO);
    };
    authReq.open('get','../auth-codes.php',true);
    authReq.send();
}


function getInsta(auth) {
    var instaReq = "https://api.instagram.com/v1/users/2109148424/media/recent/?count=3&access_token="+auth;
    var instaLink;
    var instaImgWidth;
    var instaImgHeight;
    var widthScale;
    var imgHeight;
    var instImg;
    var appendTarget;
    $.ajax({
        type:'GET',
        dataType:'jsonp',
        cache:false,
        url: instaReq,
        success: function(data) {
            for (i=0;i<3;i++) {
            instaLink= data.data[i].link;
//            instaImgWidth = data.data[i].images.standard_resolution.width;
//            instaImgHeight = data.data[i].images.standard_resolution.height;
//            widthScale = 300 / instaImgWidth;
//            imgHeight = instaImgHeight * widthScale;
            instImg = $('<img class="instagram-media" style="width:300px;height:auto;">');
            instImg.attr('src',data.data[i].images.standard_resolution.url);
            var imgTag = i+1;
            appendTarget = '#insta-'+imgTag;
            $(appendTarget).append(instImg).attr('href',instaLink).attr('target','_blank');
            }

        }
    });
}

document.addEventListener('load',getAuth());