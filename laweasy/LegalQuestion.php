<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" src="text/css" href="registerComp.css">
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
					<legend align="center"><b>LegalQuestion </legend>
					<h1>Ask a Free Legal Question Online</h1>
					<br />
					<h4 style="line-height:30px;">Stuck with a legal issue? Submit your query below to get FREE answers by email within a few hours. Expert legal advice from top rated lawyers in your city enables you to take better decisions about your legal situation.</h4><br />
						
						<table style="margin:0 auto;">
							<tr>
								<td colspan="2">First Name : </td>
								<td colspan="2"><input type="text" name="name" placeholder="" pattern="[A-Za-z ]+" required></td>
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
							<tr>
							<td colspan="2">Area of law : </td>
								<td colspan="2">    
									<select name="AreaOfLaw">
										<option value="" disabled selected>Select Area Of Law</option>
										<option value="Arbitration">Arbitration</option>
										<option value="Armed Forces Tribunal">Armed Forces Tribunal</option>
										<option value="Banking / Finance">Banking / Finance</option>
										<option value="Cheque Bounce">Cheque Bounce</option>
										<option value="Child Custody">Child Custody</option>
										<option value="Civil">Civil</option>
										<option value="Consumer Court">Consumer Court</option>
										<option value="Corporate">Corporate</option>
										<option value="Criminal">Criminal</option>
										<option value="Customs & Central Excise">Customs & Central Excise</option>
										<option value="Cyber Crime">Cyber Crime</option>
										<option value="Divorce">Divorce</option>
										<option value="Documentation">Documentation</option>
										<option value="Family">Family</option>
										<option value="GST">GST</option>
										<option value="Immigration">Immigration</option>
										<option value="Insurance">Insurance</option>
										<option value="International Law">International Law</option>
										<option value="Labour & Service">Labour & Service</option>
										<option value="Landlord/Tenant">Landlord/Tenant</option>
										<option value="Medical Negligence">Medical Negligence</option>
										<option value="Motor Accident">Motor Accident</option>
										<option value="Muslim Law">Muslim Law</option>
										<option value="Property">Property</option>
										<option value="R.T.I">R.T.I</option>
										<option value="Recovery">Recovery</option>
										<option value="Startup">Startup</option>
										<option value="Supreme Court">Supreme Court</option>
										<option value="Tax">Tax</option>
										<option value="Trademark & Copyright">Trademark & Copyright</option>
										<option value="Wills / Trusts">Wills / Trusts</option>
									</select>
								</td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Email ID : </td>
								<td colspan="2"><input type="email" name="email" placeholder="Email ID" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Phone No. : </td>
								<td colspan="2"><input type="text" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Subject : </td>
									<td colspan="2"><input type="text" placeholder="subject" style="width:100%;" name="subject" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Question : </td>
									<td colspan="2"><input type="text" placeholder="question" style="width:100%;" name="question" required></td>
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
		$name = $_POST['name'];
		$state = $_POST['state'];
		$AreaOfLaw = $_POST['AreaOfLaw'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];		
		$question = $_POST['question'];	


		
		
		
			$sql = "INSERT INTO legalquestion(Name,state,AreaOfLaw,email,phone,subject,question)
				VALUES ('$name','$state','$AreaOfLaw','$email','$phone','$subject','$question')";
				
				if ($con->query($sql) === TRUE) {

				}
				else{
					echo 'Error!';
				}
		
		
	}
	if(isset($_POST['submit']))
	{
		AddCompanyRegistrationData();
	}
?>