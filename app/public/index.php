<?php
    require_once '../includes/header.php';
    require_once '../includes/nav.php';
?>
<?php require_once '../lib/Board.php'; ?>
<main id="main">
    <div id="post_wrapper" style="margin-top: 50px;">
    <?php
    foreach ($posts = getPosts() as $row) :
        $content = mb_substr($row['content'], 0, 180);

        echo <<<HTML
    <div class="ui items">
        <div class="item" style="margin-top: 35px;">
            <div class="content">
                <a class="header" href="/board/read.php?id={$row['id']}">$row[title]</a>
            <div class="description">
                <p>$content</p>
            </div>
        </div>
    </div>
HTML;
    endforeach;
    ?>
    </div>
</main>

<?php require_once '../includes/footer.php'; ?>
