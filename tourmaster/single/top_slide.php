<?php $url = 'http://inspiringyachting.com/wp-content/plugins/tourmaster/single/';?>
<link rel="stylesheet" href="<?php echo $url;?>owl/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo $url;?>owl/owl.theme.default.min.css">

<script src="<?php echo $url;?>owl/jquery.min.js"></script>
<script src="<?php echo $url;?>owl/owl.carousel.min.js"></script>

<?php 
$title = '';
$arr_img = array();
$arr_name = array();
//echo '<textarea>[awl-slider id=8354]</textarea>';
//echo do_shortcode('[sp_wpcarousel id="8338"]');
//echo masterslider(4);
//echo do_shortcode('[sp_wpcarousel id="8338"]');
//echo do_shortcode('[smartslider3 slider="5"]');

if($_REQUEST['tax-tour-destinations']=='')
{
	$arr_img = [
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Tao-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Samui-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Railay-beach-W-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Hong-W900x500png.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Phi-Phi-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/koh-nangyuan900x500.jpg',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Promthep-cape-W-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Khai-Island-W-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Phuket-Beach-900x500-1.png',
	];
	
	$arr_name = [
		'Koh Khai',
		'Racha',
		'Koh Maiton',
		'Coral Island',
		'Koh Bon',
		'Rang Yai Island',
		'Koh Kaeo',
		'Koh Maphrao',
	];
	
	$title = 'All Island';
}
elseif($_REQUEST['tax-tour-destinations']=='phuket')
{
	$arr_img = [
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Khai-Island-W-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Phuket-Beach-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Promthep-cape-W-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Khai-Island-W-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Phuket-Beach-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Promthep-cape-W-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Khai-Island-W-900x500-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Phuket-Beach-900x500-1.png',
	];
	
	$arr_name = [
		'Koh Khai',
		'Racha',
		'Koh Maiton',
		'Coral Island',
		'Koh Bon',
		'Rang Yai Island',
		'Koh Kaeo',
		'Koh Maphrao',
	];
	
	$island = str_replace("-"," ",$_REQUEST['tax-tour-destinations']);
	$title = 'Island Around '.$island;
	
}
elseif($_REQUEST['tax-tour-destinations']=='koh-samui')
{
	$arr_img = [
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Samui-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Tao-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Samui-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Tao-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Samui-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Tao-W-1.png',
	];
	
	$arr_name = [
		'Phagnan Island',
		'Koh Tao',
		'Ang Thong Marin park',
		'Koh Mad  Sum',
		'Koh Lap',
		'Koh Som'
	];
	
	$island = str_replace("-"," ",$_REQUEST['tax-tour-destinations']);
	$title = 'Island Around '.$island;
}
elseif($_REQUEST['tax-tour-destinations']=='pattaya')
{
	$arr_img = [
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	];
	
	$arr_name = [
		'Monkey Island',
		'Khram Yai Island',
		'Koh Sak',
		'Koh Larn',
		'Rin Island',
		'Koh Phai'
	];
	
	$island = str_replace("-"," ",$_REQUEST['tax-tour-destinations']);
	$title = 'Island Around '.$island;
}
elseif($_REQUEST['tax-tour-destinations']=='krabi')
{
	$arr_img = [
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	];
	
	$arr_name = [
		'Monkey Island',
		'Khram Yai Island',
		'Koh Sak',
		'Koh Larn',
		'Rin Island',
		'Koh Phai'
	];
	
	$island = str_replace("-"," ",$_REQUEST['tax-tour-destinations']);
	$title = 'Island Around '.$island;
}
elseif($_REQUEST['tax-tour-destinations']=='phang-nga')
{
	$arr_img = [
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Chang-W900x500.png',
	'http://inspiringyachting.com/wp-content/uploads/2023/05/Koh-Larn-Pattaya-W-1.png',
	];
	
	$arr_name = [
		'Monkey Island',
		'Khram Yai Island',
		'Koh Sak',
		'Koh Larn',
		'Rin Island',
		'Koh Phai'
	];
	
	$island = str_replace("-"," ",$_REQUEST['tax-tour-destinations']);
	$title = 'Island Around '.$island;
}
?>




	
<div class="gdlr-core-title-item-title-wrap">
    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="text-transform: capitalize; text-align:center; font-size:40px;">
		<?php echo $title;?>
    </h3>
</div>





<div class="owl-carousel owl-theme">
<?php 
	for($i=0;$i<count($arr_img);$i++)
	{
		?>
		<div class="item">
			<div class="photos">
				<img src="<?php echo $arr_img[$i];?>" width="100%" alt="<?php echo $arr_name[$i];?>">
			</div>
			<h4><?php echo $arr_name[$i];?></h4>
			<a href="#" target="_blank"><button class="butit">View Itinerary</button></a>
		</div>
		<?php
	}
?>
</div>



<script>
$(document).ready(function(){
	  $('.owl-carousel').owlCarousel({
		items:4,
		loop:true,
		margin:10,
		responsiveClass:true,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:6,
				nav:true,
				loop:true
			}
		}
	})
	owl.on('mousewheel', '.owl-stage', function (e) {
		if (e.deltaY>0) {
			owl.trigger('next.owl');
		} else {
			owl.trigger('prev.owl');
		}
		e.preventDefault();
	});
});
</script>