<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 23/07/18
 * Time: 09:50
 */

class Post
{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [

    new Post('My First Post', 'JW', true),
    new Post('My Second Post', 'JW', true),
    new Post('My Third Post', 'me', true),
    new Post('My Fourth Post', 'not me', false)


];



/*Arrayfilter: filter down an array of items/objects */

$unPublishedPosts = array_filter($posts, function ($post) {

    return ! $post->published;

});

//var_dump($unPublishedPosts);

//Published version
$publishedPosts = array_filter($posts, function ($post) {

    return $post->published;

});



/*Array map: filter and change return value*/

$modified = array_map(function($post) {

    $post->published = true;

    return $post;

    //return (array) $post;

    //return ['title' => $post->title];

}, $posts);

var_dump($modified);




/*Array column: return a specific attribute*/


//with arrayMap
$titles = array_map(function($post) {

    return $post->title;

}, $posts);

//with arrayColumn
$authors = array_column($posts, 'author');

//setting up a key
$authors = array_column($posts, 'author', 'title');

var_dump($authors);





/*foreach vs. arrayMap*/

//works fine but ehh
foreach ($posts as $index => $post)
{

    $posts[$index] = (array) $post;

}

//omnomnom
$posts = array_map(function ($post){

    return (array) $post;

}, $posts);



//var_dump($unPublishedPosts);
//var_dump($publishedPosts);
var_dump($posts);
