<h3><?php echo __d('cake_dev', 'Editing this Page'); ?></h3>
<p>
<?php
	echo __d('cake_dev', 'To change the content of this page, edit: %s
		To change its layout, edit: %s
		You can also add some CSS styles for your pages at: %s',
		APP . 'View' . DS . 'Pages' . DS . 'home.ctp.<br />',  APP . 'View' . DS . 'Layouts' . DS . 'default.ctp.<br />', APP . 'webroot' . DS . 'css');
?>
</p>
