<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <p><?php echo $data['description']; ?></p>
  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
  <script>
toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')

  </script>
<?php require APPROOT . '/views/inc/footer.php'; ?>