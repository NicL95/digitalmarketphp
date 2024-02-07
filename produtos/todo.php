<?php
include_once '../inc/header.php';
?>
<main>
  <section class="p-3">
    <div class="bg-body-secondary border text-dark p-3">
      <h1 class="text-center">Todos os Produtos</h1>
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
            <h5>Disco SSD SATA Kingston 240gb</h5>
            <h3 class="p-2">€45</h3>
            <a href="https://wa.me/351920118870" class="btn btn-primary" data-id="1">Comprar</a>
        </div>
        <div class="card">
            <img src="../util/images/ssd128gb.jpg" class="card-img p-2">
            <h5>Disco SSD SATA Kingston 480gb</h5>
            <h3 class="p-2">€75</h3>
            <a target="_blank" href="https://wa.me/351920118870" class="btn btn-primary" data-id="1">Comprar</a>
        </div>
        <div class="card">
            <img src="../util/images/verbatim 512gb.jpg" class="card-img p-2">
            <h5>Disco SSD M.2 Verbatim 512gb</h5>
            <h3 class="p-2">€40</h3>
            <a target="_blank" href="https://wa.me/351920118870" class="btn btn-primary" data-id="1">Comprar</a>
        </div>
        <div class="card">
            <img src="../util/images/nvme 250gb.jpg" class="card-img p-2">
            <h5>Disco NVMe M.2 Kingston 250gb</h5>
            <h3 class="p-2">€80</h3>
            <a target="_blank" href="https://wa.me/351920118870" class="btn btn-primary" data-id="1">Comprar</a>
        </div>
    </div>
</section>

</main>

<?php include_once '../inc/footer.php'; ?>
</body>

</html>