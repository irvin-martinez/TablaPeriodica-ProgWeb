<?php 
function forLoop($elementGroup,$elementsArray){ ?>
    <?php 
    for($i = 0, $size = count($elementsArray[$elementGroup]); $i < $size; $i++){?>
        <div class="individual-container <?php echo $elementGroup?>">
            <?php echo $elementsArray[$elementGroup][$i]; ?>
        </div>
    <?php }}
function forLoopCustomize($elementGroup,$elementsArray,$initialValue,$limitValue) {
    for($i = $initialValue; $i <= $limitValue; $i++){?>
        <div class="individual-container <?php echo $elementGroup?>">
            <?php       
                 echo $elementsArray[$elementGroup][$i];
            ?>
        </div>
    <?php }}?>
