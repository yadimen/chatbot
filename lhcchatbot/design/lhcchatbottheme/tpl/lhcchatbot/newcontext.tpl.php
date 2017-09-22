<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhcchatbot/module','New');?></h1>

<?php if (isset($errors)) : ?>
	<?php include(erLhcoreClassDesign::designtpl('lhkernel/validation_error.tpl.php'));?>
<?php endif; ?>

<form action="<?php echo erLhcoreClassDesign::baseurl('lhcchatbot/newcontext')?>" method="post">

	<?php include(erLhcoreClassDesign::designtpl('lhcchatbot/context/form.tpl.php'));?>
	
    <div class="btn-group" role="group" aria-label="...">
		<input type="submit" class="btn btn-default" name="Save_departament" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/buttons','Save');?>"/>
		<input type="submit" class="btn btn-default" name="Cancel_departament" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/buttons','Cancel');?>"/>
	</div>
	
</form>
