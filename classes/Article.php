<?php

class Article
{
    public $id;
    public $mainImage;
    public $category;
    public $title;
    public $readTime;
    public $articleBody;
    public $author = 'Netmatters';
    public $authorAvatar = 'img/latest-news/netmatters-ltd-VXAv.png';
    public $datePosted;


    public function __construct($row){
        $this->id = $row['article_id'];
        $this->mainImage = $row['main_image'];
        $this->category = $row['category'];
        $this->title = $row['title'];
        $this->readTime = $row['read_time'];
        $this->articleBody = $row['article_body'];
        //If author/AuthorAvatar exist, we'll replace the default values.
        if($row['author']){$this->author = $row['author'];}
        if($row['author_avatar']){$this->authorAvatar = $row['author_avatar'];}
        $this->datePosted = $row['date_posted'];
    }
}