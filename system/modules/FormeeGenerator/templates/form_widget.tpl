<?php if (!$this->tableless): ?>
  <tr class="<?php echo $this->rowClass; ?>">
    <td class="col_0 col_first"><?php echo str_replace(array('<label', 'class="mandatory"'), array('<label class="form-lbl"', 'class="form-req mandatory"'), $this->generateLabel()); ?></td>
    <td class="col_1 col_last"><?php echo $this->generateWithError(); ?></td>
  </tr>
<?php else: ?>
<div class="grid-<?php echo $this->formee_width; ?>-12<?php if ($this->formee_clear): ?> field-clear<?php endif; ?>">
	<?php echo str_replace(array('<label', 'class="mandatory"'), array('<label class="form-lbl"', 'class="form-req mandatory"'), $this->generateLabel()); ?>
	<?php echo str_replace('class="error', 'class="error form-msg-error', $this->getErrorAsHTML()); ?>
	<?php switch ($this->type):
	case 'text':
	case 'textarea':
		$this->class = trim($this->class . ' form-txt');
	endswitch; ?>
	<?php echo $this->generate(); ?>
</div>
<?php endif; ?>