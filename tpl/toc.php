<div id="breadcrumbs">
	<ul id="breadcrumb">
		<?php foreach ($trail as $item) { ?>
			<li><a href="<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a></li>
		<?php } ?>
	</ul>
</div>
<div class="masonry-loop">
	<?php foreach ($tracks as $track) { ?>
		<div class="track listing">
		    <div class="listing-info" style="border: 1px solid <?php echo $track["color"]; ?>;">
		    	<div class="header">
		    		<div class="title" style="background-color: <?php echo $track["color"]; ?>;">
		    			<?php echo $track["title"]; ?>
		    		</div>
		    	</div>

		    	<div class="description">
		    		<?php echo $track["description"]; ?>
		    	</div>
		        
		        <div class="footer">
		    	    <span class="list-link"><a href="<?php echo $track["url"]; ?>">Visit Track</a></span>
		        </div>
		    </div>
		</div>
	<?php } ?>

	<?php foreach ($swagpaths as $swagpath) { ?>
		<div class="course listing <?php if (!$swagpath["prepared"]) echo "unprepared"; ?>">
		    <div class="listing-info" style="border: 1px solid <?php echo $swagpath["color"]; ?>;">
		    	<div class="header">
		    		<div class="title" style="background-color: <?php echo $swagpath["color"]; ?>;">
		    			<?php echo $swagpath["title"]; ?>
		    		</div>
		    	</div>

		    	<div class="description">
		    		<?php echo $swagpath["description"]; ?>
		    	</div>

		        <div class="footer">
		            <a href="<?php echo $swagpath["url"]; ?>">Follow Swagpath</a>

		            <?php if ($swagpath["complete"]) { ?>
			            <img class="listing-complete" src="<?php echo $pluginurl ?>/img/badge.png" />
			        <?php } else { ?>
			            <img class="listing-complete" src="<?php echo $pluginurl ?>/img/badge-gray.png" />
		        	<?php } ?>
		        </div>
		    </div>
		</div>
	<?php } ?>

	<?php if ($unprepared) { ?>
		<div class="after listing">
		    <div class="after-info">
		        This track contains <?php echo $unprepared; ?> more swagpath(s) beyond your current level.
		        <br/><br/>
		        <a href="#" class="view-unprepared">Click to view</a>
		    </div>
		</div>
	<?php } ?>
</div>