<?= $this->extend('PublicSection/base_layout') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Home</h1>
<!-- https://codepen.io/nbheemanathi/pen/rwQZVQ -->
<?= $this->endSection() ?>


<?= $this->section('css') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/PublicSection/css/global.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<link type="text/javascript" href="<?= base_url('assets/PublicSection/js/global.js'); ?>">
<?= $this->endSection() ?>
