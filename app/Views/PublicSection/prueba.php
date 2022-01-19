<?= $this->extend('PublicSection/base_layout') ?>

<?= $this->section('title') ?>
Prueba
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Prueba</h1>
<button id="botonajax" type="button" class="btn btn-primary">Primary</button>

<?php
    helper("custom_dates");
    $date = getCurrentDate();
    echo "<p>" . $date . "</p>";
?>

<?= $this->endSection() ?>



<?= $this->section('javascript') ?>

<script type="text/javascript">

    $(document).ready(function() {
        $('#botonajax').click(function(){

            $.ajax({
                url: "<?= route_to('pruebaAjax') ?>",
                type: "GET",
                async: true,
                tmeout: 5000,
                beforeSend:(xhr)=>{},
                success: (resoponse) => {
                    alert("Correcto");
                },
                error: (xhr,status,error) => {
                    alert("Errr");
                },
                complete: () => {}
            });

        })
    })

</script>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script type="text/javascript" src="<?= base_url('assets/PublicSection/js/prueba.js'); ?>"></script>
<?= $this->endSection() ?>

<?= $this->section('css') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/PublicSection/css/prueba.css'); ?>">
<?= $this->endSection() ?>
