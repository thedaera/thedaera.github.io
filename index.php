<!DOCTYPE html>
<html lang="fa-IR">
	<head id="Head">
		<title>
        DEZH
		</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/x-icon" href="/data/iconzh.png">
        <meta name="theme-color" content="#000000">
        <link rel="canonical" href="http://thezh.ir">
        <style>
        body{
	        background:#000000;
    text-align:center;
        }
        .bg2{
    //background:url(/data/LineCircles.gif);
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    position:fixed;
    bottom:55%;
    left:-50%;
    opacity:1;
    width:200%;
    height:100%;
    z-index:-1;
        }
        .bgcover{
    background-size:cover;
        }
        .bgcenter{
    background-position:center;
        }
        .usr{
    width:120px;
    border-radius:50%;
        }
        .brd{
    border-radius:80px;
        }
        .fade{
    opacity:0.8;
        }
        .shadow{
    text-shadow: 5px 0px #83c4ec;
        }
        .mar5{
    margin:5% 5% 5% 5%;
        }
        .padup{
    padding-top:25px;
        }
        .paddown{
    padding-bottom:25px;
        }
        .padside{
    padding-left:5%;
    padding-right:5%;
        }
        .left2{
    margin-left:2%;
        }
        .ninty{
    width:90%;
    margin:5% 5% 5% 5%;
        }
        .forty{
    width:40%;
        }
        .line{
    display:inline-block;
        }
        .vert{
    vertical-align:middle;
        }
        .left{
    text-align:left;
        }
        .center{
    text-align:center;
        }
        .right{
    text-align:right;
        }
        .hei{
    height:120px;
        }
        .white{
    color:#f5f6f8;
        }
        .glass{
    background:#ffffff20;
        }
        .btn{
    border:6px #28a9ea solid;
        }
        .header{
    position:absolute;
    top:7%;
    left:5%;
    width:90%;
    display:inline-block;
        }
        .load{
    background:#000000;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index:1;
    animation: fadeIn 5s;
        }
        .story{
    background:#000000;
    background-position:35% center;
    background-size:cover;
    border-radius:80px 80px 150px 150px;
    width:100%;
    height:auto;
    text-align:center;
        }
        .storyo{
    border-radius:80px 80px 150px 150px;
    background:linear-gradient(180deg, #000000aa 0%, #ffffff00 25%);
    width:100%;
    margin:0px 0px 0px 0px;    
        }
        .desc{
    width:100%;
    margin-top:8%;
    margin-bottom:8%;
        }
        .spin{
    animation-name: spin;
    animation-duration: 5000ms;
    animation-iteration-count: infinite;
    animation-timing-function: linear; 
        }
        @keyframes spin {
    from {
        transform:rotate(0deg);
    }
    to {
        transform:rotate(360deg);
    }
        }
        button{
    background:#dcd1bf44;
    border-radius:30px;
    border:none;
        }
        button:hover{
    background:#dcd1bf66;
        }
        input{
    width:180px;
    height:28px;
    background:none;
    padding:0px 0px 0px 5%;
    font-size:20px;
    font-family:minimal;
    font-weight:bold;
    border:none;
    outline:none;
        }
        ::placeholder{
    color:#fbfcfe99;
        }
		h1{
			font-family:minimal;
			font-weight:bold;
			text-align:center;
		    word-spacing:8px;
			line-height:80px;
			font-size:32px;
			color:#fbfcfe;
		}
		p{
			margin:0px 0px 0px 0px;
			font-family:minimal;
    font-weight:bold;
			text-align:center;
		    word-spacing:8px;
			line-height:80px;
			font-size:20px;
			color:#fbfcfe;
		}
		.fo80{
		    font-size:80px;
		}
		.fo70{
		    font-size:70px;
		}
		.fo60{
		    font-size:60px;
		}
        tag{
			text-align:center; 
			font-family:minimal;
    font-weight:bold;
			font-size:56px;
			color:#fbfcfe;
    font-weight:bold;
    letter-spacing:2px;
    line-height:0px;
    //line-spacing:0px;
		}
		a{
			text-decoration:none;
			font-family:minimal;
    font-size:56px;
			color:#fbfcfe;
		}
		a:visited{
			color:#fbfcfe;
		}
		@font-face{
			font-family:aseman;
			src:url(/gaseman.ttf);
		}
        @font-face{
			font-family:minimal;
			src:url(/data/minimal.ttf);
		}
        
        </style>
        <?php if(empty($_REQUEST['i'])){$i='';}else{$i=$_REQUEST['i'];}?>
        
	</head>
	<body>
    <div id="bot" style="display:none;"></div>
    <div id="load" class="load">
        <img class="vert" src="/data/loading.gif" style="width:20%;position:fixed;top:40%;left:40%;">
    </div>
    <div id="bg" class="bg">
    </div>
    <br>
    <div id="story">
    </div>
    
    <script type="text/javascript">
    var d = document;
    var gete = (e) => {
        return d.getElementById(e);
    };
    var data = d.cookie;
    var tg = {};
    var kie = (k,v) => d.cookie = k+"="+v;
    function onTelegramAuth(user) {
        kie('id',user.id);
        kie('name',user.first_name);
        kie('username',user.username);
        kie('profile',user.photo_url);
        kie('hash',user.hash);
        kie('end','end');
    }
    var ext = (str,s,e) => {
        var out = "";
        s-=1;
        while(s < e){
    out=out+str[s];
    s+=1;
        }
        return out;
    }
    if(data.search('name') != -1){
        me = {
    id:ext(data,data.search('id')+4,data.search('; name')),
    name:ext(data,data.search('name')+6,data.search('; user')),
    username:ext(data,data.search('username')+10,data.search('; profile')),
    profile:ext(data,data.search('profile')+9,data.search('; hash')),
    hash:ext(data,data.search('hash')+9,data.search('; end'))
        };
        gete('bot').innerHTML=`<iframe src="https://api.telegram.org/bot6278121698:AAGO5ubWMpWTZOQQas1_hRnvr2mUt7o1Kp4/sendMessage?chat_id=`+me.id+`&text=Logged as `+me.name+`"></iframe>`;
        var login = `<a href="https://oauth.telegram.org/auth?bot_id=6278121698&origin=https%3A%2F%2Fthezh.ir&embed=1&request_access=write&return_to=https%3A%2F%2Fthezh.ir%2F%3Fi%3D2">
		    <tag style="color:#FFFFFF;font-size:50px;">
    <img class="vert" src="`+me.profile+`" style="width:65px;border-radius:50%;"> ㅤ`+me.name+`
    </tag>
    </a>`;
    }else{
        var login = `<a href="https://t.me/thezh">
		    <tag style="color:#FFFFFF;font-size:100px;">
    <svg class="vert" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none"><path d="m7.4 6.32 8.49-2.83c3.81-1.27 5.88.81 4.62 4.62l-2.83 8.49c-1.9 5.71-5.02 5.71-6.92 0l-.84-2.52-2.52-.84c-5.71-1.9-5.71-5.01 0-6.92ZM10.11 13.65l3.58-3.59" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> телегяам
    </tag>
    </a>`;
    }
    
var gete = (e) => {
    return d.getElementById(e);
};
var load = () => {
    var i = 100;
    var vanish = () => {
        gete('load').style.opacity = i/100;
        i-=1;
        if(i == -1){
            clearInterval(inv);
            gete('load').style.display = 'none';
        }
    };
    let inv = setInterval(vanish,10);
};

var home = () => {
    gete('load').style.display = 'block';
    gete('story').innerHTML = `<div class="ninty center">
	<div class="left line vert" style="width:86%;">
		<img class="line vert" src="/data/iconzh.png" style="width:120px;margin-right:2%;">
		<div class="line vert" style="width:70%;">
			<tag style="color:#FFFFFF;">деж</tag>
			<br><br>
			<tag style="font-size:30px;color:#FFFFFF;"><svg style="margin-right:1%;" class="vert" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 3h1a28.424 28.424 0 0 0 0 18H8M15 3a28.424 28.424 0 0 1 0 18" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 16v-1a28.424 28.424 0 0 0 18 0v1M3 9a28.424 28.424 0 0 1 18 0" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> Technology Corp </tag>
		</div>
	</div>
	<div class="line vert" style="width:9%;">
        <svg id="menuco" onclick="menu();" xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 24 24" fill="none"><path d="M3 7h18M3 12h18M3 17h18" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path></svg>
    </div>
</div>
<div class="center" style="background:url(/data/photo-1584701782235-beff0661e16a.jpeg);width:100%;height:1200px;">
	<div class="ninty" id="menu" style="text-align:left;display:none;">
		<div class="line glass left brd" style="width:45%;margin:0% 1% 0% 1%;">
			<div class="mar5 left line vert">
				<a href="https://t.me/daera">
				<img class="usr vert" src="/data/photo_2024-02-22_22-41-28.jpg">
				</a>
				<div class="line vert" style="width:auto;vertical-align:-35px;">
					<tag style="color:#FFFFFF;">даяа</tag>
					<br><br>
					<tag style="font-size:40px;color:#FFFFFF;"><svg class="vert" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"><path d="M16.7 18.98H7.3c-.42 0-.89-.33-1.03-.73L2.13 6.67c-.59-1.66.1-2.17 1.52-1.15l3.9 2.79c.65.45 1.39.22 1.67-.51l1.76-4.69c.56-1.5 1.49-1.5 2.05 0l1.76 4.69c.28.73 1.02.96 1.66.51l3.66-2.61c1.56-1.12 2.31-.55 1.67 1.26l-4.04 11.31c-.15.38-.62.71-1.04.71ZM6.5 22h11M9.5 14h5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> гаvяа </tag>
				</div>
				
	        </div>
		</div>
		<div class="line glass left brd" style="width:45%;margin:0% 1% 0% 1%;">
			<div class="mar5 left line vert">
				<img class="usr vert" src="/data/IMG_20231106_000743_800.jpg"> ㅤ ㅤ
				<div class="line vert" style="width:auto;vertical-align:-35px;">
					<tag style="color:#FFFFFF;">савия</tag>
					<br><br>
					<tag style="font-size:40px;color:#FFFFFF;"> вашдая </tag>
				</div>
	        </div>
		</div>
		<br>
		<div class="line padup paddown padside" style="width:auto;margin:2% 0% 2% 0%;">
			<div class="center"><tag onclick="" style="color:#FFFFFF;font-size:100px;"><svg class="vert" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none"><path d="M3.5 22V5c0-2 1.34-3 3-3h8c1.66 0 3 1 3 3v17h-14ZM2 22h17" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.39 10h4.23c1.04 0 1.89-.5 1.89-1.89V6.88c0-1.39-.85-1.89-1.89-1.89H8.39c-1.04 0-1.89.5-1.89 1.89v1.23C6.5 9.5 7.35 10 8.39 10ZM6.5 13h3M17.5 16.01 22 16v-6l-2-1" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> пяожа </tag></div>
		</div>
		<br>
		<div class="glass brd line padup paddown padside" style="width:auto;margin:2% 1% 2% 1%;">
			<div class="center"><tag style="color:#FFFFFF;font-size:100px;"> <img class="vert" src="/data/dezho.png" style="width:80px;border-radius:50%;"> ж app </tag></div>
		</div>
		<div class="glass brd line padup paddown padside" style="width:auto;margin:2% 1% 2% 1%;">
			<div class="center"><tag style="color:#FFFFFF;font-size:100px;"> <img class="vert" src="/data/dezho.png" style="width:80px;border-radius:50%;"> чао </tag></div>
		</div>
		<br>
		<div class="glass brd line padup paddown padside" style="width:auto;margin:2% 1% 2% 1%;">
			<div class="center"><tag style="color:#FFFFFF;font-size:100px;"> <img class="vert" src="/data/klle.png" style="width:80px;border-radius:50%;"> kollege </tag></div>
		</div>
		<div class="glass brd line padup paddown padside" style="width:auto;margin:2% 1% 2% 1%;">
			<div class="center"><tag style="color:#FFFFFF;font-size:100px;"> <img class="vert" src="/data/ira.png" style="width:80px;border-radius:50%;"> Ira </tag></div>
		</div>
		<br>
		<div class="line padup paddown padside" style="width:auto;margin:2% 0% 2% 0%;">
			<tag style="color:#FFFFFF;font-size:100px;"><svg class="vert" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none"><path d="M12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10Z" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.88 15a4 4 0 0 1-2.64 1c-2.21 0-4-1.79-4-4s1.79-4 4-4a4 4 0 0 1 2.64 1" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> копияаит </tag>
		</div>
		<div class="line padup paddown padside" style="width:auto;margin:2% 0% 2% 0%;">
			<tag style="color:#FFFFFF;font-size:100px;"><svg class="vert" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none"><path d="M12 9.32c1.19 0 2.16-.97 2.16-2.16C14.16 5.97 13.19 5 12 5c-1.19 0-2.16.97-2.16 2.16 0 1.19.97 2.16 2.16 2.16ZM6.79 19c1.19 0 2.16-.97 2.16-2.16 0-1.19-.97-2.16-2.16-2.16-1.19 0-2.16.97-2.16 2.16 0 1.19.96 2.16 2.16 2.16ZM17.21 19c1.19 0 2.16-.97 2.16-2.16 0-1.19-.97-2.16-2.16-2.16-1.19 0-2.16.97-2.16 2.16 0 1.19.97 2.16 2.16 2.16Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> zед </tag>
		</div>
	</div>
	
	<div style="position:absolute;bottom:0%;width:99%;">
		<div class="ninty center">
			<div class="left line vert" style="width:100%;">
				<tag style="color:#FFFFFF;font-size:90px;text-align:left;"><svg class="vert" xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 24 24" fill="none"><path d="M16.17 10.06H7.83c-1.18 0-1.59-.79-.9-1.75l4.17-5.84c.49-.7 1.31-.7 1.79 0l4.17 5.84c.7.96.29 1.75-.89 1.75Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.59 18H6.42c-1.58 0-2.12-1.05-1.19-2.33l3.99-5.61h5.57l3.99 5.61c.93 1.28.39 2.33-1.19 2.33ZM12 22v-4" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> кес ж жея не агадая </tag>
			</div>
		</div>
		<div class="ninty" style="text-align:left;">
			
			
			<div class="brd line padup paddown" style="width:auto;margin:2% 0% 2% 0%;">
				<div class="center">
					<tag style="color:#FFFFFF;font-size:100px;"><img class="vert" src="/data/kustar.png" style="width:80px;"> кuядстан </tag>
				</div>
			</div>
			<br>
			<div class="glass brd line vert padup paddown padside" style="width:auto;margin:2% 4% 2% 0%;">
				<div class="center">`+ login +`</div>
			</div> <a class="vert" href="https://oauth.telegram.org/auth?bot_id=6278121698&origin=https%3A%2F%2Fthezh.ir&embed=1&request_access=write&return_to=https%3A%2F%2Fthezh.ir%2F%3Fi%3D2"><svg class="vert line" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none"><path d="M14.13 11.34a2.206 2.206 0 0 0-2.68-2.68c-.77.19-1.4.82-1.59 1.59a2.206 2.206 0 0 0 2.68 2.68c.78-.19 1.41-.82 1.59-1.59Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.01 17.19a8.731 8.731 0 0 0 2.78-6.4 8.79 8.79 0 1 0-17.58 0c0 2.54 1.08 4.83 2.81 6.43" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 14.55c-.92-.98-1.49-2.3-1.49-3.76C6.51 7.76 8.97 5.3 12 5.3c3.03 0 5.49 2.46 5.49 5.49 0 1.46-.57 2.77-1.49 3.76M10.3 16.66l-1.44 1.79c-1.14 1.43-.13 3.54 1.7 3.54h2.87c1.83 0 2.85-2.12 1.7-3.54l-1.44-1.79c-.86-1.09-2.52-1.09-3.39 0Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
		</div>
	</div>
		
        

        <!--
				<div class="brd line padup paddown" style="width:auto;margin:2% 0% 2% 0%;">
    <div class="center">
		    <a href="javascript:proja();">
		    <tag style="color:#FFFFFF;font-size:80px;">
    <svg class="vert" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none"><path d="m9.17 14.83 5.66-5.66M14.83 14.83 9.17 9.17M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z" stroke="#fbfcfe" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
		    xo
		    </tag>
    </a>
    </div>
        </div>

        <br>

        <div class="brd line padup paddown" style="width:auto;margin:2% 0% 2% 0%;">
    <div class="center">
		    <a href="javascript:proja();">
		    <tag style="color:#FFFFFF;font-size:80px;">
    <svg class="vert" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none"><path d="m9.17 14.83 5.66-5.66M14.83 14.83 9.17 9.17M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z" stroke="#fbfcfe" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
		    da
		    </tag>
    </a>
    </div>
        </div>

        <br>

        <div class="brd line padup paddown" style="width:auto;margin:2% 0% 2% 0%;">
    <div class="center">
		    <a href="https://ir-x.ir">
		    <tag style="color:#FFFFFF;font-size:80px;">
    <img class="vert" style="width:90px;" src="/data/ira.png">
		    Ira
		    </tag>
    </a>
    </div>
        </div>
        
        <br>

        <div class="brd line padup paddown" style="width:auto;margin:2% 0% 2% 0%;">
    <div class="center">
		    <a href="javascript:proja();">
		    <tag style="color:#FFFFFF;font-size:80px;">
    <img class="vert" style="width:90px;" src="/data/kumount.png">
		    wørchen
		    </tag>
    </a>
    </div>
        </div>

        <br>

        <div class="brd line padup paddown" style="width:auto;margin:2% 0% 2% 0%;">
    <div class="center">
		    <a href="https://libkurd.ir">
		    <tag style="color:#FFFFFF;font-size:80px;">
    <svg class="vert" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none"><path d="M3.5 18V7c0-4 1-5 5-5h7c4 0 5 1 5 5v10c0 .14 0 .28-.01.42" stroke="#fbfcfe" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.35 15H20.5v3.5c0 1.93-1.57 3.5-3.5 3.5H7c-1.93 0-3.5-1.57-3.5-3.5v-.65C3.5 16.28 4.78 15 6.35 15ZM8 7h8M8 10.5h5" stroke="#fbfcfe" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
		    libkurd
		    </tag>
    </a>
    </div>
        </div>
        
        <br>

<div class="brd line padup paddown" style="width:auto;margin:2% 0% 2% 0%;">
    <div class="center">
		    <a href="javascript:link();">
		    <tag style="color:#FFFFFF;font-size:100px;">
    <svg class="vert" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none"><path d="M13.06 10.94a5.74 5.74 0 0 1 0 8.13c-2.25 2.24-5.89 2.25-8.13 0-2.24-2.25-2.25-5.89 0-8.13" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.59 13.41c-2.34-2.34-2.34-6.14 0-8.49 2.34-2.35 6.14-2.34 8.49 0 2.35 2.34 2.34 6.14 0 8.49" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
		    линк
		    </tag>
    </a>
    </div>
        </div>

        <br>-->
		

    </div>`;
    setTimeout(load,3000);
        }
var menu = () => {
	if(gete('menu').style.display == "block"){
		gete('menuco').innerHTML = '<path d="M3 7h18M3 12h18M3 17h18" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path>';
		gete('menu').style.display = "none";
	}else{
		gete('menuco').innerHTML = '<path d="M12 22c5.5 0 10-4.5 10-10S17.5 2 12 2 2 6.5 2 12s4.5 10 10 10ZM9.17 14.83l5.66-5.66M14.83 14.83 9.17 9.17" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>';
		gete('menu').style.display = "block";
	}
};

/*if(screen.width > screen.height){
	document.write('<link rel="stylesheet" href="data/desktop.css">');
}else{
	document.write('<link rel="stylesheet" href="data/mobile.css">');
}*/
home();
</script> 
</script async src="https://telegram.org/js/telegram-widget.js?22" data-telegram-login="zhirbot" data-size="none" data-onauth="onTelegramAuth(user)" data-request-access="write"></script>
</body>
</html>