<?php 
	$custom_title = 'eReaders | ';
	include '../includes/header.php';
?>
	<div id="container" class="ereaders">
		<div class="header-background-image ereaders-bg">
			<div id="topImg">
            </div>
		</div>
		<div class="header-top">
			<?php include '../includes/nav.php'; ?>
		</div>
		<div class="secondary-first">
			<div class="ninesixty">
                <p class="ereaders-larger">EMC's enhanced eReaders take reading, well, anywhere!</p>
                
                <img class="ereaders-right-img" src="<?php echo $server; ?>lib/images/iPadeReaders-image.png" alt="iPad eReaders" style="margin-left:50px;" />
                
                <p class="ereaders-smaller">EMC's enhanced eReaders connect students to their books in and out of the classroom. eReaders work on all laptops, desktops, and mobile devices including the iPad&copy;. Available in Spanish, French and German. eReader features include beautiful illustrations and easy-to-follow synchronized audio. Student’s have the ability to take notes, play games, and complete interactive practice activities!</p>
                    
                <a class="technology-buttons wl-readers-buttons transition" href="<?php echo $server; ?>world-languages/readers/buy/" target="_blank" onclick="ga('send', 'event', 'Call To Action Button','click','World Language Readers Buy Now');">Buy Now</a>
                
                <div class="clearfix"></div>
                
            </div>
            <div class="redefining">
                <div class="ninesixty no-top">
                    <table>
                        <tr>
                            <td>
                                <table cellspacing="0">
                                    <tr>
                                        <td colspan="2">
                                            <p class="ereaders-largest">Titles Available</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" style="padding: 0 20px 0;">
                                            <p class="ereaders-smaller"><em><span style="text-decoration:underline;">FRENCH</span><br />
                                            À la recherche de Tibou<br />
                                            Apparition et autres contes<br />
                                            Aventure dans les Pyrénées<br />
                                            Deux ans de vacances<br />
                                            Éric a disparu<br />
                                            La momie du Louvre<br />
                                            Le secret de Louise<br />
                                            Les Misérables<br />
                                            Paris est en danger</em></p>
                                            <p class="ereaders-smaller"><em><span style="text-decoration:underline;">SPANISH</span><br />
                                            Cantar de Mio Cid<br />
                                            Cuentos fantásticos<br />
                                            Don Quijote de la Mancha<br />
                                            El collar visigodo<br />
                                            El secreto de Romina<br />
                                            El Zorro<br />
                                            Guzmán de Alfarache<br />
                                            Misterio en el Mallorca Gran Hotel<br />
                                            Un conjunto especial</em></p>
                                        </td>
                                        <td valign="top">
                                            <p class="ereaders-smaller"><em><span style="text-decoration:underline;">GERMAN</span><br />
                                            Das Haus an den Klippen<br />
                                            Der Golem<br />
                                            Die Nachbarn<br />
                                            Die Verwandlung<br />
                                            Diebstahl in Hamburg<br />
                                            Eine spezielle Band<br />
                                            Johann Wolfgang Goethe<br />
                                            Mord im Grand Hotel</em></p>
                                        </td>
                                    </tr>
                                    <!-- Removing Pricing Table 3/19/2016
                                    <tr>
                                        <td colspan="2">
                                            <p class="ereaders-largest">Pricing</p>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom-tr">
                                        <td align="left"><p class="ereaders-smaller">Single 1-year license</p></td>
                                        <td align="right"><p class="ereaders-smaller">$2.95</p></td>
                                    </tr>
                                    <tr class="border-bottom-tr">
                                        <td align="left" class="whitespace-top"><p class="ereaders-smaller">15 student class library 1-year license</p></td>
                                        <td align="right"><p class="ereaders-smaller">$32.95</p></td>
                                    </tr>
                                    <tr class="border-bottom-tr">
                                        <td align="left"><p class="ereaders-smaller">30 student class library 1-year license</p></td>
                                        <td align="right"><p class="ereaders-smaller">$62.95</p></td>
                                    </tr>
                                    <tr class="border-bottom-tr">
                                        <td align="left" class="whitespace-top"><p class="ereaders-smaller">15 student class library 6-year license</p></td>
                                        <td align="right"><p class="ereaders-smaller">$197.95</p></td>
                                    </tr>
                                    <tr class="border-bottom-tr">
                                        <td align="left"><p class="ereaders-smaller">30 student class library 6-year license</p></td>
                                        <td align="right"><p class="ereaders-smaller">$375.95</p></td>
                                    </tr>
                                    -->
                                </table>
                            </td>
                            <td>
                                <img src="<?php echo $server; ?>lib/images/TallReaders-image.jpg" alt="eReaders" style="margin-left:70px;" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
	
<?php include '../includes/footer.php'; ?>