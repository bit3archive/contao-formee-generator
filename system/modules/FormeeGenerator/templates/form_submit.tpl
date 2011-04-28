<?php if (!$this->tableless): ?>
  <tr class="<?php echo $this->rowClass; ?>">
    <td class="col_0 col_first">&nbsp;</td>
    <td class="col_1 col_last"><div class="submit_container"><?php echo $this->generate(); ?></div></td>
  </tr>
<?php else: ?>
  <div class="grid-<?php echo $this->formee_width; ?>-12<?php if ($this->formee_clear): ?> field-clear<?php endif; ?> submit_container">
    <?php echo str_replace('class="submit', 'class="submit form-button' . ($this->formee_align ? ' form-'.$this->formee_align : ''), $this->generate()); ?> 
  </div>
<?php endif; ?>