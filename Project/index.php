<?php
  include_once 'header.php';
?>

<section class="index-intro">
  <h1>Special Occasion Message Sender</h1>
  <p>My website allows you to send a special message to someone at the time that you select!</p>
</section>

<section class="index-categories">
  <h2>Create Your Message</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="index-categories-list">
    <div>
      <label for="textfield">Message:</label>
		<textarea type="text" name="message" id="textfield" rows = "5" cols = "25"></textarea>
<!--		<form action="upload.php" method="post" enctype="multipart/form-data">-->
      <input type="file" name="file">
<!--      <button type="submit" name="submit">UPLOAD</button>-->
<!--    </form>-->
    </div>
    <div>
      <label for="date">Date:</label>
          <input type="date" name="date" id="date">
		  <label for="time">Time:</label>
          <input type="time" name="time" id="time">
    </div>
    <div class="signup-form">
<!--      <form name = "message" style = "width: 90%;">-->
			<article>
              <label for="name">Recipient's Name</label>
              <input type="text" class="form-control" id="name" name = "name" placeholder="Enter recipient's full name">
               </article>
			<article>
              <label for="email">Recipient's Email Address</label>
              <input type="email" class="form-control" id="email" name = "email" placeholder="Enter recipient's email">
               </article>
            
            <button type="submit" name = "submit" class="btn btn-primary">submit</button>
<!--          </form>-->
          
    </div>
    
  </div>
	
</form>
</section>

<?php
  include_once 'footer.php';
?>