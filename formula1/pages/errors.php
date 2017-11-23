<?php  if (count($errors) > 0) : ?>
	<div class="error">
		
		<p align="center"><font size="5" color="red">Eroare</p>
		<?php foreach ($errors as $error) : ?>
			<li align="center"><font size="3" color="red"><?php echo $error ?></li>
		<?php endforeach ?>
		
	</div>
<?php  endif ?>
