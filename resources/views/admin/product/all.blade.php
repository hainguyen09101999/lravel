@extends('admin.main');
@section('main.index');
<div class="page-content fade-in-up">
                 
    <div class="ibox">
        <div class="ibox-head align-items-end justify-content-center bg-info m-2 p-2">
            <H3 class="text-white" >Danh Sách Sản phẩm </H3>
        </div>
     @if (Session::has('message'))
        <script>
            swal("Message","{{ Session::get('message') }}", 'success',{
                button:true,
                button:"Canel",
            });
        </script>
    @endif
            <div class="table-responsive-xl">
                <table class="table">
                    <thead>
                        <tr class="align-items-end justify-content-center">
                            <th width="50px"></th>
                            <th>Tên Sản Phẩm</th>
                            <th>Đường dẫn</th>
                            <th>Hình Ảnh </th>
                            <th>Danh Mục</th>
                            <th>Giá sản phẩm</th>
                            <th>Giá khuyến mãi</th>
                            <th>Chọn</th>                    
                         </tr>

                    </thead>
                    <tbody >
                        @foreach($products as $itemss)
                            <tr>
                                <td>
                                    <label class="ui-checkbox">
                                        <input type="checkbox">
                                        <span class="input-span"></span>
                                    </label>
                                </td>
                                <td>{{$itemss->name}}</td>
                                <td>{{$itemss->slug}}</td>
                                <td>
                                    <img src="{{asset('storage/images')}}/{{$itemss->image}}" alt="" width="150px" height="150px" >
                                </td>
                                <td>{{$itemss->danhmuc->name ?? 'None'}}</td>
                                <td> {{$itemss->price}}</td>
                                <td> {{$itemss->price_sale}}</td>
                                <td>                            
                                    <a href="{{route('edit-product',[$itemss->id])}}"><button type="button" class="btn btn-primary">Sửa</button></a>
                                   <a href="{{route('delete-product',[$itemss->id])}}">
                                    <button  type="button" class="btn btn-danger"  onclick=" return confirm('Bạn có chắc chắn xóa sản phẩm này không')">Xóa</button>
                                </a>
                                </td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                   
                </table>
            </div>
            <div class="product__pagination" style="padding-bottom: 1px;
            margin-left: 20px;">
                {{ $products->links() }}
            </div>
    </div>
</div>

@endsection
