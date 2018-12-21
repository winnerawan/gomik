@extends('template')

@section('content')

    <!-- Input Mask start -->
    <section class="inputmask" id="inputmask">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Komik</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12">
                                    {!! Form::model($comic, ['route' => ['comics.update', $comic->id], 'method' => 'PUT', 'files' => true]) !!} 
                                    
                                    <fieldset>

                                            <h5>Kategori Komik
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <select style="margin-bottom: 10px;" id="category_id" name="category_id" name="priority" class="form-control" data-toggle="tooltip"
                                                        data-trigger="hover" data-placement="top" data-title="Priority">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{ $category->name}}</option>
                                                    @endforeach
                                                </select>
                                    </fieldset>
                                    <fieldset>                                    
                                        <h5>Judul
                                            <small class="text-muted"></small>
                                        </h5>
                                        <div class="form-group">
                                                {{ Form::text('title', null, array('id' => 'name','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <h5>URL Image
                                            <small class="text-muted"></small>
                                        </h5>
                                        <div class="form-group">
                                                {{ Form::text('image', null, array('id' => 'name','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <h5>Deskripsi
                                            <small class="text-muted"></small>
                                        </h5>
                                        <div class="form-group">
                                                {{ Form::text('description', null, array('id' => 'name','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                    </fieldset>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" onclick="document.getElementById('name').value = ''" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection