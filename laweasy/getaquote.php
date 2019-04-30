<html>
	<head>
		<title>Get A Quote</title>
		
		<style>
		body {
			background-color:brown;
		}
		</style>
	</head>
	
	<body>
		
		<div>
			<form method="POST" action="">

				<fieldset style="width:450px;height:auto;margin:auto;margin-top:85px;border-radius:4px;">
					<legend align="center"><b>Get A Qoute </legend>
					<h1>What kind of legal issue are you facing?</h1>
					<br />
					
						
						<table style="margin:0 auto;">
						<tr>
							<td colspan="2">What kind of legal issue are you facing? </td>
								<td colspan="2">    
									<select name="issue">
										<option value="" disabled selected>legal issue</option>
										<option value="Divorce/Matrimonial Issues">Divorce/Matrimonial Issues</option>
										<option value="Family & Inheritance Issues">Family & Inheritance Issues</option>
										<option value="Cheque/Loan/Recovery Issues">Cheque/Loan/Recovery Issues</option>
										<option value="Employment Issues">Employment Issues</option>
										<option value="Criminal Issues">Criminal Issues</option>
										<option value="Consumer Court Issues">Consumer Court Issues</option>
										<option value="Accident & Insurance">Accident & Insurance</option>
														
									</select>
								</td>
							</tr>
								<tr><td><br/></td></tr>
							<tr>
							<td colspan="2">What is your issue regarding? </td>
								<td colspan="2">    
									<select name="IssueRegarding">
										<option value="" disabled selected>Issue Regarding</option>
										<option value="File for Divorce">File for Divorce</option>
										<option value="Reply / Send Legal Notice for Divorce">Reply / Send Legal Notice for Divorce</option>
										<option value="Contest / Appeal in Divorce Case">Contest / Appeal in Divorce Case</option>
										<option value="Dowry Demand / Domestic Violence / Abuse">Dowry Demand / Domestic Violence / Abuse</option>
										<option value="Alimony / Maintenance Issue">Alimony / Maintenance Issue</option>
										<option value="Child Custody Issue">Child Custody Issue</option>
										<option value="Extramarital Affair / Cheating">Extramarital Affair / Cheating</option>
										<option value="Muslim Marriage Issues">Muslim Marriage Issues</option>
										<option value="Marriage Registration / Court Marriage">Marriage Registration / Court Marriage</option>
										<option value="Marital Finance / Property Issues">Marital Finance / Property Issues</option>
										<option value="Family / In-law Problems">Family / In-law Problems</option>
										<option value="File Mutual Consent Divorce">File Mutual Consent Divorce</option>
										
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2">Name</td>
								<td colspan="2"><input type="text" name="name" placeholder="" pattern="[A-Za-z ]+" required></td>
							</tr>
							
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Email ID : </td>
								<td colspan="2"><input type="email" name="email" placeholder="Email ID" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
							<td colspan="2">state : </td>
								<td colspan="2">    
									<select name="state">
										<option value="" disabled selected>Select State</option>
										<option value="Ahmedabad">Ahmedabad</option>
										<option value="Mumbai">Mumbai</option>
										<option value="Delhi">Delhi</option>
									</select>
								</td>
							</tr>
							<tr><td><br/></td></tr>
							<tr align="center">
								<td colspan="4" align="center"><input type="submit" name="submit" id="btn" value="Submit"></td>
							</tr>
						</table>
				</fieldset>
			</form>
		</div>
	</body>
</html>

<?php
	
	function AddCompanyRegistrationData()
	{
		require 'Connection.php';
		$issue = $_POST['issue'];
		$IssueRegarding = $_POST['IssueRegarding'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$state = $_POST['state'];
	

		
		
		
			$sql = "INSERT INTO getaquote(issue,IssueRegarding,name,email,state)
				VALUES ('$issue','$IssueRegarding','$name','$email','$state')";
				
				
				if ($con->query($sql) === TRUE) {

				}
				else{
					echo 'Error!';
				}
		
		$message = "Your contact information is saved successfully.";
	}
	
       
	if(isset($_POST['submit']))
	{
		AddCompanyRegistrationData();
	}
?>