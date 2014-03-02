<?php include_once('tiles/header.php'); ?>
      <div class="hero-unit">
        <h1 style=" color:#ffffff;">Hello <?= $_SESSION['username'] ?>!</h1>
        <p style="font-family:arial; color:#000000;font-size:19px;">Welcome to the forum that gives you all technological updates at one place! We aim to be a friendly, educational community dedicated to technology. Here, you'll meet other technology enthusiasts who love talking and assisting people with technical questions on computer science, gadgets, software, hardware related discussions and more.</p>
      </div>
      <div class="row">
        <div class="span4">
          <h2 style=" color:#ffffff;">Features</h2>
          <p style="font-family:arial; color:#000000;font-size:19px;"> 1. Well, you can start any technology related discussion and trust us, you'll find the best possible updates and solutions.<br>
			 2. You can respond to other's posts.<br>
			 3. You can choose from the different topics available and get the related news.<br>
			 4. You can view all the messages posted by a particular user.</p>
          <p><a style=" color:#ffffff; font-size:17px; " class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2 style=" color:#ffffff;">Uses</h2>
          <p style="font-family:arial; color:#000000;font-size:19px;">Updates on latest technologies, software, hardware, science, news, gadgets.  Actually everything!</p>
          <p><a style=" color:#ffffff; font-size:17px; " class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2 style=" color:#ffffff;">Contact Us</h2>
          <p style="font-family:arial; color:#000000;font-size:19px;">We give you all the required information on the forum.</p>
          <p><a style=" color:#ffffff; font-size:17px; " class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

<?php include_once('tiles/footer.php'); ?>