<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Contatos</title>

  <link rel="shortcut icon" href="<?= base_url('images/favcon.png'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('includes/css/padrao.css'); ?>">
  <script src="<?= base_url('includes/js/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('includes/js/jquery.mask.js'); ?>"></script>
  <script src="<?= base_url('includes/js/popper.min.js'); ?>"></script>
  <script src="<?= base_url('includes/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('includes/js/bootstrap-select.min.js'); ?>"></script>
  <script src="<?= base_url('includes/js/all.js'); ?>" crossorigin="anonymous"></script>
  <link href="<?= base_url('includes/css/bootstrap-select.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('includes/css/bootstrap.css'); ?>" rel="stylesheet" />

</head>

<body style="background-color: ghostwhite;">

  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link " href="<?= base_url('contatos/listar'); ?>">Contatos<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= base_url('contatos/cadastrar'); ?>">Cadastrar<span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>
  </nav>