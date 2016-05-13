<?php
class Comment {
  public static function saveComment($text){
    global $dbh;

    $stmt = $dbh->prepare("INSERT INTO comment (user_id, article_id, date, text) VALUES (:user_id, :article_id, :date, :text)");

    $stmt->execute(array(
        'user_id' => Session::getuserid(),
        'article_id' => $_SESSION['article_id'],
        'date' => "01.01.1970",
        'text' => $text

    ));
  }
  public static function getAllComments(){
    global $dbh;
    $article_id = $_SESSION['article_id'];

    return $dbh->query("SELECT * FROM comment WHERE article_id=$article_id")->fetchAll(PDO::FETCH_ASSOC);
  }
}
?>
