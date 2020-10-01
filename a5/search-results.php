<?php 
include_once "/home/17js46/public_html/a5/inc/functions.php"; 
include_once "/home/17js46/public_html/a5/inc/header.php"; 
include_once "/home/17js46/public_html/a5/inc/footer.php";
include_once "/home/17js46/public_html/a5/inc/search.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php print_head(" A5 | Search Results","") ?>

<body>

	<?php print_header() ?>

	<main>
	
	<h1>Search Results</h1>
	
	<?php 
	$trim_search = trim($_GET["search"]);
	$result = search_for_term($trim_search); 
	$num_result = count($result);
	if  ($num_result == 0) {
	echo "Sorry, but there were no matches for \"{$trim_search}\"." ;
	}
	else {
		echo "Your search for \"{$trim_search}\" produced {$num_result} result(s).";
		
		foreach($result as $value){
			echo "<li>". "<a href=\"{$value[CONTENT_LINK]}\">{$value[CONTENT_TITLE]}</a>". "<br>";
		}	
	}
	?>
	
	</main>
	
	<?php print_footer() ?>


</body>

</html>
