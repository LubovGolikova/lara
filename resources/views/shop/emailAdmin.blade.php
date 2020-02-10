<div>
    Price: {{ $order->id }}
    Name: {{$order->name}}

    <table class="table">
            <thead>
                <tr>
                <th colspan="2">Наименование</th>
                <th>Ко-во и цена</th>
                <th>Сумма</th>

                </tr>
            </thead>
            <tbody>
            @foreach(session('box') as $flower)
                <tr>
                    <td><a href="/flower/{{$flower['id']}}"> <img src="/{{$flower['path']}}" alt="" style="width: 100px"/></a></td>
                    <td><a href="/flower/{{$flower['id']}}"> {{$flower['name']}}</a></td>
                    <td>
                        {{$flower['qty']}} * {{$flower['price']}}
                    </td>
                    <td>{{$flower['qty'] * $flower['price']}}</td>

                </tr>
            @endforeach
            </tbody>
            <tfoot><tr>
                <td colspan="3" class="text-right">Сумма</td>
                <td>{{session('sum')}}</td>
                </tr></tfoot>
        </table>
</div>