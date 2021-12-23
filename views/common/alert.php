<!-- danger, warning, info, success -->
<?php if(isset($this->alert)):?>
    <div class="alert alert-<?php echo $this->alert['type']?>" role="alert">
        <?php echo $this->alert['message']?>
    </div>
<?php endif; ?>