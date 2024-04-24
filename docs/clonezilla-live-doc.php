<!DOCTYPE html PUBLIC "-//W3C//DTD XHTMLTransitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<style type="text/css">

body{
  font-family: 'Bitstream Vera Sans', Arial, Helvetica, 'Luxi Sans', Verdana, Sans-Serif;
  margin:0;
  padding:0;
  line-height: 1.5em;
}

b{font-size: 110%;}
em{color: red;}

#maincontainer{
margin: 0 auto; /*Center container on page*/
}

#topsection{
max-width: 100%;
background: #EAEAEA;
height: 75px; /*Height ofsection*/
margin-bottom: 5px;
}
@media screen and (max-device-width: 500px) {
  #topsection{
  height: 105px;
  }
}

#topsection h1{
margin: 0;
padding-top: 15px;
}

#contentcolumn{
margin-left: 166px; /*Set left margin to LeftColumnWidth*/
}
@media screen and (max-device-width: 500px) {
  #contentcolumn{
  margin-left: 91px;
  }
}

#contentcolumn_no_left_menu{
margin-left: 5px; /*Set left margin to LeftColumnWidth*/
}
@media screen and (max-device-width: 500px) {
  #contentcolumn_no_left_menu{
  margin-left: 6px;
  }
}


#leftcolumn{
  position: absolute;
  left: 0px;
  width: 165px;
  margin-left: 2px;
  padding-left: 0px;
  padding-bottom: 10px;
  font-size: small;
  background: #C8FC98;
  font-weight: bold;
  line-height: 1.2em;
}
@media screen and (max-device-width: 500px) {
  #leftcolumn {
  width: 90px;
  }
}

#leftcolumn a:visited {
  text-decoration: underline; color: #0000ff;
}

#leftcolumn_ads{
  position: absolute;
  left: 0px;
  width: 165px;
  margin-left: 2px;
  padding-left: 0px;
  padding-bottom: 10px;
  font-size: small;
  background: #C8FC98;
  font-weight: bold;
  line-height: 1.2em;
}
@media screen and (max-device-width: 500px) {
  #leftcolumn_ads {
  width: 90px;
  }
}

#rightcolumn{
clear: both;
float: right;
padding-left: 5px;
}
@media screen and (max-device-width: 500px) {
  #rightcolumn{
  /* too small, forget about ads */
  display: none;
  }
}

#footer{
font-family: "Bitstream Vera Serif", serif;
margin-left: 155px;
margin-right: 10px;
margin-top: 0px;
padding: 5px 0px 5px 0px;
color: #aaaaaa;
border-top: 1px solid #dddddd;
background-color: #fafafa;
}

#footer a{
color: #FFFF80;
}

#footer_ads{
font-family: "Bitstream Vera Serif", serif;
margin-left: 170px;
margin-right: 150px;
margin-top: 0px;
padding: 5px 0px 5px 0px;
border-top: 1px solid #dddddd;
background-color: #fafafa;
background: #FFFFF2;
}

.innertube{
margin: 10px; /*Marginsinnerinside each columnprovide padding)*/
margin-top: 0;
}

.menulist{
margin: 3px;
margin-left: 12px;
margin-top: 0;
}

.warning {
  font-family: "Bitstream Vera Sans", sans-serif;
  /* Pastel Red */
  background: #f5a9a9;
  /* Red */
  border: 1px solid #FF0000;
  padding-left: 10px;
  padding-right: 10px;
}

.hangwarning {
  text-indent: -6.5em;
  margin-left: 6.5em;
}


.caution {
  font-family: "Bitstream Vera Sans", sans-serif;
  /* Khaki */
  background: #f0e68c;
  /* DarkKhaki */
  border: 1px solid #bdb76b;
  padding-left: 10px;
  padding-right: 10px;
}

.hangcaution {
  text-indent: -6em;
  margin-left: 6em;
}

