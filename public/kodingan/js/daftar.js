
function terimainput(){
    var a=document.getElementById("email");
    var b=document.getElementById("name");
    var c=document.getElementById("age");
    var d=document.getElementById("pw");
    var e=document.getElementById("confirm");
    var f=document.getElementById("password");

    if(a.value === null || a.value ==="")
    {
        alert("Email cannot be empty");
    }
    if(b.value === null || b.value ==="")
    {
        alert("Name cannot be empty");
    }
    if(f.value === null || f.value ==="" || f.length <= 0)
    {
        alert("password cannot be empty");
    }
    var x=document.getElementById("pw").value;
    if(x.length <= 5 )
    {
        alert("password must be grater than 5 character !");
    }
   
    var y=document.getElementById("confirm").value;
    if(x != y)
    {
        alert("retype password dont match !");                    
    }
    if(c.value<=17)
    {
        alert("Age must be at least 17 years old")
    }
    else{
        <a  href="../explore Oren1.html"></a>
    }
}
