<?php
    $presenter = new Wingsline\Inuitcss\Pagination\InuitcssPresenter($paginator);

    $trans = $environment->getTranslator();
?>

<?php if ($paginator->getLastPage() > 1): ?>
    <ol class="nav pagination">
            <?php 
                echo $presenter->getPrevious($trans->trans('pagination.previous'));
                echo $presenter->getNext($trans->trans('pagination.next'));
            ?>
    </ol>
<?php endif; ?>
