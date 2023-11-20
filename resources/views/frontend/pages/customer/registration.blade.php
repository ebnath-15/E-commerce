
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Form-v9 by Colorlib</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/regform/colorlib-regform-35/css/nunito-font.css">

<link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-35/css/style.css" />
<meta name="robots" content="noindex, follow">
<script nonce="a6c80f8a-dd73-4707-bc01-8b1be4aeb192">(function(w,d){!function(bS,bT,bU,bV){bS[bU]=bS[bU]||{};bS[bU].executed=[];bS.zaraz={deferred:[],listeners:[]};bS.zaraz.q=[];bS.zaraz._f=function(bW){return async function(){var bX=Array.prototype.slice.call(arguments);bS.zaraz.q.push({m:bW,a:bX})}};for(const bY of["track","set","debug"])bS.zaraz[bY]=bS.zaraz._f(bY);bS.zaraz.init=()=>{var bZ=bT.getElementsByTagName(bV)[0],b$=bT.createElement(bV),ca=bT.getElementsByTagName("title")[0];ca&&(bS[bU].t=bT.getElementsByTagName("title")[0].text);bS[bU].x=Math.random();bS[bU].w=bS.screen.width;bS[bU].h=bS.screen.height;bS[bU].j=bS.innerHeight;bS[bU].e=bS.innerWidth;bS[bU].l=bS.location.href;bS[bU].r=bT.referrer;bS[bU].k=bS.screen.colorDepth;bS[bU].n=bT.characterSet;bS[bU].o=(new Date).getTimezoneOffset();if(bS.dataLayer)for(const ce of Object.entries(Object.entries(dataLayer).reduce(((cf,cg)=>({...cf[1],...cg[1]})),{})))zaraz.set(ce[0],ce[1],{scope:"page"});bS[bU].q=[];for(;bS.zaraz.q.length;){const ch=bS.zaraz.q.shift();bS[bU].q.push(ch)}b$.defer=!0;for(const ci of[localStorage,sessionStorage])Object.keys(ci||{}).filter((ck=>ck.startsWith("_zaraz_"))).forEach((cj=>{try{bS[bU]["z_"+cj.slice(7)]=JSON.parse(ci.getItem(cj))}catch{bS[bU]["z_"+cj.slice(7)]=ci.getItem(cj)}}));b$.referrerPolicy="origin";b$.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bS[bU])));bZ.parentNode.insertBefore(b$,bZ)};["complete","interactive"].includes(bT.readyState)?zaraz.init():bS.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="form-v9">
<div class="page-content">
<div class="form-v9-content" style="background-image: url('images/form-v9.jpg')">
<form class="form-detail" action="{{route('registration.store')}}" method="post">
@csrf
<h2>Registration Form</h2>
<div class="form-row-total">
<div class="form-row">
<input type="text" name="name" id="full-name" class="input-text" placeholder="Your Name" required>
</div>
<div class="form-row">
<input type="text" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
</div>
</div>
<div class="form-row-total">
<div class="form-row">
<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
</div>
<div class="form-row">
<input type="password" name="confirm-password" id="comfirm-password" class="input-text" placeholder="Comfirm Password" required>
</div>
</div>
<div class="form-row-last">
<input type="submit" name="register" class="register" value="Register">
@if(session()->has('message'))
<p class="alert alert-success" >{{session()->get('message')}}</p>
@endif
</div>
</form>
</div>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8258e52c883d4e9c","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
