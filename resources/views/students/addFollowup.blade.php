@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">New Follow Up</div>
                    <div class="card-body">
                            <form method="POST" action="">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="firstName" class="col-md-4 col-form-label text-md-right">First Name</label>  
                                        <div class="col-md-6">
                                            <input id="firstName" type="text" class="form-control" name="firstName" required autofocus>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="lastName" class="col-md-4 col-form-label text-md-right">Last Name</label>  
                                            <div class="col-md-6">
                                                <input id="lastName" type="text" class="form-control" name="lastName" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="class" class="col-md-4 col-form-label text-md-right">Class</label>  
                                                <div class="col-md-6">
                                                    <select name="class" id="class" class="form-control">
                                                        <option value="WEB-2020A">WEB-2020A</option>
                                                        <option value="WEB-2020B">WEB-2020B</option>
                                                        <option value="SNA">SNA</option>
                                                        <option value="2021-A">2021-A</option>
                                                        <option value="2021-B">2021-B</option>
                                                        <option value="2021-C">2021-C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="province" class="col-md-4 col-form-label text-md-right">Province</label>  
                                                    <div class="col-md-6">
                                                        <select name="class" id="class" class="form-control">
                                                            <option value="Prey Veng">Prey Veng</option>
                                                            <option value="Phnom Penh">Phnom Penh</option>
                                                            <option value="Kompong Cham">Kompong Cham</option>
                                                            <option value="Preah Vihear">Preah Vihear</option>
                                                            <option value="Takev">Takev</option>
                                                            <option value="Pursat">Pursat</option>
                                                        </select>
                                                    </div>
                                                </div>
                                    <div class="form-group row">
                                        <label for="Gender" class="col-md-4 col-form-label text-md-right">Gender</label>  
                                            <div class="col-md-6">
                                                <input type="radio" value="gender">Female
                                                <br>
                                                <input type="radio" value="gender">Male
                                            </div>
                                    </div>
            
                                   
                                </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection