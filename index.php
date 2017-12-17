<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php

$is_rus = !($_GET["lang"] == "en");

$about_me_rus = "ОБО МНЕ";
$about_me_en = "ABOUT MYSELF";

$works_rus = "ВИДЕО";
$works_en = "VIDEOS";

$shedule_rus = "РАСПИСАНИЕ";
$shedule_en = "TIMETABLE";

$training_shedule_rus = "РАСПИСАНИЕ";
$training_shedule_en = "TIMETABLE";

$services_rus = "УСЛУГИ";
$services_en = "SERVICES";

$contacts_rus = "КОНТАКТЫ";
$contacts_en = "CONTACTS";

$bottom_label_rus = "АРТУР ХАБИРОВ";
$bottom_label_en = "ARTHUR KHABIROV";

$prizes_en = "PRIZES";
$prizes_rus = "НАГРАДЫ";

$Marat_Rakhimov_en = "Marat Rakhimov";
$Marat_Rakhimov_rus = "Марат Рахимов";

$Designed_en = "Designed by";
$Designed_rus = "Дизайн";

$Developed_en = "Developed by";
$Developed_rus = "Сайт разработан в";

$Intellect_en = "IT Intellect";
$Intellect_rus = "АЙТИ Интеллект";


$about_me = $is_rus == true ? $about_me_rus : $about_me_en;
$prizes = $is_rus == true ? $prizes_rus : $prizes_en;
$services = $is_rus == true ? $services_rus : $services_en;
$works = $is_rus == true ? $works_rus : $works_en;
$training_shedule = $is_rus == true ? $training_shedule_rus : $training_shedule_en;
$shedule = $is_rus == true ? $shedule_rus : $shedule_en;
$contacts = $is_rus == true ? $contacts_rus : $contacts_en;
$bottom_label = $is_rus == true ? $bottom_label_rus : $bottom_label_en;
$Marat_Rakhimov = $is_rus == true ? $Marat_Rakhimov_rus : $Marat_Rakhimov_en;
$Designed = $is_rus == true ? $Designed_rus : $Designed_en;
$Developed = $is_rus == true ? $Developed_rus : $Developed_en;
$Intellect = $is_rus == true ? $Intellect_rus : $Intellect_en;


?><title><?php echo $bottom_label; ?></title>
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="css/custom.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/site.css" type="text/css" />

	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

	<script src="js/modernizr.custom.17475.js"></script>
	<script type="text/javascript" src="js/jquery.elastislide.js"></script>
</head><body><div id="video">
		<video  loop="loop" preload="metadata" autoplay="autoplay" width="100%" muted autobuffer poster="photo/10.jpg">
		<source src="video/video1.mp4" type="video/mp4" />
		</video>

		<div class="video-dot-pattern">
	</div>
	<div style="position: absolute; left: 50%; top:50%">
			<div style="position: relative; left: -50%; top:-70px">
			   <img src="img/img-top.png" />
			</div>
	</div>
	<div class="lang-block"><span class="yellow"><a href="index.php?lang=ru" class="yellow">РУС</a>/<a href="index.php?lang=en" class="yellow">EN</a></span></div>
		<div class="volume-block"><img src="img/mute.png" /></div>
</div>
<div style="height:100px;">
<div id="float-menu" class="border-top-line">
			<div style="background: #666666 url('img/dot-pattern-top-overlay-photo.png');" class="<?php if 
($is_rus == true) { 
	echo ""; 
} else { 
	echo "en"; 
} 
?>">
<div style="width:1000px; margin:0 auto;">
				<div class="menu">
				<ul>
				   <li id="item-about-me"><a href="#about-me" onclick="javascript:topMenu_itemClick(this)"><?php echo $about_me; ?></a></li> 
				   <li id="item-srv"><a href="#srv" onclick="javascript:topMenu_itemClick(this)"><?php echo $services; ?></a></li> 
				   <li id="item-wrk"><a href="#wrk" onclick="javascript:topMenu_itemClick(this)"><?php echo $works; ?></a></li> 
				   <li id="item-shdl"><a href="#shdl" onclick="javascript:topMenu_itemClick(this)"><?php echo $shedule; ?></a></li> 
				   <li id="item-contacts"><a href="#contacts" onclick="javascript:topMenu_itemClick(this)"><?php echo $contacts; ?></a></li> 
				</ul>
				</div>
			</div>
</div>
		</div>
</div>
	<div class="page ">
		
		<script type="text/javascript">

			function clearSelectedItems() {
				document.getElementById("item-about-me").className = "";
				document.getElementById("item-srv").className = "";
				document.getElementById("item-wrk").className = "";
				document.getElementById("item-shdl").className = "";
				document.getElementById("item-contacts").className = "";
			}

			function topMenu_itemClick(sender) {
				clearSelectedItems();
				sender.parentNode.className = "selected";
				return true;
			}

			var currentUrl = location.href;
			if (currentUrl.indexOf("#", 0) > 0) {
				clearSelectedItems();
				var part = currentUrl.substring(currentUrl.indexOf("#", 0) + 1);
				var liItem = document.getElementById("item-" + part);
				if (liItem != null) {
					liItem.className = "selected";
				}
			}
		</script>

		<div id="about-me">
			<ul id="carousel" class="elastislide-list">
					<li><a data-fancybox="gallery" href="photo/1.jpg"><img src="photo/1_thumb.jpg" alt="image03" /></a></li>
					<li><a data-fancybox="gallery" href="photo/2.jpg"><img src="photo/2_thumb.jpg" alt="image05" /></a></li>
					<li><a data-fancybox="gallery" href="photo/3.jpg"><img src="photo/3_thumb.jpg" alt="image06" /></a></li>
					<li><a data-fancybox="gallery" href="photo/4.jpg"><img src="photo/4_thumb.jpg" alt="image08" /></a></li>
					<li><a data-fancybox="gallery" href="photo/5.jpg"><img src="photo/5_thumb.jpg" alt="image09" /></a></li>
					<li><a data-fancybox="gallery" href="photo/6.jpg"><img src="photo/6_thumb.jpg" alt="image11" /></a></li>
					<li><a data-fancybox="gallery" href="photo/7.jpg"><img src="photo/7_thumb.jpg" alt="image12" /></a></li>
					<li><a data-fancybox="gallery" href="photo/8.jpg"><img src="photo/8_thumb.jpg" alt="image12" /></a></li>
					<li><a data-fancybox="gallery" href="photo/9.jpg"><img src="photo/9_thumb.jpg" alt="image12" /></a></li>
					<li><a data-fancybox="gallery" href="photo/10.jpg"><img src="photo/10_thumb.jpg" alt="image12" /></a></li>
					<li><a data-fancybox="gallery" href="photo/11.jpg"><img src="photo/11_thumb.jpg" alt="image12" /></a></li>
					<li><a data-fancybox="gallery" href="photo/12.jpg"><img src="photo/12_thumb.jpg" alt="image12" /></a></li>
					<li><a data-fancybox="gallery" href="photo/13.jpg"><img src="photo/13_thumb.jpg" alt="image12" /></a></li>
			</ul>
			<table style="width:100%">
				<tr>
					<td style="width:60%;" valign="top" >
						<h4 class="yellow"><?php echo $about_me; ?></h4>
						<?php if ($is_rus == true) {
							include "about_me_rus.php";
						} else {
							include "about_me_en.php";
						}
						?>
					</td>
					<td style="width:40%" valign="top" >
						<h4 class="yellow"><?php echo $prizes; ?></h4>
						<?php if ($is_rus == true) {
							include "prize_rus.php";
						} else {
							include "prize_en.php";
						}
						?>
					</td>
				</tr>
			</table>
		<span id="srv"></span>
			<?php if ($is_rus == true) {
				include "about_me_bottom_rus.php";
			} else {
				include "about_me_bottom_en.php";
			}
			?>
		</div>

		<div class="people1"></div>

		<div id="service">
			<h4 class="yellow"><?php echo $services; ?></h4>
			<hr />
			<?php if ($is_rus == true) {
				include "services_rus.php";
			} else {
				include "services_en.php";
			}
			?>
			<hr id="wrk"/>
		</div>

		<div class="people2"></div>

		<div id="works">
			<h4 class="yellow"><?php echo $works; ?></h4>
			<hr />
			<ul class="youtube-video-gallery">
				<?php if ($is_rus == true) {
				include "video_rus.php";
			} else {
				include "video_en.php";
			}
			?>
			</ul>

			<hr id="shdl"/>
		</div>

		<div class="people3"></div>

		 <div id="shedule">
			<h4 class="yellow"><?php echo $training_shedule; ?></h4>
			<hr />

			<?php if ($is_rus == true) {
				include "shedule_rus.php";
			} else {
				include "shedule_en.php";
			}
			?>
			 
			<hr />
		</div>

		
		 <div id="contacts">
			<h4 class="yellow"><?php echo $contacts; ?></h4>
			<hr />
			<table style="width:100%">
				<tr>
					<td style="width:400px">
						<div class="contact-icon contact-mobile"></div>
						<span class="yellow  text-1">MOBILE</span><br />
						<span class="text-21">+7 917 452-02-51</span>
					</td>
					<td style="width:273px">
						<div class="contact-icon contact-skype"></div>
						<span class="yellow  text-1">SKYPE</span><br />
						<span class="text-21"><a class="text-21" href="skype:KLESHARA2?chat">KLESHARA2</a></span>
					</td>
					<td style="width:295px">
						<div class="contact-icon contact-fb"></div>
						<span class="yellow text-1">FACEBOOK</span><br />
						<span class="text-21"><a class="text-21" href="https://www.facebook.com/arturklesh.khabirov">ARTURKLESH.KHABIROV</a></span>
					</td>
				</tr>
				<tr>
					<td>
						<div class="contact-icon contact-email"></div>
						<span class="yellow text-1">E-MAIL</span><br />
						<span class="text-21"><a class="text-21" href="mailto:ARTKHABIROV@YANDEX.RU">ARTKHABIROV@YANDEX.RU</a></span>
					</td>
					<td>
						<div class="contact-icon contact-vk"></div>
						<span class="yellow text-1">VK.COM</span><br />
						<span class="text-21"><a class="text-21" href="https://vk.com/klesh_nsc">KLESH_NSC</a></span>
					</td>
					<td>
						<div class="contact-icon contact-instagram"></div>
						<span class="yellow text-1">INSTAGRAM.COM</span><br />
						<span><a class="text-21" href="https://instagram.com/KLESH_NSC">KLESH_NSC</a></span>
					</td>
				</tr>
			</table>
			<hr />
		</div>

		<div class="people4"></div>

		<div class="yellow-icon-list">
			<a class="share-link" href="https://twitter.com/share?url="><div class="yellow-icon yellow-icon-twitter"></div></a>
			<a class="share-link" href="http://vk.com/share.php?url="><div class="yellow-icon yellow-icon-vk"></div></a>
			<a class="share-link" href="http://www.facebook.com/sharer.php?u="><div class="yellow-icon yellow-icon-fb"></div></a>
			<a class="share-link" href=" http://www.odnoklassniki.ru/dk?st.cmd=addShare&amp;st.s=1&amp;st._surl="><div class="yellow-icon yellow-icon-od"></div></a>
		<a href="https://instagram.com/KLESH_NSC"><div class="yellow-icon yellow-icon-instagram"></div></a>
			<a class="share-link" href="https://plus.google.com/share?url="><div class="yellow-icon yellow-icon-gp"></div></a>
		</div>
	 <table style="width:470px; margin:0 auto;">
				<tr>
					<td style="width:25%; text-align:center">
						<a href="#about-me" class="bottom-menu-link text-14" onclick="javascript:topMenu_itemClick(this)"><?php echo $about_me; ?></a>
					</td>
					<td style="width:25%; text-align:center">
						<a href="#srv" class="bottom-menu-link text-14" onclick="javascript:topMenu_itemClick(this)"><?php echo $services; ?></a>
					</td>
					<td style="width:25%; text-align:center">
						<a href="#wrk"  class="bottom-menu-link text-14" onclick="javascript:topMenu_itemClick(this)"><?php echo $works; ?></a>
					</td>
					<td style="width:25%; text-align:center">
						<a href="#shdl"  class="bottom-menu-link text-14" onclick="javascript:topMenu_itemClick(this)"><?php echo $shedule; ?></a>
					</td>
				</tr>
			</table>
		<div class="bottom">
			<span class="text-14" style="position: absolute;left: 0px;"><?php echo $Designed; ?> <a class="yellow text-14" href="https://vk.com/m_rakhimov"><?php echo $Marat_Rakhimov; ?></a></span>
			<span class="text-14">© 2015 <?php echo $bottom_label; ?></span>	    
		<span class="text-14" style="position: absolute;right: 0px;"><?php echo $Developed; ?> <a class="yellow text-14" href="https://vk.com/it_intellect"><?php echo $Intellect; ?></a></span>
		</div>
	<br/><br/>

	</div>
	<script type="text/javascript">

		$(document).ready(function () {
		$('.share-link').click(function(){ 
myWin=open($(this).attr("href") + location.href,"displayWindow","width=520,height=300,left=350,top=170,status=no,toolbar=no,menubar=no");
return false;
		});

			$(".fancybox").fancybox({
				closeBtn : true
			});

			$("ul.youtube-video-gallery").youtubeVideoGallery({
				thumbWidth : 230
			});

				$(".volume-block").click(function(){
				$("video").prop('muted', !$("video").prop('muted'));
				if ($("video").prop('muted')) {	
						$(".volume-block img").attr("src","img/mute.png");
				} else {
						$(".volume-block img").attr("src","img/unmute.png");
				}
			});
			
			var top = $('.page').offset().top - parseFloat($('.page').css('marginTop').replace(/auto/, 100)) + $('#float-menu').height();
  $(window).scroll(function (event) {
	// what the y position of the scroll is
	var y = $(this).scrollTop();

	// whether that's below the form
	if (y >= top) {
	  // if so, ad the fixed class
	  $('#float-menu').addClass('fixed');
	} else {
	  // otherwise remove it
	  $('#float-menu').removeClass('fixed');
	}
  });
		});

		$('#carousel').elastislide();

		</script>

</body>
</html>
