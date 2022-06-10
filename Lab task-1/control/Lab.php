<htlm>
<head>
<title>My Home</title>
</head>
<body>
<h1>Home</h1>
<form action="../control/process.php"method="POST">
<table>
<tr>
<td>First Name</td>
<td>input type="text"</td>
</tr>
<tr>
<td>Last Name</td>
<td>input typr="text"</td>
</tr>
<tr>
<td>Age</td>
<td>input type="text"</td>
</tr>
<tr>
<td>Designation</td>
<td>
<input type="radio"name="post"value="Junior Programmer">Junior Programmer
<input type="radio"name="post"value="Senior Programmer">Senior Programmer
<input type="radio"name="post"value="Project Lead">Project Lead
</td>
</tr>
<tr>
<td>Preferred language</td>
<td><input type="checkbox"name="post"value="JAVA">JAVA
<input type="checkbox"name="post"value="PHP">PHP
<input type="checkbox"name="post"value="C++">C=++
</td>
</tr>
<tr>
<td>Email</td>
</tr>
<tr>
<td>Password</td>
<td>
<input type="Password">
</td>
</tr>
<tr>
<td>Please Choose a file</td>
<td>
<input type="file"placeholder="Choose a file"name="name">
</td>
</tr>
<tr>
<td>
<input type="Submit">
<input type="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>