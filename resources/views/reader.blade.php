@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

                    <video id="preview"></video>

                    <script type="text/javascript">
                        jQuery(document).ready(function(){
                            let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                            scanner.addListener('scan', function (content) {
                                alert(content);
                            });

                            Instascan.Camera.getCameras().then(function (cameras) {
                                console.log(cameras);

                                if (cameras.length > 0) {
                                    scanner.start(cameras[0]);
                                } else {
                                    console.error('No cameras found.');
                                }

                            }).catch(function (e) {
                                console.error(e);
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
