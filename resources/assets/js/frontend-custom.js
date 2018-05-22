$(document).ready(function() {
    var language = $('#language').val();
    var name = 'name_' + language;
    console.log('the language', language);
    $(document).on('show.bs.modal', function(event) {
        $('.old-price-ql').show();
        var product = $(event.relatedTarget) // Button that triggered the modal
        $('.old-price-ql').html(product.data('price'));
        $('.new-price-ql').html(product.data('saleprice'));
        $('.product-heading').html(product.data('name'));
        $('.view-details').attr('href', product.data('link'));
        $('.product-image').attr('src', product.data('image'));
        $('.quick-desc').html(product.data('description'));

        // hide the on sale node if the product is not on sale
        if (product.data('price') == product.data('saleprice')) {
            $('.old-price-ql').hide();
        }
    });
    // when the color changes .. fetch all sizes related according to the product attribute.
    $('#color').on('change', function(e) {
        let product_id = $('#product_id').val();
        let color_id = e.target.value;
        console.log('productid', product_id);
        console.log('color id', color_id);
        $('#size').html('<option value="">select size</option>');
        return axios.get('/api/size', {params: {product_id, color_id}}).then(r =>
            r.data.map(s => {
                console.log('the size', `${s.size[name]}`);
                return $('#size').append(`<option value="${s.size.id}">${s.size[name]}</option>`)
            })
        ).catch(e => console.log(e));
    })
    // when the size changes .. should fetch the qty of the current attribute and inject it in max qty.
    $('#size').on('change', function(e) {
        let size_id = e.target.value;
        let color_id = $('#color').val();
        let product_id = $('#product_id').val();
        return axios.get('/api/qty', {
            params: {
                product_id,
                color_id,
                size_id
            }
        }).then(r => {
            $('#qty').attr('maxlength', r.data);
            $('#qty').attr('value', 0);
        }).catch(e => console.log(e));
    });
    $('.qty-increase').on('click', function(e) {
        let max = parseInt($('#qty').attr('maxlength') - 1);
        let currentyQty = parseInt($('#qty').attr('value'));
        let qty = parseInt(currentyQty <= max ? currentyQty + 1 : 1);
        $('#qty').attr('value', qty);
    });

    $('.qty-decrease').on('click', function(e) {
        let currentyQty = parseInt($('#qty').attr('value'));
        let qty = (currentyQty > 0 ? currentyQty - 1 : currentyQty);
        $('#qty').attr('value', qty);
    });

    // cart.index
    $('#areas').html('<option value="">Select Area</option>');
    $('#country').on('change', function(e) {
        countryCode = e.target.value;
        console.log('countryCode', countryCode);
        $('#areas').html('').toggleClass('disabled');
        $('#forward').attr('disabled', 'disabled');
        $.get('/api/country/' + countryCode, function(data) {
            return setTimeout(injectAreas(data), 4000);
        });
    });
    $('#areas').on('change', function() {
        return setTimeout($('#forward').removeAttr('disabled'), 2000);
    })
    function injectAreas(data) {
        for (var i in data) {
            data[i].map(function(v, index) {
                $('#areas').append(`<option value="${v}">${v}</option>`)
            });

        }
    }

})