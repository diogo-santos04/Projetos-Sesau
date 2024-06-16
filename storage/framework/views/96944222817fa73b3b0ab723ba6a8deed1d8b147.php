<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">

    <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
     .card {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      text-align: center;
    }

    .icon {
      color: #f0e9e8;
      font-size: 2rem;
      line-height: 1;
      margin-bottom: 10px;
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .btn-custom {
      background-color: #f0e9e8;
      color: #540f0f;
      border: none;
      padding: 2px 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #b65c52;
    }
    </style>
    <style>
        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/layout/app.blade.php ENDPATH**/ ?>