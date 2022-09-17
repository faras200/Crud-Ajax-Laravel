<x-app-layout>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Ajax CRUD</title>
        <style>
            body {
                background-color: lightgray !important;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">LARAVEL CRUD AJAX</h4>
                    <div class="card border-0 shadow-sm rounded-md mt-4">
                        <div class="card-body">

                            <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-mhs">TAMBAH</a>

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Authors</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts">
                                    @foreach ($mahasiswas as $post)
                                        <tr id="index_{{ $post->id }}">
                                            <td>{{ $post->user->name }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->content }}</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" id="btn-edit-post"
                                                    data-id="{{ $post->id }}"
                                                    class="btn btn-primary btn-sm">EDIT</a>
                                                <a href="javascript:void(0)" id="btn-delete-post"
                                                    data-id="{{ $post->id }}"
                                                    class="btn btn-danger btn-sm">DELETE</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-mhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">TAMBAH POST</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="name" class="control-label">Nama</label>
                            <input type="text" class="form-control" id="nama">
                            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-title"></div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Nim</label>
                            <textarea class="form-control" id="nim" rows="4"></textarea>
                            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content"></div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-primary" id="store">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //button create post event
            $('body').on('click', '#btn-create-mhs', function() {

                //open modal
                $('#modal-mhs').modal('show');
            });

            $('body').on('click', '#store', function() {
                let nama = $('#nama').val();
                let nim = $('#nim').val();

                console.log(nama, nim);
            })
        </script>
    </body>

    </html>
</x-app-layout>
