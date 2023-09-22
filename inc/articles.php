<?php

 include('inc/connection.php');
 include('classes/Article.php');

 $articleCount = 3;
 for($i = 0; $i<$articleCount;$i++){
    $currentArticle = fetchArticleRow($db, $i);
    printCard($currentArticle);
 }
 
//Function convert to my standard
//category comes in as Case Studies
//categoryClass goes out as case-studies 

function printCard($article){
    echo"
<div class='col-lg-4 col-sm-6'>
    <div class='item " . $article->subCategoryClass . "'>
        <a class='article-link' href='#'></a>
        <a></a>
        <div class='img-container'>
            <a></a>
            <a href='#' class='category btn-tooltip' title='View all: " . $article->subCategory . " / " . $article->category . "'> Careers </a>
            <a class='img standard'>
                <picture>
                    <img src='$article->mainImage' class='img-responsive' alt='" . $article->shortDesc . "'>
                </picture>
            </a>
        </div>
        <div class='block'>
            <h3>
                <a href='#'>" . $article->title . "</a>
                <span class='read-time'>" . $article->readTime . "<span>
            </h3>
            <p>" . $article->articleBody . "</p>
            <a class='btn btn-" . $article->subCategoryClass . "' href='#'> Read More </a>
            <div class='user'>
                <div class='avatar'>
                    <picture>
                        <img src='" . $article->authorAvatar . "' class='img-responsive' alt='" . $article->author . " Avatar'>
                    </picture>
                </div>
                <div class='details'>
                    <strong class='text-primary'>Posted by " . $article->author . "</strong>
                    <br> " . $article->datePosted .  "
                </div>
            </div>
        </div>
    </div>
</div>
";
}

 function fetchArticleRow($_db, $index) {
    try {
        $sql = "SELECT * FROM articles
                ORDER BY date_posted DESC 
                LIMIT 3 OFFSET $index";

        $stmt = $_db->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            $_article = new Article($row);
            return $_article;
        } else {
            echo "No data found.";
            return false;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}




//Deprecated functions for personal reference.

//  //This is just vardumps at the moment.
//  function displayRow($_db, $index){
//     if(fetchArticleRow($_db, $index)){
//         var_dump(fetchArticleRow($_db, $index));
//         echo "<br> <br>";
//         $currentArticle = fetchArticleRow($_db, $index);
//     }else{
//         echo "Problem fetching article rows";
//     }
//  }
