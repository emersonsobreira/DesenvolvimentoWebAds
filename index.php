<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <form id="signo-form"  method="POST" action="show_zodiac_sign.php">
    <h1>Pesquise Seu Signo</h1>

    <div class="mb-3">
    <label for="data_nascimento" class="form-label">Data de Nascimento</label> <br>
    <input type="date" class="form-control" id="data_nascimento"
    name="data_nascimento" required>
    </div>
    <button type="submit" class="btn btn-primary">Descobrir Signo</button>
</form>


</div>
<?php include('layouts/footer.php'); ?>