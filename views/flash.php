<?php 

if(isset($_SESSION['notification']['message'])): ?>
<div class="alert alert-<?= $_SESSION['notification']['type'] ?>">
<h4><?= $_SESSION['notification']['message']?></h4>
</div>

<?php $_SESSION['notification'] = []; ?>
<?php endif;

