 <?php 
	$custom_title = '2016 Catalog';
	include '../includes/header.php';
?>
	<div id="container">
		<div class="header-background-image cat-bg">
			<div id="topImg"></div>
		</div>
		<div class="header-top">
			<?php include '../includes/nav.php'; ?>
		</div>
		<div class="white-slice light-grey-slice al-top-content">
			<div class="ninesixty">
                <div>
					<p style="margin-top:0;">Thanks for your interest in EMC’s 2015 catalogs. Scroll down to view, download or share our English Language Arts, Social Studies, and World Languages catalogs.</p>
					<p>Questions? Please feel free to contact your <a href="http://store.emcp.com/about-emcp/local-account-manager-locator">Account Manager</a>.</p>
				</div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="white-slice">
			<div class="ninesixty">
                <div class="catalog-img">
                    <a href="http://joom.ag/vbNp" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/catalog-wl.png" alt="World Languages Catalog" class="animated" />
                    </a>
                </div>
                <div class="catalog-img">
                    <a href="http://joom.ag/YpNp" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/catalog-ela.png" alt="English Language Arts Catalog" class="animated" />
                    </a>
                </div>
                <div class="catalog-img">
                    <a href="http://joom.ag/WpNp" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/catalog-al.png" alt="Applied Learning Catalog" class="animated" />
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>            
        </div>
    </div>

<?php include '../includes/footer.php'; ?>