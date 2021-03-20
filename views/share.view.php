<?php require("header.php") ?>


<div id="main-content">

<div id="main-content-share-code">
    <form method="post" autocomplete="off">
        <textarea name="code" id="code" placeholder="Entrer votre code" ><?= e($code); ?></textarea>

        <div class="btn-group nav">
        <a href="share.php" class="btn btn-danger">Tout effacer</a>
        <input type="submit" name="save" class="btn btn-primary" value="Enregistrer"/>
        </div>
        
    </form>
</div>
</div>


<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/tabby.js"></script>
<script>
    $("#code").tabby();
    $("#code").height( $(window).height() - 50 );
</script>

</body>
</html>
