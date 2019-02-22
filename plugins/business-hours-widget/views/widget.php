<!-- This file is used to markup the public-facing widget. -->
<?php if (strlen(trim($monday_friday)) > 0): ?>
<p>
    <span class="day-of-week">Monday - Friday:</span>
    <?php echo $monday_friday; ?>
</P>
<?php endif; ?>

<?php if (strlen(trim($saturday)) > 0): ?>
<p>
    <span class="day-of-week">Saturda:</span>
    <?php echo $saturday; ?>
</P>
<?php endif; ?>

<?php if (strlen(trim($sunday)) > 0): ?>
<p>
    <span class="day-of-week">Sunday:</span>
    <?php echo $sunday; ?>
</P>
<?php endif; ?> 