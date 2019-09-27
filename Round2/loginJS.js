var credentialLoginID = ["Team1","Team2","Team3","Team4","Team5"]
var credentialPassword = ["2101","2202","2303","2404","2505"]
var questionsArray = ["dM_O[(JUTPHT","RLIO%EWO","]M]URVN&YVHG","Hqmiliyi","NI5:!BR228:","Fqprxvht#ufkhpfg#cqf#gqilphgukqi"]




function buttonOnClick() {
    console.log("Button Clicked")
    var loginID = document.getElementById("loginId").value
    var password = document.getElementById("password").value
    console.log(loginID,password)
    
    if(credentialLoginID.includes(loginID)&&credentialPassword.includes(password)&&(credentialLoginID.indexOf(loginID)===credentialPassword.indexOf(password))){
        console.log("Login")
        localStorage.setItem("loginID", loginID)
        var index = Math.floor(Math.random()*(6) - 0)
        console.log("From SetQuestion")
        console.log(questionsArray[index])
        localStorage.setItem("question",questionsArray[index])
        console.log("End of setQuestion")
        window.location.href = "locationPage.html"
        return false
    }
    return true
}

