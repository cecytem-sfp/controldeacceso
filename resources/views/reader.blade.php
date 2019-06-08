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

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/.min.js."></script>
					<script src="https://rawgit.com/schmich/instacan-builds/master/istascan.min.js"></script>
					
					<video id="preview"></video>
					
					<script type="text/javascript">
					jQuery(document).ready(function(){
						let scanner = new Istacan.Scanner({ video: document.getElementById('preview') });
						scaner.addListener('scan', function (content) {
							alert(content);
						});
						
						Istacan.Camera.getCameras().then(function (cameras)
						  console.long(cameras);
						  
						  if (cameras.length > 0) {
							  scaner.start(cameras[0]);
						  } else {
					        console.error('No Cameras found.');
						  }
						  
					).catch(fuction (e) {
						console.error(e);
					})
				});
			</script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
