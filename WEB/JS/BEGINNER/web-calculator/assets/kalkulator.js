const calculator = {
    displayNumber: '0',
    operator: null,
    firstNumber: null,
    waitingForSecondNumber: false,
  };
   
  function updateDisplay() {
    document.querySelector('#displayNumber').innerText = calculator.displayNumber;
  }
   
  function clearCalculator() {
    calculator.displayNumber = '0';
    calculator.operator = null;
    calculator.firstNumber = null;
    calculator.waitingForSecondNumber = false;
  }
   
  function inputDigit(digit) {
    if (calculator.displayNumber === '0') {
      calculator.displayNumber = digit;
    } else {
      calculator.displayNumber += digit;
    }
  }
   
  function inverseNumber() {
    if (calculator.displayNumber === '0') {
      return;
    }
    calculator.displayNumber = calculator.displayNumber * -1;
  }
   
  function handleOperator(operator) {
    if (!calculator.waitingForSecondNumber) {
      calculator.operator = operator;
      calculator.waitingForSecondNumber = true;
      calculator.firstNumber = calculator.displayNumber;
      calculator.displayNumber = '0';
    } else {
      alert('Operator sudah ditetapkan');
    }
  }
   
  function performCalculation() {
    if (calculator.firstNumber == null || calculator.operator == null) {
      alert('Anda belum menetapkan operator');
      return;
    }
   
    let result = 0;
    if (calculator.operator === '+') {
      result = parseInt(calculator.firstNumber) + parseInt(calculator.displayNumber);
    } else {
      result = parseInt(calculator.firstNumber) - parseInt(calculator.displayNumber);
    }
   
    calculator.displayNumber = result;
  }
   
   
  const buttons = document.querySelectorAll('.button');
  for (const button of buttons) {
    button.addEventListener('click', function (event) {
      // mendapatkan objek elemen yang diklik
      const target = event.target;
   
      if (target.classList.contains('clear')) {
        clearCalculator();
        updateDisplay();
        return;
      }
   
      if (target.classList.contains('negative')) {
        inverseNumber();
        updateDisplay();
        return;
      }
   
      if (target.classList.contains('equals')) {
        performCalculation();
        updateDisplay();
        return;
      }
   
      if (target.classList.contains('operator')) {
        handleOperator(target.innerText)
        return;
      }
   
      inputDigit(target.innerText);
      updateDisplay();
    });
  }

// //membuat objek dengan nama kalkulator
// const calculator = {
//     displayNumber: '0',
//     operator: null,
//     firstNumber: null,
//     waitingForSecondNumber: false,
//   };


//   function updateDisplay(){
//     document.querySelector('#displayNumber').innerText = calculator.displayNumber;
//   }

//   //menghapus nilai didalam kalkulator
//   function clearCalculator()
//   {
//     calculator.displayNumber = '0';
//     calculator.operator = null;
//     calculator.firstNumber = null;
//     calculator.waitingForSecondNumber = false;
//   }


//   //untuk memasukkan angka ke dalam nilai displayNumber kalkulator.
// function inputDigit(digit) 
// {
//     if(calculator.displayNumber === '0')
//     {
//         calculator.displayNumber = digit;
//     }else{
//         calculator.displayNumber += digit;
//     }
// }


// //variabel buttons dengan menginisialisasikan nilai seluruh elemen button yang ada, dan berikan event click pada tiap elemennya.
// const buttons = document.querySelectorAll('.button');
 
// for (const button of buttons) {
//   button.addEventListener('click', function (event) {
//     // mendapatkan objek elemen yang diklik
//     const target = event.target;
 
//     inputDigit(target.innerText); //mengambil nilai atau text (yang bukan html) , dan memasukkan nya ke dalam function inputDigit
//     updateDisplay();
//   });
// }

// button.addEventListener('click', function(event) {
//     // mendapatkan objek elemen yang diklik
//     const target = event.target;
   
//     if (target.classList.contains('clear')) {
//       clearCalculator();
//       updateDisplay();
//       return;
//     }
   
//     inputDigit(target.innerText);
//     updateDisplay();
//   });


