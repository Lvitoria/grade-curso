<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/login.css'); ?>">
<!------ Include the above in your HEAD tag ---------->
<!-- Mensagem de erro -->

<?php
if ($this->session->flashdata('danger')) {
  $alert['msg'] = '<b>' . $this->session->flashdata('danger') . '</b>';
}
if (isset($alert)) {
?>
  <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php
    echo $alert['msg'];
    ?>
  </div>
<?php
}
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo base_url('assets/icones/school.png'); ?>" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="<?php echo base_url('Login/logar') ?>" method="post">
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Login">
    </form>

  </div>
</div>