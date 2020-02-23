<?php require_once '../../includes/header.php'; ?>

<link rel="stylesheet" href="/css/form.css">

<main id="main">
    <div id="form_wrapper">
        <form class="ui form" action="/auth/login_process.php" method="post">
            <div class="field">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <input type="hidden" name="csrf_token" value="<?=token(); ?>">
            <button class="ui button" type="submit">Login</button>
        </form>
    </div>
</main>

<?php require_once '../../includes/footer.php'; ?>
