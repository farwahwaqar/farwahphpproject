
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mycss.css"/>
		<script type="text/javascript" src="myjs.js"></script> 
</head>

<body>
 <form action="myphp.php" class="register" method="POST">
            <h1>BUS Ticket Reservation</h1>
			<fieldset class="row1">
                <legend>Travel Information</legend>
				<p>
                    <label>BUS Name * 
                    </label>
                    <input name="bus" type="text" required="required"/>
                    <label>Date of journey  (2013)*
                    </label>
                    <select class="date" name="day">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="month">
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>					
					<label>Bus Type * 
                    </label>
                    <select name="type">
                        <option value="Sleeper">Sleeper
                        </option>
                        <option value="Semi Sleeper">Semi Sleeper
                        </option>
					</select>
					
                </p>
                <p>
					<label>Boarding From*
                    </label>
                    <input name="from" required="required" type="text"/>
					<label>To *
                    </label>
					<input name="to" required="required" type="text"/>
					<label>Via (Root) *
                    </label>
					<select name="root">
                        <option value="1">Root 1
                        </option>
                        <option value="2">Root 2
                        </option>
                        <option value="3">Root 3
                        </option>
                    </select>
                </p>
                <p>
                    <label>Mobile *
                    </label>
                    <input name="mob" required="required" type="text"/>
                    <label>Repeat Mobile*
                    </label>
                    <input name="mob" required="required" type="text"/>
                    <label >(You will receive 
                    </label><label >the ticket in this )
                    </label>
                </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
				<legend>Passenger Details</legend>
				<p> 
					<input type="button" value="Add Passenger" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Passenger" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
				</p>
               <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
						<td>
							<label>Name</label>
							<input type="text" required="required" name="BX_NAME[]">
						 </td>
						 <td>
							<label for="BX_age">Age</label>
							<input type="text" required="required" class="small"  name="BX_age[]">
					     </td>
						 <td>
							<label for="BX_gender">Gender</label>
							<select id="BX_gender" name="BX_gender" required="required">
								<option>....</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						 </td>
						 <td>
							<label for="BX_birth">Berth Pre</label>
							<select id="BX_birth" name="BX_birth" required="required">
								<option>....</option>
								<option>Window</option>
								<option>No Choice</option>
							</select>
						 </td>
							</p>
                    </tr>
                    </tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information</legend>
				<p>The identification details are required during journey. One of the passenger booked on the ticket should have any of the identity cards ( Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Student Identity Card with photograph) during the journey in original. </p>
				<div class="clear"></div>
            </fieldset>
          
			<input class="submit" type="submit" onclick="alert('Form submitted successfully')"/>
			
			<div class="clear"></div>
        </form>
		
</body>
</html>