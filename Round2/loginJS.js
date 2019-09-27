var credentialLoginID = ["Team1","Team2","Team3","Team4","Team5","Team6","Team7","Team8","Team9","Team10","Team11","Team12","Team13","Team14","Team15","Team16","Team17","Team18","Team19","Team20","Team21","Team22","Team23","Team24","Team25","Team26","Team27","Team28","Team29","Team30","Team31","Team32","Team33","Team34","Team35"]
var credentialPassword = ["2101","2202","2303","2404","2505","2606","2707","2808","2909","210010","211011","212012","213013","214014","215015","216016","217017","218018","219019","220020","221021","222022","223023","224024","225025","226026","227027","228028","229029","230030","231031","232032","233033","234034","235035"]
var questionsArray = ["dM_O[(JUTPHT","RLIO%EWO","]M]URVN&YVHG","aaMQP)XHXPMQI","WGSSCFI","HEOT`NDF","VVBJTV","RPOF","HQMILIYI","NI5:!BR228:","Fqprxvht#ufkhpfg#cqf#gqilphgukqi","FQRMPQPM","dobvtuprn","ndjq!jbwf","oqwmif\"esgsf"]




function buttonOnClick() {
    console.log("Button Clicked")
    var loginID = document.getElementById("loginId").value
    var password = document.getElementById("password").value
    console.log(loginID,password)
    
    if(credentialLoginID.includes(loginID)&&credentialPassword.includes(password)&&(credentialLoginID.indexOf(loginID)===credentialPassword.indexOf(password))){
        console.log("Login")
        localStorage.setItem("loginID", loginID)
        var index = Math.floor(Math.random()*(15) - 0)
        console.log("From SetQuestion")
        console.log(questionsArray[index])
        localStorage.setItem("question",questionsArray[index])
        console.log("End of setQuestion")
        window.location.href = "locationPage.html"
        return false
    }
    return true
}

