<?php if (!$this->tableless): ?>
  <tr class="<?php echo $this->rowClass; ?>">
    <td class="col_0 col_first"><?php echo str_replace(array('<label', 'class="mandatory"'), array('<label class="form-lbl"', 'class="form-req mandatory"'), $this->generateLabel()); ?></td>
    <td class="col_1 col_last"><?php echo $this->generateWithError(); ?> <?php echo $this->generateQuestion(); ?></td>
  </tr>
<?php else: ?>
<div class="grid-<?php echo $this->formee_width; ?>-12<?php if ($this->formee_clear): ?> field-clear<?php endif; ?>">
	<?php echo str_replace(array('<label', 'class="mandatory"'), array('<label class="form-lbl"', 'class="form-req mandatory"'), $this->generateLabel()); ?>
	<?php echo str_replace('class="error', 'class="error form-msg-error', $this->getErrorAsHTML()); ?>
	<?php echo str_replace('class="captcha', 'class="captcha form-txt form-small', $this->generate()); ?>
	<div class="form-msg-question form-medium" style="margin-top: 0;"><?php echo $this->generateQuestion(); ?></div> 
</div>
<?php endif; ?>