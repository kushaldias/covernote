<div id="panel-search">
	<form method="post" action="/">
		<ul>
			<li><input class="input_search" type="text" name="search-text" value="<?php echo ($_REQUEST['search-text']=='')? 'Search': $_REQUEST['search-text'];?>" /></li>
			<li>
				<select class="select_search" name="industiry">
					<option value="0">-SELECT-</option>
					<?php foreach($meta->getIndustries() as $i){?>
						<optgroup label="<?php echo $i['name'];?>">
						<option value="industries_id-<?php echo $i['id'];?>">All</option>	
						<?php foreach($meta->getIndustiresSectors($i['id']) as $is){?>
							<option value="industries_sectors_id-<?php echo $is['id'];?>"><?php echo $is['name'];?></option>
						<?php }?>
						</optgroup>
					<?php }?>
				</select>
			</li>
			<li><input type="submit" name="search" value="Search" class="submit" /></li>
			<li><a class="a_search" href="advanced_search.htm">Advance Search</a></li>
		</ul>
	</form>
	<div style="clear:both"></div>
</div>
<script type="text/javascript">
$(document).ready(function(data) {
	$('input[name=search-text]').click(function (data){
		if($('input[name=search-text]').val()=='Search' || $('input[name=search-text]').val()==""){
			$('input[name=search-text]').val('');
		}
	});
});
</script>