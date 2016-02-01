<?php
/**
* @file
* This is the template file for the object page for large image
*
* Available variables:
* - $islandora_object: The Islandora object rendered in this template file
* - $islandora_dublin_core: The DC datastream object
* - $dc_array: The DC datastream object values as a sanitized array. This
* includes label, value and class name.
* - $islandora_object_label: The sanitized object label.
*
* @see template_preprocess_islandora_dublin_core_display()
* @see theme_islandora_dublin_core_display()
*/
?>
  <h3>Metadata</h3>
    <div xmlns:dcterms="http://purl.org/dc/terms/" class="islandora-inline-metadata islandora-metadata-fields islandora-object-fields">
      <?php $row_field = 0; ?>
      <?php foreach($dc_array as $key => $value): ?>
      	<?php if($value['value']): ?>
        <p><span property="<?php print $value['dcterms']; ?>" content="<?php print filter_xss(htmlspecialchars($value['value'], ENT_QUOTES, 'UTF-8')); ?>" class="title">
          <?php print filter_xss($value['label']); ?>:
        </span>
        <span class="<?php print $value['class']; ?><?php print $row_field == 0 ? ' first' : ''; ?>">
          <?php print filter_xss($value['value']); ?></span>        
          <?php $row_field++; ?>
        </p>
   		<?php endif; ?>
      <?php endforeach; ?>
    </div>
