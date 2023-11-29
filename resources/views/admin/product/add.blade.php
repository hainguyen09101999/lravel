@extends('admin.main');
@section('main.index');
 <div class="row">
        <div class="col-md-12">
            <div class="ibox ">
                <div class="ibox-head align-items-end justify-content-center bg-info m-2 p-2">
                    <H3 class="text-white" >Thêm mới sản phẩm</H3>
                </div>
                <div class="ibox-body">
                    @if (Session::has('messages'))
                    <script>
                        swal("Message","{{ Session::get('messages') }}", 'success',{
                            button:true,
                            button:"Canel",
                        });
                    </script>
                @endif
                    <form method="POST" action="{{route('post-product')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 form-group @error('name') has-error @enderror">
                                <label class="font-weight-bold help-block">Tên Sản phẩm </label>
                                <input class="form-control" type="text" id="productname" name="name" onkeyup="ChangeToSlug()">
                                @error('name')
                                      <span class="help-block">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label  class="font-weight-bold">Đường dẫn </label>
                                <input class="form-control" type="text" id="slug"  name="slug">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group @error('price') has-error @enderror">
                                <label  class="font-weight-bold help-block"> Giá Sản Phẩm </label>
                                <input class="form-control" type="text" name="price">
                                @error('price')
                                    <span class="help-block">{{$message}}</span>
                                 @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label  class="font-weight-bold"> Giá khuyến mãi Sản Phẩm </label>
                                <input class="form-control" type="text"  name="price_sale">
                            </div>
                        </div>
                        <div class="form-group @error('photo') has-error @enderror">
                            <label  class="font-weight-bold help-block "> Hình ảnh </label>
                            <input class="form-control" type="file" name="photo">
                            @error('photo')
                                <span class="help-block">{{$message}}</span>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label  class="font-weight-bold"> Hình ảnh mô tả  </label>
                            <input class="form-control" type="file" name="photos[]" multiple>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" v> Danh mục  </label>
                            <select name="danhmuc_id" id="" class="form-control" >
                                @foreach ($danhmuc as $item )
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Mô tả ngắn</label>
                           <textarea style="resize:noe" name="shortdescription" id="editor1" cols="15" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Mô tả</label>
                           <textarea style="resize:noe" name="description" id="editor2" cols="15" rows="10" class="form-control"></textarea>
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
        productname = document.getElementById("productname").value;
        slug = productname.toLowerCase();
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        slug = slug.replace(/ /gi, "-");
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        document.getElementById('slug').value = slug;
    }
</script>

@endsection