# Facebook Sign-Up Form

This is a simple web form that validates the user input and saves the data to MySQL database.

<img width="1710" alt="Screenshot 2023-04-11 at 1 52 26" src="https://user-images.githubusercontent.com/63150803/231014278-3940c6e6-be30-41d7-9856-8ac629537361.png">

## First layer of validation
This is checked direktly in the html tags
* Using the attribute "require" I guarantee that there are no empty fields
* The type="email" attribute ensures that the "Email" field must follow the pattern text + @ + text
* Using the attribute "pattern" with the following RegEx "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" I guarantee a strong password that contains at least:
    * 8 characters
    * 1 uppercase letter
    * 1 lowercase letter
    * 1 special symbol

## Second layer of validation
It begins when the first layer of validation is passed and the "Sign-up" button is pressed
* Using the preg_match() function I check if the "First name" and "Last name" fields contain only letters and the symbol '-'
* Using the is_null() function I check one more time if any of the fields is empty

## Procedure
* The form cannot be submitted before all fields are filled. 
* When this condition is met the **"Sign Up"** button can be pressed. 
* After this the PHP script takes the user input and stores it in string variables, which are then validated one last time. 
* In case wrong data is founded, a pop-up appears with the message "_Wrong data entered_"
* Finally, if there are no errors, a connection to the MySQL database is opened and the user data is stored inside.

<table>
<tr>
<td>id</td>
<td>firstName</td>
<td>email</td>
<td>lastName</td>
<td>pass</td>
<td>month</td>
<td>day</td>
<td>year</td>
<td>sex</td>
</tr>

<tr>
<td >12</td>
<td>Simeon</td>
<td>sgelovski@gmail.com</td>
<td>Gelovski</td>
<td>SimeonP@rola1</td>
<td>3</td>
<td>19</td>
<td>2000</td>
<td>male</td>
</tr>

<tr>
<td>110</td>
<td>Georgi</td>
<td>georgi@gmail.com</td>
<td>Petrov</td>
<td>Gosho17</td>
<td>10</td>
<td>7</td>
<td>2015</td>
<td>male</td>
</tr>

<tr>
<td>117</td>
<td>Ivan</td>
<td>ivan@gmail.com</td>
<td>Ivanov</td>
<td>ivanParola1@</td>
<td>2</td>
<td>5</td>
<td>2006</td>
<td>male</td>
</tr>
</table>
