"use strict";
const quizes = document.querySelectorAll(".quiz");

function changeSelectedButtonColor(answerList) {
    const selectedButtonValid = Number(answerList.getAttribute("data-valid"));
    if (selectedButtonValid == 1) {
        answerList.classList.add("answer_valid");
    } else {
        answerList.classList.add("answer_invalid");
    }
}
quizes.forEach((quiz) => {
    const answerLists = quiz.querySelectorAll(".answer_list");
    const valid = quiz.getAttribute("data-valid");

    answerLists.forEach((answerList) => {
        answerList.addEventListener("click", () => {
            changeSelectedButtonColor(answerList);
        });
    });
});
