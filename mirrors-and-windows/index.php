 <?php 
	$custom_title = 'Mirrors and Windows | ';
	include '../includes/header.php';
?>
	<div id="container" class="mwdc">
		<div class="header-background-image mwdc-bg">
			<div id="topImg"></div>
		</div>
		<div class="header-top">
			<?php include '../includes/nav.php'; ?>
		</div>
		<div class="white-slice mwdc-top-content">
			<div class="ninesixty">
                <p>Access your resources by selecting your Mirrors & Windows program.<br />
                Choose from copyright 2012 or 2016.</p>
                <a href="<?php echo $server; ?>mirrors-and-windows/2012/">
                    <div class="left-slice">
                        <p>&copy; 2012</p>
                        <img src="<?php echo $server; ?>lib/images/mwdc-1.png" alt="Mirrors and Windows &copy; 2012" />
                        <div class="bghover"></div>
                    </div>
                </a>
                <a href="http://emc.bookshelf.emcp.com">
                    <div class="right-slice">
                        <p>&copy; 2016</p>
                        <img src="<?php echo $server; ?>lib/images/mwdc-2.png" alt="Mirrors and Windows &copy; 2016" />
                        <div class="bghover"></div>
                    </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        
<?php include '../includes/footer.php'; ?>