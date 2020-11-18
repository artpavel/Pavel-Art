// Завдання 1. Сума числа
function SumNumber(n) {
    let sum = 0;
    while (n > 0) {
        sum += n % 10
        n = Math.floor(n / 10)
    }
    return sum;
}

let a = SumNumber(1234);
console.log('Задання 1. Сума цифр >>>>>  ' + a);

// Завдання 2. Середнє арифметичне масиву
function Average(arr) {
    let sum = 0;
    for (let i = 0; i < arr.length; i++) {
        sum += arr[i];
    }
    return sum / arr.length;
}

let b = Average([5, 6, 5, 6, 5]);
console.log('Задання 2. Середнє арифметичне >>>>>  ' + b);

// Завдання 3. Різниця між парними і непарними числами масиву
function Difference(array) {
    let sumPair = 0;
    let sumUnpair = 0;
    for (let i = 0; i < array.length; i++) {
        if (array[i] % 2 == 0) {
            sumPair += array[i];
        } else {
            sumUnpair += array[i]
        }
    }
    return sumPair - sumUnpair;
}

let c = Difference([2, 3, 2, 6, 5, 6, 7, 8, 9, 10]);
console.log('Задання 3. Різниця між масивами >>>>>  ' + c);
34 - 24

// Завдання 4. Порівняння масивів
function CompareArrays(arr1, arr2) {
    let likeArray = [];
    for (let i = 0; i < arr1.length; i++) {
        for (let j = 0; j < arr2.length; j++) {
            if (arr1[i] == arr2[j]) {
                likeArray.push(arr1[i]);
            }
        }
    }
    return likeArray;
}

let d = CompareArrays([10, 25, 44, 32, 76, 99, 123], [123, 15, 32, 55, 48, 76, 99]);
console.log('Завдання 4. Новий масив >>>>>');
console.log(d);
