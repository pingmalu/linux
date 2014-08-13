<!DOCTYPE html><html><head><meta charset='UTF-8'><meta http-equiv="Refresh" content="3;URL=http://github.malu.me/score/index.html" />
   <style>
    .quiver{position:fixed;bottom:50%;left:50%;z-index:899;margin-bottom:-50px;margin-left:-50px;width:100px;}
    .arrows{-moz-animation:equalizor cubic-bezier(0.77,0,0.175,1) 0.5s alternate-reverse infinite;-webkit-animation:equalizor cubic-bezier(0.77,0,0.175,1) 0.5s alternate-reverse infinite;animation:equalizor cubic-bezier(0.77,0,0.175,1) 0.5s alternate-reverse infinite;vertical-align:baseline;display:inline-block;width:0;height:0;border-style:solid;border-width:0 10px 1px 10px;border-color:rgba(255,255,255,0) rgba(255,255,255,0) #0b486b rgba(255,255,255,0);}
    .st{border-bottom-color:#0b486b;}
    .nd{border-bottom-color:#3b8686;}
    .rd{border-bottom-color:#79bd9a;}
    .th{border-bottom-color:#a8dba8;}
    .fth{border-bottom-color:#cff09e;}
    span:nth-child(1){-moz-animation-delay:0s;-webkit-animation-delay:0s;animation-delay:0s;}
    span:nth-child(2){-moz-animation-delay:0.1s;-webkit-animation-delay:0.1s;animation-delay:0.1s;}
    span:nth-child(3){-moz-animation-delay:0.2s;-webkit-animation-delay:0.2s;animation-delay:0.2s;}
    span:nth-child(4){-moz-animation-delay:0.3s;-webkit-animation-delay:0.3s;animation-delay:0.3s;}
    span:nth-child(5){-moz-animation-delay:0.4s;-webkit-animation-delay:0.4s;animation-delay:0.4s;}
    @-moz-keyframes equalizor{
    from{border-bottom-width:60px;}
    to{border-bottom-width:1px;}
    }
    @-webkit-keyframes equalizor{
    from{border-bottom-width:60px;}
    to{border-bottom-width:1px;}
    }
    @keyframes equalizor{
    from{border-bottom-width:60px;}
    to{border-bottom-width:1px;}
    }
    *{-moz-backface-visibility:hidden;-webkit-backface-visibility:hidden;backface-visibility:hidden;}
    html,body{background-color:#141517;height:100%;margin:0;}
    .loading{display:block;font:normal 22px/1em "Merriweather Sans",sans-serif;text-transform:uppercase;color:#cff09e;}
   </style>
  </head>
  <body>
    <div class="quiver">
      <span class="arrows st"></span><span class="arrows nd"></span><span class="arrows rd"></span><span class="arrows th"></span><span class="arrows fth"></span>
      <span class="loading">Loading...</span>
    </div>
  </body>
</html>