function bubbleSort(arr) {
        
    for(let i = arr.length; i > 0; i--) {
        let madeSwap = false;
        for(let y = 0; y < i - 1; y++) {
            let comparisonValue = arr[i]
            if(comparisonValue > arr[y]) {
                arr[i] = arr[y];
                arr[y] = comparisonValue;
                madeSwap = true;
            } 
        }
        if(madeSwap) break;
    }

    return arr;
}