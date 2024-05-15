function form_valid()
{
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let mobile = document.getElementById("mobile").value;
    let male = document.getElementById("male");
    let female = document.getElementById("female");
    let color = document.getElementById("color").value;

    let gender = male.checked ? "male" : female.checked ? "female" : "";

    if( name.trim() === "" || email.trim() === "" || mobile.trim() === "" || gender === "" || color.trim() === "")
    {
        alert("All fields are mandatory to fill!");
        return false;
    }

    var formData = {
        name: name,
        email: email,
        mobile: mobile,
        gender: gender,
        color: color
    };

    sub_final(formData);
    
    return true;
}

function sub_final(formData)
{
    var outputTextArea = document.getElementById("output");
    outputTextArea.value = "Name: " + formData.name + "\n" +
                           "Email: " + formData.email + "\n" +
                           "Mobile: " + formData.mobile + "\n" +
                           "Gender: " + formData.gender + "\n" +
                           "Fav Color: " + formData.color;
}