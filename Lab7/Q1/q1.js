function Book(title, author, alreadyRead){
    this.title = title;
    this.author = author;
    this.alreadyRead = alreadyRead;

    this.ReadBook = function(){
        return !this.alreadyRead;
    };
}

var hamzaBook = new Book('The spritual journey', 'Hamza Shahid', false);
var haiderBook = new Book('How to be among the top 1% stds of FAST', 'Farouq Haider', true);
var husnainBook = new Book('How to be make millions from amazon FBA', 'Ali Husnain', false);
var danniBook = new Book('How to make delicious malai boti', 'Daniyal Mutahhar', true);
var shaiqBook = new Book('How to be a master of none and jack of all', 'Shaiq Paracha', false);

var callBook = [hamzaBook, haiderBook, husnainBook,danniBook, shaiqBook];


var list = document.createElement('ul');

document.getElementById("myListContainer").appendChild(list)

callBook.forEach((item) =>{
    let li = document.createElement('li');
    if(Book.ReadBook == true)
        li.innerHTML = "You already read " + item.title + " by " + item.author;
    else
        li.innerHTML = "You still have to read " + item.title + " by " + item.author;
    list.appendChild(li);
    // console.log("Executed");
})