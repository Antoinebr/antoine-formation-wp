# Antoine formation wp

Plugin WordPress permetant de gérer des videos de formation dans l'admin de WP.

![demo](http://img15.hostingpics.net/pics/575237Capturedecran20160302a105151.png)

## Utilisation

Pour ajouter de nouvelles vidéos il suffit d'utiliser le Hook afwp-videos-data et de retourner dans un array les infos de vos propres videos.

Démo :

```php
//  à ajouter dans functions.php 

function my_own_video(){
	return $videos = array(
		array(
			"title" => "Je suis le title Hello",
			"url" => "https://www.youtube.com/embed/w3FZ7Fh_nMg?rel=0"
		),
		array(
			"title" => "Je suis le title 2",
			"url" => "https://www.youtube.com/embed/w3FZ7Fh_nMg?rel=0"
		)
	);

}
add_filter('afwp-videos-data','my_own_video');


```
