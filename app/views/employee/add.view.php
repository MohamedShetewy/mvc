	
<form method="POST" class="appform" enctype="application/x-www-form-urlencoded" autocomplete="off">
	
	<div class="container">
	
	<div class="row"> 	
		<div  class="form-floating col-md-12 st-br">
			
		    <input required type="text" class="form-control" name="name" id="name" placeholder="Enter New Name" maxlength="50"  >
		    <label for="name"> Employee Name </label>
		</div>

		<div class="form-floating col-md-12 st-br">						
			<input required type="text" class="form-control" name="address" id="address" placeholder="Enter Address Of Employee" maxlength="100" >
			<label for="address"> Employee Address </label>		
		</div>

		<div class="form-floating  col-md-4 st-br">
			
		    <input required type="number" class="form-control" name="age" id="age" min="22" max="60" placeholder="Enter Age Of Employee" >
		    <label for="age"> Employee Age </label>
		</div>

		<div class="form-floating  col-md-4 st-br">
			
			<input required type="number" class="form-control" step ="0.01" name="salary" id="salary" min="1500" max="9999" placeholder="Enter Salary Of Employee">
			<label for="salary"> Employee Salary </label>
		</div>

		<div class="form-floating  col-md-4 st-br">
			
		    <input required type="number" class="form-control" step ="0.01" name="tax" id="tax" min="1" max="5" placeholder="Enter Tax Of Employee">
		    <label for="tax"> Employee Tax (%) </label>
		</div>

		
	</div>	
		<input type="submit" name="submit" value="save">
	</div>		
	
</form>
