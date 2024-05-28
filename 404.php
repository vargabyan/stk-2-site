<?php require 'head.php' ?>


<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/404', 'name' => 'Ошибка']]);
?>

<section class="core-container warning">
    <img class="warning_img" src="images/404-logo.png" alt="404-logo">
    <p class="warning_subtitle">Упс, кажется что-то пошло не так. Возможно страница удалена</p>
    <a class="warning_btn btn-grey" href="/">На главную</a>
</section>


<?php require 'footer.php' ?>
