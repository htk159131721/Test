@extends('layouts.admin_master')

@section('body_master.content')
<script type="text/javascript">
    var url = "{{asset('check-amount-img')}}";
</script>
<section class="content">
                {!! Form::open(array('action' => 'AdminController@formGeneral', 'method' => 'post', 'name' => 'frm-sp', 'id' => 'frm-sp')) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">SẢN PHẨM</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                            	 <div class="form-group">
                                                 	{{ Form::label('labelExample','Mã Sản Phẩm')}}
                                                    {{ Form::text('text','', Array('id' => 'txt_masp', 'name' => 'txt_masp', 'class' => 'required form-control', 'disabled' => 'disabled', 'placeholder' => 'Auto Enter'))}}
                                                     <p class="help-block">Mã Sản Phẩm tự phát sinh.</p>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('labelExample','Tên Sản Phẩm')}}
                                                    {{ Form::text('text','', Array('id' => 'txt_masp', 'name' => 'txt_masp', 'class' => 'required form-control', 'placeholder' => 'Nhập tên sản phẩm', 'minlength' => '6'))}}
                                                   
                                                </div>
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    {{ Form::label('labelExample','Đơn vị tính')}}
                                                    {{ Form::select('select_DVT',['value'],'null', Array('id' => 'select_DVT', 'name' => 'select_DVT', 'class' => 'required form-control'))}}
                                                     <p class="help-block">Chọn Đơn vị tính tương ứng.</p>
                                                </div>
                                             </div><!-- end-left -->
                                            <div class="col-md-4">
                                            	 <div class="form-group">
                                                    {{ Form::label('labelExample','Nhóm Sản Phẩm')}}
                                                    {{ Form::selectRange('nhomSP','1', '5', null, ['class' =>'form-control', 'id' => 'select_nhomSP'])}}
                                                         <p class="help-block">Chọn Nhóm Sản Phẩm tương ứng.</p>
                                                 </div>
                                                <div class="form-group">
                                                    {{ Form::label('labelExample','Mô tả tóm tắt')}}<br/>
                                                    {{ Form::text('text','', Array('id' => 'mota_tomtat', 'name' => 'mota_tomtat', 'class' => 'required form-control', 'placeholder' => 'Nhập mô tả tóm tắt...', 'minlength' => '6'))}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('labelExample','Đơn giá')}}
                                                    {{ Form::text('text','', Array('id' => 'txt_gia', 'name' => 'txt_gia', 'class' => 'required number form-control', 'placeholder' => 'Nhập giá cho Sản Phẩm...'))}}
                                                </div>
                                            </div><!-- end-mid -->
                                            <div class="col-md-4">
                                            	 <div class="form-group">
                                                  {{ Form::label('labelExample','Loại Sản Phẩm')}}
                                                  {{ Form::selectRange('loaiSP','1', '5', null, ['class' =>'form-control', 'id' => 'select_LoaiSP'])}}
                                                    <p class="help-block">Chọn Loại Sản Phẩm tương ứng.</p>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('labelExample','Ảnh đại diện')}}
                                                    {{ Form::file('text', Array('id' => 'filAvarta', 'name' => 'filAvarta', 'class' => 'required form-control'))}}
                                                </div>
                                                 <div class="form-group">
                                                    {{ Form::label('labelExample','Nguồn gốc/Xuất xứ')}}
                                                    {{ Form::text('text','', Array('id' => 'txt_nguongoc', 'name' => 'txt_nguongoc', 'class' => 'required form-control', 'placeholder' => 'Nhập Nguồn gốc/Xuất xứ sản phẩm...', 'minlength' => '3'))}}
                                                </div>
                                            </div><!-- end-right -->
                                            <div class="clear-fix"></div>
                                            <div class="col-md-12">
                                            	<div class="form-group">
                                                   {{ Form::label('labelExample','Mô tả chi tiết')}}
                                                   {{ Form::textarea('textarea','Đang cập nhật...', Array('id' => 'tarea_motachitiet', 'name' => 'tarea_motachitiet', 'class' => 'required form-control'))}}
                                                   <p class="help-block">Nhập <strong>Mô tả chi tiết</strong> cho sản phẩm.</p>
                                                   <script type="text/javascript">CKEDITOR.replace('tarea_motachitiet'); </script>
                                                </div>
                                            </div>
                                        </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div><!-- /.row section1 -->
                    <div class="clear-fix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">CHI TIẾT SẢN PHẨM</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                            	 <div class="form-group">
                                                  {{ Form::label('example','Hình ảnh liên quan')}}
                                                    {{ Form::selectRange('select_picLienquan','1','5','null', Array('id' => 'select_picLienquan', 'name' => 'select_picLienquan', 'class' => 'required form-control', 'style' => 'width:20%;'))}}
                                                     <p class="help-block">Bạn chọn số lượng HÌNH ẢNH liên quan đến SẢN PHẨM.</p>
                                                </div>
                                             </div>
                                            <div class="col-md-8" id="box-img-select">
                                                  <div class="form-group box-img">
                                                    {{ Form::label('labelExample','Chọn hình ảnh')}}
                                                    {{ Form::file('text','', Array('id' => 'txt_masp', 'name' => 'txt_masp', 'class' => 'required form-control'))}}
                                                    <img src="{{asset('assets/img/user2.jpg')}}" class="img thumb-nail">
                                                </div>
                                                
                                            </div>
                                        </div>
                                            
                                        </div>
                                         <div class="box-footer">
                                            {{Form::submit('Submit', array('id' => 'btn_submit', 'name' => 'btn_submit', 'class' => 'btn btn-primary btn-lg'))}}

                                          </div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                           
                              
                        </div>
                {!! Form::close() !!}
				<!--/.col (right) -->
                </div>
</section>

@endsection