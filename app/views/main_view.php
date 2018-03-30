<?php


?>


<div class="card mb-3">
    <img height = "500px" class="card-img-top" src="../../files/upload/<?php echo $page[0]['img']; ?>">
    <div class="card-body">
        <h5 class="card-title"><?php echo $page[0]['title']; ?></h5>
        <p class="card-text"><?php echo $page[0]['content']; ?></p>
        <p class="card-text"><small class="text-muted">Last updated <?php echo $page[0]['date']; ?></small></p>
    </div>
</div>
<?php //foreach ($page as) ?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?php echo $page[0]['title']; ?></h5>
        <p class="card-text"><?php echo $page[0]['content']; ?></p>
        <p class="card-text"><small class="text-muted">Last updated <?php echo $page[0]['date']; ?></small></p>
    </div>
    <img class="card-img-bottom" src="../../files/upload/<?php echo $page[0]['img']; ?>" alt="Card image cap">
</div>
