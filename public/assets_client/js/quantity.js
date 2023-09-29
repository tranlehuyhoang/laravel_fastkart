/**=====================
     Quantity js
==========================**/
$('.qty-right-plus').click(function () {
    if ($(this).prev().val() > 0) {
        $(this).prev().val(+$(this).prev().val() + 1);
    }
});
$('.qty-left-minus').click(function () {
    if ($(this).next().val() > 0) {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
});