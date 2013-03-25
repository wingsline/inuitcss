<?php
    $presenter = new Wingsline\Inuitcss\Pagination\InuitcssPresenter($paginator);

    $trans = $environment->getTranslator();
?>

<?php if ($paginator->getLastPage() > 1): ?>
    <ol class="nav pagination">
            <?php 
                echo $presenter->getFirst($trans->trans('pagination.first'));
                echo $presenter->getPrevious($trans->trans('pagination.previous'));
                echo $presenter->renderSlider();
                echo $presenter->getNext($trans->trans('pagination.next'));
                echo $presenter->getLast($trans->trans('pagination.last'));
            ?>
    </ol>
<?php endif; ?>
