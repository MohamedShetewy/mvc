
	<style type="text/css">
		
		
		div.wrapper{
			overflow: hidden;
		}

		div.wrapper .empform{
			width: 500px;
			margin:0 auto;
		}
		div.wrapper .empform fieldset{
			background-color: #e4e4e4;

		}
		div.wrapper .empform fieldset p.massage{
			background-color: green;
			color: #FFF;
			padding: 5px;
			margin: 3px 0;
			border-radius: 3px;
			cursor: pointer;

		}
		div.wrapper .empform fieldset p.massage.error{
			background-color: #900;
		}
		div.wrapper .empform fieldset legend{
			background: #ff7300;
			padding: 5px;
			border-radius: 5px;
		}
		div.wrapper .empform table{
			width: 100%;
		}
		div.wrapper .empform table input{
		    padding: 5px;
		    border: 0;
		    border-radius: 5px;
		    width: 100%;
		    
		}

		div.wrapper .empform table input[type="submit"]{
		    margin-top: 5px;
		    background-color: #ff7300;
		}

		div.wrapper .emp {
			width: 600px;
			margin:0 auto;

		}

		div.wrapper .emp table{
			width: 600px;
			margin: 20px 20px 0 0;
			border-collapse: collapse;
			padding: 5px;

		}
		div.wrapper .emp table thead th{
			text-align: left;
			padding: 5px;
			background: #ff7300;
		}


		div.wrapper .emp table tbody td{
			
			padding: 5px;
		}

		div.wrapper .emp table tbody tr:nth-child(2n) td{
			
			background-color: #e4e4e4;
		}
		div.wrapper .emp table tbody tr td a:link,
		div.wrapper .emp table tbody tr td a:visited{
			color: #0b00ff91 ;
		}
	</style>

	<div class="wrapper">
		<div class="empform">	
			<form method="POST" class="appform" enctype="application/x-www-form-urlencoded" autocomplete="off">
				<fieldset>
					<legend>Employee Information</legend>
					<?php if(isset($_SESSION['msg'])){?>
					<p class="massage <?= isset($error) ? 'error': '' ?>"><?= isset($_SESSION['msg']) ? $_SESSION['msg']: '' ?></p>
				<?php 
					unset($_SESSION['msg']);
					}?>
					<table>
						<tr>
							<td>
								<label for="name">Employee Name :</label>
							</td>
						</tr>
						<tr>
							<td>
								<input required type="text" name="name" id="name" placeholder="Enter New Name" maxlength="50" value ="<?= isset($employee) ? $employee->name : '' ?>" >
							</td>
						</tr>
						<tr>
							<td>
								<label for="age">Employee Age :</label>
							</td>
						</tr>
						<tr>
							<td>
								<input required type="number" name="age" id="age" min="22" max="60" value ="<?= isset($employee) ? $employee->age : '' ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label for="address">Employee Address :</label>
							</td>
						</tr>
						<tr>
							<td>
								<input required type="text" name="address" id="address" placeholder="Enter Address Of Employee" maxlength="100" value ="<?= isset($employee) ? $employee->address : '' ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label for="salary">Employee Salary :</label>
							</td>
						</tr>
						<tr>
							<td>
								<input required type="number" step ="0.01" name="salary" id="salary" min="1500" max="9999" value ="<?= isset($employee) ? $employee->salary : '' ?>">
							</td>
						</tr>

						<tr>
							<td>
								<label for="tax">Employee Tax (%) :</label>
							</td>
						</tr>
						<tr>
							<td>
								<input required type="number" step ="0.01" name="tax" id="tax" min="1" max="5" value ="<?= isset($employee) ? $employee->tax : '' ?>">
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit" value="save">
							</td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>
		</div>