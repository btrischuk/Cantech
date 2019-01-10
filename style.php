<?php global $redux_builder_amp; ?>
<?php if(!isset($redux_builder_amp['amp_font_selector']) || $redux_builder_amp['amp_font_selector'] == 1 || empty($redux_builder_amp['amp_font_selector'])){?>
@font-face {font-family: 'Barlow Semi Condensed';font-style: normal;font-weight: 400;src: local('BarlowSemiCondensed-Regular'), local('BarlowSemiCondensed-Regular'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/BarlowSemiCondensed-Regular.ttf');}

@font-face {font-family: 'Barlow Semi Condensed';font-style: italic;font-weight: 400;src: local('BarlowSemiCondensed-Italic'), local('BarlowSemiCondensed-Italic'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/BarlowSemiCondensed-Italic.ttf');}

@font-face {font-family: 'Barlow Semi Condensed';font-style: normal;font-weight: 600;src: local('BarlowSemiCondensed-SemiBold'), local('BarlowSemiCondensed-SemiBold'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/BarlowSemiCondensed-SemiBold.ttf');} 

@font-face {font-family: 'Barlow Semi Condensed';font-style: italic;font-weight: 600;src: local('BarlowSemiCondensed-SemiBoldItalic'), local('BarlowSemiCondensed-SemiBoldItalic'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/BarlowSemiCondensed-SemiBoldItalic.ttf'); }

@font-face {font-family: 'Playfair Display';font-style: normal;font-weight: 700;src: local('PlayfairDisplay-Bold'), local('PlayfairDisplay-Bold'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/PlayfairDisplay-Bold.ttf'); }

@font-face {font-family: 'Playfair Display';font-style: italic;font-weight: 700;src: local('PlayfairDisplay-BoldItalic'), local('PlayfairDisplay-BoldItalic'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/PlayfairDisplay-BoldItalic.ttf'); }

<?php } ?>
html {
	font-size: 62.5%; /* 10px browser default */
}
body, .sp-cnt {
	font-family: 'Barlow Semi Condensed', sans-serif;
font-size: 22px;
	font-size: 2.2rem;
	font-weight: 400;
	line-height: 1.5;
}
body > div {
	font-size: 2.2rem;
}
a img:hover, a amp-img:hover {
  filter: grayscale(100%);
}
ol, ul{ list-style-position: outside }
p, ol, ul, figure{ margin: 0 0 1em; padding: 0; }
strong {font-weight:600;}
i, em {
	font-weight: 400;
	font-style: italic;
}
a, a:active, a:visited{ color: #765298;
	text-decoration: none;}
a:hover, a:active, a:focus{	color: #000;}
pre{ white-space: pre-wrap;}
.left{float:left}
.right{float:right}
.hidden, .hide{ display:none }
.clearfix{ clear:both }
blockquote,
blockquote::before {
	color: #6a6a6a;
	font-family: 'Barlow Semi Condensed', sans-serif;
}

blockquote {
	margin: 40px 60px 24px 40px;
	margin: 4rem 6rem 2.4rem 4rem;
	border-bottom: 2px solid;
}

blockquote p {
	margin-bottom:1.2rem!important;
}

blockquote::before {
	content: "\e901";
	font-family:'amp-cantechfont'!important;
	display: inline-block;
	font-size: 60px;
	font-size: 6rem;
	height: 0;
}
blockquote p:last-child {margin-bottom: 0;}
.amp-wp-unknown-size img {object-fit: contain;}
.amp-wp-enforced-sizes{ max-width: 100% }
html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{font-family: 'Barlow Semi Condensed', sans-serif;margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}body{line-height:1}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}nav ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}table{border-collapse:collapse;border-spacing:0}hr{display:border: 0;
	border-collapse: collapse;
	border-bottom: 2px solid #000;
	clear: left;
	margin: 0 auto 40px auto;
	padding-top: 20px;
	width: 85%;
	text-align:center;}hr:before {
	content: "\e917";
	font-family:'amp-cantechfont'!important;
	background:#fff;
	padding: 0 20px 0 25px;
	padding: 0 2rem 0 2.5rem;
    top: -30px;
	top: -3rem;
    position: relative;
    font-size: 4rem;
	color:#6a6a6a;
}
input, textarea, select, button {
   background-color: #fff;
   color: #000;
    display: inline-block;
    margin: 0 rem;
    font-size:1.6rem;
    padding: 1.5rem;
    width: 100%;
    font-family: 'Barlow Semi Condensed',sans-serif;
    vertical-align:middle
}
.search-form {
overflow: hidden;
    position: relative;
    padding: .5rem;
    background:#fff;
    }
    
   input.search-form-input {
    padding-right: 45px;
    padding-right: 4.5rem;
    -webkit-appearance: none;
    border-radius: 0;
    box-shadow: none;
    border: 4px solid #000;
    font-size: 22px;
    font-size: 2.2rem;
    line-height: 1;
    color: #6a6a6a;
    }
    
   .search-form:after {
font-family: 'amp-cantechfont' !important;
    content: "\e902";
    position: absolute;
    top: 30px;
    top: 3rem;
    right: 30px;
    right: 3rem;
    width: 20px;
    width: 2rem;
    height: 20px;
    height: 2rem;
    line-height: 20px;
    line-height: 2rem;
    font-size: 35px;
    font-size: 3.5rem;
}

input.search-form-submit{
    clip: rect(0, 0, 0, 0);
    cursor: pointer;
    margin-top: 5px;
    margin-top: .5rem;
    -webkit-appearance: none;
    background-color: #000;
    border: none;
    box-shadow: none;
    color: #fff;
    font-size: 24px;
    font-size: 2.4rem;
    line-height: 1;
    text-transform: uppercase;
    white-space: normal;
    padding: 20px;
    padding: 2rem;
    border-radius: 0;
    border:0;
}


*,*:after,*:before {
box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;-o-box-sizing: border-box;}
.alignright {float: right;margin-left:10px;}
.alignleft {float: left;margin-right:10px;}
.aligncenter {display: block;margin-left: auto;margin-right: auto;}
.sp-rt p amp-img {margin-bottom:2rem;margin-left: 0;}
.related_posts amp-img {margin-bottom:1.5rem;}
.i-amphtml-fill-content {object-fit: cover;}
amp-iframe { max-width: 100%; margin-bottom : 20px; }
amp-wistia-player {margin:5px 0px;}
.wp-caption {padding: 0;}
.wp-caption-text {font-size: 12px;line-height: 1.5em;margin: 0;padding: .66em 10px .75em;text-align: center;}
amp-carousel > amp-img > img {object-fit: contain;}
.amp-carousel-container {position: relative;width: 100%;height: 100%;} 
.amp-carousel-img img {object-fit: contain;}
amp-instagram{box-sizing: initial;}
@font-face {font-family: 'amp-cantechfont';font-style: normal;font-weight: normal;src:  local('amp-cantechfont'), local('amp-cantechfont'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/amp-cantechfont.ttf');}
.cntr {font-family: 'Barlow Semi Condensed', sans-serif;max-width: 1100px;margin: 0 auto;width:100%;padding:0px 20px}
header .cntr{
<?php if( isset($redux_builder_amp['swift-width-control']) && $redux_builder_amp['swift-width-control']){?>
	max-width:<?php echo $redux_builder_amp['swift-width-control']?>;
<?php }?>
}
<?php if($redux_builder_amp['amp-sticky-header'] == '1'){?>
.h_m{position:fixed;z-index:9999;top:0px;width: 100vw;display:inline-block;
	<?php if($redux_builder_amp['swift-background-scheme']['rgba']){?>background: <?php echo $redux_builder_amp['swift-background-scheme'] ['rgba'] ?>;<?php }?>
	<?php if($redux_builder_amp['swift-border-line-control']){?>border-bottom: <?php echo $redux_builder_amp['swift-border-line-control'] ?>px solid;<?php } ?>
	<?php if($redux_builder_amp['swift-border-color-control']['rgba']){?>border-color:<?php echo $redux_builder_amp['swift-border-color-control'] ['rgba'] ?>;<?php } ?>
	<?php if($redux_builder_amp['swift-boxshadow-checkbox-control']){?>box-shadow:0px 0px 2px 2px #ccc;<?php }?>
	<?php if($redux_builder_amp['swift-padding-control']){?>padding: <?php echo $redux_builder_amp['swift-padding-control']['padding-top'] .' '.$redux_builder_amp['swift-padding-control']['padding-right'] .' '.$redux_builder_amp['swift-padding-control']['padding-bottom']  .' '.$redux_builder_amp['swift-padding-control']['padding-left'] ; ?>;<?php } ?>
	<?php if($redux_builder_amp['swift-margin-control']){?>margin: <?php echo  $redux_builder_amp['swift-margin-control']['margin-top'] .' '.$redux_builder_amp['swift-margin-control']['margin-right'] .' '.$redux_builder_amp['swift-margin-control']['margin-bottom']  .' '.$redux_builder_amp['swift-margin-control']['margin-left'] ; ?>;<?php } ?>
}
.content-wrapper{<?php if($redux_builder_amp['swift-height-control']){?>margin-top:<?php echo $redux_builder_amp['swift-height-control']?>;<?php } ?>}
<?php } else{ ?>
.h_m{
	position: static;
	<?php if($redux_builder_amp['swift-background-scheme']['rgba']){?>background: <?php echo $redux_builder_amp['swift-background-scheme'] ['rgba'] ?>;<?php }?>
	<?php if($redux_builder_amp['swift-border-line-control']){?>border-bottom: <?php echo $redux_builder_amp['swift-border-line-control'] ?>px solid;<?php } ?>
	<?php if($redux_builder_amp['swift-border-color-control']['rgba']){?>border-color:<?php echo $redux_builder_amp['swift-border-color-control'] ['rgba'] ?>;<?php } ?>
	<?php if($redux_builder_amp['swift-boxshadow-checkbox-control']){?>box-shadow:0px 0px 2px 2px #ccc;<?php }?>
	<?php if($redux_builder_amp['swift-padding-control']){?>padding: <?php echo $redux_builder_amp['swift-padding-control']['padding-top'] .' '.$redux_builder_amp['swift-padding-control']['padding-right'] .' '.$redux_builder_amp['swift-padding-control']['padding-bottom']  .' '.$redux_builder_amp['swift-padding-control']['padding-left'] ; ?>;<?php } ?>
	<?php if($redux_builder_amp['swift-margin-control']){?>margin: <?php echo  $redux_builder_amp['swift-margin-control']['margin-top'] .' '.$redux_builder_amp['swift-margin-control']['margin-right'] .' '.$redux_builder_amp['swift-margin-control']['margin-bottom']  .' '.$redux_builder_amp['swift-margin-control']['margin-left'] ; ?>;<?php } ?>
}
.content-wrapper{
	margin-top:0px;
} 
<?php } // Sickt CSS Ends ?>
.h_m_w{width:100%;clear:both;display: inline-flex;<?php if($redux_builder_amp['swift-height-control']){?>height:<?php echo $redux_builder_amp['swift-height-control']?>;<?php } ?>}
.h-ic a:after, .h-ic a:before{font-family: 'icomoon';font-size: 23px;<?php if(isset($redux_builder_amp['swift-element-color-control'] ['rgba']) && $redux_builder_amp['swift-element-color-control'] ['rgba']){?>color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;<?php } ?>}
.h-call a:after{content: "\e0cd";}
.h-shop a:after{align-self: center;}
.h-ic{margin:0px 10px; align-self: center;}
div .amp-logo {
    text-decoration: none;
    display: block;
    width: 100%;
	    background: url(/wp-content/themes/news-pro/images/cantech-letter-logo.svg) no-repeat;
    background-size: contain;
    margin: 0 auto;
	background-position:center;
	left: 0px;
    position: relative;
	z-index:10;
	margin-top:2rem;
}
.amp-logo a{line-height:0;display:inline-block;opacity:0;width:-webkit-fill-available;height:5rem;<?php if(isset($redux_builder_amp['swift-element-color-control'] ['rgba']) && $redux_builder_amp['swift-element-color-control'] ['rgba']){?>color:<?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;<?php } ?>}
.logo <?php if(is_single()){ ?> h2 <?php } else{?>h1<?php }?>{margin: 0;font-size: 17px;font-weight: 700;text-transform: uppercase;display:inline-block;}
.h-srch a{line-height:1;display:block;}
.amp-logo amp-img{margin: 0 auto;}
@media(max-width:480px){ .h-sing {font-size: 13px;} }

@media(max-width:740px){div .amp-logo {margin-top:0;height:3rem;} }
<?php //header-type-1


if($redux_builder_amp['header-type'] == '1'){?>
.logo{z-index: 2;flex-grow: 1;align-self: center;text-align:center;line-height:0;}
.h-1{display:flex;order:1;}
.h-nav{order: -1;align-self: center;}
.h-ic:last-child{margin-right:0;}
<?php } ?>
<?php //hyder-type-2

if($redux_builder_amp['header-type'] == '2'){?>
.h-logo{order:-1;align-self: center;flex-grow:1;text-align:center;}
.h-2{order: 1;justify-content: flex-end;display: flex;}
.h-nav{order: -1;align-self: center;}
.h-sing{font-size: 18px;font-weight: 600;align-self: center;}
.h-sing a{display: inline-block;padding:9px 15px;<?php if($redux_builder_amp['signin-button-border-line']){?>border: <?php echo $redux_builder_amp['signin-button-border-line']?>px solid;<?php } ?><?php if($redux_builder_amp['signin-button-border-color']['rgba']){?>border-color: <?php echo $redux_builder_amp['signin-button-border-color']['rgba']?>;<?php } ?><?php if($redux_builder_amp['signin-button-text-color']['rgba']){?>color: <?php echo $redux_builder_amp['signin-button-text-color']['rgba']?>;<?php } ?>}
<?php if($redux_builder_amp['border-type'] == '2'){?>.h-sing a{border-radius:100px;}.h-sing a:before{border-radius:100px;}<?php } ?>
<?php if($redux_builder_amp['border-type'] == '3'){?><?php if($redux_builder_amp['border-radius'] ){ ?>.h-sing a{border-radius:<?php echo $redux_builder_amp['border-radius']?>px;}<?php } ?><?php } ?>
<?php } ?>
<?php //header-type-3

if($redux_builder_amp['header-type'] == '3'){?>
.h-logo{order:-1;align-self: center;z-index:2;}
.h-nav{order:0;align-self: center;margin:0px 0px 0px 10px;}
.h-srch a:after{position:relative;left:5px;}
.h-3{order: 1;display: inline-flex;flex-grow: 1;justify-content: flex-end;}
.h-ic:first-child {margin-left: 0;} 
<?php } ?>

<?php //search overlay

if( true == $redux_builder_amp['amp-swift-search-feature'] ){ ?>
.lb-t {position: fixed;top: -50px;width: 100%;width: 100%;opacity: 0;-webkit-transition: opacity .5s ease-in-out;transition: opacity .5s ease-in-out;overflow: hidden;z-index:9;background: ;}
.lb-t img {margin: auto;position: absolute;top: 0;left:0;right:0;bottom: 0;max-height: 0%;max-width: 0%;border: 3px solid white;box-shadow: 0px 0px 8px rgba(0,0,0,.3);box-sizing: border-box;-webkit-transition: .5s ease-in-out;transition: .5s ease-in-out;}
a.lb-x {display: block;width:50px;height:50px;box-sizing: border-box;background: tranparent;color: black;text-decoration: none;position: absolute;top: -80px;right: 0;-webkit-transition: .5s ease-in-out;transition: .5s ease-in-out;}
a.lb-x:after {content: "\e5cd";font-family: 'icomoon';font-size: 30px;line-height: 0;display: block;text-indent: 1px;color:; }
.lb-t:target {opacity: 1;top: 0;bottom: 0;left:0;z-index:1;}
.lb-t:target img {max-height: 100%;max-width: 100%;}
.lb-t:target a.lb-x {top: 25px;}
.lb img{cursor:pointer;}
.lb-btn form{position: absolute;top: 200px;left: 0;right: 0;margin: 0 auto;text-align: center;}
.lb-btn #s{padding:10px;}
.lb-btn #amp-search-submit{padding:10px;cursor:pointer;}
.amp-search-wrapper{width: 80%;margin: 0 auto;position: relative;}
.overlay-search:before {    font-family: 'amp-cantechfont' !important;
    content: "\e902";position: absolute;right:0;font-size: 24px;cursor: pointer;top:4px;
color: ;}
.lb-btn #amp-search-submit {cursor: pointer;background:transparent;border: none;display: inline-block;width: 30px;height: 30px;opacity: 0;position: absolute;z-index:100;right: 0;top: 0;}
.lb-btn #s {padding: 10px;background: transparent;border: none;border-bottom: 1px solid #504c4c;width:100%;
color:;}
<?php } ?>
<?php //menu type-1 

if($redux_builder_amp['menu-type'] == '1'){?>
.m-ctr{<?php if($redux_builder_amp['swift-header-overlay']['rgba']){?>background: <?php echo $redux_builder_amp['swift-header-overlay'] ['rgba'] ?>;<?php } ?>}
.tg, .fsc{display: none;}
.fsc{width: 100%;height: -webkit-fill-available;position: absolute;cursor: pointer;top:0;left:0;}
<?php if($redux_builder_amp['header-position-type'] == '1'){?>
.tg:checked + .hamb-mnu > .m-ctr {margin-left: 0;border:none;}
.tg:checked + .hamb-mnu > .m-ctr .c-btn {position: unset;right: 0px;top:0px;}
.m-ctr{margin-left: -100%;float: left;background:#dce0e3;
    width:30%;}
<?php } ?>
<?php if($redux_builder_amp['header-position-type'] == '2'){?>
.tg:checked + .hamb-mnu > .m-ctr {margin-left: calc(100% - <?php echo $redux_builder_amp['header-overlay-width']?>);}
.m-ctr{margin-left: 100%;float: right;}
<?php } ?>
.tg:checked + .hamb-mnu > .fsc{display: block;  background:#dce0e3;
    width:30%;;height:100vh;}
.t-btn, .c-btn{cursor: pointer;}
.t-btn:after{content: "\e914"!important;
    font-family: 'amp-cantechfont'!important;
    font-size: 3rem;}
.c-btn:after{  content: "\e914";
    font-family: 'amp-cantechfont'; 
    color: #000;
    text-indent: 0;
    font-size: 3rem;
    padding: 2rem 2rem 0.5rem;
    width: 30%;
    text-align: right;
    line-height: 0;display: block;}
.c-btn{float: right;padding: 20px 10px;}
.m-ctr{transition: margin 0.3s ease-in-out;background:#dce0e3;width: 30%;height: auto;position: absolute;z-index:99;padding: 0 0% 100vh 0%;}
.amp-menu .toggle:after {content: "\e911"!important;
		font-family:'amp-cantechfont'!important;
		line-height: 1;
		font-size: 3rem;background-size: 16px;display: inline-block;top: 1px;padding: 5px;
		color:#000;
}
.m-menu{display: inline-block;width: 100%;padding: 2px 20px 10px 20px;}
.m-scrl{overflow-y: auto;display: inline-block;width: 100%;overflow: scroll;max-height: 394vh;}
::-webkit-scrollbar { display: none; }
.m-menu ul li.menu-item-has-children:after{}
.m-menu li li.menu-item-has-children:after{right:10px;}
.m-menu li li.menu-item-has-children:hover:after{right:10px;}
.m-menu li.menu-item-has-children:hover:after{transform:rotate(360deg);top:1px;right:0px;}
.m-menu .amp-menu li ul{font-size:14px;}
.m-menu .amp-menu {list-style-type: none;padding: 0;}
.menu-btn{margin-top:30px;text-align:center;}
.menu-btn a{color:#fff;border:2px solid #ccc;padding:15px 30px;display:inline-block;}
.amp-menu li.menu-item-has-children>ul>li {width:100%;}
.m-menu .amp-menu li.menu-item-has-children>ul>li{
	padding-left:0;
	border-bottom: 1px solid <?php if(isset($redux_builder_amp['swift-element-menu-border-color']['rgba'])){echo $redux_builder_amp['swift-element-menu-border-color']['rgba'];}?>;
	margin:0px 10px;
}
.m-menu .amp-menu .sub-menu li:last-child{border:none;}
.m-menu .amp-menu>li a {padding: 12px 7px;}
.amp-menu>li a {color: #000;
    font-size: 17px;
    font-size: 1.7rem;
    font-weight: 600;
    line-height: 1.5;
    padding: 13px 7px;margin-bottom:0;
}
.m-menu > li{font-size:17px;}
<?php } ?>
<?php //primary menu

if($redux_builder_amp['primary-menu']){?>
.p-m-fl{width:100%;border-bottom: 1px solid rgba(0, 0, 0, 0.05);<?php if($redux_builder_amp['primary-menu-background-scheme']['rgba']){?>background:<?php echo $redux_builder_amp['primary-menu-background-scheme']['rgba']; ?><?php } ?>}
.p-menu{width:100%;text-align:center;margin: 0px auto;max-width: 1100px;<?php if($redux_builder_amp['primary-menu-padding-control']){?>padding: <?php echo ' 0px ' .' '.$redux_builder_amp['primary-menu-padding-control']['padding-right'] .' 0px '.$redux_builder_amp['primary-menu-padding-control']['padding-left'] ; ?>;<?php } ?>}
::-webkit-scrollbar {display: none;}
.p-menu ul li{display: inline-block;margin-right: 21px;font-size: 12px;line-height: 20px;letter-spacing: 1px;font-weight: 400;}
.p-menu ul li a{<?php if($redux_builder_amp['primary-menu-text-scheme']['rgba']){?>color:<?php echo $redux_builder_amp['primary-menu-text-scheme']['rgba']?>;<?php } ?>
padding: <?php echo $redux_builder_amp['primary-menu-padding-control']['padding-top'] .' 0px '.$redux_builder_amp['primary-menu-padding-control']['padding-bottom']  .' 0px' ; ?>}
<?php // Dropdown CSS
	if($redux_builder_amp['drp-dwn']){?>
	.p-menu ul li:hover>ul{display:block;z-index:9;padding: 7px 0px 7px 7px;
     box-shadow: 1px 1px 15px 1px rgba(0, 0, 0, 0.30);background: #fff;border-radius: 4px;}
	.p-menu li a{transition: all 0.3s ease-in-out 0s;}
	.p-menu .amp-menu li ul{background: <?php echo $redux_builder_amp['primary-menu-background-scheme']['rgba']; ?>;left: 0;min-width: 200px;opacity: 1;position: absolute;top: 100%;transform: translateY(15px);transition: all 0.3s ease-in-out 0s;visibility: hidden;text-align:left;}
	.p-menu .amp-menu li ul li ul{left: 100%;top: 0;}
	.p-menu li:hover > ul{opacity: 1;transform: translateY(0px);visibility: visible;transition: all 0.2s ease-in-out 0s;}
	.p-menu li ul li{display: block;position: relative;}
	.p-menu ul li.menu-item-has-children .sub-menu li a{padding:7px;}
	.p-menu ul li.menu-item-has-children > a:after{content: "\e313";font-family: 'amp-cantechfont';background-size: 16px;display: inline-block;top: 3px;font-size: 16px;color: rgba(0,41,96,1);position:relative;padding-left: 10px;line-height:0;right:10px;color:<?php echo $redux_builder_amp['primary-menu-text-scheme']['rgba']?>;}
	.p-menu .amp-menu li.menu-item-has-children>ul>li {padding-left: 0px;margin-right:0;}
	.p-menu li.menu-item-has-children:hover > a:after{transform:rotate(180deg);right:0px;}
	<?php } else { ?>
	.p-menu ul li.menu-item-has-children:hover > ul{display:none;}
	.p-menu{overflow-x: auto;overflow-y:hidden;white-space: nowrap;}
<?php } ?>
.p-menu ul li.menu-item-has-children:after{display:none;}
@media(max-width:900px){
	.p-menu ul li.menu-item-has-children:hover > ul{display:none;}
	.p-menu{overflow-x: auto;overflow-y:hidden;white-space: nowrap;}
	.p-menu ul li.menu-item-has-children > a:after{display:none;}
}
<?php } ?>
<?php //Home and Archive

if( is_home() || is_archive() || is_search() || (function_exists('is_shop') && is_shop()) ) { ?>
.hmp{margin-top:34px;display:inline-block;width:100%;  }
.fbp{width:100%;display:inline-block;clear:both;margin:15px 15px 20px 15px;}
.fbp-img a{display:block;line-height:0;}
.fbp-img{float:left;width:66%;}
.fbp-cnt{float:left;width:31%;margin-left:30px;}
.fbp-cnt .loop-category{margin-bottom:12px;}
.fsp-cnt .loop-category{margin-bottom:7px;}
.fsp-cnt .loop-category li {font-weight: 500;}
.fbp-cnt h2 {margin: 0px;font-size: 32px;line-height: 38px;font-weight:700;}
.fbp-cnt h2 a{color:#191919;}
.fbp-cnt .amp-author {padding-left:6px;}
.fbp:hover .author-name a{text-decoration:underline;}
.fbp-cnt .author-details a{color:#808080;}
.fbp-cnt .author-details a:hover{color: #000;}
.loop-wrapper{display: flex;flex-wrap: wrap;margin: -15px;}
.loop-category li{display: inline-block;list-style-type: none;margin-right: 10px;font-size: 10px;font-weight: 600;letter-spacing: 1.5px;}
ul .loop-category, .fsp-cnt .loop-category, .loop-category li a{color: #9a9ea1;
	font-size: 15px;
	font-size: 1.5rem;
	text-transform: uppercase;
	margin-bottom:10px;
	margin-bottom:1rem;
display: block;
	font-weight:600;}
.loop-category li:hover a{color:#000;}
.fbp-cnt p, .fsp-cnt p{color: #000;
	font-family: 'Barlow Semi Condensed', sans-serif;
	font-size: 22px;
	font-size: 2.2rem;
	font-weight: 400;
	line-height: 1.5;letter-spacing: 0.10px;word-break: break-word;}
.fbp:hover h2 a, .fsp:hover h2 a{}
h2 loop-title, .fsp h2 a{color:#000;}  
.fsp{margin: 15px;flex-basis: calc(33.33% - 30px);}
.fsp-img {margin-bottom:10px;}
h2 .loop-title,.fsp h2{font-size: 35px;
	font-size: 3.5rem;
    font-weight: 600;
	line-height: 1.2;
	margin: 0 0 16px;
	font-style:italic;}
.at-dt{font-size:11px;color:#808080;margin:12px 0px 9px 0px; display: inline-flex;}
.pt-dt{margin: 8px 0px 0px 0px;display: inline-flex; color: #9a9ea1;font-size:1.5rem;text-transform:uppercase;}
div.loop-date:before {
    content: "/";
padding-right: 4px;
}
.arch-tlt{margin:30px 0px 30px;display:inline-block;width:100%;}
.amp-archive-title, .amp-loop-label{font-weight:600;}
.amp-archive-desc{font-size: 14px;margin:8px 0px 0px 0px;color: #333;line-height:20px;}
.author-img amp-img {border-radius: 50%;margin: 0px 12px 10px 0px;display: block; width:50px;}
.author-img{float: left;}
.amp-sub-archives{margin:10px 0px 0px 10px;}
.amp-sub-archives ul li{list-style-type: none;display: inline-block;font-size: 12px;margin-right: 10px;font-weight: 500;}
.amp-sub-archives ul li a{color:#000;}
.loop-pagination{margin:20px 0px 20px 0px;}
.right a, .left a{background-color: #000;display: inline-block;border: none;
	box-shadow: none;
	color: #fff;
	cursor: pointer;
	font-size: 24px;
	font-size: 2.4rem;
	line-height: 1;
	text-transform: uppercase;
	white-space: normal;
	padding:20px;
	padding:2rem;
	-webkit-appearance:none;
	 border-radius: 0;}
.right a:after{content:"";display: inline-block;padding-left: 6px;font-size: 20px;line-height: 20px;height: 20px;position: relative;top: 1px;}
.left a:before{content:"";display: inline-block;padding-right: 6px;font-size: 20px;line-height: 20px;height: 20px;position: relative;top: -1px;}

@media(max-width:1110px){
    .amppb-fluid .col{max-width:95%}
    .sf-img .wp-caption-text{width:100%;padding:10px 40px;}
    .fbp-img{width:62%;}
    .fbp-img amp-img img{width:100%;}
    .fbp-cnt h2 {font-size: 28px;line-height: 34px;}
}
@media(max-width:900px){
    .fbp-img {width: 100%;float:none;}
    .hmp{margin:0;}
    .fbp-cnt {float: none;width: 100%;margin-left: 0px;margin-top:10px;display:inline-block;}
    .fbp-cnt .loop-category{margin-bottom:5px;}
    .fbp{margin: 15px;}
    .fbp-cnt p{color: #000;
	font-size: 22px;
	font-size: 2.2rem;
	font-weight: 400;
	line-height: 1.5;margin-top:8px;}
    .fsp{flex-basis: calc(100% - 30px);}
    .fsp-img{width:100%;float:left;margin-right:0px;}
    .fsp-cnt{width:100%;float:left;}
    .at-dt{margin: 10px 0px 0px 0px;}
    .hmp .loop-wrapper {margin-top: 0;}
    .arch-tlt{margin:20px 0px;}
    .amp-loop-label {font-size: 16px;}
    .loop-wrapper h2 {font-size: 24px;font-weight:600;}
    
}
@media(max-width:480px){
    .cntr.b-w{padding:0px;}
    .at-dt {margin: 7px 0px 0px 0px;}
    .right, .left{float:none;text-align:center;}
    .right{margin-bottom:30px;}
    .fsp-img{width:100%;float:none;margin-right:0px;}
    .fsp-cnt{width:100%;float:none;padding: 0px 15px 0px 14px;}
    .fsp{border:none; padding:0;}
    .fbp-cnt{margin:0;padding:12px;}
}
@media(max-width:425px){
    .fbp {margin: 0px 15px 15px 15px;}
    .fsp{margin:15px;}
    .amp-archive-title, .amp-loop-label{padding:0 20px;}
    .amp-sub-archives {margin: 10px 0px 0px 30px;}
    .author-img {padding-left: 20px;}
    .amp-archive-desc{padding:0px 20px;}
    .loop-pagination {margin: 15px 0px 15px 0px;}
}
@media(max-width:375px){
    .fbp-cnt p, .fsp-cnt p{}
}
@media(max-width:320px){
    .right a, .left a {padding: 10px 30px 14px;}
}
<?php }?>
<?php //page and frontpage

if( is_page() || ampforwp_is_front_page() || ampforwp_polylang_front_page() ){?>
    <?php if(!checkAMPforPageBuilderStatus(get_the_ID())){ ?>
        .sp {width: 100%;margin-top: 20px;display: inline-block;}
        .breadcrumbs {padding-bottom: 10px;border-bottom: 1px solid #9a9ea1;display: inline-block;width: 100%;font-size: 1.2rem;text-transform: uppercase;}
        #breadcrumbs li{list-style-type:none;}
        #breadcrumbs a {color: #9a9ea1;}
        #breadcrumbs a:hover {color: #000;}
        .amp-post-title{ 
        font-size:55px;
    font-size:5.5rem;
    font-weight: 600;
	line-height: 1.2;
	margin: 0 0 16px;	
	color: #000;}
        .cntn-wrp{color: #000;}
        .cntn-wrp p {
        font-size: 2.2rem;
         line-height: 1.3;
         }
         .cntn-wrp p:first-child:first-of-type {
     font-size: 26px;
     font-size:2.6rem;
    line-height: 1.3;
    
 }
    .cntn-wrp ul, .cntn-wrp ol{margin:0px 0px 30px 0px;word-break: break-word;}
    <?php } else{ ?>
        .cntn-wrp{font-size: 2.2rem;;color: #000;line-height: 1.5;}
        .sp {width: 100%;margin-top: 20px;display: inline-block;}
    <?php } ?>
    blockquote{margin-bottom:20px;}
	blockquote p {font-size: 34px; line-height: 1.4; font-weight: 700; position: relative; padding: 30px 0 0 0; }
	blockquote p:before {content: "";border-top: 8px solid #000;width: 115px;line-height: 40px;display: inline-block;position: absolute;top: 0;}
	.amp-comment-button{background-color: #000;font-size: 22px;
    font-size: 2.2rem; padding:2rem;
    float: none;margin: 30px auto 0px auto;text-align: center;
    width: 250px;}
    .amp-comment-button:hover {
    background-color:#765298;
    color:#fff;
}
	.amp-comment-button .nocomments{color: #fff;display: block;padding: 7px 0px 8px 0px;}
	.cmts{width:100%;display:inline-block;clear:both;margin-top:40px;}
	.form-submit #submit{background-color: #000;font-size: 14px;text-align: center;font-weight: 500;color: #fff;cursor: pointer;margin: 0;border: 0;padding: 11px 21px;}
	#respond p {margin: 12px 0;}
	.amp-comment-button a{color: #fff;display: block;padding: 7px 0px 8px 0px;}
	.amp-comment-button a:hover {
    color:#fff!important;
}
	.comment-form-comment #comment {border-color: #ccc;width: 100%;padding: 20px;}
	.cmts h3{margin: 0;font-size: 12px;padding-bottom: 6px;border-bottom: 1px solid #eee;letter-spacing: 0.5px;text-transform: uppercase;color: #000;}
	.cmts h3:after{content: "";display: block;width: 115px;border-bottom: 1px solid #000;position: relative;top: 7px;}
	.cmts ul{margin-top:16px;}
	.cmts ul li{list-style: none;margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px solid #eee;}
	.cmts .amp-comments-wrapper ul .children{margin-left:30px; }
	.cmts .comment-author.vcard .says{display:none;}
	.cmts .comment-author.vcard .fn{font-size: 12px;font-weight: 500;color: #000;}
	.cmts .comment-metadata{font-size: 11px;margin-top: 8px;}
	.amp-comments-wrapper ul li:hover .comment-meta .comment-metadata a{color:#9a9ea1;}
	.cmts .comment-metadata a{color: #9a9ea1;}
	.comment-content{margin-top:6px;width:100%;display:inline-block;}
	.comment-content p{font-size: 14px;color: #000;line-height: 1.2;margin: 0;}
	.comment-meta amp-img{float:left;margin-right:10px;border-radius:50%;width:40px;}


	@media (max-width: 480px){
		blockquote p {font-size:20px;}
	}
<?php } ?>
<?php if($redux_builder_amp['single-design-type'] == '1' || $redux_builder_amp['single-design-type'] == '4'){?>
<?php // Single

if(is_single() ) { ?>
.content-wrapper{
font-family: 'Barlow Semi Condensed', sans-serif;
}
<?php if($redux_builder_amp['single-new-features'] && $redux_builder_amp['ampforwp-underline-content-links']){ ?> 
.artl-cnt a{
	text-decoration: underline;
}
<?php } // Underline CSS Ends?>
.tl-exc{font-size: 16px;color: #9a9ea1;margin-top: 10px;line-height:20px;}
.amp-category {margin-bottom:1rem;}
.amp-category span:nth-child(1) {display: none;}
.amp-category span a, .amp-category span{color: #765298;
    text-decoration: none;
    text-transform:uppercase;
    font-weight: 700;
    font-size: 15px;
    font-size: 1.5rem;}
    .amp-category span a:hover {
    color:#000;
}
.amp-category span:after{content:"/";display:inline-block;margin:0px 5px 0px 5px;position:relative;top:1px;color:rgba(0, 0, 0, 0.25);}
.amp-category span:last-child:after{display:none;}
.sp{width:100%;margin-top:20px;display:inline-block;}
.amp-post-title{  font-size:55px;
    font-size:5.5rem;
    font-weight: 600;
	line-height: 1;
	margin: 0 0 16px;	
	color: #000;
	left:-.3rem;
	position:relative;}
.sf-img {width: 100%;display: inline-block;height: auto;margin-top: 33px;}
.sf-img figure{margin:0;}
.sf-img .wp-caption-text{width: 1100px;text-align: left;margin: 0 auto;color: #a1a1a1;font-size: 14px;line-height:20px;font-weight: 500;border-bottom: 1px solid #ccc;padding: 15px 0px;}
.sf-img .wp-caption-text:before{content:"\e412";font-family: 'amp-cantechfont';position: relative;top: 4px;opacity: 0.4;font-size:24pxmargin-right: 5px;}
.sp-cnt{clear: both;width: 100%;display: inline-block; left:-1rem;position:relative; }
.sp-rl{display:inline-flex;width:100%;}
.sp-lt{display: flex;flex-direction: column;flex: 1 0 20%;order: 0;max-width:336px;}
.sp-rt{width: 72%;margin-left: 60px;flex-direction: column;justify-content: space-around;order: 1;}
.ss-ic{padding-bottom:20px; border:none;}
.sp-athr, .amp-tags, .post-date {
    margin-top:0;
    background: #dce0e3;
    padding: 20px;
    border:none;
}
.shr-txt {display:none;} 
.athr-tx, .amp-tags > span:nth-child(1), .amp-related-posts-title, .related-title, .r-pf h3{margin: 0 0 16px;}
.athr-tx, .r-pf h3,.amp-related-posts-title, .post-date, .related-title{display: block;}
.athr-tx, .r-pf h3, .amp-related-posts-title, .post-date, .related-title{text-transform: uppercase;font-size: 15px;
    font-size: 1.5rem; #9a9ea1;font-weight: 400;}
.amp-tags > span:nth-child(1)  {
font-size: 15px;
    font-size: 1.5rem;
    font-weight: 700;
    color: #9a9ea1;
    display: inline;
}
.loop-date, .post-edit-link{display:inline-block;}
div .loop-date {
    font-size:15px;
    font-size:1.5rem;
    text-transform: uppercase;
    color: #9a9ea1;
}
div .loop-date:before, .loop-category li a:before  {
    content: "/";
padding-right: 4px;
}
.post-date .post-edit-link{;float: right;}
.sp-athr, .amp-tags, .post-date{margin-top:20px;}
.sp-athr .author-details a, .sp-athr .author-details, .amp-tags span a, .amp-tag {font-size: 15px;
    font-size: 1.5rem;color: #765298;font-weight: 400;line-height: 1.5;}
    .amp-tags span a {
     text-decoration: none;
    text-transform:uppercase;
    font-weight: 700;
    }
    .author-name {
    color: #ddd;
    font-family: 'Playfair Display',serif;
    font-size: 26px;
    font-size: 2.6rem;
    margin-bottom: 4px;
}
.amp-tags .amp-tag:after{content: "/";display: inline-block;padding: 0px 10px;position: relative;top: -1px;color: #ccc;font-size: 12px;}
.amp-tags .amp-tag:last-child:after{display:none;}
.ss-ic li:before{border-radius: 2px;text-align:center;padding: 4px 6px;}
.sgl table {width: 100%;margin-bottom:25px;}
.sgl td {padding: 0.5em 1em;border: 1px solid #ddd;}
.sgl tr:nth-child(odd) td {background: #f7f7f7;}
.fbp-cnt p, .fsp-cnt p{color: #000;
	font-family: 'Barlow Semi Condensed', sans-serif;
	font-size: 22px;
	font-size: 2.2rem;
	font-weight: 400;
	line-height: 1.5;letter-spacing: 0.10px;word-break: break-word;}
<?php // Social Sharing Conditional CSS
if($redux_builder_amp['swift-social-position'] == 'above-content'){?>
.shr-txt{display:none;}
.sp-athr{margin-top:0;}
.sp-rt .ss-ic{padding-bottom: 10px;margin-bottom: 10px;border-bottom: none;}
<?php } 
if($redux_builder_amp['swift-social-position'] == 'below-content'){?>
.shr-txt{display:none;}
.sp-athr{margin-top:0;}
.sp-rt .ss-ic{padding-bottom: 10px;margin-bottom: 20px;}
<?php } ?>


.cntn-wrp p:first-child:first-of-type {
     font-size: 26px;
     font-size:2.6rem;
    line-height: 1.3;
 }
 .cntn-wrp p {
         font-size: 2.2rem;
         line-height: 1.3;
word-break: break-word;
}
.sp-artl h1, h2, h3, h4, h5, h6, .amp-post-title{
font-family:  'Barlow Semi Condensed', sans-serif;
color: #000;
	font-weight: 600;
	line-height: 1;
	margin: 0 0 16px;}
<?php // H1 - H6 Font Sizes 
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h1']){ ?>
		.cntn-wrp h1{font-size:<?php echo $redux_builder_amp['swift_h1_sz']?>;}
	<?php } else { ?>
		h1, .cntn-wrp h1 {	font-size: 36px;
	font-size: 3.6rem;
	font-style: italic;}
	.amp-post-title {
    font-size:55px;
    font-size:5.5rem;
}
	<?php } //H1 ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h2']){ ?>
		.cntn-wrp h2{font-size:<?php echo $redux_builder_amp['swift_h2_sz']?>;}
	<?php } else { ?>
		h2, .cntn-wrp h2 {font-size: 35px;
	font-size: 3.5rem;}
	<?php } // H2 Ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h3']){ ?>
		.cntn-wrp h3{font-size:<?php echo $redux_builder_amp['swift_h3_sz']?>;}
	<?php } else { ?>
		h3, .cntn-wrp h3 {	font-size: 28px;
	font-size: 2.8rem;}
	<?php } // H3 Ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h4']){ ?>	
		.cntn-wrp h4{font-size:<?php echo $redux_builder_amp['swift_h4_sz']?>;}
	<?php } else { ?>
		h4,.cntn-wrp h4 {font-size: 24px;
	font-size: 2.4rem;}
	<?php } // H4 Ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h5']){ ?>
		.cntn-wrp h5{font-size:<?php echo $redux_builder_amp['swift_h5_sz']?>;}
	<?php } else { ?>
		h5,.cntn-wrp h5 {font-size: 20px;
	font-size: 2rem;
	text-decoration:underline;}
	<?php } // H5 Ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h6']){ ?>
		.cntn-wrp h6{font-size:<?php echo $redux_builder_amp['swift_h6_sz']?>;}
	<?php } else { ?>
		h6,.cntn-wrp h6 {font-size: 16px;
	font-size: 1.6rem;}
	<?php } // H6 Ends
 // swift Content Heading Sizes Ends?>
.cntn-wrp p, .cntn-wrp ul, .cntn-wrp ol{font-family:  'Barlow Semi Condensed', sans-serif;
margin:0px 0px 30px 0px;word-break: break-word;}
.sp-rt p strong, .pg p strong{font-weight: 400;}
<?php if($redux_builder_amp['rp_design_type'] == '1'){?>
	.srp{margin-top:20px;}
	.srp .amp-related-posts amp-img{float: left;width: 100%;margin: 0px;height:100%;}
	.srp ul li{display: inline-block;line-height: 1.3;margin-bottom: 24px;list-style-type:none;width:100%;}
	.srp ul li:last-child{margin-bottom:0px;}
	.has_thumbnail:hover {opacity:0.7;}
	.has_thumbnail:hover .related_link a{color: ;}
<?php } // Related Posts Desing 1 Ends 
if($redux_builder_amp['rp_design_type'] == '2'){?>
	.srp{
		margin-top: 40px;
	    display: inline-block;
	    width: 100%;
	}
	.srp ul{
		display: flex;
	    flex-wrap: wrap;
	    margin: -15px;
	}
	.srp ul li{
		list-style-type:none;
	    margin: 15px;
    	flex-basis: calc(33.33% - 30px);
	}
	.related_link{
	    margin: 0px 0px 5px 0px;
	    font-size: 18px;
	    line-height: 1.4;
	    font-weight: 500;
	}
	.has_thumbnail:hover .related_link a{
		color: <?php echo $redux_builder_amp['swift-color-scheme']['color']; ?>;
	}
	.related_link a{color:#191919;} 
<?php } // Related Posts Desing 2 Ends 
if($redux_builder_amp['rp_design_type'] == '3'){?>
	.srp{
		margin-top: 40px;
	    display: inline-block;
	    width: 100%;
	}
	.srp ul{
	    display: grid;
	    grid-template-columns: 333px 333px 333px;
	    grid-gap: 30px;
	    width: 100%;
	    overflow-x: scroll;
	}
	.srp ul li{
		list-style-type:none;
	}
	.related_link{
	    margin: 0px 0px 5px 0px;
	    font-size: 18px;
	    line-height: 1.4;
	    font-weight: 500;
	}
	.has_thumbnail:hover .related_link a{
		color: ;
	}
	.related_link a{color:#191919;}
<?php } // Related Posts Desing 3 Ends ?>
.related_link{margin-top:10px;}
.related_link a, .rp4wp-related-post-content a{color:#765298;}
.related_link p{word-break: break-all; line-height: 1.2;
    font-size: 2.2rem;
    color:#000;
letter-spacing: 0.10px;margin-top: 5px;font-weight: 400;}
.amp-related-posts ul{list-style-type:none;}
.r-pf{margin-top: 40px;display: inline-block;width: 100%;}
<?php if( 1 == $redux_builder_amp['ampforwp-inline-related-posts'] && is_single() ){ ?>
/** In content releated post desing styles **/
.related_posts .related-title,.rp4wp-related-posts h3,.r-pf h3{
	  color:#000;
     border-bottom: 2px solid #000;
     font-size: 28px;
    font-size: 2.8rem;
    font-weight: 600;
    line-height: 1.2;
    margin: 0 0 16px;
    text-transform:none;
}
.related_posts .related_link a,.related_posts .related-title a, .rp4wp-related-post-content a {
	     color: #765298;
    text-decoration: underline;
    line-height: 1.2;
    font-size: 22px;
    font-size:2.2rem;
	margin: 0px 0px 5px 0px;
    display: inline-block;
}
.related_link a:hover,.rp4wp-related-post-content a:hover,.amp-tags span a:hover {
     color:#000;
 }

.related_posts .related_link {
    padding: 0px;
    margin: 0;
}
.related_posts .has_related_thumbnail{display: inline-flex;width: 30.5%;flex-direction: column;margin:0px 4% 0px 0px;justify-content: space-evenly;padding:0;}
.related_posts .has_related_thumbnail:last-of-type {
margin-right:0;}
.related_link p{word-break: break-word;color: #000;font-size: 2.2rem;;line-height: 1.2;
letter-spacing: 0.10px;margin-top: 5px;font-weight: 400;}
<?php } ?>
<?php if(is_single() && $redux_builder_amp['enable-single-social-icons'] ){?>
	.body.single-post{
	  padding-bottom:40px;
	}
<?php } ?>
<?php if( 1 == $redux_builder_amp['amp-author-description'] ) {?>
.sp-rt .amp-author {
overflow: hidden;
    padding: 20px;
    background-color: #6a6a6a;
    color: #ddd;
    display: inline-block;width: 100%;}
.sp-rt .amp-author-image{float:left;}
.sp-rt .author-details a{color: #222;font-size: 14px;font-weight: 500;}
.sp-rt .author-details a:hover{color:#000;text-decoration:underline;}
.amp-author-image amp-img{border: 6px solid #ddd;margin: 0px 12px 5px 0px;display: block; width:50px;}
.author-details p{margin: 0;font-size: 1.9rem;
    color:#ddd;
    line-height: 1.3;padding-top: 4px;}
<?php } ?>
<?php //Breadcrumbs
if( 1 == $redux_builder_amp['ampforwp-bread-crumb'] ) {?>
.breadcrumbs{padding-bottom: 8px;margin-bottom: 20px;
<?php if( 1 == $redux_builder_amp['breadcrumb-border'] ) {?>
border-bottom: none;
<?php }?>}
.breadcrumbs, .breadcrumb ul li{ font-size: 14px;
    font-size: 1.4rem;
    margin: 0;
    color:#000;
    text-transform:none;
    display: inline-block;list-style-type: none;}
.breadcrumb ul li a{color: #765298;
    text-decoration: none;
        line-height: 1.5;
        letter-spacing:normal;}
.breadcrumb ul li a:hover{color:#000;}
.breadcrumbs li a:after{content: "/";
    display: inline-block;
    padding: 0 5px;
    font-size: 1.4rem;
    position: relative;
    top: 1px;
    }
.breadcrumbs li:last-child a:after {display: none;}
<?php } //Breadcrumbs Ends?>
#pagination{
 border:none;
    padding:0;
    line-height:1.3;
    font-size:2.2rem;
    margin-top: 3rem;
    }
.next{float: right;width: 45%;text-align:right;position:relative;margin-top:10px;}
.next a, .prev a{ color: #765298;
    line-height: 1.2;
    font-size: 22px;
    font-size: 2.2rem;}
.prev{float: left;width: 45%;position:relative;margin-top:10px;}
.prev span, .next span{
    font-size:26px;
    font-size:2.6rem;
    text-transform:none;
    color: #000;
    border: 3px solid #000;
    padding: 0 2rem 1rem 2rem;
    position: relative;
    top: 4px;
    margin-bottom: 2rem;
  display: block;
}
.prev span:hover, .next span:hover {
     color: #765298;
     border-color:#765298;
}
.prev span:before {
    content:"<";
        font-size: 4rem;
    position: relative;
    top: .25rem;
    margin-right: 1rem;
}
.next span:after {
    content:">";
        font-size: 4rem;
    position: relative;
    top: .25rem;
    margin-left: 1rem;
}
.next:hover a, .prev:hover a{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;}
.prev:after{ border-left:3px solid #000;content: "";height: calc(100% - -10px);right:-11.3%;position: absolute;top: 50%;transform: translate(0px, -50%);width: 2px;}
.ampforwp_post_pagination{width:100%;text-align:center;display:inline-block;}
.ampforwp_post_pagination p{margin: 0;font-size: 18px;color: #444;font-weight: 500;margin-bottom:10px;}
.ampforwp_post_pagination p a{color:#000;padding:0px 10px;}
.cmts{width:100%;display:inline-block;clear:both;margin-top:40px;}
.amp-comment-button{background-color: #000;color:#fff;font-size: 22px;
    font-size: 2.2rem; padding:2rem;float: none;margin: 30px auto 0px auto;text-align: center;width:250px;}
    .amp-comment-button:hover {
    background-color:#765298;
    color:#fff;
}
.form-submit #submit{background-color: #000;font-size: 14px;text-align: center;font-weight: 400;color: #fff;cursor: pointer;margin: 0;border: 0;padding: 11px 21px;}
#respond p {margin: 12px 0;}
.amp-comment-button a{color: #fff;display: block;padding: 7px 0px 8px 0px;}
.amp-comment-button a:hover {
    color:#fff!important;
}
.comment-form-comment #comment {border-color: #ccc;width: 100%;padding: 20px;}
.cmts h3{margin: 0;font-size: 12px;padding-bottom: 6px;border-bottom: 1px solid #eee;font-weight: 400;letter-spacing: 0.5px;text-transform: uppercase;color: #444;}
.cmts h3:after{content: "";display: block;width: 115px;border-bottom: 1px solid #000;position: relative;top: 7px;}
.cmts ul{margin-top:16px;}
.cmts ul li{list-style: none;margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px solid #eee;}
.cmts .amp-comments-wrapper ul .children{margin-left:30px; }
.cmts .comment-author.vcard .says{display:none;}
.cmts .comment-author.vcard .fn{font-size: 12px;font-weight: 500;color: #333;}
.cmts .comment-metadata{font-size: 11px;margin-top: 8px;}
.amp-comments-wrapper ul li:hover .comment-meta .comment-metadata a{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;;}
.cmts .comment-metadata a{color: #999;}
.comment-content{margin-top:6px;width:100%;display:inline-block;}
.comment-content p{font-size: 14px;color: #333;line-height: 22px;font-weight: 400;margin: 0;}
.comment-meta amp-img{float:left;margin-right:10px;border-radius:50%;width:40px;}
.sp-rt .amp-author {margin-top: 5px;}
.cntn-wrp a{color: #765298;text-decoration:underline;}
.cntn-wrp a:hover, .content-wrapper a:hover{color: #000;}
.loop-wrapper{display: flex;flex-wrap: wrap;margin: -15px;}
.loop-category li{display: inline-block;list-style-type: none;margin-right: 10px;font-size: 10px;font-weight: 600;letter-spacing: 1.5px;}
ul .loop-category, .fsp-cnt .loop-category, .loop-category li a {
  color: #9a9ea1;
	font-size: 15px;
	font-size: 1.5rem;
	text-transform: uppercase;
	margin-bottom:10px;
	margin-bottom:1rem;
display: block;
	font-weight:600;}
.loop-category li:hover a{color:#000;}
.fsp:hover h2 a{color: #000;}
.fsp h2 a{color:#000;}  
.fsp{margin: 15px;flex-basis: calc(33.33% - 30px);}
.fsp-img {margin-bottom:10px;}
h2 .loop-title, .fsp h2{ font-size: 35px;
	font-size: 3.5rem;
    font-weight: 600;
	line-height: 1.2;
	margin: 0 0 16px;
	font-style:italic;;}
.fsp-cnt .loop-category{margin-bottom:8px;}
.fsp-cnt .loop-category li {font-weight: 500;}
.pt-dt{margin: 8px 0px 0px 0px;display: inline-flex;color:#9a9ea1;}
div.loop-date:before{
    content: "/";
padding-right: 4px;
}
blockquote{margin-bottom:20px;}
blockquote p {font-size: 34px; line-height: 1.4; font-weight: 700; position: relative; padding: 30px 0 0 0; }
blockquote p:before {content: "";border-top: 8px solid #000;width: 115px;line-height: 40px;display: inline-block;position: absolute;top: 0;}

<?php // Comments Pagination 
if( isset($redux_builder_amp['wordpress-comments-support']) && 1 == $redux_builder_amp['wordpress-comments-support']){?>
.cmts-wrap{display:flex;width:100%;margin-top: 30px;padding-bottom:30px;border-bottom:1px solid #eee;}
.cmts-wrap .page-numbers:after{display:none;}
.cmts .page-numbers{margin:0px 10px;}
.cmts .prev, .cmts .next{margin:0 auto;}
.cmts-wrap a{color:#333;}
.cmts-wrap a:hover{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;}
.cmts-wrap .current{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;}
<?php } // Comments Pagination CSS Ends
if ( isset($redux_builder_amp['ampforwp-disqus-comments-support']) && $redux_builder_amp['ampforwp-disqus-comments-support'] ) {?>
.amp-disqus-comments { text-align:center } <?php 
} ?>

@media(max-width:1110px){
    .cntr{width:100%;padding:0px 20px;}
    .sp-rt {margin-left: 30px;}
}
@media(max-widt900px){
    .tl-exc {font-size: 14px;margin-top: 3px;line-height: 22px;}
    .sp-rl {display: inline-block;width: 100%;}
    
    .sp-lt {width: 100%;margin-top: 20px;max-width:100%;}
    .sp-cnt{margin-top: 15px;}
    .r-pf h3{margin-bottom:0;padding-top:20px;border-top:1px dotted #ccc; }
    .r-pf {margin-top:20px;}
    .cmts{margin:20px 0px 20px 0px;}
    .sp-rt {width: 100%;margin-left: 0;}
    .sp-rt .amp-author {padding: 20px 15px;}
    #pagination {margin: 20px 0px 20px 0px;border-top: none;}
    .amp-post-title{padding-top:10px;font-size:2.6rem;}
    .fsp{flex-basis: calc(100% - 30px);}
    .fsp-img{width:100%;float:left;margin-right:0px;}
    .fsp-cnt{width:100%;float:left;}
    <?php if($redux_builder_amp['rp_design_type'] == '1'){?>
	    .srp .related_link{font-size:20px;line-height:1.4;font-weight:600;}
	    .rlp-image{width:200px;float:left;margin-right:15px;display: flex;flex-direction: column;}
	    .rlp-cnt{display: flex;}
    <?php } //Related post Design 1 CSS Ends
    if($redux_builder_amp['rp_design_type'] == '2'){?>
    	.srp ul li{flex-basis: calc(100% - 30px);}
    	.srp li .rlp-image{width:40%;float:left;margin-right:20px;}
    	.srp li .rlp-cnt{width:54%;float:left;}
    <?php } //Related post Design 2 CSS Ends?>
}
@media(max-width:640px){
    .related_posts .has_related_thumbnail {width: 100%;}
 }

@media(max-width:480px){
    .r-pf .cntr{padding:0}
    .cntn-wrp p{line-height:1.3;}
    .related_posts .has_related_thumbnail {width: 100%;}
    .rlp-image {width: 100%;float: none;margin-right: 0px;}
    .rlp-cnt {width: 100%;float: none;}
    .amp-post-title {  font-size:55px;
    font-size:2.6rem;
	line-height: 1.2;
	}
    .amp-category span a { color: #765298;
    text-decoration: none;
    text-transform:uppercase;
    font-weight: 700;
    font-size: 15px;
    font-size: 1.5rem;}
    .amp-category span a:hover {
    color:#000;
}
    .sf-img{margin-top:20px;}
    .sp{margin-top: 20px;}
    .menu-btn a{padding:10px 20px;font-size:14px;}
    .next, .prev{float: none;width: 100%;}
    #pagination {padding: 10px 0px 0px;}
    #respond {margin: 0;}
    .next a {margin-bottom: 45px;display:inline-block;}
    .prev:after{display:none;}
    .author-details p {font-size: 12px;line-height: 18px;}
    .sf-img .wp-caption-text{width:100%;padding:10px 15px;}
    .fsp-img{width:100%;float:none;margin-right:0px;}
    .fsp-cnt{width:100%;float:none;}
    .fsp{border:none; padding:0;}
    .fsp-cnt{padding: 0px 15px 0px 14px;}
    .r-pf .fsp-cnt{padding: 0px;}
     blockquote p {font-size:20px;}
     <?php if($redux_builder_amp['rp_design_type'] == '2'){?>
    	.srp li .rlp-image{width:100%;float:none;margin-right:0px;}
    	.srp li .rlp-cnt{width:100%;float:none;}
    <?php } ?>
}
@media(max-width:425px){
    .sp-rt .amp-author {margin-bottom: 10px;}
    #pagination {margin: 20px 0px 10px 0px;}
    h2 .loop-title, .fsp h2 {ont-size: 35px;
	font-size: 3.5rem;
    font-weight: 600;
	line-height: 1.2;
	margin: 0 0 16px;
	font-style:italic;}
    .r-pf h3{padding: 15px 0px 0px 15px;}
}
@media(max-width:320px){
    .cntn-wrp p {font-size: 16px;}  
}
<?php } } ?>
<?php if ( isset($redux_builder_amp['ampforwp-dropcap']) && $redux_builder_amp['ampforwp-dropcap'] ) { ?>
.cntn-wrp > p:first-of-type::first-letter{
    float: left;
    font-size: 75px;
    line-height: 1;
    padding-right: 8px;
}
<?php } //Drop Cap CSS ends
// Menu Search CSS
if ( isset($redux_builder_amp['menu-search']) && $redux_builder_amp['menu-search'] ) { ?>
.m-srch #amp-search-submit {
    cursor: pointer;
    background: transparent;
    border: none;
    display: inline-block;
    width: 30px;
    height: 30px;
    opacity: 0;
    position: absolute;
    z-index: 100;
    right: 0;
    top: 0;
}
.m-srch .amp-search-wrapper{
	border: 1px solid ;
	background:;
	width:100%;
	border-radius:60px;
}
.m-srch #s{
	padding:10px 15px;
	border:none;
	width:100%;
	color:;
	background:;
	border-radius: 60px;
}
.m-srch{
	border-top: 1px solid ;
    padding: 20px;
}
.m-srch .overlay-search:before{
	color:;
	padding-right:10px;
	top:6px;
}
<?php } // Menu Search CSS Ends
if ( isset($redux_builder_amp['menu-social']) && $redux_builder_amp['menu-social'] ) { ?>
.m-s-i {
	padding:25px 0px 15px 0px;
	border-top: 1px solid ;
	text-align: center;
}
.m-s-i li{
	font-family: 'amp-cantechfont';
    list-style-type: none;
    font-size: 20px;
    display: inline-block;
    margin: 0px 15px 10px 0px;
    vertical-align: middle;
}
.m-s-i li:last-child{
	margin-right:0;
}
.m-s-i li a{
	background: transparent;
	color:;
}
<?php if($redux_builder_amp['enbl-fb']){?>
	.s_fb:after {content: "\e92d";}
<?php } 
if($redux_builder_amp['enbl-tw']){ ?>
	.s_tw:after {content: "\e942";}
<?php }
if($redux_builder_amp['enbl-gol']){?>
	.s_gp:after {content: "\e931";}
<?php }
if($redux_builder_amp['enbl-lk']){?>
	.s_lk:after {content: "\e934";}
<?php }
if($redux_builder_amp['enbl-pt']){?>
	.s_pt:after {content: "\e937";}
<?php } 
if($redux_builder_amp['enbl-yt']){?>
	.s_yt:after {content: "\e947";}
<?php }
if($redux_builder_amp['enbl-inst']){?>
	.s_inst:after {content: "\e932";}
<?php }
if($redux_builder_amp['enbl-vk']){?>
	.s_vk:after {content: "\e944";}
<?php }
if($redux_builder_amp['enbl-rd']){?>
	.s_rd:after {content: "\e938";}
<?php }
if($redux_builder_amp['enbl-tbl']){?>
	.s_tbl:after {content: "\e940";}
<?php } ?>
<?php } // Menu social CSS Ends
if( isset($redux_builder_amp['amp-swift-menu-cprt']) && $redux_builder_amp['amp-swift-menu-cprt']){?>
.cp-rgt{
	font-size:11px;
	line-height:1.2;
	color:<?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
	padding: 20px;
	text-align: center;
	border-top: 1px solid <?php if(isset($redux_builder_amp['swift-element-menu-border-color']['rgba'])){ echo $redux_builder_amp['swift-element-menu-border-color']['rgba'];}?>;
}
.cp-rgt a{
	color:<?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
	border-bottom:1px solid <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
	margin-left:10px;
}
.cp-rgt .view-non-amp{
	display:none;
}
a.btt:hover {
    cursor: pointer;
}
<?php } //Menu Copy Right CSS Ends
if($redux_builder_amp['single-design-type'] == '4'){
if(is_single() ) { ?>
.sp-rt{
	margin:0;
	width:100%;
}
.sp-rt .amp-author {
    margin-top: 20px;
}
.sp-artl .srp ul{
    display: flex;
    flex-wrap: wrap;
    margin: -15px;
}
.sp-artl .srp .has_thumbnail{
    margin: 15px;
    flex-basis: calc(33.33% - 30px);
}
.sf-img .wp-caption-text{
	width:100%;
}
@media(max-width:900px){
.sp-artl .srp .has_thumbnail{
    flex-basis: calc(100% - 30px);
}
}

<?php } //is_single condition is added
if (isset($redux_builder_amp['swift-sidebar']) && $redux_builder_amp['swift-sidebar']) { ?>
.sp-artl{
	display:inline-flex;
	width:100%;
}
.sp-left {
    display: flex;
    flex-direction: column;
    width: <?php if ( ! is_active_sidebar( 'swift-sidebar' ) ) { echo '100%';} else{ echo '70%'; } ?>;
    padding-right: 20px;
}
.sp-artl .srp .has_thumbnail{
    margin: 15px;
	flex-basis: calc(49.33% - 30px);
}
.sp-artl .fsp{
	flex-basis: calc(49.33% - 30px);
}


@media(max-width:900px){
.sp-artl {
    display: block;
}
.sp-left{
	width:100%;
	padding:0;
}
.sp-artl .srp .has_thumbnail, .sp-artl .fsp {
    flex-basis: calc(100% - 30px);
}

}
<?php } // sidebar CSS ends
} // single design 4 ends?>
<?php // Header and Archive Sidebar
if ( ampforwp_get_setting('gbl-sidebar') && ampforwp_get_setting('gnrl-sidebar') ) { ?>
.b-w, .arch-dsgn{
	display: flex;
}
.arch-psts, .b-w .hmp{
	display: flex;
    flex-direction: column;
    width: 70%;
    padding-right: 20px;
}
/*** Home page ***/
.fbp-cnt {
    float: left;
    width: 30%;
    margin-left: 20px;
}
.b-w .fsp, .arch-psts .fsp{
	flex-basis: calc(49.33% - 30px);
}
.b-w .sdbr-right{
	margin-top:30px;
}
/** Custom Frontpage PB CSS **/
.cntr.pgb{
	max-width:1400px;
}
.pgb {
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 300px;
}
.pg-lft{
    display: flex;
    flex-direction: column;
    width: auto;
    padding-right: 30px;
}
.pgb .sdbr-right{
	width:auto;
}
@media(max-width:900px){
	.fbp-cnt{
		width:100%;
	}
	.pg-lft{
		width:100%;
		padding:0;
	}
	.pgb {
	    display: inline-block;
	}
}
<?php }
if ( (isset($redux_builder_amp['gbl-sidebar']) && $redux_builder_amp['gbl-sidebar'] ) || (isset($redux_builder_amp['swift-sidebar']) && $redux_builder_amp['swift-sidebar'] ) ) { ?>
/*** Sidebar CSS ***/
<?php if ( is_active_sidebar( 'swift-sidebar' ) ) : ?>
.sdbr-right{
		background-color: #dce0e3;
	display:flex;
	flex-direction:column;
	width:33.5%; /*originally 30% */
}
.sdbr-right .entry .amp-wp-enforced-sizes {
    max-width:100px!important;
    height:100px;
    object-fit:cover;
}
.sdbr-right .entry h2 a{
    color: #000;
    font-size: 19px;
    font-size: 1.9rem;
    font-weight: 400;
    text-transform: none;
    font-style: italic;
    text-decoration: none;
    line-height: 1.2;
    margin-bottom: 4px;
    margin-bottom: .4rem;
    padding: 0;
    text-overflow: ellipsis;
    -webkit-line-clamp: 3!important;
    -webkit-box-orient: vertical!important;
    overflow: hidden;
    display: -webkit-box!important;
}

.sdbr-right .entry:after {
clear: both;
    content: " ";
    display: table;
    margin-bottom: 1rem;
}

.amp-sidebar{
	padding:20px;
	font-size: 1.6rem;
}
.amp-sidebar ul li{
	list-style-type: none;
    margin-bottom: 15px;
}
.amp-sidebar h4{
 color: #fff;
    margin-bottom: 0;
    background: #000;
    padding: 1rem;
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    	text-align:center;
    	font-size: 2.4rem;
	text-transform:uppercase;
}
.amp-sidebar h2 {
margin:0;
}
.newswire-widget .amp-sidebar  {}

.newswire-widget .amp-sidebar h4:before {
	 content: "\e910";
	color:#fff;
	margin-right:1rem;
	font-size:2.5rem;
	font-family: 'amp-cantechfont' !important;
	position:relative;
	top: 2px;
	top: .2rem;
}

.amp-sidebar .entry {
background-color: #fff;
    border-bottom: 3px solid #dce0e3;
    padding: 10px 10px 0px 10px;
}

.amp-sidebar time:after {
content: "/";
    padding: 0 2px 0 4px;
}
.amp-sidebar time:before {
content: "/";
    padding-right: 4px;
}
.amp-sidebar time, .amp-sidebar .entry-author {
text-transform:uppercase;
font-size:1.3rem;
color:#9a9ea1;
line-height:1.2;
}


<?php endif; ?>
<!-- @media(max-width:900px){
.sdbr-right{
	width:100%;
}
.sp-left{
    min-width:100%;
    margin:0 auto;
}
} -->
@media(max-width:900px){
.sdbr-right{
	width:100%;
}
.b-w .hmp, .arch-psts{
	width:100%;
	padding:0;
}
.b-w, .arch-dsgn{
	display: block;
}
.b-w .fsp, .arch-psts .fsp{
    flex-basis: calc(100% - 30px);
}
}
<?php } //Header and Archive Sidebar CSS Ends ?>
<?php 

//Footer
if ( isset($redux_builder_amp['footer-type']) && '1' == $redux_builder_amp['footer-type'] ) { ?>
.footer{margin-top: 80px;}
<?php if($redux_builder_amp['footer2-position-type'] == '1'){?>
.f-menu ul li .sub-menu{display:none;}
.f-menu ul li{display:inline-block;margin-right:20px;}
.f-menu ul li a {padding:0;color:#7a7a7a;}
.f-menu ul > li:hover a{color: ;}
.f-menu{font-size:22px;
    font-size:2.2rem;line-height:1.4;margin-bottom:30px;}
.rr{   background-color: #6a6a6a;
    color: #fff;
        font-size: 16px;
    font-size: 1.6rem;
    text-align: center;
    padding:20px;
     padding:2rem;
    line-height:1.4;}
.rr span{margin:0 10px 0 0px}
.rr .btt {
   background-color: #ddd;
    font-size: 25px;
    font-size: 2.5rem;
    display: block;
    padding: 2rem;
    border: 2px solid #ddd;
    margin: 2rem auto 0 auto;
    width: 30%;
    color: #000;
    text-decoration:none;
}
.rr .btt a {
}
.rr .btt:hover {
    background-color: #000;
    color:#ddd;
}
.rr a {
color: #fff;
text-decoration:underline;
}
.rr a:hover {
color:#ddd;
}
.f-menu ul li.menu-item-has-children:hover > ul{display:none;}
.f-menu ul li.menu-item-has-children:after{display:none;}
<?php } ?>
<?php if ( is_active_sidebar( 'swift-footer-widget-area'  ) ) : ?>
.f-w-f1{
padding:<?php
if(isset($redux_builder_amp['ftr1-gapping'])){
	echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-top'];
	echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-right'];
	echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-bottom'];
	echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-left'];
}
?>;
width:100%; border-top: 1px solid <?php echo $redux_builder_amp['swift-footer-brdrclr']['rgba']?>;}
<?php endif; ?>
.f-w{display: inline-flex;width: 100%;flex-wrap:wrap;}
.f-w-f2{text-align: center;border-top: 1px solid <?php echo $redux_builder_amp['swift-footer-brdrclr']['rgba']?>;
padding:<?php
if(isset($redux_builder_amp['ftr2-gapping'])){
	echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-top'];
	echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-right'];
	echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-bottom'];
	echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-left'];
}
?>;
}
.w-bl{margin-left: 0;display: flex;flex-direction: column;position: relative;flex: 1 0 22%;margin:0 15px 30px;line-height:1.5;}
.w-bl h4{font-size: <?php echo $redux_builder_amp['swift-head-size'] ?>;font-weight: <?php echo $redux_builder_amp['swift-head-fntwgth'] ?>;margin-bottom: 20px;text-transform: uppercase;letter-spacing: 1px;padding-bottom: 4px;}
.w-bl ul li, .ampforwp_wc_shortcode_title{list-style-type: none;margin-bottom: 15px;}
.w-bl ul li:last-child{margin-bottom:0;}
.w-bl ul li a{text-decoration: none;}
.w-bl .menu li .sub-menu{display:none;}

.ampforwp_wc_shortcode_title{
	margin-top: 12px;
    display: inline-block;
}
.ampforwp_wc_shortcode_excerpt{
	font-size:15px;
	line-height:1.4;
}
<?php /*** New footer Features ***/
if( isset($redux_builder_amp['footer-customize-options']) && true ==  $redux_builder_amp['footer-customize-options']) { ?>
.f-w{
	flex-wrap:wrap;
}
.f-w-f1{
	<?php if( $redux_builder_amp['swift-footer-bg']['rgba'] ) {?>
		background:<?php echo $redux_builder_amp['swift-footer-bg']['rgba']?>; 
	<?php } ?>
		font-size: <?php echo $redux_builder_amp['swift-footer1-cntnsize']?>; 
	    line-height: 1.5;
    <?php if( $redux_builder_amp['swift-footer-txt-clr']['rgba'] ) {?>
		color: <?php echo $redux_builder_amp['swift-footer-txt-clr']['rgba'] ?>;
	<?php } ?>
}
.w-bl h4{
<?php if( $redux_builder_amp['swift-footer-heading-clr']['rgba'] ) {?>
	color: <?php echo $redux_builder_amp['swift-footer-heading-clr']['rgba'] ?>;
<?php } ?>
}
.rr a {
    color:#9a9ea1;
}

.rr a:focus,.rr a:hover {
        color: #765298;
}

.w-bl a, .f-menu ul li a, {
<?php if( $redux_builder_amp['swift-footer-link-clr']['rgba'] ) {?>
	color: <?php echo $redux_builder_amp['swift-footer-link-clr']['rgba'] ?>;
<?php } ?>
}
.w-bl a:hover, .f-menu ul li a:hover, {
<?php if( $redux_builder_amp['swift-footer-link-hvr']['rgba'] ) {?>
	color: <?php echo $redux_builder_amp['swift-footer-link-hvr']['rgba'] ?>;
<?php } ?>
}
.w-bl p{
    margin-bottom:15px;
}
.f-w-f2{
<?php if( $redux_builder_amp['swift-footer2-bg']['rgba'] ) {?>
	background:<?php echo $redux_builder_amp['swift-footer2-bg']['rgba']?>;
<?php } ?>
	display: inline-block;
    clear: both;
    width: 100%;
}
<?php if($redux_builder_amp['footer2-position-type'] == '2'){?>
.f-w-f2{
	font-size:<?php echo $redux_builder_amp['swift-footer2-fntsize']?>;
}
.f-menu{
	display:inline-block;
	float:right;
	margin:0;
}
.f-menu ul li{
	margin:0;
	display: inline-block;
}
.f-menu ul li .sub-menu{display:none;}
.f-menu ul li a:after{
	content: "|";
    display: inline-block;
    color: #888888;
    position: relative;
    left: 2px;
    padding: 0px 5px;
}
.f-menu ul li:last-child a:after{
	display:none;
}
.rr{
	display:inline-block;
	float:left;
	color: <?php echo $redux_builder_amp['swift-footer-txt-clr']['rgba'] ?>;
}
@media(max-width:900px){
.f-menu{
	float:none;
}
.rr {
	float:none;
    font-size: 13px;
    margin-top:15px;
    display:block;
}
}
<?php } ?>
<?php } // New footer feature closed ?>
@media(max-width:900px){
    .footer {margin-top: 60px;}
    .w-bl{flex:1 0 22%;}
    .f-menu ul li {margin-bottom:10px;}
.sp-left {
    margin: 0 auto;
    width: 80%;
}
.cntr {
    padding: 0 14px;
}
.prev:after {
    right: -12%;
}
.r-pf h3 {
    border-top:none;
    margin-bottom: 15px;
}
.cntn-wrp ol {
    margin-bottom:0;
}
.sp-cnt amp-img {
    margin-bottom:2rem;
}
.cntn-wrp .rp4wp-related-posts ul {
    list-style-type:none;
}
}
@media(max-width:480px){
    .footer {margin-top: 50px;}
    <?php if ( is_active_sidebar( 'swift-footer-widget-area'  ) ) : ?>
    .f-w-f1 { padding: 45px 0px 10px 0px;}
    <?php endif; ?>
    .f-w-f2 {padding: 25px 0px;}
    .f-w{display:block;}
    .w-bl{margin-bottom:40px;}
    .w-bl{flex:100%;}
    .w-bl ul li {margin-bottom: 11px;}
    .f-menu ul li {display: inline-block;line-height: 1.8;margin-right: 13px;}
    .f-menu .amp-menu > li a {padding: 0;font-size:22px;
    font-size:2.2rem;color: #9a9ea1;}
    .rr {margin-top: 15px;font-size: 11px;
    	<?php if($redux_builder_amp['amp-gdpr-compliance-switch'] == '1'){?>
			line-height:1.8;
		<?php } ?>
	}
}
@media only screen and (max-width: 445px) {
  .rr .btt {
   width:100%;
}
}
@media(max-width:425px){
    .footer {margin-top: 35px;}
    <?php if ( is_active_sidebar( 'swift-footer-widget-area'  ) ) : ?>
    .f-w-f1 {padding: 35px 0px 10px 0px;}
    <?php endif; ?>
    .w-bl h4 {margin-bottom: 15px;}
}
<?php if( checkAMPforPageBuilderStatus(get_the_ID()) && (ampforwp_is_front_page() || is_page()) ) { ?>
.footer{margin-top: 0px;}
<?php } ?>
<?php if( ampforwp_is_home() || ampforwp_is_blog() ) { ?>
.footer{margin-top: 40px;}
<?php } ?>
<?php } ?>
<?php

 //Sticky Social Icons
if(is_single() || is_page() ){ ?>
.ss-ic ul li{font-family: 'amp-cantechfont';list-style-type:none;display:inline-block;height: 50px;height: 5rem;-webkit-font-smoothing: antialiased;}
.ss-ic li a{color: #000;padding: 5px;border: 3px solid #000;margin: 0px 10px 10px 0px;display: table-cell;width: 48px;width: 4.8rem;height: 48px; height: 4.8rem;text-align: center;}
.ss-ic li a:hover {opacity:.4;background-color: #272727;color: #fff;border-color: #272727;}
<?php if($redux_builder_amp['enable-single-facebook-share'] || $redux_builder_amp['enbl-fb'] ){?>
.ss-ic ul li .s_fb{	color:#000;}
.s_fb:after{content: "\f09a";}
<?php } 
if($redux_builder_amp['enable-single-twitter-share'] || $redux_builder_amp['enbl-tw']){?>
.s_tw{color:#000;}
.s_tw:after{content: "\f099";}
<?php } 
if($redux_builder_amp['enable-single-gplus-share'] || $redux_builder_amp['enbl-gol']){?>
.s_gp{color:#000;}
.s_gp:after{content: "\f0d5";}
<?php } 
if($redux_builder_amp['enable-single-linkedin-share'] || $redux_builder_amp['enbl-lk']){?>
.s_lk{color:#000;}
.s_lk:after{content: "\f0e1";}
<?php }
if($redux_builder_amp['enable-single-pinterest-share'] || isset($redux_builder_amp['enbl-pt']) && $redux_builder_amp['enbl-pt']){?>
.s_pt{color:#000;}
.s_pt:after{content:"\f0d2";}
<?php } 
if($redux_builder_amp['enable-single-email-share']){?>
.s_em{color:#000;}
.s_em:after{content: "\f003";}
<?php }
if($redux_builder_amp['enable-single-whatsapp-share']){?>
.s_wp{color:#000;}
.s_wp:after{content: "\f232";}
<?php } 
if($redux_builder_amp['enable-single-odnoklassniki-share']){?>
.s_od{color:#000;}
.s_od:after{content: "\f263";}
<?php } 
if($redux_builder_amp['enable-single-vk-share']){?>
.s_vk{color:#000;}
.s_vk:after{content: "VK";}
<?php } 
if($redux_builder_amp['enable-single-reddit-share']){?>
.s_rd{color:#000;}
.s_rd:after{content: "\f281";}
<?php } 
if($redux_builder_amp['enable-single-tumblr-share']){?>
.s_tb{color:#000;}
.s_tb:after{content: "\f173";}
<?php } 
if($redux_builder_amp['enable-single-telegram-share']){?>
.s_tg{color:#000;}
.s_tg:after{content: "\f2c6";}
<?php } 
if($redux_builder_amp['enable-single-digg-share']){?>
.s_dg{color:#000;}
.s_dg:after{content: "\f1a6";}
<?php }
if($redux_builder_amp['enable-single-stumbleupon-share']){?>
.s_su{color:#000;}
.s_su:after{content: "\f1a4";}
<?php }
if($redux_builder_amp['enable-single-wechat-share']){?>
.s_wc{color:#000;}
.s_wc:after{content: "\f1d7";}
<?php } 
if($redux_builder_amp['enable-single-viber-share']){?>
.s_vb{color:#000;}
.s_vb:after{content: "Viber";}
<?php }
if(isset($redux_builder_amp['enable-single-yummly-share']) && $redux_builder_amp['enable-single-yummly-share']){?>
.s_ym{color:#000;}
.s_ym:after{content: "Yummly";}
<?php }
if(isset($redux_builder_amp['enable-single-hatena-bookmarks']) && $redux_builder_amp['enable-single-hatena-bookmarks']){?>
.s_hb{color:#000;}
.s_hb:after{content: "Hatena";}
<?php }
if(isset($redux_builder_amp['enable-single-pocket-share']) && $redux_builder_amp['enable-single-pocket-share']){?>
.s_pk{color:#000;}
.s_pk:after{content: "\f265";}
<?php } ?>
.s_stk{display:inline-block;padding:1%;position:fixed;bottom: 0;text-align: center;border-top: 3px solid;background:#fff;}
.s_stk ul{width:100%;display:inline-flex;}
.s_stk ul li{flex-direction: column;flex-basis: 0;flex: 1 0 5%;max-width: calc(100% - 10px);display: flex;}
.s_stk li a{margin:0;border-radius: 0;padding:12px 0px;display: block;
    width: 50px;
    background-color: #fff;
    border: 3px solid #000;
    color: #000;}

<?php } ?>
<?php if(is_single() && $redux_builder_amp['enable-single-social-icons'] ){?>
.body.single-post{
  padding-bottom:40px;
}
<?php } ?>
.content-wrapper a, .breadcrumb ul li a, .srp ul li, .rr a{transition: all 0.s ease-in-out 0s;}
[class^="icon-"], [class*=" icon-"] {font-family: 'amp-cantechfont';speak: none;font-style: normal;font-weight: normal;font-variant: normal;text-transform: none;line-height: 1;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;}
.amp-ad-wrapper{width:100%;text-align:center;}
.amp-ad-wrapper span { display: inherit; font-size: 12px; line-height: 1;}
<?php if( isset($redux_builder_amp['enable-amp-ads-1'] ) && $redux_builder_amp['enable-amp-ads-1'] ) { ?>.amp_ad_1{margin: -2px 0px -17px 0px;}<?php } 
if( isset($redux_builder_amp['enable-amp-ads-2'] ) && $redux_builder_amp['enable-amp-ads-2'] ) { ?>.amp_ad_2{margin: 20px 0px -23px 0px; }<?php } 
if( isset($redux_builder_amp['enable-amp-ads-3'] ) && $redux_builder_amp['enable-amp-ads-3'] ) { ?>.amp-ad-3{margin: 0px 0px -4px 0px;}<?php }
if( isset($redux_builder_amp['enable-amp-ads-4'] ) && $redux_builder_amp['enable-amp-ads-4'] ) { ?>.amp_ad_4{margin: 20px 0px 20px 0px;}<?php }
if( isset($redux_builder_amp['enable-amp-ads-5'] ) && $redux_builder_amp['enable-amp-ads-5'] ) { ?>.amp_ad_5{margin: 10px 0px -17px 0px;}<?php }
if( isset($redux_builder_amp['enable-amp-ads-6'] ) && $redux_builder_amp['enable-amp-ads-6'] ) { ?>.amp-ad-6{ margin: 0px 0px 20px 0px;}<?php } ?>
.amp-ad-wrapper {margin-top: 10px; margin-bottom: 10px}
<?php if( true == ampforwp_get_setting('amp-enable-notifications') ) {?>
	#amp-user-notification1{padding: 5px;text-align: center;background: #fff;border-top: 1px solid #000;}
	#amp-user-notification1 p {display: inline-block;margin: 20px 0px;}
	amp-user-notification button {padding: 8px 10px;background: #000;color: #fff;margin-left: 5px;border: 0;}
<?php } // Notice bar CSS Ends?>

<?php 

//RTL Styles 
if( true == $redux_builder_amp['amp-rtl-select-option'] ) {?> 
.body{direction:rtl;}
.h-1 {order: -1;}
.h-nav{order: 1;}
.h-2 {order: -2;}
.h-3 {order: -2;justify-content: flex-start;}
.h-3 .h-srch{margin-left:0;}
.h-3 .h-nav {order: -1;margin: 0px 10px 0px 0;}
.fbp-img {float: right;}
.fbp-cnt {margin-right: 30px;margin-left:0}
.fbp-cnt, .fsp-cnt{text-align:right;}
.right a, .left a{direction:rtl;}
.right a:after{padding:0px 6px 0px 0px;top:-1px;}
.left a:before{padding:0px 0px 0px 6px;top:1px;}
.w-bl{direction:rtl;}
.loop-wrapper{direction:rtl;}
.breadcrumb, .amp-category{direction:rtl;}
.item-home:after {padding-right: 5px;}
.amp-post-title{text-align: right;}
.post-date .post-edit-link {float: left;}
.sp-rt{direction: rtl;margin-right: 50px;margin-left:0;}
.sp-rt .amp-author .amp-author-image {float: right;}
.amp-author-image amp-img {margin: 0px 0px 5px 12px;}
.prev {float: right;}
.next {float: left;}
.r-pf{direction:rtl;}
.prev:after {left: -25px;right:auto;}
.f-menu, .p-menu{direction:rtl;}
.sp-lt {direction: rtl;}
.comment-meta amp-img {float: right;margin-left: 10px;}
.archive .author-img {float: right;}
.archive  .author-img amp-img {margin: 0px 0px 10px 12px;}
.amp-archive-title, .amp-archive-desc{text-align:right;}
@media(max-width:1024px){
.fbp-img{float:right;}
.fbp-cnt{width:33%;}
}
@media(max-width:900px){
.fbp-cnt {width:100%;float:none;margin-right:0;}
.fsp-img {float: right;margin-right: 0;margin-left:20px;}
.rlp-image {float: right;margin-left: 15px;margin-right: 0;}
.sp-rt{margin-right:0}
}
@media(max-width:480px){
.fbp-cnt{width:100%;margin-right:0;}
.next a {text-align: left;}
.next span{right:auto;left:0;}
.post-date .post-edit-link {float: left;}
.fsp-cnt{width:100%;float:none;display:inline-block;}
}
<?php } // Menu RTL Styles 
if( true == $redux_builder_amp['amp-rtl-select-option'] ) {?> 
.h-nav {
    order: -1;
}
.h-1 {
    order: 0;
}
.c-btn {
 float:right;
padding: 20px 10px;
}
.overlay-search:before{
	left:0;
	right:auto;
}
a.lb-x{
	left:0;
	right:auto;
}
<?php if($redux_builder_amp['header-position-type'] == '1'){?>
.tg:checked + .hamb-mnu > .m-ctr {
    margin-right: 0%;
     background:#dce0e3;
}
.m-ctr{
    margin-right: -100%;
    float: left;
     background:#dce0e3;
}
<?php } ?>
<?php if($redux_builder_amp['header-position-type'] == '2'){?>
.tg:checked + .hamb-mnu > .m-ctr {
    margin-right: calc(100% - <?php echo $redux_builder_amp['header-overlay-width']?>);
     background:#dce0e3;
}
.m-ctr{
    margin-right: 100%;
    float: right;
     background:#dce0e3;
}
<?php } ?>
.m-menu li.menu-item-has-children:hover:after {
    right: auto;
    left:0;
}
.m-menu ul li.menu-item-has-children:after{
    right: auto;
    left:0;
}
.amp-ad-wrapper{direction:ltr;}
<?php } //RTL End ?>