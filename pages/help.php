			<h3>The bridge page</h3>
			<p>A WHMCS front end page has been created on your Wordpress site. This page is the main interaction page between Wordpress and WHMCS.</p>
		<p>The full url is:<a href="<?php echo cc_whmcs_bridge_home($home,$pid);?>"><code><?php echo cc_whmcs_bridge_home($home,$pid);?></code></a>. You can edit the page link by editing the page and changing the permalink.</p>
		<p style="color:red">Do not delete this page!</p>
			
<?php
if (file_exists(dirname(__FILE__).'/../../whmcs-bridge-sso/pages/help.php')) require(dirname(__FILE__).'/../../whmcs-bridge-sso/pages/help.php');
?>
<hr />
<center style="color:#0073EA";>
			Download our <a href="http://go.zingiri.com/downloads.php?action=displaycat&catid=6">documentation</a> | 
			Check out our <a href="http://forums.zingiri.com/forumdisplay.php?fid=74">forums</a> | 
			Pro users can open a <a href="https://go.zingiri.com/submitticket.php">support ticket</a>
</center>