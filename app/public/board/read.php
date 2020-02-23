<?php
    require_once '../../includes/header.php';
    require_once '../../includes/nav.php';
?>
<?php require_once '../../lib/Board.php'; ?>
<main id="main">
    <div id="post_wrapper" style="margin-top: 50px;">
        <?php
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            $row = getPosts($id);
            $content = str_replace('&#13;&#10;', '<br />', $row['content']);

        echo <<<HTML
    <h1 class="ui header">$row[title]</h1>
    <div class="content">$content</div>
HTML;
        ?>
    </div>
</main>

<?php require_once '../../includes/footer.php'; ?>
