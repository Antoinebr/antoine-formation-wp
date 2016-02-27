<h1> Vidéos de formations </h1>
<p> Sur cette page vous pouvez consulter les vidéos qui vous expliqueront comment utiliser votre site </p>


<?php

$videos = array(
	array(
		"title" => "Je suis le title 1",
		"url" => "https://www.youtube.com/embed/w3FZ7Fh_nMg?rel=0"
	),
	array(
		"title" => "Je suis le title 2",
		"url" => "https://www.youtube.com/embed/w3FZ7Fh_nMg?rel=0"
	)
);



$formation = new videoFormation($videos);

$formation->generateList();

?>



<style>
#wpbody-content{
	margin-top: 40px;
}
.inlineblock{
	display: inline-block;
	vertical-align: top;
}

.formation-video{
	margin-top: 15px;
	margin-right: 10px;
}
</style>
