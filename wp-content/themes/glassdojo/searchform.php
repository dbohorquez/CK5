<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
	<label class="screen-reader-text" for="s">Search for:</label>
    <input type="text" size="26" value="Buscar..." onblur="fillSearchField(this);" onclick="clearSearchField(this);" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="Buscar" class="nomargin" />
</form>