<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/tabela.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/grid.css'); ?>">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('home') ?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('professores') ?>">Professores(as)</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('disciplina') ?>">Disciplina</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('novo-grade') ?>">Grade</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a type="button" href="<?php echo base_url('deslogar') ?>" class="btn btn-outline-danger">deslogar</a>
    </form>
  </div>
</nav>