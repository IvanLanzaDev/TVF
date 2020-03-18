<?php
    include("connect.class.php");

    $title_post = $_POST['title_posts'];
    $content_post = $_POST['content_posts'];
    $btn_new_post = $_POST['btn_new_post'];

    if(isset($btn_new_post)){
        $new_post = mysqli_query($link, "INSERT INTO `posts` (`title_posts`, `content_posts`) VALUES ('$title_post', '$content_post');");
        if($new_post){
            header("location: ok-new-post.php");
        }
    }

    $get_posts_dashboard_index = mysqli_query($link, "SELECT * FROM `posts` ORDER BY `id_posts` DESC LIMIT 3");
    $get_posts_dashboard_index_mob = mysqli_query($link, "SELECT * FROM `posts` ORDER BY `id_posts` DESC LIMIT 3");
    $get_all_posts = mysqli_query($link, "SELECT * FROM posts ORDER BY id_posts DESC");
    $get_all_posts_mob = mysqli_query($link, "SELECT * FROM posts ORDER BY id_posts DESC");
    $get_all_posts_blog = mysqli_query($link, "SELECT * FROM posts ORDER BY id_posts DESC");

    $id_post_url = $_GET['id_post'];
    $get_title = mysqli_query($link, "SELECT * FROM posts WHERE id_posts = '$id_post_url'");
    $show_post = mysqli_query($link, "SELECT * FROM posts WHERE id_posts = '$id_post_url'");

    $id_edit_post_url = $_GET['edit_post'];
    $btn_edit_post = $_POST['btn_edit_post'];    
    
    $get_edit_post = mysqli_query($link, "SELECT * FROM posts WHERE id_posts = '$id_edit_post_url'");
    if($get_edit_post){
        $list_get_edit_post = mysqli_fetch_array($get_edit_post);
    }

    $title_post = $_POST['title_posts'];
    $content_post = $_POST['content_posts'];

    if(isset($btn_edit_post)){
        $edit_post = mysqli_query($link, "UPDATE posts SET title_posts='$title_post', content_posts='$content_post' WHERE id_posts='$id_edit_post_url'");

        if($edit_post){
            header("location: ok-edit-post.php");
        }
    }

    $id_delete_post_url = $_GET['delete_post'];
    $btn_delete_post = $_POST['btn_delete_post'];

    if(isset($btn_delete_post)){
        $delete_post = mysqli_query($link, "DELETE FROM `posts` WHERE `id_posts` = '$id_delete_post_url'");
        if($delete_post){
            header("location: ok-delete-post.php");
        }
    }


    // LOGIN
$email_login = $_POST['email_user'];
$password_login = $_POST['pass_user'];
$btn_login = $_POST['btn_login'];

if(isset($btn_login)){
    $execute_login = mysqli_query($link, "SELECT * FROM user WHERE email_user = '$email_login' AND pass_user = '$password_login'");
    $count_execute_login = mysqli_num_rows($execute_login);
    
   
    
    if($count_execute_login == 1){
        session_start();
        $_SESSION['email_user'] = $_POST['email_user'];
        $_SESSION['pass_user'] = $_POST['pass_user'];
        header("location: dashboard.php");
        
        
    }else{
        echo "Erro Login";
    }
}
    


?>

