<?php require_once '../../includes/header.php'; ?>

<link rel="stylesheet" href="/css/form.css">

<main id="main">
    <div id="form_wrapper">
        <form class="ui form" action="/board/write_process.php" method="post">
            <div class="field">
                <label>Title</label>
                <input type="text" name="title">
            </div>
            <div class="field">
                <label>Content</label>
                <textarea name="content"></textarea>
            </div>
            <input type="hidden" name="csrf_token" value="<?=token(); ?>">
            <button class="ui button" type="submit">Submit</button>
        </form>
    </div>
</main>

<?php require_once '../../includes/footer.php'; ?>
