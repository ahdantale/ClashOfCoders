var finalAnswerArray = ["FAns1","FAns2","FAns3","FAns4","FAns5","FAns6","FAns7","FAns8","FAns9","FAns10"]


function questionHere() {
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