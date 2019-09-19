var credentialLoginID = ["Team1","Team2","Team3","Team4","Team5"]
var credentialPassword = ["2101","2202","2303","2404","2505"]
var questionsArray = ["Question1","Question2","Question3","Question4","Question5"]




function buttonOnClick() {
    console.log("Button Clicked")
    var loginID = document.getElementById("loginId").value
    var password = document.getElementById("password").value
    console.log(loginID,password)
    
    if(credentialLoginID.includes(loginID)&&credentialPassword.includes(password)&&(credentialLoginID.indexOf(loginID)===credentialPassword.indexOf(password))){
        console.log("Login")
        localStorage.setItem("loginID", loginID)
        var index = Math.floor(Math.random()*(5) - 0)
        console.log("From SetQuestion")
        console.log(questionsArray[index])
        localStorage.setItem("question",questionsArray[index])
        console.log("End of setQuestion")
        window.location.href = "file:///Users/abhishekdantale/DOCS/Code/ClashOfCoders/Round2/locationPage.html"
        return false
    }
    return true
}

