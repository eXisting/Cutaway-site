
<h1>Experience</h1><br>

<div class="row">
<?php

    foreach ($data['projects'] as $project)
    {
        $descriptionElements = explode(';',$project['Description']);
?>
        <div class="panel panel-primary techno">
            <div class="panel-heading">
                <p class="projects-headers">
                    <?php echo $project['Year']; ?>
                </p>
            </div>
            <div class="panel-body">
                <p class="projects-headers">Description:</p>
                <div id="header-description">

                    <?php
                    foreach ($descriptionElements as $element)
                    {
                    ?>
                        <ul>
                            <li>
                                <?php
                                echo $element . ';';
                                ?>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>

                <div class="projects-headers">Technologies:</div>
                    <div id="body-techno">
                        <b><?php echo $project['Technologies']; ?></b>
                    </div>
                </div>
        </div>
<?php
    }
?>
</div>