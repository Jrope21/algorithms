// need to go back and study this one -- has good use cases -- need to understand it better (used var :( ))

function insertionSort(arr){
	var currentVal;
    for(var i = 1; i < arr.length; i++){
            currentVal = arr[i];
            for(var j = i - 1; j >= 0 && arr[j] > currentVal; j--) {
                if(arr[j] > currentVal) {
                    arr[j+1] = arr[j]
                }
                
                console.log(arr);
            }
            arr[j+1] = currentVal;
        }
        return arr;
}