<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>

  <?php 
    if ($id == 0)
      print '<div class="row">';
    elseif ($id % 4 == 0) {
      print '</div><div class="row">';
    } 
  ?>

  <?php
    if ($id == count($rows) - 1)
      $endClass = ' end';
    else
      $endClass = '';
  ?>

  <div class="three columns<?php print $endClass; ?>">
    <div <?php if ($classes_array[$id]) { print 'class="' . $classes_array[$id] .'"';  } ?>>
      <?php print $row; ?>
    </div>
  </div>

  <?php 
    if ($id == count($rows) - 1)
      print '</div>';
  ?>

<?php endforeach; ?>