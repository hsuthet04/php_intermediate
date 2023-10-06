<?php
include_once "db.php";

setcookie("token",time(),$data->getTimeStamp());
$db = new DB();

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];

    // echo "Name is ".$name."<br>";
    // echo "Email is ".$email."<br>";
    // echo "Comment is ".$comment."<br>";
    if($db->insert($name,$email,$comment))
        header("Location:index.php");
    else
        echo "<script> alert('Comment insert fail'); </script>";
    }else{
        $comments=$db->getAllComment();
        echo count($comments);
}
?>
<style>
    .wrapper {
        width: 500px;
        height: 500px;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        border: 1px solid red;
        padding: 20px;
    }

    form {
        width: inherit;
    }

    textarea,
    input:not([type="submit"]) {
        width: inherit;
        padding: 10px;
    }

    input[type="submit"] {
        background: cornsilk;
        padding: 10px;
        font-size: 16px;
        color: black;
        float: right;
    }

    .pannel {
        height: 200px;
        background-color: aquamarine;
        overflow: scroll;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        padding: 10px 0;
    }

    li>span {
        padding-left: 20px;
    }

    .clear {
        clear: both;
    }

    h1 {
        text-align: center;
    }
</style>
<div class="wrapper">
    <h1>Title here</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off" >
        <input type="text" name="name" id="id" placeholder="Name"><br>
        <input type="email" name="email" id="email" placeholder="Email"><br>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Comment">
        <div class="clear"></div>
    </form>
    <div class="pannel">
        <ul>
            <?php foreach($comments as $comment): ?>
            <li>
                <span><?php echo $comment->name; ?></span>
                <span><?php echo $comment->email; ?></span>
                <span><?php echo $comment->comment; ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>