<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    

    @extends('layouts.main')

@section('content')

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-network"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"></span></div>
                                    <div class="stat-heading">Total</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-like2"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"></span></div>
                                    <div class="stat-heading">Completed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"></span></div>
                                    <div class="stat-heading">In progress</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->
       
        <div class="clearfix"></div>
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Tasks </h4>
                        </div>
                        <div class="card-body--">

                            {{-- New Card --}}
                        <div class="container">
                        <div class="row">
                                @foreach ($tasks as $task)
                            <div class=" col-md-4 ">
                                
                                <div class="card">
                                    
                                    <img class="card-img-top" src="{{asset ('/images/nature.jpg')}}" alt="Card image cap" style="height: 200px;">
                                   
                                    <div class="card-body">

                                        
                                        <h5 class="card-title">{{$task->title}}</h5>
                                        <p class="card-text">{{$task->description}}</p>
                                        <span class="badge badge-complete pl-3 pr-3 pt-2 pb-2" style="background: Green"><a class="text-sm" style="color:white" href="{{route('editTaskForm', ['id'=>$task->id])}}"> Edit </a></span>
                                        <span class="badge badge-complete pl-3 pr-3 pt-2 pb-2" style="background: red"><a class="text-sm" style="color:white;" onclick="return confirm('Are you Sure You want to Delete?')" href="{{route('deleteTask', ['id'=>$task->id])}}"> Delete  </a></span>
                                       
                                    </div>
                                       
                                </div>
                            </div>
                            @endforeach
                        </div>
                        </div>
                        

                            
                        </div>
                    </div> <!-- /.card -->
                </div>  <!-- /.col-lg-8 -->

        </div>
        <!-- /.orders -->
    



    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
<div class="clearfix"></div>


@endsection

</x-app-layout>
