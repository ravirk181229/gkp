
			<h2>Admin,</h2>
			<div></div>
			<div><a class="logo" href="{{ route('index') }}">Ghar ka patta</a></div>
			<br>
			<h4>You received an email from : {{ $name }}</h4>
			<br>
			<table class="table table-dark table-striped"  style="width: 100%; border: 1px solid #ccc;" >
			  <thead style="border: 1px solid #ccc;">
			    <tr style="color: #F7931E; border: 1px solid #ccc;">
			      <th style="border: 1px solid #ccc;" scope="col">Name</th>
			      <th style="border: 1px solid #ccc;" scope="col">Email</th>
			      <th style="border: 1px solid #ccc;" scope="col">Phone Number</th>
			      <th style="border: 1px solid #ccc;" scope="col">Subject</th>
			      <th style="border: 1px solid #ccc;" scope="col">Message</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr style="color: #406576; text-align: center; border: 1px solid #ccc;">				      
			      <td style="border: 1px solid #ccc;"> {{ $name }}</td>
			      <td style="border: 1px solid #ccc;"> {{ $email }}</td>
			      <td style="border: 1px solid #ccc;"> {{ $phone_number }}</td>
			      <td style="border: 1px solid #ccc;"> {{ $subject }}</td>
			      <td style="border: 1px solid #ccc;"> {{ $user_message }}</td>				      
			    </tr>				   
			  </tbody>
			</table>				


