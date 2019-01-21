@extends('template')

@section('content')
<!-- Multi-column ordering table -->
<section id="multi-column">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Chapter</h4>
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
                    <div class="card-body card-dashboard">
                        <table class="table table-striped table-bordered multi-ordering">
                            <thead>
                            <tr>
                                <th>Nama Komik</th>
                                <th>Chapter</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($chapters as $chapter)
                            <tr>
                                <td>{{ $chapter->comic->title }}</td>
                                <td>{{ $chapter->chapter }}</td>
                                <td><a href="{{ url('chapters/'.$chapter->id . '\edit/')}}">Edit</a> || <a href="{{ url('image/chapter/'.$chapter->id)}}">Look</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Multi-column ordering table -->
@endsection