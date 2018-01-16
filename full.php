<?php $view->inc('partials/header.php'); ?>

    <div class="">

        <?
          $a = new Area('Top_Section');
          $a->display($c);
        ?>

    </div>

    <div class="">

        <?
          $a = new Area('Section_2');
          $a->display($c);
        ?>

    </div>

    <div class="">

        <?
          $a = new Area('Section_3');
          $a->display($c);
        ?>

    </div>

    <div class="">

        <?
          $a = new Area('Section_4');
          $a->display($c);
        ?>

    </div>



  <?php $view->inc('partials/footer.php') ?>
