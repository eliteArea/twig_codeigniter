<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//tempalte directory for twig file
  $config['template_dir'] = APPPATH.'views';


//$config['cache_dir'] = BASEPATH.'cache/twig';
  $config['cache_dir'] = APPPATH.'cache/twig';


// enable or disable cache for twig file
// recommendt to turn on twig cache for improte performance of application
  $config['cache'] = true;
  //$config['cache'] = false;
  
  
//debug mode
  $config['debug'] = true;
  //$config['debug'] = false;
