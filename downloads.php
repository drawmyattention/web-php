<?php
// $Id$
$_SERVER['BASE_PAGE'] = 'downloads.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc';

// Try to make this page non-cached
header_nocache();

$SIDEBAR_DATA = '
<h3>Binaries for other systems</h3>
<p>
 We do not distribute UNIX/Linux binaries. Most Linux
 distributions come with PHP these days, so if you do
 not want to compile your own, go to your distribution\'s
 download site. Binaries available on external servers:
</p>
<ul class="simple">
' .// <li><a href="http://195.228.168.217/louise/index.php?MENU=6">AmigaOS</a></li>
 '<li><a href="http://publib-b.boulder.ibm.com/Redbooks.nsf/RedpieceAbstracts/redp3639.html">AS/400</a></li>
 <li><a href="http://www.entropy.ch/software/macosx/php/">Mac OS X</a></li>
 <li><a href="http://developer.novell.com/ndk/php.htm">Novell NetWare</a></li>
 <li><a href="http://silk.apana.org.au/php/">OS/2</a></li>
 <li><a href="http://php.alexwaugh.com/">RISC OS</a></li>
 <li><a href="http://freeware.sgi.com/index-by-alpha.html#php">SGI IRIX 6.5.x</a></li>
 <li>Solaris (<a href="http://sunfreeware.com/programlistsparc10.html#php">SPARC</a>, <a href="http://sunfreeware.com/programlistintel10.html#php">INTEL</a>)</li>
</ul>

<h3>Older versions of PHP</h3>
<p>
 See <a href="/releases.php">our releases
 page</a> for older PHP versions.
</p>

<h3>Other Downloads</h3>
<p>
 For downloadable manual packages, go to the
 <a href="download-docs.php">documentation download</a>
 page
</p>

<p>
 Get some
 <a href="download-logos.php">PHP logos</a>
 for your site, and some PHP icons to use on
 your computer
</p>

<p>
 To download the latest development version,
 see the <a href="anoncvs.php">instructions on
 using anonymous CVS</a>
</p>

<p>a
 <a href="http://www.zend.com/store/products/zend-optimizer.php">Zend
 Optimizer</a> for PHP 4.0.3 and later is
 available on Zend Technologies\' web site
</p>

<p>
 For <a href="http://gtk.php.net/">PHP-GTK</a>
 downloads, please visit our site dedicated
 to <a href="http://gtk.php.net/">PHP-GTK</a>.
</p>
';

site_header("Downloads");
?>

<a name="v5"></a>
<h1>PHP 5.1.6</h1>

<h2>Complete Source Code</h2>
<ul>
 <li>
  <?php download_link('php-5.1.6.tar.bz2', 'PHP 5.1.6 (tar.bz2)'); ?> - 24 Aug 2006<br />
  <span class="md5sum">md5: 08e423aa314369d4392a36b3f7246afc</span>
 </li>
 <li>
  <?php download_link('php-5.1.6.tar.gz', 'PHP 5.1.6 (tar.gz)'); ?> - 24 Aug 2006<br />
  <span class="md5sum">md5: 04d6166552289eaeff771f5ec953b065</span>
 </li>
</ul>

<h2>Windows Binaries</h2>
<ul>
 <li>
  <?php download_link('php-5.1.6-Win32.zip', 'PHP 5.1.6 zip package'); ?> - 24 Aug 2006<br />
  <span class="md5sum">md5: 866369dbe28284ad8d8b93dbbfd10ee4</span>
 </li>
 <li>
  <?php download_link('pecl-5.1.6-Win32.zip', 'Collection of PECL modules for PHP 5.1.6'); ?> - 24 Aug 2006<br />
  <span class="md5sum">md5: 4bd86d8673a146a22708006cf446e89e</span>
 </li>
</ul>

<p>
 We have a <a href="/manual/en/migration5.oop.php">PHP 5 / Zend Engine 2 page</a> explaining the
 language level changes introduced in PHP 5. The <a href="/ChangeLog-5.php">PHP 5
 ChangeLog</a> details all the other changes.
</p>

<hr />


<a name="v4"></a>
<h1>PHP 4.4.4</h1>

<h2>Complete Source Code</h2>
<ul>
 <li>
  <?php download_link('php-4.4.4.tar.bz2','PHP 4.4.4 (tar.bz2)'); ?> - 17 Aug 2006<br />
  <span class="md5sum">md5: bc6fa8908e2ac36e93bab9f7d42cda3a</span>
 </li>
 <li>
  <?php download_link('php-4.4.4.tar.gz', 'PHP 4.4.4 (tar.gz)');  ?> - 17 Aug 2006<br />
  <span class="md5sum">md5: e884b9b7c2e936310553c946bc2f67c2</span>
 </li>
</ul>

<p>
 See the <a href="/ChangeLog-4.php">ChangeLog</a> for a complete list of
 changes, or the <a href="/release_4_4_4.php">release notes</a> for more
 information on this particular release. Daily snapshots are also available
 from <a href="http://snaps.php.net/">snaps.php.net</a> (not intended for
 production use!).
</p>

<h2>Windows Binaries</h2>

<p>
 All Windows binaries can be used on Windows 98/Me and on Windows
 NT/2000/XP/2003.
</p>

<ul>
<!--
 <li>
  The Windows binaries and installer will follow shortly.
 </li>
-->

 <li>
  <?php download_link('php-4.4.4-Win32.zip', 'PHP 4.4.4 zip package'); ?> - 17 Aug 2006<br />
  (CGI binary plus server API versions for Apache, Apache2 (experimental),
  ISAPI, NSAPI, Servlet and Pi3Web. MySQL support built-in, many extensions
  included, packaged as zip)<br />
  <span class="md5sum">md5: 3ff3f58a2f573c80f34f2b670d7ac873</span>
 </li>
 <li>
  <?php download_link('php-4.4.4-installer.exe', 'PHP 4.4.4 installer'); ?> - 17 Aug 2006<br />
  (CGI only, MySQL support built-in, packaged as Windows installer to install
  and configure PHP, and automatically configure IIS, PWS and Xitami, with
  manual configuration for other servers. N.B. no external extensions
  included)<br />
  <span class="md5sum">md5: e5db53efb3e0fed5407fc7c71cf0b436</span>
 </li>
</ul>

<?php site_footer(); ?>
