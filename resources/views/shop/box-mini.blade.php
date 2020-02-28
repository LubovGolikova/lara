@if(session('box'))
    {{--table.table>(thead>tr>th*4)+tbody>tr>td*4--}}
    <table class="table flowers">

        <tbody>
        @foreach(session('box') as $flower)
            <tr class="{{$loop->iteration>=4 ? 'hidden d-none' :''}}">
                <td style="width: 100px">
                    <div class="border-circle"><a href="/flower/{{$flower['id']}}">
                        <img src="{{$flower['path']}}" alt="" style="width: 100px" class="rounded-circle"/></a>
                    </div>
                </td>
                <td class="align-center title">
                        <a href="/flower/{{$flower['id']}}"> {{$flower['name']}}</a>
                        {{$flower['qty']}}
                </td>

                <td>{{$flower['qty'] * $flower['price']}}</td>

            </tr>
        @endforeach
            @if( count(session('box')) >= 4 )
            <tr>
            <td colspan="3" class="text-center"> <a href="#" class="edit-order">
                <span >Посмотреть все (еще {{count(session('box'))-3}})</span>
                <span style="display: none">Скрыть</span>
            </a></td>
            </tr>
            @endif
        </tbody>
        <tfoot><tr>
            <td colspan="2">Итого</td>
            <td class="price"> <span>{{session('sum')}}</span> грн</td>
            </tr>
        </tfoot>
    </table>
    <div class="text-center">
        <a href="#" data-toggle="modal" data-target="#exampleModal" class="edit-order">Редактировать заказ</a>
    </div>
@else
<p>Корзина пустая</p>
@endif