
	<style type="text/css">
		
		
		div.wrapper{
			overflow: hidden;
		}

		div.wrapper .empform{
			float: left;
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
			margin: auto;

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
		<?php if(isset($_SESSION['msg'])){?>
					<p class="massage <?= isset($error) ? 'error': '' ?>"><?= isset($_SESSION['msg']) ? $_SESSION['msg']: '' ?></p>
				<?php 
					unset($_SESSION['msg']);
					}?>
		<div class="emp">
			<a href="employee/add">add new employee</a>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Age</th>
						<th>Address</th>
						<th>Salary</th>
						<th>Tax (%)</th>
						<th>Control</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if ($employees !== false) {
							
							foreach ($employees as $employee) {
								?>
								<tr>
									<td><?= $employee->name ?></td>
									<td><?= $employee->age ?></td>
									<td><?= $employee->address ?></td>
									<td><?= $employee->salary ?></td>
									<td><?= $employee->tax ?></td>
									<td>
										<a href="employee/edit/<?=$employee->id?>">edit</a>
										<a href="employee/delete/<?=$employee->id?>" onclick ="if (!confirm('Do you want delete this employee ?')) return false">delete</a>
									</td>
								</tr>
								<?php
							}
						}else{
							?>
							<td colspan="5"> Sorry no employees to list</td>
							<?php
						}
					?>
				</tbody>
			</table>
			</div>
		</div>