<?php

/**
 * DATABASE SCHEMA. Description lists acceptable inputs and whether or not is optional.
 * COLUMN NAME:         TYPE:               LIMIT:              DESC:
 * 0.article_id         INT                 N/A                 Auto Incrementing. Do not touch.
 * 1.main_image         VARCHAR[64]         64 characters       Image path to main article image. 
 * 2.short_description  VARCHAR[32]         32 characters       Image alt text for accessibility
 * 3.category           VARCHAR[32]         32 characters       Accepted: "Insights", "Case Studies", "Environmental News", "Careers", "News", "Technologies"
 * 4.sub_category       VARCHAR[32]         32 characters       Accepted: "Software", "It", "Digital", "Telecoms", "Web", "Security", "School".
 * 5.title              VARCHAR[64]         64 characters       Title of the article.
 * 6.read_time          TINYINT             0-255               Number of minutes. LIMIT:255;
 * 7.article_body       VARCHAR[128]        128 characters      Large Article Description.
 * 8.author             VARCHAR[32]         32 characters       Name, such as "Bethany Shakespeare", default: "Netmatters"
 * 9.author_avatar      VARCHAR[64]         64 characters       Image path to authors avatar. default: Netmatters logo.
 * 10.date_posted       Datetime            N/A                 Date posted. Format DD/MM/YYYY, database defaults this entry to todays date.
 * 
 * This schema could be easily passed to a client, (in a more layman friendly version) where they could write their article, and
 * have to provide certain meta info about the article. With this in mind, certain conversions have been made to fit the more
 * appropriate semantics of html/css. These can be found below the constructor.
 * 
 * Certain info is defaulted. See phpmyadmin db schema for details, or read descriptions above.
 * 
 * Instances of Article are created in "articles.php" and their properties are delivered within articles.php - printCard($article)
 * 
 */

class Article
{
    //Data given directly to the article from the database.
    public $id;
    public $mainImage;
    public $shortDesc;
    public $category;
    public $title;
    public $readTime;
    public $articleBody;
    public $author = 'Netmatters';  //Default anonymous posts are display as posted by Netmatters.
    public $authorAvatar = 'img/latest-news/netmatters-ltd-VXAv.png';   //Netmatters default author avatar, in case a user does not have an avatar.
    public $datePosted;
    public $subCategoryClass = 'web';    //Default colour class.
    public $subCategory; //Readable version of the subcategory for accesibility. 

    //Some conversions are done here, from the SQL data to the readable text, and even to a css class (See convertSubCategory)
    public function __construct($row){



        $this->id = $row['article_id'];     
        $this->mainImage = $row['main_image'];
        $this->shortDesc = $row['short_description'];
        $this->category = $row['category'];  
        if($row['sub_category']){$this->subCategoryClass = $this->convertSubCategory($row['sub_category']);}
        if($row['title']){$this->title = $this->trimArticleTitle($row['title']);}
        if($row['read_time']){$this->readTime = $this->generateReadTime($row['read_time']);}
        $this->articleBody = $row['article_body'];
        if($row['author']){$this->author = $row['author'];}
        if($row['author_avatar']){$this->authorAvatar = $row['author_avatar'];}
        $this->datePosted = (new DateTime($row['date_posted']))->format("jS F Y");
        $this->subCategory = $row['sub_category'];
    }

    //This takes the clients readble input, e.g. "Digital Marketing", "Software", and converts them
    //To a lowercase version, containing only the first word; "digital", "software".
    private function convertSubCategory($subCat){
        $splitString = explode(' ',trim($subCat));
        $firstWord = strtolower($splitString[0]);
        return $firstWord;
    }

    
    //Takes read time integer, and appends additional text to the end.
    private function generateReadTime($rt){
        $readTimeText = ($rt . " - MINUTE READ");
        return $readTimeText;
    }

    //We trim the title to 45 characters, and also remove spaces at the end if the cutoff ends in a space.
    private function trimArticleTitle($at){
    $maxLength = 45;
    if (mb_strlen($at) > $maxLength) {
        $trimmedTitle = rtrim(mb_substr($at, 0, $maxLength), " ") . "..."; //rtrim the space if it ends in a space before appending the elipses.
    } else {
        $trimmedTitle = $at;
    }
        return $trimmedTitle;
    }
}