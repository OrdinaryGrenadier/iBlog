﻿<link rel="stylesheet" href="assets/stylesheets/newArticle.css">

<div class="sideHeaderDiv">
    <label class="sideHeader">Neuen Beitrag erfassen</label>
</div>

<form action="index.php?saveArticle" method="post" class="newArticle">

    <?php if(Session::inputfalse()) : ?>
        <div class="infoDiv">
            <span onclick="this.parentElement.style.display='none';">&times;</span>
            <textarea class="failRegistration" rows="1"><?php echo $_SESSION['error_input'] ?></textarea>
        </div>
    <?php endif ?>

    <div class="addArticleDiv">
        <input id="theme" type="text" name="theme" placeholder="Thema des Beitrags" value=<?php echo $_REQUEST['theme']?> >
        <input id="title" type="text" name="title" placeholder="Titel des Beitrags" value=<?php echo $_REQUEST['title']?>>
    </div>

    <div class="singleArticle">
        <textarea id="widgEditor" class="widgEditor" name="widgEditor" ><?php echo $_REQUEST['widgEditor']?></textarea>



        <button>Speichern</button>


    </div>
    
</form>
