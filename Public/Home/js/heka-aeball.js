/**
 * Created by Administrator on 2017/1/14.
 */

//<script type="text/javascript">

function doit(){
    window.location = "index.php?name="+($.trim($(".name").html()))+"&type="+$("#bjdh").val()+"&info="+($.trim($(".message").html()));
}
function changeText(cont1,cont2,speed){
    var Otext=cont1.text();
    var Ocontent=Otext.split("");
    var i=0;
    function show(){
        if(i<Ocontent.length)
        {
            cont2.append(Ocontent[i]);
            i=i+1;
        }

    };
    var Otimer=setInterval(show,speed);
};


$(document).ready(function(){

    $(".name").click(function(){
        //找到class=name的赋予点击操作,点击后执行以下动作



        $(".dh").show();
        if($(this).find(".sort_input").attr("type") == "text"){return false;}
        var name = $.trim($(this).html());
        var m = $.trim($(this).text());
        $(this).html("<input type=text value=\""+name+"\" class=\"sort_input\">");
        $(this).find(".sort_input").focus();
        $(this).find(".sort_input").bind("blur", function(){
            var n = $.trim($(this).val());
            if(n != m && n != ""){
                //window.location = "sort.php?val="+encodeURIComponent(n);
                //发送信息
                $(this).parent().html(n);
            }else{
                $(this).parent().html(name);
            }
        });
    });
    $(".message").click(function(){

        $(".dh").show();
        if($(this).find(".sort_textarea").attr("name") == "textarea"){return false;}
        var message = $.trim($(this).html());
        var mm = $.trim($(this).text());
        $(this).html("<textarea name=\"textarea\" class=\"sort_textarea\">"+message+"</textarea>");
        $(this).find(".sort_textarea").focus();
        //$(this).find(".sort_textarea").select() ;
        $(this).find(".sort_textarea").bind("blur", function(){

            var nn = $.trim($(this).val());
            if(nn != mm && nn != ""){
                //window.location = "sort.php?val="+encodeURIComponent(n);
                //发送信息
                $(this).parent().html(nn);
            }else{
                $(this).parent().html(message);
            }
        });
    });

    /*changeText($(".message"),$(".message2"),150);
     clearInterval(Otimer);*/
});

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

    // 发送给好友
    WeixinJSBridge.on('menu:share:appmessage', function (argv) {
        WeixinJSBridge.invoke('sendAppMessage', {
            "img_url": "http://ka.lanrenmb.com/shengdang/sdhk2/images/thumb_5487c42bc634b.png",
            "img_width": "640",
            "img_height": "640",
            "link": "http://ka.lanrenmb.com/shengdang/sdhk2/index.php?name="+encodeURIComponent($.trim($(".name").html()))+"&type="+$("#bjdh").val()+"&info="+encodeURIComponent($.trim($(".message").html())),
            "desc":  $.trim($(".message").html()),
            "title": "花园平安夜 祈福迎新年"
        }, function (res) {
            location.href="http://mp.weixin.qq.com/s?__biz=MjM5NjA0MTI0OQ==&mid=200068987&idx=1&sn=1de5daeaae94c66a3c46a13e20e8011e#rd";                _report('send_msg', res.err_msg);
        })
    });

    // 分享到朋友圈
    WeixinJSBridge.on('menu:share:timeline', function (argv) {
        WeixinJSBridge.invoke('shareTimeline', {
            "img_url": "http://ka.lanrenmb.com/shengdang/sdhk2/images/thumb_5487c42bc634b.png",
            "img_width": "640",
            "img_height": "640",
            "link": "http://ka.lanrenmb.com/shengdang/sdhk2/index.php?name="+encodeURIComponent($.trim($(".name").html()))+"&type="+$("#bjdh").val()+"&info="+encodeURIComponent($.trim($(".message").html())),
            "desc":  $.trim($(".message").html()),
            "title": "花园平安夜 祈福迎新年"
        }, function (res) {
            location.href="http://mp.weixin.qq.com/s?__biz=MjM5NjA0MTI0OQ==&mid=200068987&idx=1&sn=1de5daeaae94c66a3c46a13e20e8011e#rd";                _report('timeline', res.err_msg);
        });
    });

    // 分享到微博
    WeixinJSBridge.on('menu:share:weibo', function (argv) {
        WeixinJSBridge.invoke('shareWeibo', {
            "content": "愿温暖的圣诞烛光带给您祥和、喜悦，祝您和您的家人、朋友幸福安康！Merry Christmas and Happy New Year！",
            "url": "http://ka.lanrenmb.com/shengdang/sdhk2/index.php?name="+encodeURIComponent($.trim($(".name").html()))+"&type="+$("#bjdh").val()+"&info="+encodeURIComponent($.trim($(".message").html()))
        }, function (res) {
            _report('weibo', res.err_msg);
        });
    });



}, false)

const NUMBER_OF_LEAVES = 30;


function init()
{

    var container = document.getElementById('leafContainer');

    for (var i = 0; i < NUMBER_OF_LEAVES; i++)
    {
        container.appendChild(createALeaf());
    }
}

function randomInteger(low, high)
{
    return low + Math.floor(Math.random() * (high - low));
}


function randomFloat(low, high)
{
    return low + Math.random() * (high - low);
}


function pixelValue(value)
{
    return value + 'px';
}

function durationValue(value)
{
    return value + 's';
}

function createALeaf()
{

    var leafDiv = document.createElement('div');
    var image = document.createElement('img');

    image.src = 'images/realLeaf' + randomInteger(1, 5) + '.png';


    // image.src = '../index/images/dhimg/realLeaf' + randomInteger(1, 5) + '.png';

    leafDiv.style.top = "-100px";


    leafDiv.style.left = pixelValue(randomInteger(0, 500));


    var spinAnimationName = (Math.random() < 0.5) ? 'clockwiseSpin' : 'counterclockwiseSpinAndFlip';


    leafDiv.style.webkitAnimationName = 'fade, drop';
    image.style.webkitAnimationName = spinAnimationName;


    var fadeAndDropDuration = durationValue(randomFloat(5, 11));

    var spinDuration = durationValue(randomFloat(4, 8));

    leafDiv.style.webkitAnimationDuration = fadeAndDropDuration + ', ' + fadeAndDropDuration;

    var leafDelay = durationValue(randomFloat(0, 5));
    leafDiv.style.webkitAnimationDelay = leafDelay + ', ' + leafDelay;

    image.style.webkitAnimationDuration = spinDuration;


    leafDiv.appendChild(image);

    return leafDiv;
}

window.addEventListener('load', init, false);

//</script>
