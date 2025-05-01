@extends('layouts.app')

@section('content')

<div class="bg-white card-box shadow-sm text-center mb-5">
    
    
    <div class="col-md-3 justify-content-center align-item-center">
            <img src="{{ asset('Assets/logo/mindra.jpg') }}" alt="" class="img-fluid mb-4 p-5">
    </div>
    <div class="col-md-3">
        <div class="bg-white card-box-title border text-center">
            <h5>Dashboard Overview</h5>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 mb-4 mt-4">
            <div class="bg-white card-box border text-center">
                <h3>Total Users</h3>
                <h3 class="text-primary">12,000</h3>
            </div>
        </div>
        <div class="col-md-4 mb-4 mt-4">
            <div class="bg-white card-box border text-center">
                <h3>Active Users</h3>
                <h3 class="text-success">350</h3>
            </div>
        </div>
        <div class="col-md-4 mb-4 mt-4">
            <div class="bg-white card-box border text-center">
                <h3>New Users</h3>
                <h3 class="text-danger">48</h3>
            </div>
        </div>
    </div>
</div>
    <div class="row mb-4">
    <div class="col-md-4 mb-4">
        <div class="bg-white card-box shadow-sm">
            <!-- Zoom Requests Card -->
    <!-- Header -->
        <div class="d-flex align-items-center mb-3">
            <img src="{{ asset('Assets/logo/zoom.png') }}" alt="Zoom" style="width: 40px; height: 40px;" class="me-2">
            <h5 class="mb-0 fw-bold">Zoom Requests</h5>
        </div>

    <!-- Loopable Content -->
    
        <div class="d-flex align-items-center justify-content-between border-bottom py-2">
            <div style="max-width: 220px;">
                <p class="fw-semibold mb-1">Project kickOff</p>
                <small class="text-muted d-block">Time: </small>
                <small class="text-muted d-block">Participants: </small>
            </div>
            <div class="align-item-center">
                <button class="btn btn-success btn-sm">Confirm</button>
            </div>
        </div>
    

    <!-- Bottom button -->
    <div class="text-center mt-3">
        <button class="btn btn-light border rounded-pill px-4 shadow-sm">
            Requests ⛶
        </button>
    </div>


        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="bg-white card-box shadow-sm">
            <!-- Zoom Requests Card -->
    <!-- Header -->
        <div class="d-flex align-items-center mb-3">
            <img src="{{ asset('Assets/logo/schedule.png') }}" alt="Zoom" style="width: 40px; height: 40px;" class="me-2">
            <h5 class="mb-0 fw-bold">Meeting Schedule</h5>
        </div>

    <!-- Loopable Content -->
    
        <div class="d-flex align-items-center justify-content-between border-bottom py-2">
            <div style="max-width: 220px;">
                <p class="fw-semibold mb-1">Project kickOff</p>
                <small class="text-muted d-block">Time: </small>
                <small class="text-muted d-block">Participants: </small>
            </div>
            <div class="align-item-center">
                <button class="btn btn-success btn-sm">Confirm</button>
            </div>
        </div>
    

    <!-- Bottom button -->
    <div class="text-center mt-3">
        <button class="btn btn-light border rounded-pill px-4 shadow-sm">
            Requests ⛶
        </button>
    </div>


        </div>
    </div>

    <div class="col-md-4">
        <div class="bg-white card-box shadow-sm">
            <!-- Zoom Requests Card -->
    <!-- Header -->
        <div class="d-flex align-items-center mb-3">
            <h5 class="mb-0 fw-bold">Whatsapp Chat</h5>
        </div>

    <!-- Loopable Content -->
    
        <div class="d-flex align-items-center justify-content-between border-bottom py-2">
            <div style="max-width: 220px;">
                <p class="fw-semibold mb-1">Name : Faris Hasyim</p>
                <small class="text-muted d-block">+62 8122-3896-063</small>
            </div>
            <div class="align-item-center">
                <a href="https://wa.me/6281223896063" target="_blank" 
                class="btn btn-success btn-sm">
                    Chat Now
                </a>

            </div>
            
        </div>

        <div class="d-flex align-items-center justify-content-between border-bottom py-2">
            <div style="max-width: 220px;">
                <p class="fw-semibold mb-1">Name : Sean Andrianto</p>
                <small class="text-muted d-block">+62 8956-3614-5822</small>
            </div>
            <div class="align-item-center">
                <a href="https://wa.me/62895636145822" target="_blank" 
                class="btn btn-success btn-sm">
                    Chat Now
                </a>

            </div>
            
        </div>
    

    <!-- Bottom button -->
    <div class="text-center mt-3">
        <button class="btn btn-light border rounded-pill px-4 shadow-sm">
            Requests ⛶
        </button>
    </div>


        </div>
    </div>
    
    
</div>
@endsection
