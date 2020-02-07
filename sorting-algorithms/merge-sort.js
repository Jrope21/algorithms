function merge(arr1, arr2) { // maybe slightly more efficient??? -- reduce conditional check amount
    let newArr = [];
    let i = 0;
    let j = 0;

    while (j < arr2.length && i < arr1.length) {
        if(arr1[i] < arr2[j]) {
            newArr.push(arr1[i]);
            i++;
        } else {
            newArr.push(arr2[j]);
            j++;
        }
    }

    while (j < arr2.length) {
        newArr.push(arr2[j]);
        j++;
    }

    while (i < arr1.length) {
        newArr.push(arr1[i]);
        i++;
    }

    return newArr;
}

function mergeSort(arr) {
    if(arr.length <= 1) return arr;

    let arr1 = mergeSort(arr.slice(0, Math.floor(arr.length / 2)));
    let arr2 = mergeSort(arr.slice(Math.floor(arr.length / 2)));

    return merge(arr1, arr2)
}