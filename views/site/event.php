<?php 
use yii\helpers\Html;

?>
<!-- Events --> 
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide"  style="background-color: #fff !important;"> 
<div class="w3-content">
<h1 class="w3-text-grey"><b>OUR EVENTS</b></h1>  
<!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
	<div class="w3-quarter">
		<?= Html::a(
			Html::img(
				['images/1.jpg'],
				[
					'alt'=>'Sandwich',
					'style' => 'width:100%'
				]
			),
			'#',
			[
				'data-toggle'=>'model',
				'data-target' => '#myModel'
			]
		) ?>
	  <h3>The Perfect Sandwich, A Real NYC Classic</h3>
	  <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	</div>
	<div class="w3-quarter">
		<?= Html::a(
			Html::img(
				['images/1.jpg'],
				[
					'alt'=>'Sandwich',
					'style' => 'width:100%'
				]
			),
			'#',
			[
				'data-toggle'=>'model',
				'data-target' => '#myModel'
			]
		) ?>
	  <h3>Let Me Tell You About This Steak</h3>
	  <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	</div>
	<div class="w3-quarter">
	  <?= Html::a(
			Html::img(
				['images/1.jpg'],
				[
					'alt'=>'Sandwich',
					'style' => 'width:100%'
				]
			),
			'#',
			[
				'data-toggle'=>'model',
				'data-target' => '#myModel'
			]
		) ?>
	  <h3>Cherries, interrupted</h3>
	  <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <p>What else?</p>
	</div>
	<div class="w3-quarter">
	  <?= Html::a(
			Html::img(
				['images/1.jpg'],
				[
					'alt'=>'Sandwich',
					'style' => 'width:100%'
				]
			),
			'#',
			[
				'data-toggle'=>'model',
				'data-target' => '#myModel'
			]
		) ?>
	  <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
	  <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	</div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
	<div class="w3-quarter">
	  <?= Html::a(
			Html::img(
				['images/1.jpg'],
				[
					'alt'=>'Sandwich',
					'style' => 'width:100%'
				]
			),
			'#',
			[
				'data-toggle'=>'model',
				'data-target' => '#myModel'
			]
		) ?>
	  <h3>All I Need Is a Popsicle</h3>
	  <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	</div>
	<div class="w3-quarter">
	  <?= Html::a(
			Html::img(
				['images/1.jpg'],
				[
					'alt'=>'Sandwich',
					'style' => 'width:100%'
				]
			),
			'#',
			[
				'data-toggle'=>'model',
				'data-target' => '#myModel'
			]
		) ?>
	  <h3>Salmon For Your Skin</h3>
	  <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	</div>
	<div class="w3-quarter">
	  <?= Html::a(
			Html::img(
				['images/1.jpg'],
				[
					'alt'=>'Sandwich',
					'style' => 'width:100%'
				]
			),
			'#',
			[
				'data-toggle'=>'model',
				'data-target' => '#myModel'
			]
		) ?>
	  <h3>The Perfect Sandwich, A Real Classic</h3>
	  <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	</div>
	<div class="w3-quarter">
	  <?= Html::a(
			Html::img(
				['images/1.jpg'],
				[
					'alt'=>'Sandwich',
					'style' => 'width:100%'
				]
			),
			'#',
			[
				'data-toggle'=>'model',
				'data-target' => '#myModel'
			]
		) ?>
	  <h3>Le French</h3>
	  <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	</div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
	<div class="w3-bar">
	  <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
	  <a href="#" class="w3-bar-item w3-black w3-button">1</a>
	  <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
	  <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
	  <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
	  <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
	</div>
  </div>
</div>  
</div> 
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide"  style="background-color: #003580 !important;"> 
<div class="w3-content">
<h3>Contact Form</h3>
<div class="row">
<div class="col-md-8">
	<div class="contact-form">
		<form class="form-horizontal" action="/action_page.php">
			  <div class="form-group">
				<label class="control-label col-sm-2">Name:</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" placeholder="Enter Full Name" required >
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2">Email:</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" placeholder="Enter email" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2">Mobile:</label>
				<div class="col-sm-10"> 
				  <input type="text" class="form-control" placeholder="Enter Contact Number" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2">Message:</label>
				<div class="col-sm-10"> 
				  <textarea class="form-control" placeholder="Enter password" rows="8" required></textarea>
				</div>
			  </div> 
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Submit</button>
				  <button type="rest" class="btn btn-gray">Cancel</button>
				</div>
			  </div>
		</form>
	</div>	
</div>
<div class="col-md-4"> 
	<div class="address">
		<ul style="list-style-type:none">
			<li><i class="glyphicon glyphicon-map-marker"></i> DR Cricket Academy, Sweden</li>
			<li><i class="glyphicon glyphicon-envelope"></i> info@drcricketacademy.com</li> 
			<li><i class="glyphicon glyphicon-phone"></i> +99 1111 111 11</li> 
			<li> 
				<div class="map">	
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15899224.636730123!2d-0.2866107761057535!3d60.8928750028283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465cb2396d35f0f1%3A0x22b8eba28dad6f62!2sSweden!5e0!3m2!1sen!2snp!4v1521546170973" width="100%" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>	
			</li> 
		</ul> 
	</div>	
</div>
</div>
</div> 
</div>  
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16" style="margin-bottom: 50px;">
<div class="row">	
<div class="col-md-6">
<span class="footer-left"> <p>© 2018 D.R. Cricket Academy HB</p></span>
</div>		
<div class="col-md-6">
<span class="footer-right"><p>Developed by <a href="http://www.kodstack.com/" title="Kodstack Int Lab" target="_blank" class="w3-hover-text-green">Kodstack Int Lab</a></p></span>
</div>	
</div>	
</footer>  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog"> 
  <!-- Modal content-->
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal">&times;</button>
	  <h4 class="modal-title"><b>Event title goes here</b></h4>
	</div>
	<div class="modal-body">
	 <h3>About Me, The Food Man</h3><br>
		<img src="assets/images/3.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
		<div class="w3-padding-32">
		  <h4><b>I am Who I Am!</b></h4>
		  <h6><i>With Passion For Real, Good Food</i></h6>
		  <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
	</div>
	<div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
  </div> 
</div>
</div> 
</div>