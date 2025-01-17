$(document).ready(function () {

    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        items: 1,
        nav: false
    });

    //top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeOut: 100, //2000 ms = 2 sec
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            400: {
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            767: {
                items: 4,
                nav: false
            },
            1000: {
                items: 5,
                nav: false
            }
        }
    });

    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item'

    });

    //select items on button-click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    //new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            400: {
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            767: {
                items: 4,
                nav: false
            },
            1000: {
                items: 5,
                nav: false
            }
        }
    });

    //blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            992: {
                items: 3,
                nav: false
            },
            1200: {
                items: 3,
                nav: false
            }
        }
    })

    //product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    //let $input = $(".qty .qty_input");

    //click on qty up button
    $qty_up.click(function (e) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //change product price using ajax call
        $.ajax({ url:"template/ajax.php", type:'post', data : { itemid : $(this).data("id")},success:function (result) {
            console.log(result);
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];

                if ($input.val() >= 1 && $input.val() <= 14) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });
                    //increase the price of the product
                    $price.text(parseInt(item_price*$input.val()));

                    //set subtotal price
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal + " сом");
                }
        }});//closing ajax request
    });

    //click on qty down button
    $qty_down.click(function (e) {
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //change product price using ajax call
        $.ajax({ url:"template/ajax.php", type:'post', data : { itemid : $(this).data("id")},success:function (result) {
                console.log(result);
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ($input.val() > 1 && $input.val() <= 15) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    });
                    //increase the price of the product
                    $price.text(parseInt(item_price*$input.val()));

                    //set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal + " сом");
                }
            }});//closing ajax request
    });
});
