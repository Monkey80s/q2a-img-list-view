<?php
 

  if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../../');
    exit;
  }
  qa_register_plugin_layer(
    'img-list-views-layer.php', // PHP file containing layer
    'img-list-views '// human-readable name of layer
    
  );