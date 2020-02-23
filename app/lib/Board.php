<?php

const POSTS_PATH = __DIR__ . '/../storage/posts.csv';

/**
 * Writeing a post.
 *
 * @param string $title
 * @param string $content
 *
 * @return bool
 */
function write(string $title, string $content): bool
{
    if (file_exists(POSTS_PATH)) :
        $fh = fopen(POSTS_PATH, 'a+');
        fwrite($fh, implode(',', [
            /*
             * 게시판 번호를 쓰기 위함입니다.
             * 모든 라인을 다 읽어야 하므로 파일이 커지면 느려집니다.
             */
            count(file(POSTS_PATH, FILE_SKIP_EMPTY_LINES)) + 1,
            $title,
            $content,
        ]) . "\r\n");

        fclose($fh);

        return true;
    endif;

    return false;
}

/**
 * Getting posts.
 *
 * @param string $id      = null
 * @param string $content
 *
 * @return bool
 */
function getPosts(string $id = null): array
{
    $fh = fopen(POSTS_PATH, 'r');
    if (file_exists(POSTS_PATH)) :
        $posts = [];
        while (!feof($fh) && ($row = fgetcsv($fh))) :
            /*
             * CSV 파일에 저장된 데이터 필드입니다.
             * 키값이 없으므로 구분을 위해 따로 변수를 선언해둡니다.
             */
            foreach (['_id', '_title', '_content'] as $index => $name) :
                $$name = $row[$index];
            endforeach;

            $currentPost = [
                'id'      => $_id,
                'title'   => $_title,
                'content' => $_content,
            ];

            if (isset($id) && $id == $_id) :
                return $currentPost;
            else :
                    array_push($posts, $currentPost);
            endif;
        endwhile;

        return $posts;
    endif;
}
