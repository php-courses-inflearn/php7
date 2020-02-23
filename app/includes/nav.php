<nav class="ui text menu" id="nav">
    <a class="item" href="/">홈</a>
    <?php
    if (user()) :
        echo <<<'HTML'
	<a class='ui item' href='/board/write.php'>게시판 글쓰기</span>
HTML;
    endif;
    ?>
    <div class="right menu">
        <?php
        if ($user = user()) :
            echo <<<HTML
	<span class='ui item'>{$user} 님, 환영합니다.</span>
	<a class='ui item' href='/auth/logout.php'>로그아웃</span>
HTML;
        else :
                echo <<<'HTML'
	<a class='ui item' href='/auth/login.php'>로그인</a>
HTML;
        endif;
        ?>
        <a class="ui item" href="/auth/register.php">회원가입</a>
    </div>
</nav>
