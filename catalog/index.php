 <?php
	$custom_title = '2018 Catalogs | ';
	include '../includes/header.php';
?>
	<div id="container">
		<div class="header-top-dark">
			<?php include '../includes/nav.php'; ?>
		</div>
		<div class="white-slice light-grey-slice" style="margin-top:125px;">
			<div class="ninesixty">
                <div>
					<p style="margin-top:0;">Thanks for your interest in EMC's 2019 catalogs. Scroll down to view, download or share our English Language Arts and World Languages catalogs.</p>
					<p>Questions? Please feel free to contact your <a href="https://store.emcp.com/about-emcp/local-account-manager-locator">Account Manager</a>.</p>
				</div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="white-slice">
			<div class="ninesixty">
                <div class="catalog-img-lang">
                    <a href="/lib/assets/WLCATSPR19.pdf" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/catalog-wl-2019.png" alt="World Languages 2018-2019 Catalog" class="animated" />
                    </a>
                </div>
                <div class="catalog-img-lang">
                    <a href="/lib/assets/ELACATSPR19.pdf" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/catalog-ela-2019.png" alt="English Language Arts 2018-2019 Catalog" class="animated" />
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php'; ?>
