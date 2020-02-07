function selectionSort(arr) {
    for(let i = 0; i < arr.length; i++) {
        let minIndex = i;
        let minValue = arr[i];

        for(let y = i + 1; y < arr.length; y++) {
            if (arr[y] < minValue) {
                minIndex = y;
                minValue = arr[y];
            }
        }
        if(minValue < arr[i] && minValue !== arr[i]) {
            arr[minIndex] = arr[i];
            arr[i] = minValue
        } 
    }
    return arr;
}