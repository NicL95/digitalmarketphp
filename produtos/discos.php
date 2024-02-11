<?php
include_once '../inc/header.php';
?>

<head>
  <title>DM | Discos</title>
</head>

<main>
  <section class="p-3">
    <div class="bg-body-secondary border text-dark p-3">
      <h1 class="text-center">Discos</h1>
    </div>
  </section>

  <section>
    <div class="modal" id="modal">
      <div class="modal-content">
        <img src="" alt="" class="modal-img" id="modal-img">
      </div>
      <div class="modal-boton" id="modal-boton">X</div>
    </div>

    <div class="container-productos">
      <div class="card">
        <img src="../util/images/ssd128gb.jpg" class="card-img p-2">
        <h5 class="p-2">Disco SSD SATA Kingston 240/480GB</h5>
        <h3 class="p-2"></h3>
        <a href="https://wa.me/351920118870" class="btn btn-primary" data-id="1">Consultar</a>
      </div>
      <div class="card">
        <img src="../util/images/ssd128gb.jpg" class="card-img p-2">
        <h5 class="p-2">Disco SSD SATA Kingston 1/2TB</h5>
        <h3 class="p-2"></h3>
        <a target="_blank" href="https://wa.me/351920118870" class="btn btn-primary" data-id="1">Consultar</a>
      </div>
      <div class="card">
        <img src="../util/images/verbatim 512gb.jpg" class="card-img p-2">
        <h5 class="p-2">Disco SSD M.2 Verbatim 512GB/1TB</h5>
        <h3 class="p-2"></h3>
        <a target="_blank" href="https://wa.me/351920118870" class="btn btn-primary" data-id="1">Consultar</a>
      </div>
      <div class="card">
        <img src="../util/images/nvme 250gb.jpg" class="card-img p-2">
        <h5 class="p-2">Disco NVMe M.2 Kingston 250/500gb 1/2TB</h5>
        <h3 class="p-2"></h3>
        <a target="_blank" href="https://wa.me/351920118870" class="btn btn-primary" data-id="1">Consultar</a>
      </div>
    </div>
  </section>
</main>

<?php include_once '../inc/footer.php'; ?>

</body>

</html>