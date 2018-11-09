<!DOCTYPE html>
<html>
<head>

  <meta name="description" content="Udacity Responsive Images course project" />
  <meta name="author" content="//samdutton.com">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  <meta charset="utf-8">
  <meta itemprop="name" content="Udacity Responsive Images course project">
  <meta itemprop="image" content="images/icon.png">
  <meta name="mobile-web-app-capable" content="yes">
  <meta id="theme-color" name="theme-color" content="#307699">

  <base target="_blank">

  <title>Digital Talent Scholarship</title>

  <link rel="icon" sizes="192x192" href="<?php echo base_url() ?>assets/images/icon.png">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css" />
  <link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=zocial" />
  <meta name="udacity-grader" content="http://udacity.github.io/responsive-images/project/project-grader.json" unit-tests="http://udacity.github.io/responsive-images/project/project-grader.js">

</head>

<body>
  <header>
    <a href="<?php echo base_url() ?>assets//github.com/udacity/responsive-images/" title="Home page for course examples">
      <svg id="logo" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <title>Responsive logo</title>
        <path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zM12 18c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6zm0-10c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"></path>
      </svg>
    </a>
  </header>
  <?php 
  //print_r($obj);
  //print_r($obj['0']) 
  ?>

<h3>Digital Talent Scholarship</h3>

  <hr>
  <article>

    <img src="<?php echo base_url() ?>assets/images/digitalent.jpg" alt="">
    <h2 id="title1"><?php echo $obj['0']->title ?></h2>
    <p id="article1"><?php echo $obj['0']->description ?></p>

    <hr>
    <img src="<?php echo base_url() ?>assets/images/digitalent.jpg" alt="">
    <h2 id="title2"><?php echo $obj['1']->title ?></h2>
    <p id="article1"><?php echo $obj['1']->description ?></p>
  

  </article>

  <footer>

    <div id="social">
      <a href="https://twitter.com/home?status=https://github.com/udacity/responsive-images" class="zocial-twitter">Twitter</a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=https://github.com/udacity/responsive-images" class="zocial-facebook">Facebook</a>
      <a href="https://plus.google.com/share?url=https://github.com/udacity/responsive-images" class="zocial-googleplus">Google+</a>
      <a href="<?php echo base_url() ?>assets//github.com/udacity/responsive-images/tree/master/project/final" title="View source for this page on GitHub" id="viewSource">View source on GitHub</a>

    </div>


  </footer>

</body>
</html>
<script>

  // let url = "data.json";
  // var data_ ;

  // fetch(url,  {mode: 'cors'})
  // .then(function (res) {
  //     return res.json()
  // })
  // .then(function (data)<?php echo base_url() ?>assets/ {
     
  //     data_ = data
  //     console.log(data[0]);
  //     document.getElementById("title1").innerHTML = data[0].title;
  //     document.getElementById("title2").innerHTML = data[1].title;
  //     document.getElementById("article1").innerHTML = data[0].description;
  //     document.getElementById("article2").innerHTML = data[1].description;
  // }).catch(function (err) {
  //     console.log(err)
  // })

</script>


<script src="https://www.talater.com/upup/upup.min.js"></script>

<script>
	UpUp.start({
		'cache-version' : 'v2',

		'content-url': '<?php base_url($this->uri->segment(1)) ?>',
		'content':'Cannot reach site',
		'service-worker-url':'/upup.sw.min.js'
	});
</script>