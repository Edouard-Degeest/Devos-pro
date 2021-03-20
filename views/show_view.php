<?php require("header.php") ?>


<div id="main-content">
<div id="main-content-share-code">
        <pre class="prettyprint linenums"><?= e($data->code); ?> </pre>
         <div class="btn-group nav">
        <a  href="share.php?id=<?= $_GET['id'] ?>" class="btn btn-secondary"
        >Modifier</a>
        <a href="share.php" class="btn btn-primary">Nouveau</a>

        
        </div>
</div>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/google-code-prettify/prettify.js"></script>
<script>
        prettyPrint();
</script>


</body>
</html>
