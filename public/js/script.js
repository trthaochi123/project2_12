function printInvoice(){
    var printContents = document.getElementById("print-area").innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();
    document.body.innerHTML = originalContents;
}
