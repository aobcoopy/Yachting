<?php $url = 'http://inspiringyachting.com/wp-content/plugins/tourmaster/single/';?>
<link rel="stylesheet" href="<?php echo $url;?>owl/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo $url;?>owl/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo $url;?>css/style_search.css">

<script src="<?php echo $url;?>owl/jquery.min.js"></script>
<script src="<?php echo $url;?>owl/owl.carousel.min.js"></script>

<?php 
$title = '';
$arr_img = array();
$arr_name = array();
$des = '';
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
	$des = '';
}
elseif($_REQUEST['tax-tour-destinations']=='phuket')
{
	$arr_img = [
		[
			'name' => 'Koh Khai',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Khai-900x500-1.jpeg'
		],
		[
			'name' => 'Racha',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Racha-Island2-900x500-2.jpg'
		],
		[
			'name' => 'Koh Maiton',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Maiton-900x500-1.jpeg'
		],
		[
			'name' => 'Coral Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Coral-Island-900x500-1.jpg'
		],
		[
			'name' => 'Rang Yai Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Rang-Yai-Island-900x500-copy.jpg'
		],
		[
			'name' => 'Koh Kaew',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Kaew900x500.jpg'
		],
		[
			'name' => 'Koh Maphrao',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Coconut-island-900x500-1.jpg'
		],
		[
			'name' => 'Promthep cape',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/promthep-cape-viewpoint-sunset-phuket-thailand-900x500-1.jpg'
		],
	];

	$island = str_replace("-"," ",$_REQUEST['tax-tour-destinations']);
	$title = 'Island Around '.$island;
	$des = "Phuket, the jewel of the Andaman, is a yachting paradise with its crystal-clear waters, secluded bays, and stunning beaches. Aqua Retreat offers the ultimate luxury experience for those seeking an elevated lifestyle on the high seas. Come explore this tropical paradise by yacht and make memories that will last a lifetime.";
	
}
elseif($_REQUEST['tax-tour-destinations']=='koh-samui')
{
	$arr_img = [
		[
			'name' => 'Phagnan Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Phangan4900x500.jpg'
		],
		[
			'name' => 'Koh Tao',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-nangyuan-Koh-Tao-900x500-1.jpg'
		],
		[
			'name' => 'Ang Thong Marin park',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/mu-ko-ang-thong-national-park-thailand900x500.jpg'
		],
		[
			'name' => 'Koh Mad Sum',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-madsum-900x500-2.jpeg'
		],
		[
			'name' => 'Koh Wua ta Lap',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-wua-ta-lap-4.jpg'
		],
		[
			'name' => 'Koh Som',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/koh-som-1.jpg'
		],
	];
	
	
	$island = str_replace("-"," ",$_REQUEST['tax-tour-destinations']);
	$title = $island.' Island';
	$des = 'Samui, a luxurious yachting destination in Thailand, offers an idyllic blend of natural beauty, adventure, and relaxation. Explore secluded beaches, hike lush rainforests, and savor exquisite cuisine on this tropical island paradise.';
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
	$title = 'Island Around '.$island.' City';
	$des = 'Pattaya is a vibrant city that combines exhilarating nightlife with thrilling water activities, making it an ideal yachting destination. The crystal-clear waters are perfect for jet-skiing, parasailing, and diving. After dark, Pattaya comes alive with its dazzling array of bars, clubs, and shows. Indulge in luxury and excitement in Pattaya.';
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
	$des = 'Krabi, a yachting destination in Thailand, is a paradise of towering cliffs, serene beaches, and emerald waters, perfect for indulging in luxury travel experiences. Explore this tropical haven with Aqua Retreat and enjoy unrivaled comfort and relaxation.';
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
	$des = "Phang Nga is beautiful island offers stunning views and crystal clear waters that are perfect for sailing enthusiasts. With its serene atmosphere and tranquil surroundings, Phang Nga island is truly a paradise for those who love to sail. Whether you're a seasoned sailor or a beginner, this destination has something to offer for everyone. ";
}




include "top_description.php";
//print_r($arr_img);
?>




	
<div class="gdlr-core-title-item-title-wrap">
    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: capitalize; text-align:center; font-size:40px;">
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
				<img src="<?php echo $arr_img[$i]['photo'];?>" width="100%" alt="<?php echo $arr_img[$i]['name'];?>">
			</div>
			<h4 class="island_title"><?php echo $arr_img[$i]['name'];?></h4>
			<a href="#" target="_blank"><button class="butit">View Itinerary</button></a>
		</div>
		<?php
	}
?>

</div>
<div class="owl-nav">
        <div class="owl-prev owlbtn customPrevBtn"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
        <div class="owl-next owlbtn customNextBtn"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
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
		dots:false,
		//lazyLoad: true,
		responsive:{
			0:{
				items:1,
				//nav:true
			},
			600:{
				items:3,
				//nav:false
			},
			1000:{
				items:6,
				//nav:true,
				//loop:true
			}
		}
	});
	var owl = $('.owl-carousel');
	owl.owlCarousel();
	// Go to the next item
	$('.customNextBtn').click(function() {
		owl.trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.customPrevBtn').click(function() {
		// With optional speed parameter
		// Parameters has to be in square bracket '[]'
		owl.trigger('prev.owl.carousel', [300]);
	});
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