var questionsArray = ["Question1","Question2","Question3","Question4","Question5"]
var answerArray = ["Ans1","Ans2","Ans3","Ans4","Ans5"]



function doOnLoad() {
    var index = Math.floor(Math.random()*(5) - 0)
    var logID = localStorage.getItem("loginID")
    console.log(logID)
    document.getElementById("logID").innerHTML = logID
    console.log(questionsArray[index])
    localStorage.setItem("question",questionsArray[index])
}

function onClick() {
   var question = localStorage.getItem("question")
   var answer = document.getElementById("answerToQuestion").value
   console.log(question,answer)

}