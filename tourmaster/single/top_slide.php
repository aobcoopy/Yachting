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
		[
			'name' => 'Koh Khai',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Khai-900x500-1.jpeg'
		],
		[
			'name' => 'Racha Island',
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
			'name' => 'Koh Bon',
			'photo' => '' 
		],
		[
			'name' => 'Rang Yai Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Rang-Yai-Island-900x500-copy.jpg'
		],
		[
			'name' => 'Koh Kaeo',
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
		[
			'name' => 'Phagnan Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Phangan4900x500.jpg'
		],
		[
			'name' => 'Koh Tao',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-nangyuan-Koh-Tao-900x500-1.jpg'
		],
		[
			'name' => 'Ang Thong Marin Park',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/mu-ko-ang-thong-national-park-thailand900x500.jpg'
		],
		[
			'name' => 'Koh Madsum',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-madsum-900x500-2.jpeg'
		],
		[
			'name' => 'Koh Wua Ta Lap',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-wua-ta-lap-4.jpg'
		],
		[
			'name' => 'Koh Som',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/koh-som-1.jpg'
		],
		[
			'name' => 'Monkey Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Ko-Klet-Kaeo2.jpeg'
		],
		[
			'name' => 'Khram Yai Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Khram1-900x500-1.jpeg'
		],
		[
			'name' => 'Koh Sak',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Sak-Original-size-900x500-1.jpeg'
		],
		[
			'name' => 'Koh Larn',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Larn-Pattaya-900x500-2.png'
		],
		[
			'name' => 'Rin Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Rin-3.jpeg'
		],
		[
			'name' => 'Koh Phai',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Phai.jpg'
		],
		[
			'name' => 'Phi Phi Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Phi-Phi-Krabi-900x500-1.jpg'
		],
		[
			'name' => 'Koh Hong',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-hong-krabi-2-900x500-1.jpg'
		],
		[
			'name' => 'Railay Beach',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/aerial-view-railay-beach-krabi-thailand900x500.jpg'
		],
		[
			'name' => 'Thale Waek Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Talay-waek-krabi-thailand1920x1325.jpg'
		],
		[
			'name' => 'Chicken Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Chicken-Island-Krabi900X500.jpg'
		],
		[
			'name' => 'Matang Ming Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Ko-Ma-Tang-Ming-View-and-Poda-Island-Beach-1024x683-1.jpg'
		],
		[
			'name' => 'Poda Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/poda-island-960x530-1.jpg'
		],
		[
			'name' => 'Lao Lading Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/aerial-view-lao-lading-island-krabi-thailand-2-copy.jpg'
		],
		[
			'name' => 'Pakbia Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/aerial-views-koh-phak-bia-krabi-thailand-4k-video-october-10-2021.jpg'
		],
		[
			'name' => 'Tub Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-tup-900x500-1.jpg'
		],
		[
			'name' => 'Bamboo Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Bamboo.Island.jpg'
		],
		[
			'name' => 'James Bond Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/james-bond-island-900x500-1.jpg'
		],
		[
			'name' => 'Panyi Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/aerial-view-panyee-island-phang-nga-thailand900x500.jpg'
		],
		[
			'name' => 'Yao Noi , Yao Yai island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Yao-Yai-900x500-1.jpeg'
		],
		[
			'name' => 'Similan Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Similan-island-2-900x500-1.jpg'
		],
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
			'name' => 'Racha Island',
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
			'name' => 'Koh Bon',
			'photo' => '' 
		],
		[
			'name' => 'Rang Yai Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Rang-Yai-Island-900x500-copy.jpg'
		],
		[
			'name' => 'Koh Kaeo',
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
			'name' => 'Ang Thong Marin Park',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/mu-ko-ang-thong-national-park-thailand900x500.jpg'
		],
		[
			'name' => 'Koh Madsum',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-madsum-900x500-2.jpeg'
		],
		[
			'name' => 'Koh Wua Ta Lap',
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
		[
			'name' => 'Monkey Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Ko-Klet-Kaeo2.jpeg'
		],
		[
			'name' => 'Khram Yai Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Khram1-900x500-1.jpeg'
		],
		[
			'name' => 'Koh Sak',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Sak-Original-size-900x500-1.jpeg'
		],
		[
			'name' => 'Koh Larn',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Larn-Pattaya-900x500-2.png'
		],
		[
			'name' => 'Rin Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Rin-3.jpeg'
		],
		[
			'name' => 'Koh Phai',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Phai.jpg'
		],
		
	];
	
	
	$island = str_replace("-"," ",$_REQUEST['tax-tour-destinations']);
	$title = 'Island Around '.$island.' City';
	$des = 'Pattaya is a vibrant city that combines exhilarating nightlife with thrilling water activities, making it an ideal yachting destination. The crystal-clear waters are perfect for jet-skiing, parasailing, and diving. After dark, Pattaya comes alive with its dazzling array of bars, clubs, and shows. Indulge in luxury and excitement in Pattaya.';
}
elseif($_REQUEST['tax-tour-destinations']=='krabi')
{
	$arr_img = [
		[
			'name' => 'Phi Phi Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Phi-Phi-Krabi-900x500-1.jpg'
		],
		[
			'name' => 'Koh Hong',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-hong-krabi-2-900x500-1.jpg'
		],
		[
			'name' => 'Railay Beach',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/aerial-view-railay-beach-krabi-thailand900x500.jpg'
		],
		[
			'name' => 'Thale Waek Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Talay-waek-krabi-thailand1920x1325.jpg'
		],
		[
			'name' => 'Chicken Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Chicken-Island-Krabi900X500.jpg'
		],
		[
			'name' => 'Matang Ming Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Ko-Ma-Tang-Ming-View-and-Poda-Island-Beach-1024x683-1.jpg'
		],
		[
			'name' => 'Poda Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/poda-island-960x530-1.jpg'
		],
		[
			'name' => 'Lao Lading Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/aerial-view-lao-lading-island-krabi-thailand-2-copy.jpg'
		],
		[
			'name' => 'Pakbia Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/aerial-views-koh-phak-bia-krabi-thailand-4k-video-october-10-2021.jpg'
		],
		[
			'name' => 'Tub Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-tup-900x500-1.jpg'
		],
		[
			'name' => 'Bamboo Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Bamboo.Island.jpg'
		],
	];
	
	
	$island = str_replace("-"," ",$_REQUEST['tax-tour-destinations']);
	$title = 'Island Around '.$island;
	$des = 'Krabi, a yachting destination in Thailand, is a paradise of towering cliffs, serene beaches, and emerald waters, perfect for indulging in luxury travel experiences. Explore this tropical haven with Aqua Retreat and enjoy unrivaled comfort and relaxation.';
}
elseif($_REQUEST['tax-tour-destinations']=='phang-nga')
{
	$arr_img = [
		[
			'name' => 'James Bond Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/james-bond-island-900x500-1.jpg'
		],
		[
			'name' => 'Panyi Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/aerial-view-panyee-island-phang-nga-thailand900x500.jpg'
		],
		[
			'name' => 'Yao Noi , Yao Yai island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Koh-Yao-Yai-900x500-1.jpeg'
		],
		[
			'name' => 'Similan Island',
			'photo' => 'http://inspiringyachting.com/wp-content/uploads/2023/06/Similan-island-2-900x500-1.jpg'
		],
		
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
		//items:4,
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