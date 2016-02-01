<?php

/**
 * @file
 * This is the template file for the pdf object
 *
 * @TODO: Add documentation about this file and the available variables
 */
?>

<div class="islandora-pdf-object islandora" vocab="http://schema.org/" prefix="dcterms: http://purl.org/dc/terms/" typeof="Article">
    <?php if (isset($islandora_content)): ?>
      <div id="pdf">
        <?php print $islandora_content; ?>
      </div>
      <div id="download">
      <ul>
      <li><a href="<?php
      /** Awful hack to get the full download link since we can't customise theme.inc and $islandora_download_link is ugly **/
		print substr($islandora_full_url, 0, -4);
      ?>download">Download PDF</a></li>
      </ul>
	  </div>
    <?php endif; ?>
</div>

<div id="metadata">    
<?php if($parent_collections): ?>
    <h3><?php print t('In collections'); ?></h3>
    <ul>
      <?php foreach ($parent_collections as $collection): ?>
        <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
      <?php endforeach; ?>
    </ul>
<?php endif; ?>
    <?php print $metadata; ?>
</div>
