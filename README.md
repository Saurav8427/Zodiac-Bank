# Zodiac-Bank
In this project I have implemented various sections to add, delete accounts, view transactions and rest actions that a bank should contain.

Platform : Xampp, MySQL , PHP , HTML and CSS
Editor : Visual Studio Code

Get Access : Install Xampp in your computer.
	   Copy Bank-Project folder in location : Xampp\htdocs\ 
	   After starting Apache and MySQL in xampp software , you need to open this link : http://localhost/bank-project/Home.php  
	    If you use Database First, you create a database under SQL Server named accordingly in the given php file.

Description:

This project is a platform for the user to create a bank account and do transactions in the bank.
You can block/Unblock your account.
You can avail loan from the bank.

Admin Page:

It allows the admin to access all the user accounts and the activities occuring between them.
It provides a platform for the user to create account.

User Login:

After creating a account from admin page , by using credentials user can access his/her account and do the activities such as Transfer Money, View Balance, Update Profile and Change 
Password. The amount sent or recieved can be viewed in My Transaction section.

The database is relational, the amount sent by a user affect the balance of the user who recieves the amount.
A session is being terminated when the user log outs the User Page. The User account is protected with some password which cannot be accessed by any another user.
