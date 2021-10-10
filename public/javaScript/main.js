let id= $("input[name*='book_id']");
id.attr("readonly","readonly");

$(".btnedit").click(e=>{
   let textvalues= displayData(e);

  /*  console.log(textvalues); */


 let bookimage= $("input[name*='book_image']");
 let bookname= $("input[name*='book_name']");
 let bookpublisher= $("input[name*='book_publisher']");
 let bookprice= $("input[name*='book_price']");
 let bookdetails= $("textarea[name*='book_details']");
// sada dodeljujem vrednosti u polja
 id.val(textvalues[0]);
//slika ne moze da se upise opet jer nema polje da vrati sliku iz baze
 bookname.val(textvalues[2]);
 bookpublisher.val(textvalues[3]);
 bookprice.val(textvalues[4].replace("RSD", ""));
 bookdetails.val(textvalues[5]);
});

function displayData(e){
    let id=0;
    const td= $("#tdbody tr td");
    let textvalues=[];

    for(const value of td){
        if(value.dataset.id == e.target.dataset.id){ //na koji id kliknemo te vrednosti nam vraca
            /* console.log(e.target.dataset.id);
            console.log(value); */
            textvalues[id++]= value.textContent;
        }
    }
    return textvalues;
}