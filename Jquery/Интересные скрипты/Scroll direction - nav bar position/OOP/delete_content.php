<?php
if (isset($_POST['news_dell'])){
    $id = $_POST['news_dell'];
    Guestbook::Delete($id);
}