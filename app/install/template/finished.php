<?php if(!defined('access') or !access) die('This file cannot be directly accessed.'); ?>
<h1>Installation complete</h1>
<p><?php echo strtr('NomadImages has been successfully installed. You can now continue to the <a href="%u">admin dashboard</a> and configure your website.', ['%s' => CHV\get_chevereto_version(true), '%u' => G\get_base_url('dashboard')]); ?></p>
<script>$(document).ready(function() { CHV.fn.system.checkUpdates(); });</script>