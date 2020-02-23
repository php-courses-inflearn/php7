<?php

move_uploaded_file(
    $_FILES['userfile']['tmp_name'],
    __DIR__ . '/upload/' . $_FILES['userfile']['name']
);
