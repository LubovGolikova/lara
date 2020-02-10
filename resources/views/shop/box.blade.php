@if(session('box'))
    {{--table.table>(thead>tr>th*4)+tbody>tr>td*4--}}
    <table class="table">
        <thead>
            <tr>
            <th colspan="2">Наименование</th>
            <th>Ко-во и цена</th>
            <th>Сумма</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach(session('box') as $flower)
            <tr>
                <td><a href="/flower/{{$flower['id']}}"> <img src="/{{$flower['path']}}" alt="" style="width: 100px"/></a></td>
                <td><a href="/flower/{{$flower['id']}}"> {{$flower['name']}}</a></td>
                <td>
                    <input type="number" value="{{$flower['qty']}}">
                    {{$flower['qty']}} * {{$flower['price']}}
                </td>
                <td>{{$flower['qty'] * $flower['price']}}</td>
                <td>
                    <button type="button" value="{{$flower['id']}}" title="Del" class="fa lazy-split-loading-before fa-remove remove-flower"></button>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot><tr>
            <td colspan="3" class="text-right">Сумма</td>
            <td>{{session('sum')}}</td>
            </tr></tfoot>
    </table>
@else
<p>Корзина пустая</p>
@endif