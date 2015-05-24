<?php
$idp = $_GET['idp'];
if (empty($idp)) {
	$idp = 1;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Oana Resume</title>
		<link rel="stylesheet" href="oanacv.css" type="text/css" />
<?php
if($idp==1){
?>
		<link href="jquery.thumbnailScroller.css" rel="stylesheet" type="text/css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="jquery-ui-1.8.13.custom.min.js"></script>
<?php
}
?>

<?php
if($idp==2){
?>		
		<link rel="stylesheet" href="montoolsscrollgalery/demo.css" type="text/css" />
		<script type="text/javascript" src="montoolsscrollgalery/mootools-core-1.3.1-full-nocompat.js"></script>
		<script type="text/javascript" src="montoolsscrollgalery/mootools-1.3.1.1-more.js"></script>
		<script type="text/javascript" src="montoolsscrollgalery/scrollGallery.js"></script>
		<script type="text/javascript">
			window.addEvent('domready', function() {
				var scrollGalleryObj = new scrollGallery();
			});
		</script>
		<script src="lightbox/js/jquery-1.7.2.min.js"></script>
		<script src="lightbox/js/lightbox.js"></script>
		<link href="lightbox/css/lightbox.css" rel="stylesheet" />
<?php
}
?>
	</head>
	<body>
		<div id="wrapper">
			<div id="resume_header">
				<div id="resume_menu">
					<ul>
						<li>
							<a href="index.php?idp=1">Home</a>
						</li>
						<li>
							<a href="index.php?idp=2">Work</a>
						</li>
						<li>
							<a href="index.php?idp=3">Resume</a>
						</li>
					</ul>
				</div>
			</div>

			<?php
if($idp==1){
			?>

			<br />
			<div id="resume_contact_me"> Contact me at: oana_harcau@yahoo.com </div>
			<br /><br />
			<div id="autocad">
			<div id="autocadscris">
			<b>Autocad</b>
			</div>

			</div>
			<div id="website">
			<div id="websitescris">
			<b>Websites</b>
			</div>

			</div>
			<div id="autocadwebsite">

			</div>
			<div id="studiomax">
			<div id="studiomaxscris">
			3D Studio Max
			</div>

			</div>
			<div id="print">
			<div id="printscris">
			Print
			</div>

			</div>
			<div id="studiomaxprint">

			</div>
			<div id="slideshowbackground">
			<div id="tS2" class="jThumbnailScroller">
			<div class="jTscrollerContainer">
			<div class="jTscroller">
			<a href="#"><img src="images/slideshow/slideshow1.png" /></a>
			<a href="#"><img src="images/slideshow/slideshow2.png" /></a>
			<a href="#"><img src="images/slideshow/slideshow3.png" /></a>
			<a href="#"><img src="images/slideshow/slideshow4.png" /></a>
			<a href="#"><img src="images/slideshow/slideshow5.png" /></a>
			<a href="#"><img src="images/slideshow/slideshow6.png" /></a>
			</div>
			</div>
			<a href="#" class="jTscrollerPrevButton"></a>
			<a href="#" class="jTscrollerNextButton"></a>
			</div>
			</div>

			<?php
			}elseif($idp==2){
			?>
			<div id="worksectiontitle">
				House Project
			</div>
			<div id="workholepicturebackground">
				
					<div id="gallery">

						
						<div id="scrollGalleryFoot">
							<div id="imagearea">
								<div id="imageareaContent">
									<a href="images/fotos/image1.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image1.jpg" alt="" /></a>
									<a href="images/fotos/image2.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image2.jpg" alt="" /></a>
									<a href="images/fotos/image3.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image3.jpg" alt="" /></a>
									<a href="images/fotos/image4.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image4.jpg" alt="" /></a>
									<a href="images/fotos/image5.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image5.jpg" alt="" /></a>
									<a href="images/fotos/image6.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image6.jpg" alt="" /></a>
									<a href="images/fotos/image7.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image7.jpg" alt="" /></a>
									<a href="images/fotos/image7.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image8.jpg" alt="" /></a>
									<a href="images/fotos/image9.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image9.jpg" alt="" /></a>
									<a href="images/fotos/image10.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image10.jpg" alt="" /></a>
									<a href="images/fotos/image11.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image11.jpg" alt="" /></a>
									<a href="images/fotos/image12.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image12.jpg" alt="" /></a>
									<a href="images/fotos/image13.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image13.jpg" alt="" /></a>
									<a href="images/fotos/image14.jpg" rel="lightbox[roadtrip]"><img  src="images/fotos/image14.jpg" alt="" /></a>

								</div>
							</div>
						</div>
						<div id="scrollGalleryHead">
							<div id="thumbarea">
								<div id="thumbareaContent">
									<img  src="images/fotos/small_image1.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image2.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image3.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image4.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image5.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image6.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image7.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image8.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image9.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image10.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image11.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image12.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image13.jpg" width="120" height="80" alt="" />
									<img  src="images/fotos/small_image14.jpg" width="120" height="80" alt="" />
								</div>
							</div>
						</div>

					</div>
				
			</div>
			<?php
			}elseif($idp==3){
			?>

			<div id="resumescrisleft">
				Name
				<br />
				Oana Cosmina Harcau
				<br />
				<br />
				About
				<br />
				Hello, my name is Oana Cosmina Harcau and I’m an
				<br />
				engeneer after I gratueted
				<br />
				Polytechnic University of Bucharest .
				<br />
				<br />
				Education
				<br />
				Highschool: National College "Matei Basarab"
				<br />
				University: Polytechnic University of Bucharest
				<br />
				<br />
				Courses, certificates and awards
				<br />
				At ATC (Autodesk Authorized Training Center (ATC):
				<br />
				&nbsp; &nbsp; - Autocad level I-2D
				<br />
				&nbsp; &nbsp; - Autocad level II-3D
				<br />
				&nbsp; &nbsp; - Intensive course 3D Studio Max + Vray
				<br />
				<br />
				Foreign languages
				<br />
				English (Advanced)
				<br />
				<br />
				Professional experience
				<br />
				Engineer, Autocad Drafting, SC VEGRA SRL, Bucharest
				<br />
				<br />
				Responsibilities:
				<br />
				&nbsp; &nbsp; - Achievement 2D and 3D building plans
				<br />
				&nbsp; &nbsp; - Floor plan drawings from paper sketches or scanned paper and
				<br />
				&nbsp; &nbsp; drawings to 2D
				<br />
				&nbsp; &nbsp; - Layer structure - using a structure in accordance with your
				<br />
				&nbsp; &nbsp; specifications
				<br />
				&nbsp; &nbsp; - Object representation - walls, doors, windows and other objects
				<br />
				&nbsp; &nbsp; - Geometric correspondence between floor plans, sections and facades
				<br />
				&nbsp; &nbsp; with different companies in the Netherlands and France
				<br />
				&nbsp; &nbsp; - Achievment template sites
				<br />
				&nbsp; &nbsp; - Flyers, photo modifications, banners
				<br />
				&nbsp; &nbsp; - Graphic magazine pages, cover book graphics
				<br />
				&nbsp; &nbsp; - Book achievement pages, layout page, pictures modifications in
				<br />
				&nbsp; &nbsp; the book pages, book design, cover book design
				<br />
				&nbsp; &nbsp; - Promotion of the “Archibus” product by email campaign
				<br />
				Layout for :
				<br />
				&nbsp; &nbsp; http://3dcadvegra.com
				<br />
				&nbsp; &nbsp; http://www.archibus.ro
				<br />
			</div>
			<div id="resumescrisright">
				<img src="images/oanapoza.png">
				<br />
				<br />
				Bucharest, Romania
				<br />
				<br />
				Email
				<br />
				<br />
				&nbsp; &nbsp; oana_harcau@yahoo.com
				<br />
				<br />
				Specialties
				<br />
				<br />
				&nbsp; &nbsp; autocad, photoshop,
				<br />
				&nbsp; &nbsp; 3d studio max
				<br />
				<br />
				Skills
				<br />
				<br />
				Advanced level:
				<br />
				&nbsp; &nbsp; - Adobe Photoshop
				<br />
				&nbsp; &nbsp; - Autocad
				<br />

				Medium Level:
				<br />
				&nbsp; &nbsp; - Revit Architecture 2010
				<br />
				&nbsp; &nbsp; - 3D Studio Max
				<br />
				&nbsp; &nbsp; - Illustrator
				<br />
				&nbsp; &nbsp; - Indesign
				<br />

				Satisfied Level:
				<br />
				&nbsp; &nbsp; - Html, Css
				<br />
				&nbsp; &nbsp; - Microsoft Word, Microsoft
				<br />
				&nbsp; &nbsp; - Excel,Microsoft Outlook
				<br />
			</div>
			<?php
			}
			?>

			<div id="spaceafterslideshow">
				Contact
			</div>
			<div id="contactbackground">

			</div>
		</div>
		<script>
			jQuery.noConflict();
			(function($) {
				window.onload = function() {
					$("#tS2").thumbnailScroller({
						scrollerType : "hoverPrecise",
						scrollerOrientation : "horizontal",
						scrollSpeed : 2,
						scrollEasing : "easeOutCirc",
						scrollEasingAmount : 600,
						acceleration : 4,
						scrollSpeed : 800,
						noScrollCenterSpace : 10,
						autoScrolling : 0,
						autoScrollingSpeed : 2000,
						autoScrollingEasing : "easeInOutQuad",
						autoScrollingDelay : 500
					});
				}
			})(jQuery);
		</script>
		<script src="jquery.thumbnailScroller.js"></script>
	</body>
</html>