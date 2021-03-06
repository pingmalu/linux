<!DOCTYPE html><html>
<head><meta charset='UTF-8'>
<style>
body{padding:0;margin:0;overflow:hidden;}
a{color: #474c48;}
.bg{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;background:url(http://ww4.sinaimg.cn/large/a83bb572jw1ejb3dydkdnj20zk0npafo.jpg);background-size:cover;background-position:center;background-color:#f1f1f1;-webkit-transform:scaleX(-1);transform:scaleX(-1);}
.text{position:absolute;font-family:arial;font-size:14px;color:#474c48;top:10px;left:10px;}
.hover-text{position:absolute;top:-25px;left:-170px;font-family:arial;font-size:16px;font-weight:bold;color:black;opacity:0.4;}
.hover-text:after{content:'';position:absolute;left:25px;top:10px;height:80px;width:80px;background:url(data:image/png;base64,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);background-size:cover;-webkit-transform:scaleY(-1);transform:scaleY(-1);}
.container{position:absolute;top:45%;left:50%;width:0;height:300px;margin-top:-150px;}
#pyramid-small{position:absolute;margin-left:-50px;height:0;width:100px;z-index:30;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;-webkit-animation:rotateSmall 10s ease infinite;animation:rotateSmall 10s ease infinite;}
@-webkit-keyframes rotateSmall{
	0%{-webkit-transform:rotateX(-10deg) rotateY(-45deg) translateY(30px);}
	25%{-webkit-transform:rotateX(-10deg) rotateY(45deg) translateY(20px);}
	50%{-webkit-transform:rotateX(-10deg) rotateY(135deg) translateY(10px);}
	75%{-webkit-transform:rotateX(-10deg) rotateY(225deg) translateY(0);}
	100%{-webkit-transform:rotateX(-10deg) rotateY(-45deg) translateY(30px);}
}
@keyframes rotateSmall{
	0%{transform:rotateX(-10deg) rotateY(-45deg) translateY(30px);}
	25%{transform:rotateX(-10deg) rotateY(45deg) translateY(20px);}
	50%{transform:rotateX(-10deg) rotateY(135deg) translateY(10px);}
	75%{transform:rotateX(-10deg) rotateY(225deg) translateY(0);}
	100%{transform:rotateX(-10deg) rotateY(-45deg) translateY(30px);}
}
#pyramid-small-shadow{position:absolute;margin-left:-20px;height:0;width:100px;z-index:20;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;-webkit-animation:rotateSmall 10s ease infinite;animation:rotateSmall 10s ease infinite;}
@-webkit-keyframes rotateSmall{
	0%{-webkit-transform:rotateX(-12deg) rotateY(-45deg) translateY(30px);}
	25%{-webkit-transform:rotateX(-12deg) rotateY(45deg) translateY(20px);}
	50%{-webkit-transform:rotateX(-12deg) rotateY(135deg) translateY(10px);}
	75%{-webkit-transform:rotateX(-12deg) rotateY(225deg) translateY(0);}
	100%{-webkit-transform:rotateX(-12deg) rotateY(-45deg) translateY(30px);}
}
@keyframes rotateSmall{
	0%{transform:rotateX(-12deg) rotateY(-45deg) translateY(30px);}
	25%{transform:rotateX(-12deg) rotateY(45deg) translateY(20px);}
	50%{transform:rotateX(-12deg) rotateY(135deg) translateY(10px);}
	75%{transform:rotateX(-12deg) rotateY(225deg) translateY(0);}
	100%{transform:rotateX(-12deg) rotateY(-45deg) translateY(30px);}
}
#pyramid-big{position:absolute;top:90px;margin-left:-100px;height:200px;width:200px;z-index:10;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;-webkit-animation:rotateBig 10s ease infinite;animation:rotateBig 10s ease infinite;}
@-webkit-keyframes rotateBig{
	0%{-webkit-transform:rotateX(-12deg) rotateY(-45deg) translateY(30px);}
	25%{-webkit-transform:rotateX(-12deg) rotateY(-225deg) translateY(20px);}
	50%{-webkit-transform:rotateX(-12deg) rotateY(-405deg) translateY(10px);}
	75%{-webkit-transform:rotateX(-12deg) rotateY(-585deg) translateY(0px);}
	100%{-webkit-transform:rotateX(-12deg) rotateY(-45deg) translateY(30px);}
}
@keyframes rotateBig{
	0%{transform:rotateX(-12deg) rotateY(-45deg) translateY(30px);}
	25%{transform:rotateX(-12deg) rotateY(-225deg) translateY(20px);}
	50%{transform:rotateX(-12deg) rotateY(-405deg) translateY(10px);}
	75%{transform:rotateX(-12deg) rotateY(-585deg) translateY(0px);}
	100%{transform:rotateX(-12deg) rotateY(-45deg) translateY(30px);}
}
.pyram-small{width:100px;height:100px;position:absolute;}
.pyram-big{width:200px;height:200px;position:absolute;}
.pyram-small.shadow{width:80px;height:80px;margin:10px;background:black;opacity:0.3;-webkit-filter:blur(4px);-webkit-transform:rotateX(-90deg) translateZ(88px);transform:rotateX(-90deg) translateZ(88px);}
.pyram-small.one{width:0;height:0;border-left:50px solid transparent;border-right:50px solid transparent;border-bottom:100px solid #e5bba1;-webkit-transition:all 2s ease;transition:all 2s ease;-webkit-transform:rotateX(30deg)  rotateY(0deg) translateY(18px) translateZ(18px);transform:rotateX(30deg)  rotateY(0deg) translateY(18px) translateZ(18px);}
.pyram-small.two{width:0;height:0;border-left:50px solid transparent;border-right:50px solid transparent;border-bottom:100px solid #e5bba1;-webkit-transition:all 2s ease;transition:all 2s ease;-webkit-transform:rotateX(0deg)  rotateY(90deg) rotateX(30deg) translateY(18px) translateZ(18px);transform:rotateX(0deg)  rotateY(90deg) rotateX(30deg) translateY(18px) translateZ(18px);}
.pyram-small.three{width:0;height:0;border-left:50px solid transparent;border-right:50px solid transparent;border-bottom:100px solid #e5bba1;-webkit-transition:all 2s ease;transition:all 2s ease;-webkit-transform:rotateX(-30deg)  rotateY(180deg) translateY(18px) translateZ(18px);transform:rotateX(-30deg)  rotateY(180deg) translateY(18px) translateZ(18px);}
.pyram-small.four{width:0;height:0;border-left:50px solid transparent;border-right:50px solid transparent;border-bottom:100px solid #e5bba1;-webkit-transition:all 2s ease;transition:all 2s ease;-webkit-transform:rotateX(0deg)  rotateY(-90deg) rotateX(30deg) translateY(18px) translateZ(18px);transform:rotateX(0deg)  rotateY(-90deg) rotateX(30deg) translateY(18px) translateZ(18px);}
.pyram-small.one:after,.pyram-small.two:after,.pyram-small.three:after,.pyram-small.four:after{content:'';position:absolute;top:50px;margin-left:-10px;width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;border-bottom:20px solid #474c48;-webkit-transition:all 2s ease;transition:all 2s ease;-webkit-transform:translateY(-50px);transform:translateY(-50px);}
.pyram-big.base{width:200px;height:200px;background:#3e423f;-webkit-transform:rotateX(-90deg) translateZ(-58px);transform:rotateX(-90deg) translateZ(-58px);}
.pyram-big.one{width:0;height:0;border-left:100px solid transparent;border-right:100px solid transparent;border-top:200px solid #474c48;-webkit-transform:rotateX(-30deg) rotateY(0deg) translateZ(58px);transform:rotateX(-30deg) rotateY(0deg) translateZ(58px);}
.pyram-big.two{width:0;height:0;border-left:100px solid transparent;border-right:100px solid transparent;border-top:200px solid #474c48;-webkit-transform:rotateX(0deg) rotateY(90deg) rotateX(-30deg) translateZ(58px);transform:rotateX(0deg) rotateY(90deg) rotateX(-30deg) translateZ(58px);}
.pyram-big.three{width:0;height:0;border-left:100px solid transparent;border-right:100px solid transparent;border-top:200px solid #474c48;-webkit-transform:rotateX(30deg) rotateY(180deg) translateZ(58px);transform:rotateX(30deg) rotateY(180deg) translateZ(58px);}
.pyram-big.four{width:0;height:0;border-left:100px solid transparent;border-right:100px solid transparent;border-top:200px solid #474c48;-webkit-transform:rotateX(0deg) rotateY(-90deg) rotateX(-30deg) translateZ(58px);transform:rotateX(0deg) rotateY(-90deg) rotateX(-30deg) translateZ(58px);}
/* Pyramid Shadow */
.pyram-small.s1{-webkit-animation:shadowSmallOne 10s linear infinite;}
@-webkit-keyframes shadowSmallOne{
	0%{-webkit-filter:brightness(1);}
	25%{-webkit-filter:brightness(0.8);}
	50%{-webkit-filter:brightness(0.6);}
	75%{-webkit-filter:brightness(1.2);}
	83%{-webkit-filter:brightness(0.6);}
	88%{-webkit-filter:brightness(0.8);}
	100%{-webkit-filter:brightness(1);}
}
.pyram-small.s2{-webkit-animation:shadowSmallTwo 10s linear infinite;}
@-webkit-keyframes shadowSmallTwo{
	0%{-webkit-filter:brightness(0.8);}
	25%{-webkit-filter:brightness(0.6);}
	50%{-webkit-filter:brightness(1.2);}
	75%{-webkit-filter:brightness(1);}
	83%{-webkit-filter:brightness(1.2);}
	88%{-webkit-filter:brightness(0.6);}
	100%{-webkit-filter:brightness(0.8);}
}
.pyram-small.s3{-webkit-animation:shadowSmallThree 10s linear infinite;}
@-webkit-keyframes shadowSmallThree{
	0%{-webkit-filter:brightness(0.6);}
	25%{-webkit-filter:brightness(1.2);}
	50%{-webkit-filter:brightness(1);}
	75%{-webkit-filter:brightness(0.8);}
	83%{-webkit-filter:brightness(1);}
	88%{-webkit-filter:brightness(1.2);}
	100%{-webkit-filter:brightness(0.6);}
}
.pyram-small.s4{-webkit-animation:shadowSmallFour 10s linear infinite;}
@-webkit-keyframes shadowSmallFour{
	0%{-webkit-filter:brightness(1.2);}
	25%{-webkit-filter:brightness(1);}
	50%{-webkit-filter:brightness(0.8);}
	75%{-webkit-filter:brightness(0.6);}
	83%{-webkit-filter:brightness(0.8);}
	88%{-webkit-filter:brightness(1);}
	100%{-webkit-filter:brightness(1.2);}
}
.pyram-big.s1{-webkit-animation:shadowBigOne 10s linear infinite;}
@-webkit-keyframes shadowBigOne{
	0%{-webkit-filter:brightness(1);}
	12%{-webkit-filter:brightness(1.2);}
	25%{-webkit-filter:brightness(0.6);}
	50%{-webkit-filter:brightness(1);}
	62%{-webkit-filter:brightness(1.2);}
	75%{-webkit-filter:brightness(0.6);}
	77%{-webkit-filter:brightness(1.2);}
	80%{-webkit-filter:brightness(1);}
	84%{-webkit-filter:brightness(0.8);}
	88%{-webkit-filter:brightness(0.6);}
	90%{-webkit-filter:brightness(1.2);}
	100%{-webkit-filter:brightness(1);}
}
.pyram-big.s2{-webkit-animation:shadowBigTwo 10s linear infinite;}
@-webkit-keyframes shadowBigTwo{
	0%{-webkit-filter:brightness(0.8);}
	25%{-webkit-filter:brightness(1.2);}
	37%{-webkit-filter:brightness(0.6);}
	50%{-webkit-filter:brightness(0.8);}
	75%{-webkit-filter:brightness(1.2);}
	77%{-webkit-filter:brightness(1);}
	80%{-webkit-filter:brightness(0.8);}
	84%{-webkit-filter:brightness(0.6);}
	88%{-webkit-filter:brightness(1.2);}
	90%{-webkit-filter:brightness(1);}
	100%{-webkit-filter:brightness(0.8);}
}
.pyram-big.s3{-webkit-animation:shadowBigThree 10s linear infinite;}
@-webkit-keyframes shadowBigThree{
	0%{-webkit-filter:brightness(0.6);}
	25%{-webkit-filter:brightness(1);}
	37%{-webkit-filter:brightness(1.2);}
	50%{-webkit-filter:brightness(0.6);}
	75%{-webkit-filter:brightness(1);}
	77%{-webkit-filter:brightness(0.8);}
	80%{-webkit-filter:brightness(0.6);}
	84%{-webkit-filter:brightness(1.2);}
	88%{-webkit-filter:brightness(1);}
	90%{-webkit-filter:brightness(0.8);}
	100%{-webkit-filter:brightness(0.6);}
}
.pyram-big.s4{-webkit-animation:shadowBigFour 10s linear infinite;}
@-webkit-keyframes shadowBigFour{
	0%{-webkit-filter:brightness(1.2);}
	12%{-webkit-filter:brightness(0.6);}
	25%{-webkit-filter:brightness(0.8);}
	50%{-webkit-filter:brightness(1.2);}
	62%{-webkit-filter:brightness(0.6);}
	75%{-webkit-filter:brightness(0.8);}
	77%{-webkit-filter:brightness(0.6);}
	80%{-webkit-filter:brightness(1.2);}
	84%{-webkit-filter:brightness(1);}
	88%{-webkit-filter:brightness(0.8);}
	90%{-webkit-filter:brightness(0.6);}
	100%{-webkit-filter:brightness(1.2);}
}
/* Dots Animation */
.circle{position:absolute;top:320px;left:50%;border-radius:50%;background:transparent;width:250px;height:250px;margin:-125px 0 0 -125px;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;-webkit-animation:rotateCircle 10s ease infinite;animation:rotateCircle 10s ease infinite;}
@-webkit-keyframes rotateCircle{
	0%{-webkit-transform:rotateX(-110deg) rotateZ(0deg);}
	12%{-webkit-transform:rotateX(-110deg) rotateZ(180deg);}
	25%{-webkit-transform:rotateX(-110deg) rotateZ(0deg);}
	37%{-webkit-transform:rotateX(-110deg) rotateZ(180deg);}
	50%{-webkit-transform:rotateX(-110deg) rotateZ(0deg);}
	62%{-webkit-transform:rotateX(-110deg) rotateZ(180deg);}
	75%{-webkit-transform:rotateX(-110deg) rotateZ(0deg);}
	100%{-webkit-transform:rotateX(-110deg) rotateZ(360deg);}
}
@keyframes rotateCircle{
	0%{transform:rotateX(-110deg) rotateZ(0deg);}
	12%{transform:rotateX(-110deg) rotateZ(180deg);}
	25%{transform:rotateX(-110deg) rotateZ(0deg);}
	37%{transform:rotateX(-110deg) rotateZ(180deg);}
	50%{transform:rotateX(-110deg) rotateZ(0deg);}
	62%{transform:rotateX(-110deg) rotateZ(180deg);}
	75%{transform:rotateX(-110deg) rotateZ(0deg);}
	100%{transform:rotateX(-110deg) rotateZ(360deg);}
}
span.dot{position:absolute;width:30px;height:30px;margin:-15px 0 0 -15px;-webkit-animation:rotateDot 10s ease infinite;animation:rotateDot 10s ease infinite;}
@-webkit-keyframes rotateDot{
	0%{-webkit-transform:rotateX(90deg) rotateY(0deg);}
	12%{-webkit-transform:rotateX(90deg) rotateY(-180deg);}
	25%{-webkit-transform:rotateX(90deg) rotateY(0deg);}
	37%{-webkit-transform:rotateX(90deg) rotateY(-180deg);}
	50%{-webkit-transform:rotateX(90deg) rotateY(0deg);}
	62%{-webkit-transform:rotateX(90deg) rotateY(-180deg);}
	75%{-webkit-transform:rotateX(90deg) rotateY(0deg);}
	100%{-webkit-transform:rotateX(90deg) rotateY(-360deg);}
}
@keyframes rotateDot{
	0%{transform:rotateX(90deg) rotateY(0deg);}
	12%{transform:rotateX(90deg) rotateY(-180deg);}
	25%{transform:rotateX(90deg) rotateY(0deg);}
	37%{transform:rotateX(90deg) rotateY(-180deg);}
	50%{transform:rotateX(90deg) rotateY(0deg);}
	62%{transform:rotateX(90deg) rotateY(-180deg);}
	75%{transform:rotateX(90deg) rotateY(0deg);}
	100%{transform:rotateX(90deg) rotateY(-360deg);}
}
span.dot.big:before{content:'';position:absolute;top:0;display:block;width:30px;height:30px;background-image:-webkit-radial-gradient(5px 7px,circle cover,#ffffff,#d7d7d7);background-image:-moz-radial-gradient(5px 7px 45deg,circle cover,#ffffff 0%,#d7d7d7 100%);background-color:#bd9a85;border-radius:50%;opacity:0;-webkit-transition:all 2s ease 0.5s;transition:all 2s ease 0.5s;}
span.dot.big:after{content:'';position:absolute;top:0;display:block;width:30px;height:30px;background-image:-webkit-radial-gradient(5px 7px,circle cover,#ffe1cf,#bd9a85);background-image:-moz-radial-gradient(5px 7px 45deg,circle cover,#ffe1cf 0%,#bd9a85 100%);background-color:#bd9a85;border-radius:50%;opacity:1;-webkit-transition:all 2s ease;transition:all 2s ease;}
span.dot.small:after{content:'';display:block;margin:5px;width:20px;height:20px;background-image:-webkit-radial-gradient(5px 7px,circle cover,#565c57,#313432);background-image:-moz-radial-gradient(5px 7px 45deg,circle cover,#565c57 0%,#313432 100%);background-color:#313432;border-radius:50%;}
/* Dots Position */
span.dot.one{left:50%;top:0;}
span.dot.two{left:76%;top:8%;}
span.dot.three{left:92%;top:24%;}
span.dot.four{left:100%;top:50%;}
span.dot.five{left:92%;top:76%;}
span.dot.six{left:76%;top:92%;}
span.dot.seven{left:50%;top:100%;}
span.dot.eight{left:24%;top:92%;}
span.dot.nine{left:8%;top:76%;}
span.dot.ten{left:0;top:50%;}
span.dot.eleven{left:8%;top:24%;}
span.dot.twelve{left:24%;top:8%;}
/* Dots Scale */
span.dot.one:before,span.dot.two:before,span.dot.twelve:before,span.dot.one:after,span.dot.two:after,span.dot.twelve:after{-webkit-animation:scaleDotsOne 10s ease infinite;animation:scaleDotsOne 10s ease infinite;}
@-webkit-keyframes scaleDotsOne{
	0%{-webkit-transform:scale(1);}
	12%{-webkit-transform:scale(0.76);}
	25%{-webkit-transform:scale(1);}
	37%{-webkit-transform:scale(0.76);}
	50%{-webkit-transform:scale(1);}
	62%{-webkit-transform:scale(0.76);}
	75%{-webkit-transform:scale(1);}
	84%{-webkit-transform:scale(0.76);}
	94%,100%{-webkit-transform:scale(1);}
}
@keyframes scaleDotsOne{
	0%{transform:scale(1);}
	12%{transform:scale(0.76);}
	25%{transform:scale(1);}
	37%{transform:scale(0.76);}
	50%{transform:scale(1);}
	62%{transform:scale(0.76);}
	75%{transform:scale(1);}
	84%{transform:scale(0.76);}
	94%,100%{transform:scale(1);}
}
span.dot.three:before,span.dot.four:before,span.dot.five:before,span.dot.three:after,span.dot.four:after,span.dot.five:after{-webkit-animation:scaleDotsTwo 10s ease infinite;animation:scaleDotsTwo 10s ease infinite;}
@-webkit-keyframes scaleDotsTwo{
	0%{-webkit-transform:scale(0.88);}
	5%{-webkit-transform:scale(0.76);}
	14%{-webkit-transform:scale(0.88);}
	18%{-webkit-transform:scale(0.76);}
	25%{-webkit-transform:scale(0.88);}
	30%{-webkit-transform:scale(0.76);}
	39%{-webkit-transform:scale(0.88);}
	43%{-webkit-transform:scale(0.76);}
	50%{-webkit-transform:scale(0.88);}
	55%{-webkit-transform:scale(0.76);}
	64%{-webkit-transform:scale(0.88);}
	68%{-webkit-transform:scale(0.76);}
	75%{-webkit-transform:scale(0.88);}
	80%{-webkit-transform:scale(0.76);}
	82%{-webkit-transform:scale(0.88);}
	85%{-webkit-transform:scale(1);}
	94%,100%{-webkit-transform:scale(0.88);}
}
@keyframes scaleDotsTwo{
	0%{transform:scale(0.88);}
	5%{transform:scale(0.76);}
	14%{transform:scale(0.88);}
	18%{transform:scale(0.76);}
	25%{transform:scale(0.88);}
	30%{transform:scale(0.76);}
	39%{transform:scale(0.88);}
	43%{transform:scale(0.76);}
	50%{transform:scale(0.88);}
	55%{transform:scale(0.76);}
	64%{transform:scale(0.88);}
	68%{transform:scale(0.76);}
	75%{transform:scale(0.88);}
	80%{transform:scale(0.76);}
	82%{transform:scale(0.88);}
	85%{transform:scale(1);}
	94%,100%{transform:scale(0.88);}
}
span.dot.six:before,span.dot.seven:before,span.dot.eight:before,span.dot.six:after,span.dot.seven:after,span.dot.eight:after{-webkit-animation:scaleDotsThree 10s ease infinite;animation:scaleDotsThree 10s ease infinite;}
@-webkit-keyframes scaleDotsThree{
	0%{-webkit-transform:scale(0.76);}
	12%{-webkit-transform:scale(1);}
	25%{-webkit-transform:scale(0.76);}
	37%{-webkit-transform:scale(1);}
	50%{-webkit-transform:scale(0.76);}
	62%{-webkit-transform:scale(1);}
	75%{-webkit-transform:scale(0.76);}
	84%{-webkit-transform:scale(1);}
	94%,100%{-webkit-transform:scale(0.76);}
}
@keyframes scaleDotsThree{
	0%{transform:scale(0.76);}
	12%{transform:scale(1);}
	25%{transform:scale(0.76);}
	37%{transform:scale(1);}
	50%{transform:scale(0.76);}
	62%{transform:scale(1);}
	75%{transform:scale(0.76);}
	84%{transform:scale(1);}
	94%,100%{transform:scale(0.76);}
}
span.dot.nine:before,span.dot.ten:before,span.dot.eleven:before,span.dot.nine:after,span.dot.ten:after,span.dot.eleven:after{-webkit-animation:scaleDotsFour 10s ease infinite;animation:scaleDotsFour 10s ease infinite;}
@-webkit-keyframes scaleDotsFour{
	0%{-webkit-transform:scale(0.88);}
	5%{-webkit-transform:scale(1);}
	14%{-webkit-transform:scale(0.88);}
	18%{-webkit-transform:scale(1);}
	25%{-webkit-transform:scale(0.88);}
	30%{-webkit-transform:scale(1);}
	39%{-webkit-transform:scale(0.88);}
	43%{-webkit-transform:scale(1);}
	50%{-webkit-transform:scale(0.88);}
	55%{-webkit-transform:scale(1);}
	64%{-webkit-transform:scale(0.88);}
	68%{-webkit-transform:scale(1);}
	75%{-webkit-transform:scale(0.88);}
	80%{-webkit-transform:scale(1);}
	82%{-webkit-transform:scale(0.88);}
	85%{-webkit-transform:scale(0.76);}
	94%,100%{-webkit-transform:scale(0.88);}
}
@keyframes scaleDotsFour{
	0%{transform:scale(0.88);}
	5%{transform:scale(1);}
	14%{transform:scale(0.88);}
	18%{transform:scale(1);}
	25%{transform:scale(0.88);}
	30%{transform:scale(1);}
	39%{transform:scale(0.88);}
	43%{transform:scale(1);}
	50%{transform:scale(0.88);}
	55%{transform:scale(1);}
	64%{transform:scale(0.88);}
	68%{transform:scale(1);}
	75%{transform:scale(0.88);}
	80%{transform:scale(1);}
	82%{transform:scale(0.88);}
	85%{transform:scale(0.76);}
	94%,100%{transform:scale(0.88);}
}
/* Hover Effects */
#pyramid-small:hover .pyram-small{border-bottom-color:#fafafa;-webkit-transition:all 2s ease;transition:all 2s ease;cursor:pointer;}
#pyramid-small:hover .pyram-small:after{border-bottom:20px solid #e56045;-webkit-transition:all 2s ease;transition:all 2s ease;}
#pyramid-small:hover ~ .circle span.dot.big:before{opacity:1;-webkit-transition:all 2s ease;transition:all 2s ease;}
#pyramid-small:hover ~ .circle span.dot.big:after{opacity:0;-webkit-transition:all 2s ease 0.5s;transition:all 2s ease 0.5s;}
</style>
</head>
<body>
<div class="bg"></div>
<div class="text">Welcome to <a href="http://github.malu.me/">Github.malu.me</a></div>
<div class="container">
  <div class="hover-text">Hover me</div>
  <a href="http://malu.me/links/">
	<div id="pyramid-small">	
		<div class="pyram-small one s1"></div>
		<div class="pyram-small two s2"></div>
		<div class="pyram-small three s3"></div>
		<div class="pyram-small four s4"></div>
	</div>
  </a>
	<div id="pyramid-small-shadow">
		<div class="pyram-small shadow"></div>		
	</div>
	<div id="pyramid-big">
		<div class="pyram-big base"></div>
		<div class="pyram-big one s1"></div>
		<div class="pyram-big two s2"></div>
		<div class="pyram-big three s3"></div>
		<div class="pyram-big four s4"></div>
	</div>	
	<div class="circle">
		<span class="dot big one"></span>
		<span class="dot small two"></span>
		<span class="dot small three"></span>
		<span class="dot big four"></span>
		<span class="dot small five"></span>
		<span class="dot small six"></span>
		<span class="dot big seven"></span>
		<span class="dot small eight"></span>
		<span class="dot small nine"></span>
		<span class="dot big ten"></span>
		<span class="dot small eleven"></span>
		<span class="dot small twelve"></span>
	</div>		
</div>
</body>