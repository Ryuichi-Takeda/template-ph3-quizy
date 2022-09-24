"use strict";
const quizzes = document.querySelectorAll(".quiz");

const setDisabled = (answerLists) => {
    answerLists.forEach((answerList) => {
        answerList.classList.add("pointerEventsNone");
    });
};

function changeSelectedButtonColor(answerList) {
    const selectedButtonValid = Number(answerList.getAttribute("data-valid"));
    if (selectedButtonValid == 1) {
        answerList.classList.add("answer_valid");
    } else {
        answerList.classList.add("answer_invalid");
    }
}

function showResult(answerList, quiz) {
    const selectedButtonValid = Number(answerList.getAttribute("data-valid"));
    const answerBox = quiz.querySelector(".answerbox");
    const textBox = quiz.querySelector(".answerbox>span");
    answerBox.style.display = "block";
    if (selectedButtonValid == 1) {
        textBox.innerText = "正解";
    } else {
        textBox.innerText = "不正解";
    }
}

quizzes.forEach((quiz) => {
    const answerLists = quiz.querySelectorAll(".answer_list");
    const valid = quiz.getAttribute("data-valid");

    answerLists.forEach((answerList) => {
        answerList.addEventListener("click", () => {
            changeSelectedButtonColor(answerList);
            setDisabled(answerLists);
            showResult(answerList, quiz);
        });
    });
});
