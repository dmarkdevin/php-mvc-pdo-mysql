 
 <?php  


 
function e($sData){
	$id=(double)$sData*525325.24;
	return base64_encode($id);
}

function d($sData){
	$url_id=base64_decode($sData);
	$id=(double)$url_id/525325.24;
	return $id;
}


function redirect($location=''){
	if(isset($location)):
		header('Location: '.URL_ROOT.$location);
	endif;
}

 