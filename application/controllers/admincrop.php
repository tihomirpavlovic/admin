<?php 
	class AdminCropController extends Core
	{

		function init(){
			if(!Auth::check() && Router::$action != "login") Auth::loginPage();
			$this->setLayout('admin');
			$this->view->pageTitle = "Crop Image";
		}

		function indexAction(){
			$this->view->imageSrc = $_GET['image'];
		}

		function saveAction(){
			$this->disableView();

			if( empty($_POST['coords']) || !isset($_POST['image_src']) ){
				Alert::set('error',"Parameter missing");
				return false;
			}
			
			$coords = json_decode(html_entity_decode($_POST['coords']));
			$srcPath = Path::appRoot("public/".$_POST['image_src']);
			$parts = pathinfo($srcPath);

			
			if ($parts['extension'] == 'gif') {
				$srcImage =	imagecreatefromgif($srcPath);
			}
			else if ($parts['extension'] == 'png') {
				$srcImage =	imagecreatefrompng($srcPath);
			}
			else if ($parts['extension'] == 'bmp') {
				$srcImage =	imagecreatefromwbmp($srcPath);
			}
			else if ($parts['extension'] == 'jpg'  ||  $parts['extension'] == 'jpeg') {
				$srcImage = imagecreatefromjpeg($srcPath);
			}
			else{	
				Alert::set('error',"Format not supported");
				return false;			
			}

			if ($_POST['gallery']) {
				$phoneImage = ImageCreateTrueColor(($coords->w / (100 / 50)), ($coords->h / (100 / 50)));
				$image = explode("/", $_POST['image_src']);

				$phonePath = Path::appRoot("public/uploads/gallery/phone/".$image[count($image) - 1]);

				imagecopyresampled($phoneImage, $srcImage, 0, 0, $coords->x, $coords->y, ($coords->w / (100 / 50)), ($coords->h / (100 / 50)), $coords->w, $coords->h);
				imagejpeg($phoneImage, $phonePath, 85);
			}
			
			$dstImage = ImageCreateTrueColor($coords->w, $coords->h);
			$dstPath = $srcPath;

			imagecopyresampled($dstImage, $srcImage, 0, 0, $coords->x, $coords->y, $coords->w, $coords->h, $coords->w, $coords->h);
			imagejpeg($dstImage, $dstPath, 85);

			Alert::set('success',"Successfully croped");
			Router::go($_POST['redirect_uri']);
		}

	}
?>