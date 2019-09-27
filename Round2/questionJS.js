
var finalAnswerArray = [
    "724",
    "10",
    "49988766543311",
    "CDE – lmn – OPQ – IJK – AAA – klm",
    "3",
    "3450523870127876169694345",
    "kvjbefnbakdfbkhdefkjneofuhiywgrfadjnouukhbwriwhbfkadijkhbdkbkbwdknkjbsijkhbdkbkbwdknkjbskvjbefnbakdfbkhdefkjneofuhiywgrfadjnouukhbwriwhbfkad",
    "112492500",
    "6,84,288",
    "170961915687564597758100120000"
]

function questionHere() {
    
    var logID = localStorage.getItem("loginID")
    console.log(logID)
    document.getElementById("logID").innerHTML = logID
    var questionSelected = localStorage.getItem("finalQuestion")
    document.getElementById("questionHere").innerHTML = questionSelected
    console.log(questionSelected)
    localStorage.setItem("answerState","")

}

function doOnSubmit() {
    var answerSubmitted = document.getElementById("finalQuestionAnswer").value
    console.log(answerSubmitted)
    if(finalAnswerArray.includes(answerSubmitted)){
        console.log("Correct Answer")
        localStorage.setItem("answerState", "Correct Answer")
        document.getElementById("afterSubmitMessage").innerHTML = "Correct Answer"
    }
}