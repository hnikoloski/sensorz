<?php

/**
 * Tech Icons Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'sensorz-tech-icons-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}
$checkBoxes = get_field('icon_selector');
?>

<div <?= $anchor; ?> class="<?= esc_attr($class_name); ?>">
    <ul class="icons">
        <?php
        if ($checkBoxes) :
            foreach ($checkBoxes as $checkBox) :
                $value = $checkBox['value'];
                $iconUrl = explode('|', $value)[0];
                $shadowColor = explode('|', $value)[1];
                $title = $checkBox['label'];
        ?>
                <li style="--shadow-color: <?php echo $shadowColor; ?>">
                    <img src="<?php echo $iconUrl; ?>" alt="<?php echo $title; ?>" />
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

</div>