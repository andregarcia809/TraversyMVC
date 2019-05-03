<?php require APPROOT . '/views/include/header.php';?>
<h1><?php echo $data['title']; ?></h1>
<?php require APPROOT . '/views/include/header.php';?>

<ul>
	<?php
	echo $data['post'];
	// foreach($data['posts'] as $post) {
	// 	'<li>' .$post->title. '</li>';
	// }
	?>	
</ul>