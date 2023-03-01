

function compare(arr1, arr2){
    var arrCommon = [];
    for(var i =0 ; i < arr1.length; i++){
        for(var j=0; j < arr2.length; j++){
            if(arr1[i] == arr2[j]){
                arrCommon.push(arr1[i]);
            }
        }
    }
    return arrCommon;
}

var arr1 = [1,2,3,4,6];
var arr2 = [2,3,4,5,6];

console.log(compare(arr1, arr2));    