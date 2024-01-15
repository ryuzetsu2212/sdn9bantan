@extends('layouts.backend.app',[
'title' => 'Edit Gambar',
'contentTitle' => 'Edit Gambar'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
@endpush

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.agenda.index') }}" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.agenda.update',$agenda->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input required="" type="" name="judul" id="judul" placeholder="" class="form-control title">
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
                </div>
        </div>
        </form>
    </div>
</div>
@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $(".summernote").summernote({
        height: 500,
        callbacks: {
            // callback for pasting text only (no formatting)
            onPaste: function(e) {
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                e.preventDefault();
                bufferText = bufferText.replace(/\r?\n/g, '<br>');
                document.execCommand('insertHtml', false, bufferText);
            }
        }
    })

    $(".summernote").on("summernote.enter", function(we, e) {
        $(this).summernote("pasteHTML", "<br><br>");
        e.preventDefault();
    });
</script>
@endpush