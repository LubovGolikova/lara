(function($){
    $(document).ready(function(){
        $('.slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


    $('.form-add-box').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: '/add-box',
            type: 'POST',
            data: $(this).serialize(),
            success: function(result) {
                showBox(result);
            }
        });
    });

    $('body').on('click', '.remove-flower', function(){
        $.ajax({
            url: '/remove-flower',
            type: 'POST',
            data: {id: $(this).val()},
            success: function(result) {
                showBox(result);
            }
        });
    });

        $('body').on('click', '.remove-all', function(){
            $.ajax({
                url: '/remove-all',
                type: 'POST',
                success: function(result) {
                    showBox(result);
                }
            });
        });


        function showBox(result){
            $('.modal-body').html(result);
            $('#exampleModal').modal();
        }






    });
})(jQuery)