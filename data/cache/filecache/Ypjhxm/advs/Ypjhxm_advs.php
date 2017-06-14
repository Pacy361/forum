<?php
$data = array (
  'exp' => 0,
  'data' => 
  array (
    'evalcode' => 
    array (
      'subnavbanner' => 
      array (
        'check' => '
			if($_G[\'basescript\'] == \'forum\' && $parameter[\'fids\'] && !(in_array($_G[\'fid\'], $parameter[\'fids\']) || CURMODULE == \'index\' && in_array(-1, $parameter[\'fids\']))
			|| $_G[\'basescript\'] == \'group\' && $parameter[\'groups\'] && !(in_array($_G[\'grouptypeid\'], $parameter[\'groups\']) || CURMODULE == \'index\' && in_array(-1, $parameter[\'groups\']))
			|| $_G[\'basescript\'] == \'portal\' && $parameter[\'category\'] && !(!empty($_G[\'catid\']) && in_array($_G[\'catid\'], $parameter[\'category\']) || empty($_G[\'catid\']) && in_array(-1, $parameter[\'category\']))
			) {
				$checked = false;
			}',
        'create' => '$adcode = $codes[$adids[array_rand($adids)]];',
      ),
    ),
    'parameters' => 
    array (
      'subnavbanner' => 
      array (
        1 => 
        array (
          'title' => '我们是袋鼠家族',
          'link' => '欢迎关注我们哦(⊙o⊙)哦',
          'size' => '',
          'fids' => 
          array (
          ),
          'groups' => 
          array (
            0 => '-1',
            1 => '10',
          ),
          'category' => 
          array (
            0 => '-1',
          ),
        ),
      ),
    ),
    'code' => 
    array (
      'portal' => 
      array (
        'subnavbanner' => 
        array (
          1 => '<a href="欢迎关注我们哦(⊙o⊙)哦" target="_blank" >我们是袋鼠家族</a>',
        ),
      ),
    ),
  ),
);
