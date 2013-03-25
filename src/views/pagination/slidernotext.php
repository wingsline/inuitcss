<?php
    $presenter = new Wingsline\Inuitcss\Pagination\InuitcssPresenter($paginator);
?>

<?php if ($paginator->getLastPage() > 1): ?>
    <ol class="nav pagination">
            <?php 
                echo $presenter->getFirst();
                echo $presenter->render();
                echo $presenter->getLast();
            ?>
    </ol>
<?php endif; ?>
