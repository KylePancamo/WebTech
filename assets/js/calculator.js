const buttons = document.querySelectorAll(".button");
const decimalButton = document.querySelector(".decimal");

var dropdownMenu = document.querySelector(".dropdown-menu");

// Add an event listener for when any item inside it is clicked
dropdownMenu.addEventListener("click", (e) => {

    // Get a reference to the clicked item
    var selectedItem = e.target;

    // Get its text content
    var selectedItemText = selectedItem.textContent;

    if (operator !== null && secondNum !== "") {
        calculate();
    }
    operator = selectedItemText;
    outputValue = outputValue.toString().concat(" ", operator, " ")
    document.getElementById("output-screen-value").textContent = outputValue;
});

const handleOperator = (e) => {
    if (operator !== null && secondNum !== "") {
        calculate();
    }
    operator = e.target.textContent;
    outputValue = outputValue.toString().concat(" ", operator, " ")
    document.getElementById("output-screen-value").textContent = outputValue;
}


let operator = null;
let decimal = "";
let outputValue = 0;
let firstNum = "";
let secondNum = "";


const clear = () => {
    outputValue = 0;
    firstNum = "";
    secondNum = "";
    operator = null;
}

const handleDecimal = (e) => {
    if (operator !== null) {
        if (secondNum.toString().includes(".")) {
            return;
        }
    } else {
        if (firstNum.toString().includes(".")) {
            return;
        }
    }
    outputValue += e.target.textContent;
    if (operator !== null) {
        secondNum += e.target.textContent;
    } else {
        firstNum += e.target.textContent;
    }
    document.getElementById("output-screen-value").textContent = outputValue;
}

decimalButton.addEventListener("click", handleDecimal);

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
    operator = null;
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