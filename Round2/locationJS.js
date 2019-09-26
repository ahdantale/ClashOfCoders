//var questionsArray = ["Question1","Question2","Question3","Question4","Question5"]
var answerArray = ["Ans1","Ans2","Ans3","Ans4","Ans5"]

var question1 = "We define f(X,Y) as number of different corresponding bits in binary representation <br>of X and Y. For example, f(2, 7) = 2, since binary representation of 2 and 7 <br>are 010 and 111, respectively. The first and the third bit differ, so f(2, 7) = 2. <br> You are given an array of N positive integers, A 1 , A 2  ,…, A N . Find sum of f(A i , A j ) for <br>all pairs (i, j) such that 1 ≤ i, j ≤ N. Return the answer modulo 10 9 +7. <br>For example, <br> <br>A=[1, 3, 5] <br>We return <br>f(1, 1) + f(1, 3) + f(1, 5) + <br>f(3, 1) + f(3, 3) + f(3, 5) + <br>f(5, 1) + f(5, 3) + f(5, 5) =<br>0 + 1 + 1 +<br>1 + 0 + 2 +<br>1 + 2 + 0 = 8"
var question2 = "Given an array A of N positive numbers. The task is to find the position where <br>equilibrium first occurs in the array. Note here equilibrium position in an array <br>s a position such that the multiplication of elements before it is equal to the <br>sum of elements after it.<br><br>{ 4,2,3,5,1,3,10,44,7,6,7,25,99,55,6,34,77 }<br></br>"
var question3 = "The cost of stock on each day is given in an array A [ ] of size N. Find all the days <br>on which you buy and sell the stock so that in between those days your profit <br>is maximum.<br>{100, 180, 260, 310, 40, 535, 695}<br></br>"
var question4 = "Encrypt the word FoRLAn on the basis of the following algorithm:<br>H       E       L       l       O           W       o        r       L       d<br>  |       |       |       |       |            |        |        |       |       |<br>EFG   BCD   IJK   ijk   LMN       TUV   lmn   opq   IJK   abc<br><br>and if there comes A b C<br>then write:<br>           A        b       C<br>           |        |        |<br>           AAA   bbb   CCC<br>"
var question5 = "Write a program which will accept a line of text and tell you if any of the words <br>are made up of the same letters.	<br>Here is an example:  The word \"silent\" is an anagram of \"listen\" similarly <br> \“astronomer\” can be converted into \“moon starer\”.<br>QUESTION: The school master went on the round for inspecting the dormitory <br>which has now became a very dirty room. Therefore all the students were called to <br>the Principal’s office from their classroom. The Principal explained to them that \“If <br>the place where you live are dusty then how can you study.\”<br>"
var question6 = "Given a square matrix of order 5, rotate 2(each) of the outer elements in anti-<br>clockwise direction and 2(each) of the inner elements in clockwise directions <br>and so on...<br><br>Example: In the square matrix of order 5, the outer <br>elements will be rotated in the anti-clockwise direction, the next inner <br>elements will be rotated in clockwise direction, the next inner elements will <br>be rotated in anti-clockwise direction and so on... and write the answer in <br>row major form.<br>"
var question7 = "Given a string of size n, write functions to perform following operations on string. Left (Or <br>anticlockwise) rotate the given string by d elements (where d <= n). Right (Or clockwise) rotate the given <br>string by d elements (where d <= n).<br>Here d = 44; <br> The given string is = “\iywgrfadjnouukhbwriwhbfkadijkhbdkbkbwdknkjbskvjbefnbakdfbkhdefkjneofuh\”"
var question8 = "Identify the following pattern <br>0<br>1 1<br>1 2 3<br>1 2 3 6<br>1 2 3 4 10<br>1 2 3 4 5 15<br>Find the sum of the 15000th row<br>."
var question9 = "<br>Find the sum of the elements of it’s 20th  row of the following series :<br>2<br>9    9<br>28    29    28<br>65    67    67    65<br>126    129    131    129    126<br>217    221    226    226    221    217  <br>And so on…<br>"
var question10 = "<br>Given a series find the 15,000th term :<br>216, 3456, 24000, 108000, 370440...<br>"
var finalQuestionArray = [question1,question2,question3,question4,question5,question6,question7,question8,question9,question10]


function doOnLoad() {
    
    var question = localStorage.getItem("question")
    var logID = localStorage.getItem("loginID")
    console.log(logID)
    document.getElementById("logID").innerHTML = logID
    console.log(question)
   document.getElementById("questionHere").innerHTML = question
    
}

function doOnLoadForInterPage() {

    var logID = localStorage.getItem("loginID")
    console.log(logID)
    document.getElementById("logID").innerHTML = logID
}

function doOnClick() {
   
   var answer = document.getElementById("answerToQuestion").value
   console.log("Answer given") 

   if(answerArray.includes(answer)){
       var index = Math.floor(Math.random()*(10) - 0)
       console.log("CorrectAnswer")
       window.location.href = "finalQuestion.html"
       localStorage.setItem("finalQuestion", finalQuestionArray[index])
       console.log(index)
       return false
   }

   return true
}
