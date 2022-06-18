const buttons = document.getElementsByClassName("button");


const buttonsdel = document.getElementsByClassName("buttonDelete");
if (buttonsdel.length > 0){
    getSubtotal();
}
empty_cart(buttonsdel.length);

for (let i = 0; i < buttons.length; i++) {
    const button = buttons[i];
    button.onclick = function() {clickFunc(this);}
}

function getSubtotal(){
    var subtotal = 0;
    sums = document.getElementsByClassName("total_cost");
    for (let i = 0; i < sums.length; i++) {
        subtotal = subtotal + parseInt(sums[i].children[1].innerHTML.toString(), 10);
    }
    document.getElementsByClassName("right-section")[0].children[0].children[1].innerHTML = subtotal + '.00';
}

function clickFunc(btn) {
    if (btn.className.includes('buttonBuy')){
        btn.style.backgroundColor = "lightgreen";
        btn.value = "In cart";
        resetButton(btn);
    }
    if (btn.className.includes('buttonDelete')){
        setTimeout(resetButton, 1, btn);
        setTimeout(getSubtotal, 1);
    }
    if (btn.className.includes('sendButton')){
        btn.style.backgroundColor = "lightgreen";
        btn.value = "Sent";
        resetButton(btn);
    }
}

function resetButton(btn){
    btn.style.backgroundColor = null;
    if (btn.className.includes('buttonBuy')) {
        btn.value = "To cart";
    }
    if (btn.className.includes('sendButton')) {
        btn.value = "Send";
    }
    if (btn.className.includes('buttonDelete')) {
        const count = btn.parentElement.parentElement.querySelector('.countInCart').children[0].innerHTML;
        const price = btn.parentElement.parentElement.querySelector('.price').children[1].innerHTML;
        if (count != 1){
            btn.parentElement.parentElement.querySelector('.countInCart').children[0].innerHTML = count - 1;
            btn.parentElement.parentElement.querySelector('.total_cost').children[1].innerHTML = price * (count-1);
        }
        else{
            const $block = $(btn.parentElement.parentElement.parentElement);
            $block.remove();
            console.log(buttonsdel.length);
            empty_cart(buttonsdel.length);
        }
        btn.value = "Remove";
    }
}

$(function(){
    $('.buttonBuy').click(function(){
        var btnid = $(this).attr("name");
        var size = $(".sizeList").find('option:selected').text();
        var url = '../php/codeOfBuy.php',
            data =  {'id': btnid, 'size': size};
        $.post(url, data, function (response) {
            // Response div goes here.
             //alert(response);
        });
    });
});

$(function(){
    $('.buttonDelete').click(function(){
        var btnid = $(this).attr("name");
        var url = '../php/codeOfDelete.php',
            data =  {'id': btnid};
        $.post(url, data, function (response) {
            //Response div goes here.
            //alert(data['id']);
        });
    });
});

$(function(){
    $('.buttonOrder').click(function(){
        var btnid = $(this).attr("name");
        var note = $(".special_note").val();
        var url = '../php/codeOfOrder.php',
            data =  {'id': btnid, 'note': note};
         $.post(url, data, function (response) {
            //Response div goes here.
            alert(response);
        });
    });
});


function empty_cart(count){
    if (count === 0){
        $('.emptyCart').addClass('visible');
    }
}