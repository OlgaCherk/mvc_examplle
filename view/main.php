<?php
ob_start();
?>
<h2>Проект MVS технологии. Игры</h2>
<article>
    <p>
        Просмотр игр и краткое их описание
    </p>
</article>
<?php $content = ob_get_clean(); ?>
<?php include "view/templates/layout.php";
