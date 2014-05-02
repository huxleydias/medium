<?php
/**
 * @package WordPress
 * @subpackage IHGES
 */
?>
<form method="get" id="searchbar" action="<?php echo home_url( '/' ); ?>">
<input type="text" size="16" name="s" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" id="search" />
<input type="submit" id="searchsubmit" value="" />
</form>