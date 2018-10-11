function validateform(){  
	var ybudget=document.myform.ybudget.value;  
	var mbudget=document.myform.mbudget.value;    
	if (ybudget==null || ybudget==""){  
		alert("Budget can't be blank");  
		return false;  
	}
	else if(mbudget==null || ,mbudget==""){
		alert("Budget can't be blank");  
		return false;  
	}  
}



function check_user()
{ 
	var field = myForm.usertxt.value;
	var mnlen=4;
	var mxlen=12;
	
	var letters = /^[0-9a-zA-Z]+$/;
	if(myForm.usertxt.value=="")
	{
		alert('The Username Field canont be Empty');
		myForm.usertxt.focus.value="";
		return true;
	}

	if(!myForm.usertxt.value.match(letters))
	{
		alert('Accept Valid Username');
		myForm.usertxt.focus.value=""
		return true
	}
	
	if(field.length<mnlen || field.length> mxlen)
	{ 
		alert("Please input the username between " +mnlen+ " and " +mxlen+ " characters");
		myForm.usertxt.focus.value=""
		return true;
	}
}

function check_pwd()
{
	var len = myForm.pwdtxt.value.length;
	var my=12;
	var mx=8;
	if(myForm.pwdtxt.value=="")
	{
		alert("Password Can not be Empty");
		myForm.pwdtxt.value="";
		return true;
	}
	if(len>my || len<mx)
	{
		alert("Length Should be between in "+mx+"to"+my);
		myForm.pwdtxt.value="";
		return true;
	}
}


function first_name()
{ 
    var letters = /^[A-Za-z]+$/;
    if(myForm.fnametxt.value=="")
	{
		alert('The First Name can not be blank');
		document.myForm.fnametxt.value="";
		return true;
	}
	if(!myForm.fnametxt.value.match(letters))
    {
		alert('Please input alphabet characters only');
		document.myForm.fnametxt.value="";
		return true;      
	}
	
}

function last_name()
{ 
    var letters = /^[A-Za-z]+$/;
    if(myForm.lnametxt.value=="")
	{
		alert('The Last Name cannot be blank');
		document.myForm.lnametxt.value="";
		return true;
	}
	if(!myForm.lnametxt.value.match(letters))
    {
		alert('Please input alphabet characters only');
		document.myForm.lnametxt.value="";
		return true;      
	}
	
}

function check_mno()
{ 
	var mnlen=10;
	var mxlen=10;
	var numbers = /^[0-9]+$/;
	var mno = myForm.phonetxt.value;
	var field = document.myForm.phonetxt.value; 
	if(mno=="")
	{
		alert("Mobile Number Can not be Empty");
		document.myForm.phonetxt.value="";
		return true;
	}
	if(!mno.match(mno))
	{
		alert("Enter Only numbers");
		document.myForm.phonetxt.value="";
		return true;
	}
	if(field.length<mnlen || field.length> mxlen)
	{ 
		alert('Enter valid Mobile No');
		document.myForm.phonetxt.value="";
		return true;
	}
}

function check_mail()
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(myForm.emailtxt.value=="")
	{
		alert("Email Address Can not be Empty");
		document.myForm.emailtxt.value="";
		return true;
	}
	if(!myForm.emailtxt.value.match(mailformat))
	{
		alert("Enter Valid Email Address");
		document.myForm.emailtxt.value="";
		return true;
	}
}	  
	