.tip {
  font-family: "Bitstream Vera Sans", sans-serif;
  /* PaleGreen */
  background: #98fb98;
  /* MediumSpringGreen */
  border: 1px solid #00fa9a;
  padding-left: 10px;
  padding-right: 10px;
}

.hangtip {
  text-indent: -3em;
  margin-left: 3em;
}

.dir-doc-list {
  margin: 10px; 
  margin-top: 0;
  line-height: 1.2em;
}

</style>

<head>
  <title>Clonezilla - Live Doc</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="DRBL/Clonezilla Team." />
  <meta name="keywords" content="Clonezilla, a free and open source software for disk/partition imaging and cloning." />
	<meta name="color-scheme" content="light dark" />
	<link rel="stylesheet" type="text/css" href="./style.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
	window.cookieconsent.initialise({
	"palette": {
	"popup": {
	"background": "#edeff5",
		"text": "#838391"
		},
		"button": {
		"background": "#4b81e8"
		}
        },
        "theme": "edgeless",
        "position": "bottom-right"
})});
</script>
  <link rel="Clonezilla ICON" href="./clonezilla_logo_transparent.gif">
</head>

<body>
	<table id="header">
		<colgroup>
			<col>
		</colgroup>
		<tbody>
			<tr>
				<td id="home-logo">
					<a href="././">
					<picture>
						<img src="./clonezilla_logo_transparent.gif" alt="logo" title="back to home page"/>
					</picture>
					</a>
				</td>
				<td id="site-title">
					<h1>Clonezilla</h1>
					<p>The Free and Open Source Software for Disk <a href="https://en.wikipedia.org/wiki/Disk_imaging" target=_blank>Imaging</a> and <a href="https://en.wikipedia.org/wiki/Disk_cloning" target=_blank>Cloning</a></p>
				</td>
			</tr>
		</tbody>
	</table>
	<br />
		<nav id="navigation" open>
			<menu>
				<li><a href="././">About</a></a></li>
				<li><a href="https://sourceforge.net/p/clonezilla/news/" target=_blank>News</a></li>
				<li><a href="./screenshots/">Screenshots</a></li>
				<li><a href="./clonezilla-live.php">Live CD/USB</a></li>
				<li><a href="./clonezilla-usage/clonezilla-live-usage.php">Live Docs</a></li>
				<li><a href="./clonezilla-SE/">Server Edition</a></li>
				<li><a href="./downloads.php">Download</a></li>
				<li><a href="./cd-usb-key-vendors/">CD/USB key vendors</a></li>
				<li><a href="http://www.drbl-winroll.org" target=_blank>DRBL-winroll</a></li>
				<li><a href="./related-live-cd/">Related LiveCD</a></li> 
				<li><a href="./testimonials/">Testimonials</a></li>
				<li><a href="./lecture-materials/">Lecture Materials</a></li>
				<li><a href="./related-articles/">Related Articles</a></li>
				<li><a href="./partners/">Partners</a></li>
				<li><a href="http://drbl.org/faq/" target=_blank>FAQ/Q&A</a></li>
				<li><a href="https://sourceforge.net/p/clonezilla/discussion/" target=_blank>Forum</a></li>
				<li><a href="https://sourceforge.net/p/clonezilla/mailman/" target=_blank>Mailing Lists</a></li>
				<li><a href="./developers/">Developers</a> </li>
				<li><a href="./contributors/">Contributors</a> </li>
				<li><a href="./related-links/">Related links</a> </li>
				<li><a href="./local-community/">Local communities</a></li>
				</menu>
			</nav>
			<main>
				<a name="01_Save_disk_image"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Save disk image</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/01_Save_disk_image"><font size=-1>Description: Save 1st disk (sda) as an image on 2nd disk (sdb) (Step by step)
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/00-boot-clonezilla-live-cd.doc#00-boot-clonezilla-live-cd.doc">Boot the machine via Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/01-clonezilla-boot-menu.doc#01-clonezilla-boot-menu.doc">The boot menu of Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/02-booting.doc#02-booting.doc">Here we choose 800x600 mode, after pressing Enter, you will see Debian Linux booting process
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/03-choose-lang.doc#03-choose-lang.doc">Choose language
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/04-choose-keymap.doc#04-choose-keymap.doc">Choose keyboard layout
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/05-start-clonezilla-or-cmd.doc#05-start-clonezilla-or-cmd.doc">Choose "Start Clonezilla"
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/06-dev-img.doc#06-dev-img.doc">Choose "device-image" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/07-img-repo.doc#07-img-repo.doc">Choose "local_dev" option to assign sdb1 as the image home
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/08-select-disk-as-img-repo.doc#08-select-disk-as-img-repo.doc">Select sdb1 as image repository, then choose "savedisk" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/10-disk-selection-img-name.doc#10-disk-selection-img-name.doc">Input image name and select source disk
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/01_Save_disk_image/11-saving-disk-image.doc#11-saving-disk-image.doc">Clonezilla is saving disk image (sda) to the partition of 2nd disk (sdb1)
				</a></ol></td><tr></table><a name="02_Restore_disk_image"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Restore disk image</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/02_Restore_disk_image"><font size=-1>Description: Restore an image on 2nd disk (sdb) to 1st disk (sda) (Step by step)
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/00-boot-clonezilla-live-cd.doc#00-boot-clonezilla-live-cd.doc">Boot the machine via Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/01-clonezilla-boot-menu.doc#01-clonezilla-boot-menu.doc">The boot menu of Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/02-booting.doc#02-booting.doc">Here we choose 800x600 mode, after pressing Enter, you will see Debian Linux booting process
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/03-choose-lang.doc#03-choose-lang.doc">Choose language
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/04-choose-keymap.doc#04-choose-keymap.doc">Choose keyboard layout
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/05-start-clonezilla-or-cmd.doc#05-start-clonezilla-or-cmd.doc">Choose "Start Clonezilla"
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/06-dev-img.doc#06-dev-img.doc">Choose "device-image" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/07-img-repo.doc#07-img-repo.doc">Choose "local_dev" option to assign sdb1 as the image home
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/08-select-disk-as-img-repo.doc#08-select-disk-as-img-repo.doc">Select sdb1 as image repository, then choose "restoredisk" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/10-disk-selection-img-name.doc#10-disk-selection-img-name.doc">Select image name and destination disk
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/02_Restore_disk_image/11-restoring-disk-image.doc#11-restoring-disk-image.doc">Clonezilla is restoring disk image on 2nd disk (sdb) to 1st disk (sda)
				</a></ol></td><tr></table><a name="03_Disk_to_disk_clone"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Disk to disk clone</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/03_Disk_to_disk_clone"><font size=-1>Description: Clone small disk to larger disk (e.g. 20 GB to 60 GB) (Step by step)
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/00-prepare-clonezilla-live.doc#00-prepare-clonezilla-live.doc">Prepare Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/01-boot-clonezilla-live.doc#01-boot-clonezilla-live.doc">Boot your Clonezilla live via USB
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/02-start-clonezilla.doc#02-start-clonezilla.doc">Choose "ToRAM" option in the boot menu
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/03-choose-lang.doc#03-choose-lang.doc">Choose language
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/04-choose-keymap.doc#04-choose-keymap.doc">Choose keyboard layout
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/05-start-clonezilla-or-cmd.doc#05-start-clonezilla-or-cmd.doc">Choose "Start Clonezilla"
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/06-disk-to-local-disk-clone.doc#06-disk-to-local-disk-clone.doc">Choose "disk_to_local_disk"<br>
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/07-source-disk.doc#07-source-disk.doc">Choose source disk
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/08-target-disk.doc#08-target-disk.doc">Choose target disk
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/09-starting-cloning.doc#09-starting-cloning.doc">Start cloning
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_Disk_to_disk_clone/10-clone-finishes.doc#10-clone-finishes.doc">Disk is cloned
				</a></ol></td><tr></table><a name="03_One_image_to_multiple_disks"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  One image to multiple disks</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/03_One_image_to_multiple_disks"><font size=-1>Description: Restore an image to multiple disks, e.g. massive production of live USB flash drives.
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/00-boot-clonezilla-live-cd.doc#00-boot-clonezilla-live-cd.doc">Boot the machine via Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/01-clonezilla-boot-menu.doc#01-clonezilla-boot-menu.doc">The boot menu of Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/01-clonezilla-boot-menu2.doc#01-clonezilla-boot-menu2.doc">The boot menu of Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/02-booting.doc#02-booting.doc">Here we choose 800x600 mode, after pressing Enter, you will see Debian Linux booting process
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/03-choose-lang.doc#03-choose-lang.doc">Choose language
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/04-choose-keymap.doc#04-choose-keymap.doc">Choose keyboard layout
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/05-start-clonezilla-or-cmd.doc#05-start-clonezilla-or-cmd.doc">Choose "Start Clonezilla"
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/06-dev-img.doc#06-dev-img.doc">Choose "device-image" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/07-img-repo.doc#07-img-repo.doc">Choose "local_dev" option to assign sde1 as the image home
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/08-select-disk-as-img-repo.doc#08-select-disk-as-img-repo.doc">Select sde1 as image repository, then choose "1-2-mdisks" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/10-disk-selection-img-name.doc#10-disk-selection-img-name.doc">Select image name and destination disk
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/03_One_image_to_multiple_disks/11-restoring-disk-image.doc#11-restoring-disk-image.doc">Clonezilla is restoring disk image on disk sde to sda, sdc, and sdd.
				</a></ol></td><tr></table><a name="04_Create_Recovery_Clonezilla"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Create Recovery Clonezilla</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/04_Create_Recovery_Clonezilla"><font size=-1>Description: Create a autorun recovery Clonezilla live CD or USB flash drive (Step by step)
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/00-boot-clonezilla-live-cd.doc#00-boot-clonezilla-live-cd.doc">Boot the machine via Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/01-clonezilla-boot-menu.doc#01-clonezilla-boot-menu.doc">The boot menu of Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/02-booting.doc#02-booting.doc">Here we choose 800x600 mode, after pressing Enter, you will see Debian Linux booting process:
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/03-choose-lang.doc#03-choose-lang.doc">Choose language
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/04-choose-keymap.doc#04-choose-keymap.doc">Choose keyboard layout
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/05-start-clonezilla-or-cmd.doc#05-start-clonezilla-or-cmd.doc">Choose "Start Clonezilla"
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/06-dev-img.doc#06-dev-img.doc">Choose "device-image" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/07-img-repo.doc#07-img-repo.doc">Choose "local_dev" option to assign sdb1 as the image home
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/08-select-disk-as-img-repo.doc#08-select-disk-as-img-repo.doc">Select sdb1 as image repository, then choose "restoredisk" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/04_Create_Recovery_Clonezilla/09-select-options-then-create.doc#09-select-options-then-create.doc">Choose the image you want to include in the recovery CD or USB flash drive:<br>
				</a></ol></td><tr></table><a name="05_Preseed_options_to_do_job_after_booting"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Preseed options to do job after booting</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/05_Preseed_options_to_do_job_after_booting"><font size=-1>Description: Start Clonezilla live with sshd service on and password assigned
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/05_Preseed_options_to_do_job_after_booting/00-modify-syslinux-isolinux-cfg.doc#00-modify-syslinux-isolinux-cfg.doc">The scenario
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/05_Preseed_options_to_do_job_after_booting/01-preseed-options.doc#01-preseed-options.doc">The options to be preseeded
				</a></ol></td><tr></table><a name="05_Started_with_sshd_on_and_passwd_assigned"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Started with sshd on and passwd assigned</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/05_Started_with_sshd_on_and_passwd_assigned"><font size=-1>Description: Run unattended Clonezilla live via PXE or CD booting and the process can be remotely monitored
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/05_Started_with_sshd_on_and_passwd_assigned/00-ssh-on-passwd-assigned.doc#00-ssh-on-passwd-assigned.doc">A PXE config example for you to boot Clonezilla live via PXE, and ssh service is on, the password of account "user" is assigned<br>
				</a></ol></td><tr></table><a name="06_Add_extra_driver"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Add extra driver</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/06_Add_extra_driver"><font size=-1>Description: How to put your own binary driver in Clonezilla live without modifying /live/filesystem.squashfs
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/06_Add_extra_driver/00_add_extra_driver.doc#00_add_extra_driver.doc">How to put your own binary driver in Clonezilla live without modifying /live/filesystem.squashfs
				</a></ol></td><tr></table><a name="07_Customized_script_with_PXE"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Customized script with PXE</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/07_Customized_script_with_PXE"><font size=-1>Description: Use customized script with a PXE version of Clonezilla live
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/07_Customized_script_with_PXE/00_customized_script_with_PXE.doc#00_customized_script_with_PXE.doc">To put your customized script with a PXE version of Clonezilla live<br>
				</a></ol></td><tr></table><a name="08_Screen_session_with_PXE"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Screen session with PXE</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/08_Screen_session_with_PXE"><font size=-1>Description: Run unattended Clonezilla live via PXE booting and the process can be remotely monitored
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/08_Screen_session_with_PXE/00-pxe-setting.doc#00-pxe-setting.doc">Run Clonezilla in screen session so you can access remotely to monitor the progress.
				</a></ol></td><tr></table><a name="09_Burn_Clonezilla_live_CD"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Burn Clonezilla live CD</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/09_Burn_Clonezilla_live_CD"><font size=-1>Description: Create Clonezilla live CD by InfraRecorder
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/09_Burn_Clonezilla_live_CD/00-create-clonezilla-live-cd.doc#00-create-clonezilla-live-cd.doc">Create Clonezilla live CD by InfraRecorder 
				</a></ol></td><tr></table><a name="10_LinuxLive_USB_creator"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  LinuxLive USB creator</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/10_LinuxLive_USB_creator"><font size=-1>Description: Create Clonezilla live USB flash drive by LinuxLive USB creator 
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/10_LinuxLive_USB_creator/00-create-clonezilla-live.doc#00-create-clonezilla-live.doc">Create Clonezilla live USB flash drive by LinuxLive USB creator
				</a></ol></td><tr></table><a name="11_lite_server"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  lite server</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/11_lite_server"><font size=-1>Description: Run a Clonezilla lite server to do massive deployment from an image via multicast mechanism
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/00-boot-clonezilla-live-cd.doc#00-boot-clonezilla-live-cd.doc">Boot the machine via Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/01-clonezilla-boot-menu.doc#01-clonezilla-boot-menu.doc">The boot menu of Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/02-booting.doc#02-booting.doc">Here we choose 800x600 mode, after pressing Enter, you will see Debian Linux booting process
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/03-choose-lang.doc#03-choose-lang.doc">Choose language
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/04-choose-keymap.doc#04-choose-keymap.doc">Choose keyboard layout
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/05-start-clonezilla-or-cmd.doc#05-start-clonezilla-or-cmd.doc">Choose "Start Clonezilla"
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/06-lite-server.doc#06-lite-server.doc">Choose "lite-server" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/07-img-repo.doc#07-img-repo.doc">Now we have to mount the image repository.
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/08-select-disk-as-img-repo.doc#08-select-disk-as-img-repo.doc">Select sdb1 as image repository, then choose "restoredisk" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/11_lite_server/10-disk-selection-img-name.doc#10-disk-selection-img-name.doc">Select image name and destination disk
				</a></ol></td><tr></table><a name="12_lite_server_BT_from_dev"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  lite server BT from dev</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/12_lite_server_BT_from_dev"><font size=-1>Description: Run a Clonezilla lite server to do massive deployment from raw device via bittorrent mechanism
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/00-boot-clonezilla-live-cd.doc#00-boot-clonezilla-live-cd.doc">Boot the machine via Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/01-clonezilla-boot-menu.doc#01-clonezilla-boot-menu.doc">The boot menu of Clonezilla live
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/02-booting.doc#02-booting.doc">Here we choose 800x600 mode, after pressing Enter, you will see Debian Linux booting process
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/03-choose-lang.doc#03-choose-lang.doc">Choose language
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/04-choose-keymap.doc#04-choose-keymap.doc">Choose keyboard layout
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/05-start-clonezilla-or-cmd.doc#05-start-clonezilla-or-cmd.doc">Choose "Start Clonezilla"
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/06-lite-server.doc#06-lite-server.doc">Choose "lite-server" option
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/07-img-repo.doc#07-img-repo.doc">Mount the image repository.
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/08-select-disk-as-img-repo.doc#08-select-disk-as-img-repo.doc">Choose the massive deployment mode using BT from raw device mode.
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/12_lite_server_BT_from_dev/10-disk-selection-img-name.doc#10-disk-selection-img-name.doc">Select source disk. 
				</a></ol></td><tr></table><a name="98_ocs_related_command_manpages"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  ocs related command manpages</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/98_ocs_related_command_manpages"><font size=-1>Description: Manual pages about Clonezilla related commands
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/98_ocs_related_command_manpages/01-ocs-sr.doc#01-ocs-sr.doc">Man page of ocs-sr
				</a><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/98_ocs_related_command_manpages/02-ocs-onthefly.doc#02-ocs-onthefly.doc">Man page of ocs-onthefly
				</a></ol></td><tr></table><a name="99_Misc"></a><table><tr><td bgcolor="#0066ff"><font size=+1 color="#FFffff">  Misc</font></td></tr><tr><td bgcolor="#C8FC98"><a href="fine-print-live-doc.php?path=clonezilla-live/doc/99_Misc"><font size=-1>Description: Misc doc
				</a></font></td></tr><tr><td bgcolor="#ffffff"><ol><li><a href="fine-print-live-doc.php?path=./clonezilla-live/doc/99_Misc/00_live-boot-parameters.doc#00_live-boot-parameters.doc">The boot parameters for Clonezilla live
				</a></ol></td><tr></table>
			<hr />
			</main>
		<nav id="tableofcontents" alt="toc">
			<ol>
				<a href="#Save-disk"><li>Save Disk Image</li></a>
				<a href="#Restore-disk"><li>Restore disk image</li></a>
				<a href="#Clone-disk"><li>Disk to disk clone</li></a>
				<a href="#One-to-multiple"><li>One image to multiple disks</li></a>
				<a href="#Recovery"><li>Create Recovery Clonezilla</li></a>
				<a href="#Pressed"><li>Preseed options to do job after booting</li></a>
				<a href="#Started"><li> Started with sshd on and passwd assigned </li></a>
				<a href="#Driver"><li> Add extra driver </li></a>
				<a href="#Custom-script"><li> Customized script with PXE </li></a>
				<a href="#Screen-session"><li> Screen session with PXE </li></a>
				<a href="#Burn-CD"><li> Burn Clonezilla live CD </li></a>
				<a href="#USB"><li> LinuxLive USB creator </li></a>
				<a href="#Lite"><li> Lite Server </li></a>
				<a href="#Lite-dev"><li> Lite Server BT from dev </li></a>
				<a href="#OCS"><li> ocs related command manpages </li></a>
				<a href="#misc"><li> Misc </li></a>
			</ol>
		</nav>
  <footer>
		<a href="https://sourceforge.net/projects/clonezilla" target=_blank><img src="https://sflogo.sourceforge.net/sflogo.php?group_id=115473&amp;type=16" width="150" height="40" border="0" alt="Clonezilla at SourceForge.net" /></a>
		<a href="././privacy-policy.php"><img src="././images/pp.png" border="0" alt="Privacy policy"/></a>
		<!--
		<a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
		-->
  </footer>
</body>
</html>