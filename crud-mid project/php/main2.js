
let id = $("input[name*='book_id']")
id.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    let bookname = $("input[name*='book_name']");
    let bookauthor = $("input[name*='book_author']");
    let bookpage = $("input[name*='book_page']");
    let bookyear = $("input[name*='book_year']");

    id.val(textvalues[0]);
    bookname.val(textvalues[1]);
    bookauthor.val(textvalues[2]);
    bookpage.val(textvalues[3]);
    bookyear.val(textvalues[4]);
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        console.log("Value :",value);
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}