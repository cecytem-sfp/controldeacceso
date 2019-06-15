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
                                saveRegister(content);
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
						function  saveRegister(data){
							var values = data.split('|');
							$.ajaxSetup({
								headers: { 'X-CSRF-TOKEN': $('#csrf_token').val()}
							})
							$.ajax(
								{
									url: '{{ url('/registration')}}',
									type: 'post',
									dataType: 'json',
									data: {id: values[0]}
								}
							).done(function(data){
								console.log(data);
								alert(data);
							});
						}
                    </script>
					<input id="csrf_token" type="hidden" value="{{ csrf_token()}}"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
