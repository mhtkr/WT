function oe()
{
    var num = document.getElementById("inp").value;
    num = Number(num);

    if(num === 0)
    {
        alert("The number is ZERO");
    }
    else if(num % 2 === 0)
    {
        alert("The number is EVEN");
    }
    else
    {
        alert("The number is ODD");
    }
}