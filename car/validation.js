function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(carform.emname.value))
  {
    return (true)
  }
    alert("Enter Valid email!")
    return (false)
}


function targ(phn)
{
if(targ && targ.length===10) 
  // targ is a valid phone number
   {
    return (true)
  }
    alert("Please enter valid number!")
    return (false)
}