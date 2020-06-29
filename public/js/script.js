(function($){
    $(document).ready(function(){

        $('.img-popup').magnificPopup({delegate: 'a',type:'image', gallery:{enabled:true}});

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
        $('body').on('click', 'td .edit-order', function(e){
            e.preventDefault();

            $('td .edit-order span').toggle();

            $('.hidden').toggleClass('d-none')
        })
        $('nova-post-city').select2();
        $('nova-post-warehouses').select2();
        $('nova-post-courier-city').select2();
        $('nova-post-street').select2();
        $('number-house').select2();
        $('number-flat').select2();
        $('post-index').select2();
        $('.nova-post-city').change(function(){
            let value = $(this).find('option:selected').val();
            $.ajax({
                url: '/get-warehouses',
                type: 'POST',
                data: {city_id: value},
                dataType: 'json',
                success:function(result) {
                    let str = '<option>Выберите отделение*</option>';
                    for(let i=0; i<result.length; i++) {
                        str+=`<option>${result[i]['DescriptionRu']}</option>`;
                    }
                    $('.nova-post-warehouses').html(str);
                }
            });
        });

        $('.nova-post-courier-city').change(function(){
            let value = $(this).find('option:selected').val();
            $.ajax({
                url: 'get-streets',
                type: 'POST',
                data: {city_id: value},
                dataType: 'json',
                success: function(result) {
                    let str = '<option>Выберите улицу*</option>';
                    for(let i=0; i<result.length; i++) {
                        str+=`<option>${result[i]['Description']}</option>`;
                    }
                    $('.nova-post-street').html(str);
                }
            });
        });

    });
})(jQuery)