@extends('home.index')
@section('Content')
    <div class="wrapper">
        <!-- =====  CONTAINER START  ===== -->
        <div class="container">
            <div class="row ">
                <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                    <!-- contact  -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 " id="test">
                                <div class="heading-part mb_20 ">
                                    <h2 class="main_title">District</h2>
                                </div><br>
                                <div class="col-md-offset-2" id="test_new" >
                                    <img id="district"  class="district" src='assets/images/district/all island.png'} style="width: 300px; height: 500px;position:absolute;">
                                    <img id="district_part" class="district_part" src='assets/images/district/all island.png'} style="width: 300px; height: 500px;position:absolute;">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="heading-part mb_20 ">
                                    <h2 class="main_title">Select District</h2>
                                </div><br>
                                <div class="Tags left-sidebar-widget mb_50">
                                    <ul>
                                        @foreach($districts as $district)
                                            <li id="{{ $district->dis_id }}" class="get_id" onclick="changeDistrict({{ $district->dis_id }})"><a href="#">{{ $district->dis_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <div class="heading-part mb_20 ">
                                    <h2 class="main_title">Select Area</h2>
                                </div><br>
                                <div class="Tags left-sidebar-widget mb_50">
                                    <ul>
                                        <div id="show_areas">
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function changeDistrict(id) {
            var idname = id+'.png';
            getAreas(id);
            if ($('#'+id).prop('id') == id){
                $('#district_part').attr('src','assets/images/district/'+idname);
            }
        }
        $('#test').css('width',($('#test').css('width')));
        $('#test').css('height',(parseInt($('#test').css('height'))+parseInt($('#district').css('height'))+'px'));
        
        function getAreas(dis_id) {
            $('#show_areas').empty();
            $.get('/mobile_shop_areas',{dis_id:dis_id})
                .done(function (data) {
                    var json=jQuery.parseJSON(data);
                    json.forEach(function (index) {
                        $('#show_areas').append('<li id='+index[1]+'><a href="/mobile_shop_sale/'+index[1]+'" onclick="">'+index[0]+'</a></li><br>');
                    });
                })
        }

        $('#district').hover(function(){alert('test')});

        function Areas(id) {
            alert(id);
        }

    </script>
@endsection