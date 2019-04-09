
var request = new XMLHttpRequest();
request.open('GET', 'data/books.json', false);
request.send(null);
var data = JSON.parse(request.responseText);
console.log(data);

var books = data.books;
var kirja = document.createElement('h1');


var table = document.createElement('TABLE');
table.setAttribute("id", "table");
for (var i=0; i < books.length; i++) {
	console.log(books[i].title);
	var item = document.createElement('tr');
	item.setAttribute("id", "sarake");
	item.innerHTML = books[i].title + " " + books[i].year;
	table.appendChild(item);
}
document.body.appendChild(table);
kirja.innerHTML = "asd";
document.body.appendChild(kirja);
document.body.insertBefore(kirja, table);


var trList = table.getElementsByTagName("tr");

for(var index = 0; index < trList.length; index++) {
	(function (index){
		trList[index].addEventListener("click", function(event) {
			var tulos = books[index].title;
			kirja.innerHTML = (tulos);
		});
	}(index));
}


