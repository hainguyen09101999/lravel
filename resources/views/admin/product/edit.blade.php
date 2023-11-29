@extends('admin.main');
@section('main.index');
 <div class="row">
        <div class="col-md-12">
            <div class="ibox ">
                <div class="ibox-head align-items-end justify-content-center bg-info m-2 p-2">
                    <H3 class="text-white" > Cập nhập sản phẩm</H3>
                </div>
                <div class="ibox-body">
                    @if (Session::has('message'))
                        <script>
                            swal("Message","{{ Session::get('message') }}", 'success',{
                                button:true,
                                button:"Canel",
                            });
                        </script>
                    @endif
                    <form method="POST" action="{{route('upload-product',$product)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label class="font-weight-bold">Tên Sản phẩm </label>
                                <input class="form-control" type="text"  name="name" onkeyup="ChangeToSlug()" value="{{$product->name}}" >
                            </div>
                            <div class="col-sm-6 form-group">
                                <label  class="font-weight-bold">Đường dẫn </label>
                                <input class="form-control" type="text" id="slug"  name="slug" value="{{$product->slug}}" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label  class="font-weight-bold"> Giá Sản Phẩm </label>
                                <input class="form-control" type="text"  name="price" value="{{$product->price}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label  class="font-weight-bold"> Giá khuyến mãi </label>
                                <input class="form-control" type="text"  name="price_sale" value="{{$product->price_sale}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="font-weight-bold"> Hình ảnh </label>
                            <div  class=" col-sm-3 form-group">
                                <img src="{{asset('storage/images')}}/{{$product->image}}" alt="" width="150px" height="150px">
                            </div>
                            <input class="form-control" type="file"  width="150px" name="photo">
                        </div>
                        <div class="form-group">
                            <label  class="font-weight-bold"> Hình ảnh mô tả  </label>
                            <div  class=" col-sm-3 form-group" style="display: flex"> 
                                @foreach($product->images as $item)
                                    <img src="{{asset('storage/images')}}/{{$item->image}}" alt="" width="150px" height="150px" style="margin: 10px">
                                @endforeach
                            </div>
                            <input class="form-control" type="file" name="photos[]" multiple >
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" v> Danh mục  </label>
                            <select name="danhmuc_id" id="" class="form-control" >
                                @foreach ( $danhmuc as $key =>$item )
                                    @if($item->id == $product->danhmuc_id)
                                    {
                                        <option selected value="{{$item->id}}">{{$item->name}}</option>
                                    }
                                    @else
                                    {
                                        <option  value="{{$item->id}}">{{$item->name}}</option>
                                    }
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Mô tả ngắn</label>
                           <textarea style="resize:noe" name="shortdescription" id="editor1" cols="15" rows="10" class="form-control" >{{$product->shortdescription}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Mô tả</label>
                           <textarea style="resize:noe" name="description" id="editor2" cols="15" rows="10" class="form-control"  >{{$product->description}}"</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom.js')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
</script>
<script language="javascript">
    function ChangeToSlug()
    {
        var productname, slug;

        //Lấy text từ thẻ input title 
        productname = document.getElementById("productname").value;

        //Đổi chữ hoa thành chữ thường
        slug = productname.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>
@endsection