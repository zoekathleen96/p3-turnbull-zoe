<style type="text/css">

* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: inherit;
}

body {
  background: aliceblue;
}

.container {
  max-width: 900px;
  margin: 80px auto;
  text-align: center;
}

header {
  text-align: center;
  background: beige;
  padding: 20px 0;
}

nav ul li {
  display: inline;
}

nav a {
  text-decoration: none;
  color: black;
  background: beige;
  padding: 5px;
}

footer {
  background-color: black;
  color: white;
  text-align: center;
  padding: 20px 0;
}
</style>


<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Me</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="contact.html">Contact Me</a></li>
    </ul>
  </nav>
</header>

<div class="container">

	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
	</div>

	<footer>
	  <p>This page was designed by Zoe Turnbull</p>
	</footer>
