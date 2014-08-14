<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  {{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
   {{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css') }}
</head>
<body>
	{{ Form::open(array('url' => 'infos/infos')) }}
    	<fieldset>

			<!-- Form Name -->
			<legend>Form Name</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="x">X Coordinate</label>
			  <div class="col-md-2">
			  <small class="text-danger">{{ $errors->first('x') }}</small>
			  	{{ Form::text('x', null, array('class' => 'form-control', 'placeholder' => 'X coordinate')) }}
			   <!--  <input id="x" name="x" type="text" placeholder="placeholder" class="form-control input-md"> -->
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="y">Y</label>
			  <div class="col-md-2">
			   <small class="text-danger">{{ $errors->first('y') }}</small>
			    {{ Form::text('y', null, array('class' => 'form-control', 'placeholder' => 'y coordinate')) }}
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="house_number">House number</label>
			  <div class="col-md-2">
			   <small class="text-danger">{{ $errors->first('house_number') }}</small>
			  {{ Form::text('house_number', null, array('class' => 'form-control', 'placeholder' => 'House Number')) }}
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			 <label class="col-md-4 control-label" for="street">Street / Alley </label>
			  <div class="col-md-2">
			    <small class="text-danger">{{ $errors->first('street') }}</small>
			    {{ Form::text('street', null, array('class' => 'form-control', 'placeholder' => 'Street')) }}
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			 <label class="col-md-4 control-label"for="main_street">Main street</label>
			  <div class="col-md-2">
			  <small class="text-danger">{{ $errors->first('main_street') }}</small>
			    {{ Form::text('main_street', null, array('class' => 'form-control', 'placeholder' => 'Main Street')) }}
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			 <label class="col-md-4 control-label" for="code">Code</label>
			  <div class="col-md-2">
			   <small class="text-danger">{{ $errors->first('code') }}</small>
			    {{ Form::text('code', null, array('class' => 'form-control', 'placeholder' => 'Code')) }}
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="city">City</label>
			  <div class="col-md-2">
			    <small class="text-danger">{{ $errors->first('city') }}</small>
			    {{ Form::text('city', null, array('class' => 'form-control', 'placeholder' => 'City')) }}
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="country">Country</label>
			  <div class="col-md-2">
			    <small class="text-danger">{{ $errors->first('country') }}</small>
			    {{ Form::text('country', null, array('class' => 'form-control', 'placeholder' => 'Country')) }}
			    
			  </div>
			</div>

			</fieldset>
			



			<form class="form-horizontal">
				<fieldset>

				<!-- Form Name -->
				<legend>Form Name</legend>

				<!-- Multiple Radios -->
				<div class="form-group">
				 
				  <label class="col-md-4 control-label" for="building_type">Building Type</label>
				 <small class="text-danger">{{ $errors->first('building_type') }}</small>
			    
				  <div class="col-md-4">
				  <div class="radio">
				    <label for="building_type-0">
				    	{{ Form::radio('building_type', 1 , false,  array('id' => 'building_type-0')) }}	
				      <!-- <input type="radio" name="building_type" id="building_type-0" value="1" checked="checked"> -->
				      1 : Adobe Building
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-1">
				     {{ Form::radio('building_type', 2 , false,  array('id' => 'building_type-1')) }}	
				      2 : Un-reinforced masonry Building
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-2">
				      {{ Form::radio('building_type', 3 , false,  array('id' => 'building_type-2')) }}	
				      3 : Un-reinforced masonry Building With RC frame
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-3">
				      {{ Form::radio('building_type', 4 , false,  array('id' => 'building_type-3')) }}	
				      4 : Un-reinforced masonry Building With Steel frame
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-4">
				      {{ Form::radio('building_type', 5 , false,  array('id' => 'building_type-4')) }}	
				      5 : Steel Building
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-5">
				      {{ Form::radio('building_type', 6 , false,  array('id' => 'building_type-5')) }}	
				      6 : Reinforced Building
				    </label>
					</div>
				  <div class="radio">
				    <label for="building_type-6">
				      {{ Form::radio('building_type', 7 , false,  array('id' => 'building_type-6')) }}	
				      7 : Others
				    </label>
					</div>
				  </div>
				</div>

				<!-- Multiple Radios -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="damages">Destruction Level</label>
				  <small class="text-danger">{{ $errors->first('damages') }}</small>
				  <div class="col-md-4">
				  <div class="radio">
				    <label for="damages-0">
				    	{{ Form::radio('damages', 1 , false,  array('id' => 'damages-0')) }}	
				      
				      1 : No Destruction / Light
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-1">
				      {{ Form::radio('damages', 2 , false,  array('id' => 'damages-1')) }}	
				      2 : Minor Cracks in the walls
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-2">
				      {{ Form::radio('damages', 3 , false,  array('id' => 'damages-2')) }}	
				      3 : Major Cracks in the walls ( &gt; 1 cm)
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-3">
				      {{ Form::radio('damages', 4 , false,  array('id' => 'damages-3')) }}	
				      4 : One collasped wall
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-4">
				      {{ Form::radio('damages', 5 , false,  array('id' => 'damages-4')) }}	
				      5 : One wall and some part of roof were collapsed
				    </label>
					</div>
				  <div class="radio">
				    <label for="damages-5">
				      {{ Form::radio('damages', 6 , false,  array('id' => 'damages-5')) }}	
				      6 : completely collapsed
				    </label>
					</div>
				  </div>
				</div>

				</fieldset>

					<fieldset>

					<!-- Form Name -->
					<legend>Form Name</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="total_population">Population Number</label>  
					  <small class="text-danger">{{ $errors->first('total_population') }}</small>
					  <div class="col-md-2">
					  
					 {{ Form::text('total_population', null, array('class' => 'form-control', 'placeholder' => 'Population Number')) }}	    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="injured">Injured People</label>  
					  <small class="text-danger">{{ $errors->first('injured') }}</small>
					  <div class="col-md-2">
					  
					    {{ Form::text('injured', null, array('class' => 'form-control', 'placeholder' => 'Injured')) }}	    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="severly_injured">Severly Injured people</label>  
					  <small class="text-danger">{{ $errors->first('severly_injured') }}</small>
					  <div class="col-md-2">
					  
					  	{{ Form::text('severly_injured', null, array('class' => 'form-control', 'placeholder' => 'Severly Injured')) }}	      
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="deceased">Deceased People</label>  
					  <small class="text-danger">{{ $errors->first('deceased') }}</small>
					  <div class="col-md-2">
					  
					  	{{ Form::text('deceased', null, array('class' => 'form-control', 'placeholder' => 'Deceased')) }}	        
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="entrapped">Entrapped People</label>  
					  <small class="text-danger">{{ $errors->first('entrapped') }}</small>
					  <div class="col-md-2">
					  <input id="entrapped" name="entrapped" type="text" placeholder="placeholder" class="form-control input-md">
					    {{ Form::text('entrapped', null, array('class' => 'form-control', 'placeholder' => 'Entrapped')) }}	        
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="noninjured">Non-Injured People</label>  
					  <small class="text-danger">{{ $errors->first('noninjured') }}</small>
					  <div class="col-md-2">
					  
					    {{ Form::text('noninjured', null, array('class' => 'form-control', 'placeholder' => 'Non Injured')) }}	        
					  </div>
					</div>

						<!-- Multiple Checkboxes -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="checkboxes">Road Blocage</label>
						  <small class="text-danger">{{ $errors->first('checkboxes') }}</small>
						  <div class="col-md-4">
						  <div class="radio">
						    <label for="checkboxes-0">
						     {{ Form::radio('checkboxes', 1 , false,  array('id' => 'checkboxes-0')) }}	
						      <!-- <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"> -->
						      Yes : Completely Open
						    </label>
							</div>
						  <div class="radio">
						    <label for="checkboxes-1">
						    {{ Form::radio('checkboxes', 2 , false,  array('id' => 'checkboxes-1')) }}	
						      
						      Yes : Partially Open
						    </label>
							</div>
						  <div class="radio">
						    <label for="checkboxes-2">
						     {{ Form::radio('checkboxes', 3 , false,  array('id' => 'checkboxes-2')) }}	
						      No
						    </label>
							</div>
						  </div>
						</div>


					</fieldset>
					<?php echo Form::token(); ?>
					<input class="btn" type="submit" value="submit"/>
	{{ Form::close() }}
</body>
</html>