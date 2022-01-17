<?= $this->extend('PublicSection/base_layout') ?>

<?= $this->section('title') ?>
Peliculas
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1><?= $title ?></h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($movies as $m): ?>
            <tr>
                <td><?= $m["id"] ?></td>
                <td><?= $m["title"] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>


<?= $this->section('css') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/PublicSection/css/global.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<link type="text/javascript" href="<?= base_url('assets/PublicSection/js/global.js'); ?>">
<?= $this->endSection() ?>
