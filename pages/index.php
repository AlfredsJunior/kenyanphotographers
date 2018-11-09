<?php
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photgraphers</title>
    <section class="header_loggedin" id="header-index">
      <link rel="stylesheet" href="..\css\main.css">
      <link rel="stylesheet" href="..\css\index.css">
      <label for="search_by_name">
        <input type="text" name="search_by_name" value="" placeholder="Search" class="search">
        <button type="button" name="button" onclick="" id="btn-search" >search</button>
      </label></br></br>
      <label for="" id="btn-sign-in">
        <a href="..\signincl\signin.php">
        <button type="button" name="submit"  id="btn-sign-in"
        onclick="" value="SING IN" placeholder>SING IN</button></a>
      </label></br></br>

      <center>
      <a href="">News Feed</a> &nbsp &nbsp &nbsp &nbsp
      <a href="">Services</a>&nbsp &nbsp &nbsp &nbsp
      <a href="">Notifications</a>&nbsp &nbsp &nbsp &nbsp
      </center></br></br>
      <label for="" id="btn-sign-up">
        <a href="..\signincl\signup.php">
        <button type="button" name="button" placeholder="SIGN UP" id="btn-sign-up" onclick="">SIGN UP</button></a>
      </label></br></br>
      <center>  <label for="post_self" id="whatsnew">
        <input type="text" name="post_self" value="" placeholder="Whats new today?">
        <button type="button" name="button" id="btn-post-index">Post</button>
      </label> </center>
    </section>
  </head>
  < ?php include 'footer.php'; ?>
?>
