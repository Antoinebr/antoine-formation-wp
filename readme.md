# Antoine formation wp

Plugin WordPress permetant de gérer des videos de formation dans l'admin de WP.

![demo](http://img15.hostingpics.net/pics/575237Capturedecran20160302a105151.png)

## Utilisation

Pour ajouter de nouvelles vidéos il suffit de modifier l'array dans le fichier admin.php

```php

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

```
