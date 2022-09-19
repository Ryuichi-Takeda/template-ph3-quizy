'use strict'
const quizes = document.querySelectorAll('.quiz')

function changeSelectedButtonColor(){
    const selectedButtonValid = Number(answerList.getAttribute('data-correct'))
    if(selectedButtonValid==1){
        answerList.classList.add('blue')
    }else{
        answerList.classList.add('red')
    }
}
quizes.forEach(quiz=>{
    const answerLists = quiz.querySelectorAll('.answer_list')
    const valid = quiz.getAttribute('data-valid')



    answerLists.forEach(answerList=>{
        // function changeSelectButtonColor(){
            // const answerList = document
            answerList.addEventListener('click',()=>{
                changeSelectedButtonColor(answerList)
            })
        // }
    })
})
