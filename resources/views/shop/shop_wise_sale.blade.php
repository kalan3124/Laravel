@extends('home.index')
@section('Content')
    <div class="container"><br/><br/>
        <form action="/shop_sale_mobile_post" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div>
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Shop Wise Phone Sale</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                </div>
                <div class="col-md-4">
                    <label>Mobile Brand</label>
                    <select class="form-control" name="brand" id="brand">
                        <option disabled selected value="null">Select</option>
                        @foreach($phone_models as $phone_model)
                            <option value="{{$phone_model->id}}">{{$phone_model->model}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('brand'))
                        <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('brand') }}</strong></span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label>Mobile Model</label>
                    <select class="form-control" name="model" id="model">
                        <option disabled selected value="null">Select</option>
                        <option value="1">i phone 5s</option>
                        <option value="2">i phone x</option>
                        <option value="3">i phone 7</option>
                    </select>
                    @if ($errors->has('model'))
                        <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('model') }}</strong></span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label>Shop Name</label>
                    <input type="text" name="shop_name" id="shop_name"  class="form-control" />
                    @if ($errors->has('shop_name'))
                        <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('shop_name') }}</strong></span>
                    @endif
                </div>
            </div><br/><br/>
            <div class="row">
                <div class="col-md-4">
                    <label>Location</label>
                    <input type="text" name="location" id="location"  class="form-control" />
                    @if ($errors->has('location'))
                        <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('location') }}</strong></span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label>Edition</label>
                    <input type="text" name="edition" id="edition"  class="form-control" />
                    @if ($errors->has('edition'))
                        <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('edition') }}</strong></span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label>Description</label>
                    <textarea class="form-control" name="description" id="description"></textarea>
                    @if ($errors->has('description'))
                        <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('description') }}</strong></span>
                    @endif
                </div>
            </div><br/><br/>
            <div class="row">
                <div class="col-md-4">
                    <label>Price</label>
                    <input type="text" name="price" id="price"  class="form-control" />
                    @if ($errors->has('price'))
                        <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('price') }}</strong></span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label>Phone No</label>
                    <input type="text" name="phone" id="phone"  class="form-control" />
                    @if ($errors->has('phone'))
                        <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('phone') }}</strong></span>
                    @endif
                </div>
            </div><br/><br/>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Upload Image</label>
                        <div class="input-group">
                        <span class="input-group-btn">
                            <div id="image_1">
                                <span class="btn btn-default btn-file">
                                    Browse… <input type="file" name="file[]" id="imgInp" multiple="true">
                                </span>
                            </div>
                        </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <br>
                <div class="col-md-10">
                    <img id='img-upload' style="width: 220px;height: 200px;"/>
                    <img id='img-upload2' style="width: 220px;height: 200px;"/>
                    <img id='img-upload3' style="width: 220px;height: 200px;"/>
                    <img id='img-upload4' style="width: 220px;height: 200px;"/>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-md-3">
                    <label>User Name</label>
                    <input type="text" name="user_name" id="user_name"  class="form-control"  value="{{Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}" readonly/>
                </div>
                <div class="col-md-3">
                    <label>Email</label>
                    <input type="text" name="email" id="email"  class="form-control" value="{{Sentinel::getUser()->email }}" readonly/>
                </div>
            </div>
            <br/><br/><hr>
            <br/>

            <input type="submit" class="btn btn-danger" value="Post Ad"/><br/><br/>
        </form>
    </div>

    <script>
        var count = 0;
        $(document).ready( function() {
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
            function readURL(input,count) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    if (count < 4){
                        if (count == 0){
                            reader.onload = function (e) {
                                $('#img-upload').attr('src', e.target.result);
                            }
                        } else if (count == 1) {
                            reader.onload = function (e) {
                                $('#img-upload2').attr('src', e.target.result);
                            }
                        } else if (count == 2) {
                            reader.onload = function (e) {
                                $('#img-upload3').attr('src', e.target.result);
                            }
                        } else if (count == 3) {
                            reader.onload = function (e) {
                                $('#img-upload4').attr('src', e.target.result);
                            }
                        }
                    } else {
                        alert('You have entered maximum photos');
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                readURL(this,count++);
            });
        });
    </script>
@endsection