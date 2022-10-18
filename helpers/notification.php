<!-- If javascript fails or is disabled PHP or Server side will be able to hundle validations and notifications -->
<?php if (gettype($output) == 'array'  && array_key_exists('alert', $output)) :?>
<script src="<?php print modules('sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
<script>
    Swal.fire({
        // title: 'Error!',
        position: 'top-end',
        text: '<?php print $output['text']; ?>',
        icon: '<?php print $output['icon']; ?>',
        showConfirmButton: false,
        // confirmButtonText: 'false',
        timer: <?php print $output['timer'];?>
    });
</script>
<?php endif; ?>