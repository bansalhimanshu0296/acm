
document.getElementById("comment").style.fontFamily = "sans-serif";
function myf()
{
	document.getElementById('form1').onsubmit=function()
	{
		document.getElementById('error').style.color="red";
		document.getElementById('error').style.left="40px";
		


		if(document.getElementById('name').value=="" && document.getElementById('comment').value=="")
		{
			document.getElementById('error').innerHTML="Please Enter Your Name and Comment ";
			return false;
		}
		else if(document.getElementById('comment').value=="")
		{
			document.getElementById('error').innerHTML="Please Enter Your comment";
			return false;
		}
		else if(document.getElementById('name').value=="")
		{
			document.getElementById('error').innerHTML="Please Enter Your Name";
			return false;
		}

		else 
		{
			if(document.getElementById('name').value.length !=0)

		{
			var a=document.getElementById('name').value;

				for (var i = 0; i<a.length; i++)
				{
					var asc = a[i].charCodeAt();
					if (asc < 65 || asc>122 )
					{
						document.getElementById('error').innerHTML="Please Enter Correct Name";
						return false;
					}
					else if (asc > 90 && asc <97)
					{
						document.getElementById('error').innerHTML="Please Enter Correct Name";
						return false;
					}
					

				}
		}
		else
		{
			document.getElementById('error').innerHTML="";
			

			return true;
		}
		}
	}


};





window.onload =function()
{
	myf();
};














