<?php
session_start();

 require 'config.php';

 $name = $_POST['name'];
 $title = $_POST['heading'];
 $content = $_POST['content'];


 $image_name = $_FILES['image']['name'];
 $image_size = $_FILES['image']['size'];
 $tmp_name = $_FILES['image']['tmp_name'];
 $error = $_FILES['image']['error'];

    if($error === 0){
        if($image_size> 1500000){
            $em =  "File too large";

        }else{
           $img_ex =    pathinfo($image_name,PATHINFO_EXTENSION);
           $img_ex_lc = strtolower($img_ex);

           $allowed_exs = array("jpg","png","jpeg");

            if(in_array($img_ex_lc,$allowed_exs)){
                    $new_img_id = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path= 'image/postimages/'.$new_img_id;
                    move_uploaded_file($tmp_name,$img_upload_path);

                    //Uploading to database
                    $sql = conn->prepare("INSERT INTO heroku_adaaf59afa8e08a.posts(author,title,content,post_img) VALUES(?,?,?,?)");
                    $sql->bind_param("ssss",$name,$title,$content,$new_img_id);
                    $sql->execute();

            echo "<script type='text/javascript'>alert('Blog Updated successfully!');
          window.location='blogpost.php';
          </script>"



            }else{
              echo "<script type='text/javascript'>alert('Blog could not be uploaded!');
            window.location='blogpost.php';
            </script>"
            }
        }
 ?>
