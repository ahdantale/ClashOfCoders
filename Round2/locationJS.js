//var questionsArray = ["Question1","Question2","Question3","Question4","Question5"]
var answerArray = ["Ans1","Ans2","Ans3","Ans4","Ans5"]

var finalQuestionArray = ["FQuestion1","FQuestion2","FQuestion3","FQuestion4","FQuestion5"]

function doOnLoad() {
    var question = localStorage.getItem("question")
    var index = Math.floor(Math.random()*(5) - 0)
    var logID = localStorage.getItem("loginID")
    console.log(logID)
    document.getElementById("logID").innerHTML = logID
    console.log(question)
    localStorage.setItem("finalQuestion", finalQuestionArray[index])
}

function doOnClick() {
   
   var answer = document.getElementById("answerToQuestion").value
   console.log("Answer given")

   if(answerArray.includes(answer)){
       
       console.log("CorrectAnswer")
       window.location.href = "finalQuestion.html"
       return false
   }

   return true
}