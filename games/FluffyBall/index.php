<?php
$page = "/games/FluffyBall";
$title = "Fluffy Ball - Rhys Bower";

require '../../includes/header.php';

?>

<div class="flash-game">
  <h1><strong>Fluffy Ball</strong></h1>
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="600" height="450" id="FluffyBall" align="middle">
    <param name="movie" value="/static/movies/FluffyBall.swf" />
    <param name="quality" value="high" />
    <param name="bgcolor" value="#ffffff" />
    <param name="play" value="true" />
    <param name="loop" value="true" />
    <param name="wmode" value="window" />
    <param name="scale" value="showall" />
    <param name="menu" value="true" />
    <param name="devicefont" value="false" />
    <param name="salign" value="" />
    <param name="allowScriptAccess" value="sameDomain" />
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="/static/movies/FluffyBall.swf" width="600" height="450">
      <param name="movie" value="/static/movies/FluffyBall.swf" />
      <param name="quality" value="high" />
      <param name="bgcolor" value="#ffffff" />
      <param name="play" value="true" />
      <param name="loop" value="true" />
      <param name="wmode" value="window" />
      <param name="scale" value="showall" />
      <param name="menu" value="true" />
      <param name="devicefont" value="false" />
      <param name="salign" value="" />
      <param name="allowScriptAccess" value="sameDomain" />
    <!--<![endif]-->
      <a href="http://www.adobe.com/go/getflash">
        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
      </a>
    <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
</div>

<?php require '../../includes/footer.php' ?>