<?php
/**
 * You can add here your custom JS scripts
 */
?>
<!-- Select2 -->
<?= $this->Html->script('/adminlte/plugins/select2/js/select2.full.min.js') ?>
<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
        theme: 'bootstrap4'
    });
});
</script>
