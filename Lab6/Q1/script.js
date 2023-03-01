function calAvg(){
    var table = document.getElementById("markstable");
    let total = 0;
    let len = table.rows.length;
    let avg;
    for(var i = 1; i<len; i++){
        let marks = parseInt(table.rows[i].cells[1].textContent);
        total += marks;
        avg = total/len;
    }
    return parseInt(avg);
}

function getGrade() {
    var average = calAvg();
    if (average >= 0 && average < 60) return "F";
    else if (average >= 60 && average < 70) return "D";
    else if (average >= 70 && average < 80) return "C";
    else if (average >= 80 && average < 90) return "B";
    else if (average >= 90 && average <= 100) return "A";
    else return -1;
  }
  
function write(){
    var table1 = document.getElementById("display");
    avgMarks = calAvg();
    avgGrade = getGrade();
    table1.rows[0].cells[1].textContent = avgMarks;
    table1.rows[1].cells[1].textContent = avgGrade;
}

write();

console.log(calAvg());
console.log(getGrade());