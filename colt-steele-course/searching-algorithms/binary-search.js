// function binarySearch(arr, val) {
//     let left = 0;
//     let right = arr.length - 1;
//     let middle = Math.floor((left + right) / 2);
//     while (arr[middle] !== val && left <= right){
//         if(val < arr[middle]) right = middle - 1;
//         else left = middle + 1;
//         middle = Math.floor((left + right) / 2);
//     }
//     return arr[middle] === val ? middle : -1;
// }














































const binarySearch = (sortedArr, value) => {
    const left = 0;
    const right = sortedArr.length - 1;
    const middle;

    while (left < right) {
        middle = Math.floor((right + left) / 2);
        if (value > middle) left = middle;
        else right = middle;
    }
    return sortedArr[middle] ? sortedArr[middle] : -1;
}


console.log(binarySearch([1,2,3,4,5,6,7,8,9,10, 12, 13], 11));