<?php settings_errors(); ?>
<form action="options.php" method="post">
    <?php settings_fields('herhesh-settings-group'); ?>
    <?php do_settings_sections('herhesh-theme');?>
    <?php submit_button(); ?>
</form>