<?php function simpleCard($title, $description) { ?>
<div class="card">
    <div class="card-content">
        <div class="content">
        <h3>
            <?php echo $title; ?>
        </h3>
        <p>
            <?php echo $description; ?>
        </p>
        </div>
    </div>
</div>
<?php } ?>