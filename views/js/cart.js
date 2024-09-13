function clearCartItem(id) {
    $.post('modules/api.php?do=clearCartItem', {
        itemId: id
    }, function(data, textStatus, xhr) {
        data = $.parseJSON(data);
        $("[data-id=" + id + "]").remove();
        if ($(".dataCart").length == 0) {

        }
    });
    window.location.reload();
}

function changeValue(value, id) {
    $.post('modules/api.php?do=changeValue', {
        count: value,
        itemId: id
    }, function(data, textStatus, xhr) {
        data = $.parseJSON(data);
    });
    window.location.reload();
}
$('#customer_shipping_district').change(function() {
    var ship = $('#customer_shipping_district option:selected').data('ship');
    var price = $(this).data('price');
    var tong = ship + price;

    $('.ship').text(ship.toLocaleString() + 'đ');
    $('#input-ship').html('<input type="hidden" name="f10" value="' + ship + '">')
    $('.ship2').text(ship.toLocaleString() + 'đ');
    $('#tongcuoi').text(tong.toLocaleString() + 'đ');
});