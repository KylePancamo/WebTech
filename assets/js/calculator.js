const buttons = document.querySelectorAll(".button");

const multiplyButton = document.getElementById('multiply');
const divideButton = document.getElementById('divide');
const minusButton = document.getElementById('minus');
const plusButton = document.getElementById('plus');

const handleOperator = (e) => {
    if (operator !== null && secondNum !== "") {
        calculate();
    }
    operator = e.target.textContent;
    outputValue = outputValue.toString().concat(" ", operator, " ")
    document.getElementById("output-screen-value").textContent = outputValue;
}

multiplyButton.addEventListener('click', handleOperator);
divideButton.addEventListener('click', handleOperator);
minusButton.addEventListener('click', handleOperator);
plusButton.addEventListener('click', handleOperator);

let operator = null;
let outputValue = 0;
let firstNum = "";
let secondNum = "";


const clear = () => {
    outputValue = 0;
    firstNum = "";
    secondNum = "";
    operator = null;
}

const handleOperand = (e) => {
    const value = e.target.textContent;
    if (value === "C") {
        clear();
    } else if (value === "=") {
        outputValue = calculate();
    } else {
        switch (outputValue) {
            case 0:
                outputValue = value;
                break;
            default:
                outputValue += value;
                break;
        }

        if (operator !== null) {
            secondNum += value;
        } else {
            firstNum += value;
        };
    }
    document.getElementById("output-screen-value").textContent = outputValue;
}

const calculate = () => {
    firstNum = parseFloat(firstNum);
    secondNum = parseFloat(secondNum);
    switch (operator) {
        case "x":
            outputValue = firstNum * secondNum;
            break;
        case "/":
            outputValue = firstNum / secondNum;
            break;
        case "-":
            outputValue = firstNum - secondNum;
            break;
        case "+":
            outputValue = firstNum + secondNum;
            break;
    }
    firstNum = parseFloat(outputValue);
    secondNum = "";
    if (outputValue.toString().includes(".")) {
        outputValue = parseFloat(outputValue).toFixed(3);
    } else {
        outputValue = parseInt(outputValue);
    }

    return outputValue;
}

buttons.forEach((button) => {
    button.addEventListener("click", handleOperand);
})

