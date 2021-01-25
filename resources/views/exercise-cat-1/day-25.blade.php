@extends('master-2')
    @section('extra-head')
    <script type="text/javascript" src='js/js_exercise-13.js'></script>
    @endsection
    @section('konten')
        <section id="ole" class="day-one pb-5">
            <div class="container">          
                <div class="judul">
                    <div class="row pt-5">
                        <div class="col text-center text-white">
                        <h1>Day 1</h1>
                        <h3><i>Push-up, Sit-up, Squat, Jumping jack</i></h3>
                        <center><hr color="white" width="200"></hr></center>
                        </div>
                    </div>
                    <div class="text-center mb-5">
                        <button type="button" class="button-mulai">
                            Mulai
                        </button>
                        <p>
                            <a href="{{asset('Kalender-olahraga1')}}"><h6>Kembali</h6></a>
                        </p>
                        <div class="waktu"></div>
                    </div>
                    <div class="row mb-4 ">
                        <div class="col-md">
                            <div class="exercise-1">
                                <div class="exercise-pushup">
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('img/push-ups.jpg')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="card-text text-center">
                                                <p class="total-exercise">Push Up x ??</p>
                                                <p class="total-exercise-active">Push Up x 18</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-2">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/sit-up.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Sit Up x ??</p>
                                            <p class="total-exercise-active">Sit Up x 18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-3">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/squat.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Squat x ??</p>
                                            <p class="total-exercise-active">Squat x 18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/Star Jump.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Star Jump x ??</p>
                                            <p class="total-exercise-active">Star Jump x 18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-5">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/cobra stretch.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Cobra Stretch ??s</p>
                                            <p class="total-exercise-active">Cobra S. 21s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md">
                            <div class="exercise-6">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/mountain climber.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Mountain Climber??</p>
                                            <p class="total-exercise-active">Mountain Climber x 18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-7">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/lunges.jpg'')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Lunges ??</p>
                                            <p class="total-exercise-active">Lunges x 18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-8">
                                <div class="card">                                    
                                    <img class="card-img-top" src="{{asset('img/russian twist.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Russian Twist ??</p>
                                            <p class="total-exercise-active">Russian Twist x 18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-9">
                                <div class="card">                                   
                                    <img class="card-img-top" src="{{asset('img/plank.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                        <p class="total-exercise">plank ??s</p>
                                            <p class="total-exercise-active">plank. 21s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-10">
                                <div class="card">                                    
                                    <img class="card-img-top" src="{{asset('img/Side Plank.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Side Plank ??s</p>
                                            <p class="total-exercise-active">Side Plank. 21s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                            <div class="exercise-10">
                                <div class="card">                                    
                                    <img class="card-img-top" src="{{asset('img/Hip Raises.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Hip Raises ??</p>
                                            <p class="total-exercise-active">Hip Raises x 18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                            <div class="exercise-5">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/cobra stretch.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Cobra Stretch ??s</p>
                                            <p class="total-exercise-active">Cobra S. 21s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                            <div class="exercise-10">
                                <div class="card">                                    
                                    <img class="card-img-top" src="{{asset('img/heel touch.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">heel touch ??</p>
                                            <p class="total-exercise-active">heel touch x 18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md">
                            <div class="exercise-14">
                                <div class="card" style="opacity:0;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 ">
                        <div class="col-md">
                        <div class="text-center">Preview</div>
                                <img class="img-preview" src="{{asset('img/push-ups.jpg')}}" style="width: 100%; opacity: 0;">
                                <img class="img-preview-2" src="{{asset('img/sit-up.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-3" src="{{asset('img/squat.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-4" src="{{asset('img/Star Jump.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-5" src="{{asset('img/cobra stretch.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-6" src="{{asset('img/mountain climber.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-7" src="{{asset('img/lunges.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-8" src="{{asset('img/russian twist.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-9" src="{{asset('img/plank.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-10" src="{{asset('img/Side Plank.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-11" src="{{asset('img/Hip Raises.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-12" src="{{asset('img/cobra stretch.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-13" src="{{asset('img/heel touch.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                            </div>
                        </div>
                    </div>
                    <div class="penutup">
                        selamat!
                        Kamu telah menyelesaikan olahraga hari ini
                        <button type="button" class="button-mulai-lagi">Mulai Lagi</button>
                    </div>
                </div>
            </div>
        </section>
        @endsection