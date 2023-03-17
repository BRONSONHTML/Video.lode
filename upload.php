<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $video_file = $_FILES['video']['name'];
  $video_temp = $_FILES['video']['tmp_name'];

  $upload_dir = './uploads/';
  $video_path = $upload_dir . $video_file;

  if (move_uploaded_file($video_temp, $video_path)) {
    echo "The video has been uploaded successfully!";
  } else {
    echo "Sorry, there was an error uploading your video.";
  }
}
?>
