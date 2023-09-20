<?php
/**
 * From top to bottom, these are the pieces of data we need to create an article to be displayed on the netmatters homepage.
 * 
 * COLUMN NAME:         TYPE:               LIMIT:              DESC:
 * 0.article_id         INT                 N/A                 Auto Incrementing
 * 1.Main Image         VARCHAR[50]         50 characters       Image path
 * 2.Category           VARCHAR[32]         32 characters       Text such as "Career", "Case Studies", "Environmental News".
 * 3.Title              VARCHAR[32]         32 characters       Title of the article.
 * 4.Read-Time          TINYINT             0-255               Number of minutes. LIMIT:255;
 * 5.Article Body       TEXT                NONE                Large Article Description - WARNING: No text limit.
 * 6.Author             VARCHAR[32]         32 characters       Name, such as "Bethany Shakespeare", default: "Netmatters"
 * 7.Author Avatar      VARCHAR[50]         50 characters       Image path
 * 8.Date posted        Date                N/A                 Date posted. Format DD/MM/YYYY
 * 
 * Colour of buttons/tooltip will be a result of Category, with spaces converted to hyphons.
 * and text fully lower-case. E.g.  "Case Studies" = ".case-studies
 * Colours are stored in SASS associated with each of these categories. If a new category is added, it will default to #926fb1
 * This is the default color for Web design on the page, and keeps consistency.
 */

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
    <div class='item " . $article->category . "'>
        <a class='article-link' href='#'></a>
        <a></a>
        <div class='img-container'>
            <a></a>
            <a href='#' class='category btn-tooltip' title='View all: Web Design / Careers'> Careers </a>
            <a class='img standard'>
                <picture>
                    <img src='$article->mainImage' class='img-responsive' alt='Receptionist Vacancy Norfolk'>
                </picture>
            </a>
        </div>
        <div class='block'>
            <h3>
                <a href='#'>" . $article->title . "</a>
            </h3>
            <p>Salary Range £21,000-£23,000 per annum Hours 40 hours per week, Mon - Fri Location Wymondham, Norfol...</p>
            <a class='btn btn-" . $article->category . "' href='#'> Read More </a>
            <div class='user'>
                <div class='avatar'>
                    <picture>
                        <img src='" . $article->authorAvatar . "' class='img-responsive' alt='Bethany Shakespeare'>
                    </picture>
                </div>
                <div class='details'>
                    <strong class='text-primary'>Posted by Bethany Shakespeare</strong>
                    <br> 14th July 2023
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
