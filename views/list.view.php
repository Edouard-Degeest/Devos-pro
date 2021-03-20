<?php include("header.php");
include("includes/functions.php");
include("filters/auth_filter.php");
?>


<div id="main-content">

<div class="container">
       <h1>Liste des utilisateurs</h1>
       <br>
       <?php foreach (array_chunk($users, 4) as $user_set): ?>

       <div class="row users">
       <?php foreach ($user_set as $user): ?>

      

            <div class="col-md-3 user-block">
            <?php
            if(!empty($users['img']))
            {
            ?>
             <img src="/users/<?php echo $users['img'];?>" width="150">
            <?php
            }
            ?> 
        <br>
            <h4 class="user-block-username">
                <a href="profile.php?id=<?= $user->id ?>">
                <?= e($user->pseudo) ?></a>
            </h4>
            </div>
            <br>
        <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
        <div id="pagination"><?= $pagination ?></div>
</div>
</div>
