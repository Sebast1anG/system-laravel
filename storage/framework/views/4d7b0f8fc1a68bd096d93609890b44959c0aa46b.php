<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/doctors">Lekarze</a>
        </li>   
      </ul>
    </div>
    </div>
</nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię i nazwisko</th>
      <th scope="col">Email</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adres</th>
    </tr>
  </thead>
  <tbody>

    <?php $__currentLoopData = doctorsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($doctor->id); ?></th>
      <td><?php echo e($doctor->name); ?></td>
      <td><?php echo e($doctor->phone); ?></td>
      <td><?php echo e($doctor->status); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
  </body>
</html><?php /**PATH C:\xampp\htdocs\webserver\laravel\resources\views/doctors/list.blade.php ENDPATH**/ ?>