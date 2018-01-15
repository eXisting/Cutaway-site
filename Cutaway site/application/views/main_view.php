<div id="technologies-slider" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">

        <li data-target="#technologies-slider" data-slide-to="0" class="active"></li>

        <?php

            $imagesCount = count($data['images']);

            for($i = 1; $i < $imagesCount; $i++)
            {
        ?>

            <li data-target="#technologies-slider" data-slide-to="<?php echo $i; ?>"></li>

        <?php
            }
        ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
            $isActiveSet = false;

            foreach ($data['images'] as $source)
            {
        ?>

            <div class="<?php echo $isActiveSet ? 'item' : "item active"; ?>">
                <img class="gallery-img" src="<?php echo $source?>">
            </div>

        <?php
                $isActiveSet = true;
            }
        ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#technologies-slider" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#technologies-slider" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>