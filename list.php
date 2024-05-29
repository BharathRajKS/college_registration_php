<?php require "view/par/nav.php"; ?>

<?php if (isset($_GET['list_id']) && $_GET['list_id']=='true'): ?>
    <script>
        document.querySelector('.list_id').style.display = 'block';
    </script>
<?php endif;?>
