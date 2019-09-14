var credentialLoginID = ["Team1","Team2","Team3","Team4","Team5"]
var credentialPassword = ["2101","2202","2303","2404","2505"]

function buttonOnClick() {
    console.log("Button Clicked")
    var loginID = document.getElementById("loginId").value
    var password = document.getElementById("password").value
    console.log(loginID,password)

    if(credentialLoginID.includes(loginID)&&credentialPassword.includes(password)&&(credentialLoginID.indexOf(loginID)===credentialPassword.indexOf(password))){
        console.log("Login")
        localStorage.setItem("loginID", loginID)
    }
}

