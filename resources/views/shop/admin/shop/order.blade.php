@extends('shop.admin')
@section('right-content')
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-inline">
                <div class="form-group">
                    <label for="cat_name">分类</label>
                    <?php echo $catlist;?>
                </div>

                <input type="submit" class="btn btn-primary" value="搜索">
            </form>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped ">
                <tr>
                    <th class="">订单号</th>
                    <th class="">商品名称</th>
                    <th class="">订单金额</th>
                    <th class="">购买人</th>
                    <th class="">创建时间</th>
                    <td class="">操作</td>
                </tr>
                @foreach($data as $item)
                    <tr>
                        <td><a href="/admin/shop/order/{{$item["id"]}}" target="_blank">{{$item["id"]}}</a></td>
                        <td>{{$item->detail->product->name}}</td>
                        <td>{{$item["amount"]}}</td>
                        <td>{{$item["user_name"]}}</td>
                        <td>{{$item["created_at"]}}</td>
                        <td><a onclick="view({{$item['id']}})">查看</a>
                            | <a href="/admin/shop/order/delete?id={{$item["id"]}}" onclick="return confirm('确定删除吗？')">删除</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$data->links()}}
        </div>
    </div>
@endsection
@section('modal')

    <div class="form-group">
        <label class="control-label col-md-1">产品名称</label>
        <div class="col-md-5">

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-1">分类</label>
        <div class="col-md-2">

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-1">价格</label>
        <div class="col-md-4">

        </div>

    </div>

    <div class="form-group">
        <label class="control-label col-md-1">描述</label>
        <div class="col-md-11">
            <
        </div>

    </div>
    <div class="form-group">
        <label class="control-label col-md-1">内容</label>
        <div class="col-md-11">

        </div>
    </div>



@append
@section("js")
    <script>

    </script>
@append