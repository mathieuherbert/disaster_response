<html>
			<!-- Authors : 
		- Reza Hassanzadeh
		- Mathieu Herbert -->
				<head>
					
					<link rel="stylesheet" type="text/css" href="ressources/bootstrap/css/bootstrap.min.css">
					<script src="js/jquery.min.js"></script>
					<script src="ressources/bootstrap/js/bootstrap.min.js"></script>
				</head>
				<body>
						<form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Form Name</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="x">X</label>
			  <div class="col-md-2">
			    <input id="x" name="x" type="text" placeholder="placeholder" class="form-control input-md">
			    <p class="help-block">x-coordinate</p>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="y">Y</label>
			  <div class="col-md-2">
			    <input id="y" name="y" type="text" placeholder="placeholder" class="form-control input-md">
			    <p class="help-block">y-coordinate</p>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="house_number">House number</label>
			  <div class="col-md-2">
			    <input id="house_number" name="house_number" type="text" placeholder="placeholder" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			 <label class="col-md-4 control-label" for="street">Street / Alley </label>
			  <div class="col-md-2">
			    <input id="street" name="street" type="text" placeholder="placeholder" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			 <label class="col-md-4 control-label"for="main_street">Main street</label>
			  <div class="col-md-2">
			    <input id="main_street" name="main_street" type="text" placeholder="placeholder" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			 <label class="col-md-4 control-label" for="code">Code</label>
			  <div class="col-md-2">
			    <input id="code" name="code" type="text" placeholder="placeholder" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="city">City</label>
			  <div class="col-md-2">
			    <input id="city" name="city" type="text" placeholder="placeholder" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="country">Country</label>
			  <div class="col-md-2">
			    <input id="country" name="country" type="text" placeholder="placeholder" class="form-control input-md">
			    
			  </div>
			</div>

			</fieldset>
			</form>



			<form class="form-horizontal">
				<fieldset>

				<!-- Form Name -->
				<legend>Form Name</legend>

				<!-- Multiple Radios -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="building_type">Building Type</label>
				  <div class="col-md-4">
				  <div class="radio">
				    <label for="building_type-0">
				      <input type="radio" name="building_type" id="building_type-0" value="1" checked="checked">
				      1 : Adobe Building
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-1">
				      <input type="radio" name="building_type" id="building_type-1" value="2">
				      2 : Un-reinforced masonry Building
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-2">
				      <input type="radio" name="building_type" id="building_type-2" value="3">
				      3 : Un-reinforced masonry Building With RC frame
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-3">
				      <input type="radio" name="building_type" id="building_type-3" value="4">
				      4 : Un-reinforced masonry Building With Steel frame
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-4">
				      <input type="radio" name="building_type" id="building_type-4" value="5">
				      5 : Steel Building
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-5">
				      <input type="radio" name="building_type" id="building_type-5" value="6">
				      6 : Reinforced Building
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-6">
				      <input type="radio" name="building_type" id="building_type-6" value="7">
				      7 : Others
				    </label>
					</div>
				  </div>
				</div>

				<!-- Multiple Radios -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="damages">Destruction Level</label>
				  <div class="col-md-4">
				  <div class="radio">
				    <label for="damages-0">
				      <input type="radio" name="damages" id="damages-0" value="1" checked="checked">
				      1 : No Destruction / Light
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-1">
				      <input type="radio" name="damages" id="damages-1" value="2">
				      2 : Minor Cracks in the walls
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-2">
				      <input type="radio" name="damages" id="damages-2" value="">
				      3 : Major Cracks in the walls ( &gt; 1 cm)
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-3">
				      <input type="radio" name="damages" id="damages-3" value="">
				      4 : One collasped wall
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-4">
				      <input type="radio" name="damages" id="damages-4" value="">
				      5 : One wall and some part of roof were collapsed
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-5">
				      <input type="radio" name="damages" id="damages-5" value="">
				      6 : completely collapsed
				    </label>
					</div>
				  </div>
				</div>

				</fieldset>
				</form>

				<form class="form-horizontal">
					<fieldset>

					<!-- Form Name -->
					<legend>Form Name</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="total_population">Population Number</label>  
					  <div class="col-md-2">
					  <input id="total_population" name="total_population" type="text" placeholder="placeholder" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="injured">Injured People</label>  
					  <div class="col-md-2">
					  <input id="injured" name="injured" type="text" placeholder="placeholder" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="severly_injured">Severly Injured people</label>  
					  <div class="col-md-2">
					  <input id="severly_injured" name="severly_injured" type="text" placeholder="placeholder" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="deceased">Deceased People</label>  
					  <div class="col-md-2">
					  <input id="deceased" name="deceased" type="text" placeholder="placeholder" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="entrapped">Entrapped People</label>  
					  <div class="col-md-2">
					  <input id="entrapped" name="entrapped" type="text" placeholder="placeholder" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="noninjured">Non-Injured People</label>  
					  <div class="col-md-2">
					  <input id="noninjured" name="noninjured" type="text" placeholder="placeholder" class="form-control input-md">
					    
					  </div>
					</div>

						<!-- Multiple Checkboxes -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="checkboxes">Road Blocage</label>
						  <div class="col-md-4">
						  <div class="checkbox">
						    <label for="checkboxes-0">
						      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
						      Yes : Completely Open
						    </label>
							</div>
						  <div class="checkbox">
						    <label for="checkboxes-1">
						      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
						      Yes : Partially Open
						    </label>
							</div>
						  <div class="checkbox">
						    <label for="checkboxes-2">
						      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
						      No
						    </label>
							</div>
						  </div>
						</div>


					</fieldset>
					</form>


	</body>
</html>