<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhcchatbot/module','Possible questions');?></label>
    <textarea rows="5" cols="" class="form-control" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhcchatbot/module','Each question has to be to separate line');?>" name="question"><?php echo htmlspecialchars($question->question)?></textarea>    
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhcchatbot/module','Answer');?></label>
    <input type="text" class="form-control" name="answer"  value="<?php echo htmlspecialchars($question->answer)?>" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhcchatbot/module','Context');?></label>
    <?php echo erLhcoreClassRenderHelper::renderCombobox( array (
			'input_name'     => 'context_id',
			'optional_field' =>  erTranslationClassLhTranslation::getInstance()->getTranslation('department/edit','None'),
			'display_name'   => 'name',
            'css_class'      => 'form-control',
			'selected_id'    => $question->context_id,
			'list_function'  => 'erLhcoreClassModelLHCChatBotContext::getList',
			'list_function_params'  => array_merge(array('limit' => '1000000')),
	)); ?>
</div>