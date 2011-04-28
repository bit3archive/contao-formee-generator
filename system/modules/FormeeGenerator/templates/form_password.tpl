<?php if (!$this->tableless): ?>
  <tr class="<?php echo $this->rowClass; ?>">
    <td class="col_0 col_first"><?php echo str_replace(array('<label', 'class="mandatory"'), array('<label class="form-lbl"', 'class="form-req mandatory"'), $this->generateLabel()); ?></td>
    <td class="col_1 col_last"><?php echo $this->generateWithError(); ?></td>
  </tr>
  <tr class="<?php echo $this->rowClassConfirm; ?>">
    <td class="col_0 col_first"><?php echo str_replace(array('<label', 'class="mandatory"'), array('<label class="form-lbl"', 'class="form-req mandatory"'), $this->generateConfirmationLabel()); ?></td>
    <td class="col_1 col_last"><?php echo $this->generateConfirmation(); ?></td>
  </tr>
<?php else: ?>
<?php $this->class = trim($this->class . ' form-txt'); ?>
<div class="grid-<?php echo ceil($this->formee_width / 2); ?>-12<?php if ($this->formee_clear): ?> field-clear<?php endif; ?>">
	<?php echo str_replace(array('<label', 'class="mandatory"'), array('<label class="form-lbl"', 'class="form-req mandatory"'), $this->generateLabel()); ?>
	<?php echo str_replace('class="error', 'class="error form-msg-error', $this->getErrorAsHTML()); ?>
	<?php echo $this->generate(); ?>
</div>
<div class="grid-<?php echo floor($this->formee_width / 2); ?>-12">
	<?php echo str_replace(array('<label', 'class="mandatory"'), array('<label class="form-lbl"', 'class="form-req mandatory"'), $this->generateConfirmationLabel()); ?>
	<?php echo $this->generateConfirmation(); ?>
</div>
<?php endif; ?>